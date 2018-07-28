<?php
namespace App\Interfaces;

interface ClassServiceInterface
{
    public function createClass($data);
    public function getDetailClass($classId);
    public function isLecture($class);
}
