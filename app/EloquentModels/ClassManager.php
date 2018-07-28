<?php

namespace App\EloquentModels;

use Illuminate\Database\Eloquent\Model;
use App\EloquentModels\User;

class ClassManager extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'degree',
        'class_limit',
        'student_limit',
        'description',
        'created_at',
        'updated_at'
    ];

    public function User()
    {
        return $this->hasOne('User');
    }
}
