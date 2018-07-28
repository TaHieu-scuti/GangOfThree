<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'avatar' => 'max:10000|mimes:jpeg,png,jpg',
            'fullname' => 'required|string|max:100',
            'facebook' => 'string|max:255',
            'skype' => 'string|max:255',
            'degree' => 'string|max:100',
            'description' => 'string',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {        
        $imageName = '';
        if ($data->file('avatar') !==null) {
            $imageName = $data->file('avatar')
                        ->getClientOriginalName()
                        ->getClientOriginalExtension();
        }
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'avatar' => $imageName,
            'dob' => $data['dob'],
            'fullname' => $data['fullname'],
            'facebook' => $data['facebook'],
            'skype' => $data['skype'],
            'status' => $data['status'],
            'type' => $data['type'],
            'degree' => $data['degree'],
            'class_limit' => $data['class_limit'],
            'student_limit' => $data['student_limit'],
            'description' => $data['description'],
        ]);
    }
}
