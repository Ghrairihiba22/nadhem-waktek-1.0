<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Instructor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Auth\RegisterController;


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
    protected $redirectTo = '/login';

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone_number' => ['required', 'string'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create (array $data)
    {

        $imagePath = $data['image']->getClientOriginalName(); // get the original name of the image
        $data['image']->move('storage/images/', $imagePath); // store the image in the 'public/images' directory with the original name

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'], // add the phone number field
            'image' => $imagePath, // store the image name in the 'image' column of the students table
            'password' => Hash::make($data['password']),

        ]);
        Auth::login($user);

        return view('dashboard.user.home');
    }

    public function showstudentRegistrationForm()
{ dd($user);
    return view('auth.register');
}

public function register(Request $request)
{
    $this->validator($request->all())->validate();

    event(new Registered($user = $this->create($request->all())));

    $this->guard()->login($user);

    return redirect($this->redirectPath())->with('success', 'Your account has been created. Please check your email for a verification link.');
}
}
