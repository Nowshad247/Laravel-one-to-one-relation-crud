<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $fillable =['city' ,'state' ,'zip','owner_id'];
}
