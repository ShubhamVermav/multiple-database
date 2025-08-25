<?php

namespace App\Policies;

use App\Models\MainUser;
use Illuminate\Auth\Access\HandlesAuthorization;

class MainUserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\MainUser  $mainUser
     * @return \Illuminate\Auth\Access\Response|bool
     */

    public function create(MainUser $user)
    {
        return in_array($user->role_id, [1, 2]);
    }

    public function update(MainUser $user, MainUser $mainUser)
    {
        return $user->role_id == 1 || $user->id == $mainUser->id;
    }

    public function delete(MainUser $user, MainUser $mainUser)
    {
        return $user->role_id == 1; 
    }

    public function edit(MainUser $user, MainUser $mainUser)
    {
        // Only super admin (role_id == 1) or the same user can edit
        return $user->role_id == 1 || $user->id == $mainUser->id;
    }
     
}

// Allows a user to update:
// Any user if they are a Super Admin.
// Their own record (user can update their own info).
// Example:
// Super Admin editing any user → Allowed
// User editing their own profile → Allowed
// Admin (role_id = 2) trying to edit another user → Not allowed