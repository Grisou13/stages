<?php
namespace App\Auth;

use Illuminate\Auth\AuthServiceProvider;
use \Illuminate\Contracts\Auth\Authenticatable as UserContract;
use \Illuminate\Contracts\Auth\UserProvider;

class UserAuthProvider implements UserProvider {

    protected $model;

    public function __construct(UserContract $model)
    {

        $this->model = $model;
    }

    public function retrieveById($identifier)
    {
        return $this->model->find($identifier)->first();
    }

    public function retrieveByToken($identifier, $token)
    {

    }

    public function updateRememberToken(UserContract $user, $token)
    {
        return false;//we can't, no need
    }

    public function retrieveByCredentials(array $credentials)
    {
        return $this->model->find;
    }

    public function validateCredentials(UserContract $user, array $credentials)
    {

    }

}