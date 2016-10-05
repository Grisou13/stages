<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = "documents";
    public function user(){
        return $this->belongsTo(User::class);
    }
    //check the version
    public function isExpired(){
        return $this->version;
    }
    public static function latest(){
        //try and return the latest document
    }
}
