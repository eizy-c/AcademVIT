<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Policies\UserPolicy;
use App\User;
class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // 'App\User' => 'App\Policies\UserPolicy',

        User::class => UserPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();

        Gate::define('haveaccess',function(User $user, $perm){
            
            return $user->havePermission($perm);
        });
    }
}
