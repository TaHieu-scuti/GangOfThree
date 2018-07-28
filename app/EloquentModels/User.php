<?php

namespace App\EloquentModels;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";
    protected $fillable = [
        'id',
        'email',
        'password',
        'facebook',
        'skype',
        'fullname',
        'avatar',
        'dob',
        'create_at',
        'updated_at'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
