<?php

namespace App\Http\Controllers\Auth;

use App\User;
<<<<<<< HEAD
=======
use App\Registrasi;
>>>>>>> 1f07036a857f5e6f8719afd517355e7bef1e781e
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
<<<<<<< HEAD
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
=======
<<<<<<< HEAD
     * Where to redirect users after registration.
=======
     * Where to redirect users after login / registration.
>>>>>>> a8c56e09facff8c567d2a575a6751f6e750a52ea
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';
>>>>>>> 1f07036a857f5e6f8719afd517355e7bef1e781e

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
            'name' => 'required|max:255',
<<<<<<< HEAD
            'email' => 'required|email|max:255|unique:users',
=======
>>>>>>> 1f07036a857f5e6f8719afd517355e7bef1e781e
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
<<<<<<< HEAD
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
=======

        $token = Registrasi::where('token', '=', $data['token'])->first();
        $email = $token->email;
        $token->delete();
        return User::create([
                'name' => $data['name'],
                'email' => $email,
                'password' => bcrypt($data['password']),
            ]);
>>>>>>> 1f07036a857f5e6f8719afd517355e7bef1e781e
    }
}
