<?php
namespace App\Services;

use \Carbon\Carbon;
use App\EloquentModels\User;
use App\EloquentModels\ClassManager;
use App\Interfaces\UserServiceInterface;
use Illuminate\Support\Facades\Storage;

class UserService implements UserServiceInterface
{
    public function __construct()
    {
    }

    public function register($userData, $options)
    {
        $now = Carbon::now()->toDateTimeString();
        $userData['created_at'] = $now;
        $userData['updated_at'] = $now;
        User::save($userData);
    }

    public function registerLecturer($userData, $options)
    {
        $now = Carbon::now()->toDateTimeString();
        $userData['created_at'] = $now;
        $userData['updated_at'] = $now;
        ClassManager::save($userData);
    }
}
