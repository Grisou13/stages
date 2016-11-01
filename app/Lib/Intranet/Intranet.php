<?php
/**
 * Created by PhpStorm.
 * User: thomas.ricci
 * Date: 01.11.2016
 * Time: 16:22
 */

namespace App\Lib\Intranet;


class Intranet
{
    public function __construct(\App\Repositories\User $user,Auth $auth){
        $this->store = $user;
        $this->authManager = $auth;
    }

    public function auth(){
        return $this->authManager;
    }
    public function user(){
        return $this->authManager->user();
    }
}