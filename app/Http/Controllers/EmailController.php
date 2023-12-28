<?php

namespace App\Http\Controllers\Auth;

use App\Models\User\Clients;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Access\HandlesAuthorization;

class EmailController
{
    use VerifiesEmails, HandlesAuthorization;

    protected $redirectTo = '/user/signin'; // Change this to your desired route

    /**
     * Override the default verify method to use the custom model.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    /**
     * Show the email verification notice.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('auth.verify');
    }

    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verify(Request $request)
    {
        $clients = $request->user('clients');

        if ($clients->hasVerifiedEmail()) {
            return redirect($this->redirectPath());
        }

        if ($clients->markEmailAsVerified()) {
            event(new Verified($request->user('clients')));
        }

        return redirect($this->redirectPath())->with('verified', true);
    }
}
