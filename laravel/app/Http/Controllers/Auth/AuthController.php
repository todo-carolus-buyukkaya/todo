<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    protected $redirectTo = '/listtaches';
    protected $redirectAfterLogout = 'auth/login';
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|between:6,60',
        ],
            [
                'name.required' => 'Veuillez indiquer votre nom',
                'name.max' => 'Le nom est trop long (:max caractères maximum)',
                'email.required' => 'Veuillez indiquer votre email !',
                'email.max' => 'Le email est trop long (:max caractères maximum)',
                'email.unique' => 'L\'email est déjà utilisé',
                'password.required' => 'Veuillez indiquer votre mot de passe',
                'password.confirmed' => 'La confirmation votre mot de passe est incorrecte',
                'password.between' => 'Le mot de passe doit etre entre :min et :max caractères',
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
