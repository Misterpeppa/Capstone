<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User\Clients;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Password;


class EmailController extends Controller
{

    /**
     * Show the email verification notice.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('auth.verify-email');
    }

    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param \Illuminate\Foundation\Auth\EmailVerificationRequest $request
     * @return \Illuminate\Http\Response
     */
    public function verify(EmailVerificationRequest $request, $id)
    {
        $client = Clients::find($id);

        if (!$client) {
            // Handle the case where the client with the specified ID is not found.
            return redirect()->route('not_found');
        }

        if ($client->hasVerifiedEmail()) {
            return redirect('/');
        }

        if ($client->markEmailAsVerified()) {
            event(new Verified($client));
        }

        return redirect('/')->with('verified', true);
    }

    /**
     * Resend the email verification notification.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function resend(Request $request, $id)
    {
        $client = Clients::find($id);

        if (!$client) {
            // Handle the case where the client with the specified ID is not found.
            return redirect()->back()->with('error', 'Client not found.');
        }

        if ($client->hasVerifiedEmail()) {
            return redirect('/')->with('info', 'Your email address is already verified.');
        }

        $client->sendEmailVerificationNotification();

        return back()->with('resent', true);
    }

    public function forgotpassword()
    {
        return view();
    }

    public function resetpassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    
    }
}
