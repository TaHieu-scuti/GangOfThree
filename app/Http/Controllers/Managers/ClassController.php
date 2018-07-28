<?php

namespace App\Http\Controllers\Managers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateClassRequestForm;
use App\Interfaces\ClassServiceInterface;

class ClassController extends Controller
{
    public function __construct(ClassServiceInterface $classService)
    {
        $this->classService = $classService;
    }

    public function showFormCreateClass()
    {
        return view('classes.register');
    }

    public function showFormDetailClass($classId)
    {
        $class = $this->classService->getDetailClass($classId);
        if (!$class) {
            abort('404');
        }
        $isLecture = $this->classService->isLecture($class);
        return view('classes.detail', ['class' => $class, 'isLecture' => $isLecture]);
    }

    public function createClass(CreateClassRequestForm $request) {
        $class = $this->classService->createClass($request->all());

        return redirect()->route('class-detail', $class->id);
    }
}
