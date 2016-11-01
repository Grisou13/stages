<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
/**
 *
 * username will actually be the intranet_id
 * and password will be an empty string
 *
 */
class User extends Authenticatable
{
    use HasApiTokens,Notifiable;
    protected $primaryKey = 'intranet_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'password', 'intranet_id','type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function tasks(){
        return $this->hasMany(Task::class);
    }
    public function type(){
        return $this->hasOne(UserType::class);
    }
    public function isTeacher(){
        return in_array($this->type()->name,UserType::teachers());//TODO
    }
    public function isStudent(){
        return true;//TODO
    }
    public function checkLevel($level){
        return false;//TODO
    }
    public static function students(){
        $c = new static;
        return $c->find()->where("type","student");
    }
}
