<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
=======
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
>>>>>>> origin/Arturo

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
<<<<<<< HEAD
        'App\Model' => 'App\Policies\ModelPolicy',
=======
        // 'App\Model' => 'App\Policies\ModelPolicy',
>>>>>>> origin/Arturo
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
