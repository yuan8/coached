<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
Use App\User;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Gate::before(function(User $user){
        // if( ((isset($user->country_id)) AND (isset($user->state_id)))   ){
        //     return true;
        // }else{
        //     return false;
        // }
        // });

        // Gate::define('ac_dashboard',function(){
        //    return redirect('asu');
        // });

        Gate::define('ac_dashboard','App\Policies\UserPolicy@access_dashboard');
        Gate::define('ac.dashboard','App\Policies\UserPolicy@access_dashboard');
        Gate::define('be.student','App\Policies\UserPolicy@be_student');
        Gate::define('be.coached','App\Policies\UserPolicy@be_coached');
        Gate::define('be.manager','App\Policies\UserPolicy@be_manager');





        //
    }
}
