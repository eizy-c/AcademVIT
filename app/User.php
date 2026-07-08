<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Traits\UserTrait;

class User extends Authenticatable
{
    use Notifiable, UserTrait;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function aulas(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Aula')->withTimestamps();
    }

    public function cursos(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Curso')->withTimestamps();
    }
}
