<?php

namespace App\Http\Controllers\Auth;

use App\EloquentModels\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\UserRegister;

class RegisterController extends Controller
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
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function register(UserRegister $request)
    {
        $this->validator($request->all())->validate();
        $attribute = $request->all();
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $folder = public_path('images/avatars');
            $filename = $file->getClientOriginalName();
            $pathfile = rand(100, 10000).'-'.$filename;
            $file->move($folder, $pathfile);

            $attribute['avatar'] = $pathfile;
        }
        event(new Registered($user = $this->create($attribute)));

        $this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect($this->redirectPath());
    }

    public function showRegistrationForm()
    {
        return view('accounts.register_form');
    }
}
