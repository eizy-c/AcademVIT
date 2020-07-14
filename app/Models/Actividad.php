<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
	protected $fillable = [
        'name','slug','description'
    ];

   public function cursos(){
    	return $this->belongsToMany('App\Models\Curso')->withTimesTamps();
    }
}
