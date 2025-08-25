<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;




class MainUser extends Authenticatable
{
    use Notifiable;

    protected $table = 'main_users';
    protected $connection = 'mysql';
    

    protected $fillable = [
        'name', 'email', 'password', 'role_id',
    ];

    protected $hidden = [
        'password',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function userinfo()
    {
        return $this->hasOne(UserInfo::class, 'mainuser_id');
    }
}




