<?php

namespace App\Http\Controllersa\Auth\Social;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use SKE\Users\Auth\Social\SocialAccount;

abstract class SocialLoginController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    protected function userNotFound(SocialAccount $user): RedirectResponse
    {
        return $this->redirectUserToRegistrationPage($user);
    }

    protected function redirectUserToRegistrationPage(SocialAccount $user): RedirectResponse
    {
        session(['socialData' => $user->toArray()]);

        return redirect()->route('register');
    }
}
