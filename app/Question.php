<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
      'id', 'text', 'points', 'verified', 'created_by', 'sources'
    ];
    public function FunctionName(){
      return $this->hasMany(Answer::class);
    }

    public function mostrarTexto(){
        return $this->text;
    }
}
