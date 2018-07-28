<?php

namespace App\EloquentModels;

use Illuminate\Database\Eloquent\Model;

class StudentClassExercise extends Model
{
    protected $table = "student_class_exercises";
    protected $fillable = [
        'student_id',
        'class_id',
        'lesson_id',
        'excercise_submission_url',
        'evaluation',
        'created_at',
        'updated_at'
    ];
}
