<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class people extends Model
{
    protected $fillable =['firtsname' ,'lastname' ,'emial','phone'];
    public function profile(){
        return $this ->hasone('App\profile','owner_id');
    }
}
