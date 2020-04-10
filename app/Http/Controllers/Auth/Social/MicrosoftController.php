<?php


namespace App\Http\Controllers\Auth\Social;


use App\Http\Controllers\Controller;
use App\Http\Controllersa\Auth\Social\SocialLoginController;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\RedirectResponse;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\InvalidStateException;
use Laravel\Socialite\Two\User as SocialiteUser;
use SKE\Users\Auth\Social\MicrosoftAccount;
use SKE\Users\Auth\Social\SocialAccount;
use SKE\Users\Models\OauthAccount;

class MicrosoftController extends SocialLoginController
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::with('graph')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $socialiteUser = $this->getSocialiteUser();
        } catch (InvalidStateException $exception) {
            session(['error' => trans('errors.github_invalid_state')]);

            return redirect()->route('login');
        }

        try {
            $user = OauthAccount::findBySocialId('microsoft',$socialiteUser->getId());
        } catch (ModelNotFoundException $exception) {
            return $this->userNotFound(new MicrosoftAccount($socialiteUser->getRaw()));
        }

        return $this->userFound($user, $socialiteUser);
    }

    private function getSocialiteUser(): SocialiteUser
    {
        return Socialite::driver('graph')->user();
    }

    private function userFound(OauthAccount $user, SocialiteUser $socialiteUser): RedirectResponse
    {
        $this->dispatchNow(new UpdateProfile($user, ['github_username' => $socialiteUser->getNickname()]));

        Auth::login($user);

        return redirect()->route('dashboard');
    }


}
