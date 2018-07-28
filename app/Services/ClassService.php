<?php
namespace App\Services;

use App\EloquentModels\Classes;
use App\Interfaces\ClassServiceInterface;

class ClassService implements ClassServiceInterface
{
    public function __construct(Classes $classes)
    {
        $this->classes = $classes;
    }

    public function createClass($data)
    {
        return $this->classes->create($data);
    }

    public function getDetailClass($classId) {
        return Classes::find($classId);
    }

    public function isLecture($class) {

    }
}
