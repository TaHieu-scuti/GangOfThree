<?php

namespace App\Http\Controllers\Auth;

use App\EloquentModels\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClassManagerRegister;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use App\Interfaces\UserServiceInterface;
use Illuminate\Support\Facades\Auth;


class ClassManagerRegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserServiceInterface $userService)
    {
        $this->middleware('guest');
        $this->userService = $userService;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function register(ClassManagerRegister $request)
    {
        $attribute = $request->all();
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $folder = public_path('images/avatars');
            $filename = $file->getClientOriginalName();
            $pathfile = rand(100, 10000).'-'.$filename;
            $file->move($folder, $pathfile);

            $attribute['avatar'] = $pathfile;
        }
        $this->userService->registerLecturer($attribute);
        Auth::attempt(['email' => $attribute['email'], 'password' => $attribute['password']]);

        return $this->registered($request, $attribute)
                        ?: redirect($this->redirectPath());
    }

    public function showRegistrationForm()
    {
        return view('accounts.register-manager-form');
    }
}
