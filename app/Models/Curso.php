<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'name','token_key'
    ];

    public function actividades(){
    	return $this->belongsToMany('App\Models\Actividad')->withTimesTamps();
    }

    public function users(){
    	return $this->belongsToMany('App\User')->withTimesTamps();
    }

}
