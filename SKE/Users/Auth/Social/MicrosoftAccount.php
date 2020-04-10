<?php


namespace SKE\Users\Auth\Social;


class MicrosoftAccount extends SocialAccount
{


    public function toArray(): array
    {
        return [
            'id' => $this->get('id'),
            'name' => $this->get('displayName'),
            'email' => $this->get('mail'),
            'username' => $this->get('login'),
            'businessPhones' => $this->get('businessPhones'),
            'displayName' => $this->get('displayName'),
            'givenName' => $this->get('givenName'),
            'jobTitle' => $this->get('jobTitle'),
            'mail' => $this->get('mail'),
            'mobilePhone' => $this->get('mobilePhone'),
            'officeLocation' => $this->get('officeLocation'),
            'preferredLanguage' => $this->get('preferredLanguage'),
            'surname' => $this->get('surname'),
            'userPrincipalName' => $this->get('userPrincipalName'),
        ];
    }
}





