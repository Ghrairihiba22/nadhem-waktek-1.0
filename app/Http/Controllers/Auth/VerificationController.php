<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Verified;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
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
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    public function show()
    {
        return view('auth.verify');
    }

    protected function createUserUrl($notifiable)
{
    return URL::temporarySignedRoute(
        'verification.verify',
        now()->addMinutes(60),
        [
            'id' => $notifiable->getKey(),
            'hash' => sha1($notifiable->getEmailForVerification()),
        ]
    );
}


public function verify(Request $request)
{
    $user = User::find($request->route('id'));

    if ($user->hasVerifiedEmail()) {
        return redirect($this->redirectPath());
    }

    if ($user->markEmailAsVerified()) {
        event(new Verified($user));
    }

    return redirect($this->redirectPath())->with('verified', true);
}

    public function resend(Request $request)
    {
        // Resend the email verification link
        $request->user()->sendEmailVerificationNotification();

        // Redirect back with a success message
        return back()->with('status', 'A new email verification link has been sent to your email address.');
    }
}
