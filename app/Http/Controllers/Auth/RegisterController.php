<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/index';

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
      $messages = [
        "first_name.required" => "El nombre es obligatorio",
        "last_name.required" => "El apellido es obligatorio",
        "email.required" => "El correo electrónico es obligatorio",
        "email.email" => "Ingrese un mail valido",
        "email.unique" => "Ya existe una cuenta con este email",
        "password.required" => "La contraseña es obligatoria",
        "password.confirmed" => "Las contraseñas no coinciden",
        "username.required" => "El username es obligatorio",
        "username.min" => "El username debe tener al menos dos caracteres",
        "username.unique" => "Ya existe un usuario con este username",
        "birth_date.required" => "La fecha de nacimiento es obligatoria",
        "min" => "El campo debe tener al menos dos caracteres"
      ];
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255', 'min:2'],
            'last_name' => ['required', 'string', 'max:255', 'min:2'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'username' => ['required', 'string', 'min:2', 'unique:users'],
            'birth_date' => ['required', 'date']
        ], $messages );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'username' => $data['username'],
            'birth_date' => $data['birth_date'],
        ]);
    }
}
