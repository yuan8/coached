<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function access_dashboard(User $user){
        if( ((isset($user->country_id)) AND (isset($user->state_id)))   ){
            return true;
        }else{
            return false;
        }
    }

    public function be_student(User $user){
        return ($user->role==1);
    }
    public function be_coached(User $user){
        return ($user->role==2);
    }
     public function be_manager(User $user){
        return ($user->role==3);
    }
}
