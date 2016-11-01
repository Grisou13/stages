<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    //
    public static function teachers()
    {
        return ["teacher","head-teacher"];
        //get to the intranet or cache and return it
    }
}
