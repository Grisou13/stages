<?php
/**
 * Created by PhpStorm.
 * User: thomas.ricci
 * Date: 01.11.2016
 * Time: 16:00
 */

namespace App\Lib\Intranet;


class Auth
{
    public function __construct(\App\Repositories\User $repository,\Illuminate\Http\Request $request){
        $this->request = $request;
        $this->repository = $repository;
    }
    protected function retrieveUser(){
        $q =  $this->repository->where("intranet_id",'=',$this->request->header('x-forwared-user'));
        if($q->count() == 1)
            return $q->first();
        return $this->repository->create();

    }
}