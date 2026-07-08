<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Aula extends Model
{
    protected $fillable = [
        'name', 'slug'
    ];

    public function cursos(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Curso')->withTimestamps();
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
