<?php
namespace App\Services;

use App\EloquentModels\Classes;
use App\EloquentModels\ClassManager;
use App\EloquentModels\ClassLession;
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

    public function isLecturer($class) {
        return ClassManager::where('user_id', $class->manager_id)->count();
    }

    public function getLession ($classId) {
        return ClassLession::where('class_id', $classId)->get();
    }
}
