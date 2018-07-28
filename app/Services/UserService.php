<?php
namespace App\Services;

use \Carbon\Carbon;
use App\EloquentModels\User;
use App\EloquentModels\ClassManager;
use App\Interfaces\UserServiceInterface;
use Illuminate\Support\Facades\Storage;

class UserService implements UserServiceInterface
{
    public function __construct(User $user, ClassManager $classManager)
    {
        $this->user = $user;
        $this->classManager = $classManager;
    }

    public function register($userData)
    {
        $user = new User();
        $now = Carbon::now()->toDateTimeString();
        $userData['created_at'] = $now;
        $userData['updated_at'] = $now;
        $user->create($userData);
    }

    public function registerLecturer($userData)
    {
        $now = Carbon::now()->toDateTimeString();
        $userData['created_at'] = $now;
        $userData['updated_at'] = $now;
        $user = $this->user->create($userData);
        $userData['user_id'] = $user->id;
        $this->classManager->create($userData);
    }
}
