<?php
namespace App\Services;

use \Carbon\Carbon;
use App\EloquentModels\User;
use App\Interfaces\UserServiceInterface;

class UserService implements UserServiceInterface
{
    public function __construct()
    {
    }

    public function register($userData, $options)
    {
        if ($options && isset($options['avatar'])) {
            $userData['avatar'] = $options['avatar'];
        }
        $now = Carbon::now()->toDateTimeString();
        $userData['created_at'] = $now;
        $userData['updated_at'] = $now;
        User::save($userData);
    }

    public function registerLecturer($userData, $options)
    {

    }

    private function saveAvatar($avatar)
    {
        
    }
}
