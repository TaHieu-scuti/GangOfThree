<?php

namespace App\EloquentModels;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = "classes";
    protected $fillable = [
        'manager_id',
        'name',
        'start_date',
        'stop_date',
        'desciption',
        'price',
        'tags',
        'create_at',
        'updated_at'
    ];
}
