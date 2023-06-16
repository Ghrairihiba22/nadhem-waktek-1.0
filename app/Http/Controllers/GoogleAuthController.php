<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Socialite;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended('/');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}


    public function callbackGoogle()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('google_id', $google_user->getId())->first();

            if (!$user) {
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId()
                ]);

                Auth::login($new_user);
            } else {
                Auth::login($user);
            }

            return redirect()->intended('/');
        } catch (\Throwable $th) {
            dd("Something went wrong! " . $th->getMessage());
        }
    }
}