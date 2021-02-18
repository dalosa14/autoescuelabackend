<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;
    protected $table = 'preguntas';
    public function test()
	{
		return $this->belongsTo('App\Models\Test');
	}
    public function opciones()
	{
		return $this->hasMany('App\Models\Opciones');
	}
}
