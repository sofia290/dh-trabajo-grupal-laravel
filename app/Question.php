<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function FunctionName(){
      return $this->hasMany(Answer::class);
    }

    public function mostrarTexto(){
        return $this->text;
    }
}
