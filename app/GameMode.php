<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameMode extends Model
{
  public function FunctionName(){
    return $this->hasMany(Answer::class);
  }
}
