<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
public function redirectToProvider($driver)
{
    return Socialite::driver($driver)->redirect();
}
public function handleProviderCallback($driver)
{
    try {
        $user = Socialite::driver($driver)->user();
    } catch (\Exception $e) {
        return redirect()->route('login');
    }

    $existingUser = User::where('email', $user->getEmail())->first();

    if ($existingUser) {
        auth()->login($existingUser, true);
    } else {
        $newUser                    = new User;
        $newUser->provider_name     = $driver;
        $newUser->provider_id       = $user->getId();
        $newUser->name              = $user->getName();
        $newUser->email             = $user->getEmail();
        // we set email_verified_at because the user's email is already veridied by social login portal
        $newUser->email_verified_at = now();
        // you can also get avatar, so create avatar column in database it you want to save profile image
        // $newUser->avatar            = $user->getAvatar();
        $newUser->save();

        auth()->login($newUser, true);
    }

    return redirect($this->redirectPath());
}



    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function showInstructorLoginForm()
{
    return view('auth.login', ['url' => 'user']);
}

public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6'
    ]);

    // Attempt to log in the user
    $credentials = $request->only('email', 'password');
    if (Auth::guard('web')->attempt($credentials, $request->remember)) {
        // If login is successful
        $user = Auth::guard('web')->user();

        // Check if the user's email has been verified
        if ($user && !$user->email_verified_at) {
            // If not, show a message that the email is not verified
            return redirect()->back()->with('warning', 'Please verify your email to log in.');
        }

        // If email has been verified or user is null, redirect to the intended page
        return redirect()->intended(route('imen'));
    }

    // If login is unsuccessful, redirect back to the login page with an error message
    return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
        'email' => 'Invalid email or password.',
    ]);
    

}


}
