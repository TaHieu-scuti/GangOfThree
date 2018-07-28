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
        if ($options && isset($options['avatar'])) {
            $this->saveAvatar($options['avatar']);
        }
        $now = Carbon::now()->toDateTimeString();
        $userData['created_at'] = $now;
        $userData['updated_at'] = $now;
        User::save($userData);
    }

    public function registerLecturer($userData, $options)
    {
        if ($options && isset($options['avatar'])) {
            $this->saveAvatar($options['avatar']);
        }
        $now = Carbon::now()->toDateTimeString();
        $userData['created_at'] = $now;
        $userData['updated_at'] = $now;
        ClassManager::save($userData);
    }

    private function saveAvatar($avatar)
    {
        Storage::putFile($avatar, new File('/images/avatars'));
    }
}
