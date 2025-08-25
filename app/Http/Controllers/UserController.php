<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Hash;
use App\Models\Role;
use App\Models\MainUser;
use App\Models\UserInfo;


use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function index(Request $request)
    {
        $subAdminRole = Role::where('role_type', 'subadmin')->first();
        if (!$subAdminRole) {
            return back()->withErrors(['error' => 'Subadmin role not found']);
        }
        // dd($request->all());
        // Get db_choice from request (default to authDB)
        $dbChoice = $request->get('db_choice', 'authDB');
        $connection = $dbChoice === 'authDB2' ? 'authdb2' : 'mysql';

        // Fetch subadmins from the selected connection Normally, Eloquent models 
        // use the default database connection defined in your config/database.php file under 'default'.
        $subAdmins = MainUser::on($connection)
            ->where('role_id', $subAdminRole->id)
            ->with('userinfo')
            ->get();

        return view('subadmin_add', compact('subAdmins'));
    }

    public function create()
    {
        $this->authorize('create', MainUser::class);

        try {
            return view('subadd');
        } catch (\Exception $e) {
            Log::error('Error in UserController@create: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to show create form'], 500);
        }
    }

    public function store(Request $request)
    {
        $this->authorize('create', MainUser::class);

        $request->validate([
            'db_choice' => 'required|in:authDB,authDB2',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:main_users,email',
            'password' => 'required|confirmed|min:6',
            'phone' => 'required|digits:10',
            'address' => 'required|string|max:255',
        ]);

        try {
            // Select the connection
            $connection = $request->db_choice === 'authDB2' ? 'authdb2' : 'mysql';

            // Get role based on role_type
            $role = Role::where('role_type', $request->role_type)->first();
            if (!$role) {
                return back()->withErrors(['error' => 'Employee role not found in the database'])->withInput();
            }

            // Save data within selected connection transaction
            DB::connection($connection)->transaction(function () use ($request, $role, $connection) {
                $user = new MainUser([
                    'role_id' => $role->id,
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
                $user->setConnection($connection);
                $user->save();

                $userInfo = new UserInfo([
                    'mainuser_id' => $user->id,
                    'phone' => $request->phone,
                    'address' => $request->address,
                ]);
                $userInfo->setConnection($connection);
                $userInfo->save();
            });

            return redirect('/user/view')->with('success', 'Created successfully');
        } catch (\Exception $e) {
            Log::error('Error in MainUserController@store: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to create employee'])->withInput();
        }
    }

    public function edit($id, Request $request)
    {
        $dbChoice = $request->get('db_choice', 'authDB');
        $connection = $dbChoice === 'authDB2' ? 'authdb2' : 'mysql';

        session(['db_choice' => $dbChoice]);

        $user = MainUser::on($connection)->with('userinfo')->findOrFail($id);

        $this->authorize('update', $user); 

        return view('subadmin_edit', ['request' => $user]);
    }

    public function update(Request $request, $id)
    {
        $dbChoice = session('db_choice', 'authDB');
        $connection = $dbChoice === 'authDB2' ? 'authdb2' : 'mysql';

        $user = MainUser::on($connection)->with('userinfo')->findOrFail($id);

        $this->authorize('update', $user);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:main_users,email,' . $user->id,
            'phone' => 'required|digits:10',
            'address' => 'required|string',
            'password' => 'required|confirmed|min:6',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($user->userinfo) {
            $user->userinfo->phone = $request->phone;
            $user->userinfo->address = $request->address;
            $user->userinfo->save();
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/user/view?db_choice=' . $dbChoice)
           ->with('success', 'Sub Admin updated successfully.');
    }

    public function destroy($id)
    {
        try {
            // Delete from mysql (authDB)
            $userInMysql = MainUser::on('mysql')->find($id);
            if ($userInMysql) {
                $this->authorize('delete', $userInMysql);
                $userInMysql->delete();
            }

            // Delete from authdb2
            $userInAuthdb2 = MainUser::on('authdb2')->find($id);
            if ($userInAuthdb2) {
                $this->authorize('delete', $userInAuthdb2);
                $userInAuthdb2->delete();
            }

            return redirect('/user/view')->with('success', 'User deleted from both databases.');
        } catch (\Exception $e) {
            \Log::error('Delete error: ' . $e->getMessage());
            return redirect('/user/view')->withErrors('Failed to delete user from both databases.');
        }
    }


}
