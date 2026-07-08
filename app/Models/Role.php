<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'full-access'
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Permission')->withTimestamps();
    }
}
