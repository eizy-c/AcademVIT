<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table = 'actividades';

	protected $fillable = [
        'name','slug','description'
    ];

   public function cursos(){
    	return $this->belongsToMany('App\Models\Curso')->withTimestamps();
    }
}
