<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    protected $fillable = [
        'name','slug'
    ];

    public function cursos(){
    	return $this->belongsToMany('App\Models\Curso')->withTimesTamps();
    }

    public function users(){
    	return $this->belongsToMany('App\Models\User')->withTimesTamps();
    }
}
