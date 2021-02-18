<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opciones extends Model
{
    use HasFactory;
    public function pregunta()
	{
		return $this->belongsTo('App\Models\Pregunta');
	}
}
