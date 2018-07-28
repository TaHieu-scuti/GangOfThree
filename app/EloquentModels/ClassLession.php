<?php

namespace App\EloquentModels;

use Illuminate\Database\Eloquent\Model;

class ClassLession extends Model
{
    protected $table = "class_lessions";
    protected $fillable = [
        'class_id',
        'descprition',
        'lession_url',
        'excercises_url',
        'start_day',
        'excercises_deadline',
        'youtube_url',
        'created_at',
        'updated_at'
    ];
}
