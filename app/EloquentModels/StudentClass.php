<?php

namespace App\EloquentModels;

use Illuminate\Database\Eloquent\Model;

class StudentClass extends Model
{
    protected $table = "student_classes";
    protected $fillable = [
        'class_id',
        'student_id',
        'evaluation',
        'created_at',
        'updated_at'
    ];

    public function user() {
        return $this->hasOne('App\EloquentModels\User', 'id', 'student_id');
    }
}
