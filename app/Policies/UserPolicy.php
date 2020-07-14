<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $usera)
    {
        //
    }

    public function create(User $usera)
    {
        return $usera->id > 0;
    }

    public function update(User $usera, User $user, $perm=null)
    {
        if ($usera->havePermission($perm[0])){
            return true;
        }else  
        if ($usera->havePermission($perm[1])){
            return $usera->id === $user->id;
        }
        else {
            return false;
        }
    }
    
    public function view(User $usera, User $user, $perm=null)
    {
        if ($usera->havePermission($perm[0])){
            return true;
        }else  
        if ($usera->havePermission($perm[1])){
            return $usera->id === $user->id;
        }
        else {
            return false;
        }
        
    }
}
