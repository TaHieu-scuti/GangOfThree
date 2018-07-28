<?php
namespace App\Interfaces;

interface ClassServiceInterface
{
    public function createClass($data);
    public function getDetailClass($classId);
    public function isLecturer($class);
    public function getLession($classId);
    public function getStudent($classId);
}
