<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Curso extends Model
{
    protected $fillable = [
        'name', 'slug', 'token_key'
    ];

    public function actividades(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Actividad')->withTimestamps();
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
