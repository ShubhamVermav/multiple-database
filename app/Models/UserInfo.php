<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
    protected $table = 'userinfo';
    
   // protected $connection = 'mysql';
    

    protected $fillable = [
        'phone',
        'address',
        'mainuser_id',
    ];
    
    public function mainuser()
    {
        return $this->belongsTo(MainUser::class, 'mainuser_id');
    }

}
