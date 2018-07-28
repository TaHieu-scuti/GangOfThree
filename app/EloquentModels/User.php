<?php

namespace App\EloquentModels;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "users";
    protected $fillable = [
        'id',
        'name',
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

    public function setPasswordAttribute($password)
    {
        if (empty($password)) {
            return;
        }
        $this->attributes['password'] = bcrypt($password);
    }
}
