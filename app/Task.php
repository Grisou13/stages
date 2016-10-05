<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;
    protected $table = 'tasks';
    protected $appends = ["completed"];
    protected $dates = ['finish','start','created_at','updated_at','deleted_at'];
    public function status(){
        return $this->hasOne(Status::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getCompletedAttribute(){
        return $this->finish->gt($this->start);
    }
}
