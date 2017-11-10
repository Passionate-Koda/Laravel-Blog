<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    //
    public static function isComplete(){
      return static::where('complete', '>', 0)->get();
    }
}
