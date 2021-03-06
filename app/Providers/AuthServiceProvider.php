<?php

namespace App\Providers;

use Laravel\Passport\Passport;
use Laravel\Passport\RouteRegistrar;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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

        //默认令牌发放的有效期是永久
        Passport::routes(function (RouteRegistrar $router) {
            //对于密码授权的方式只要这几个路由就可以了
            config(['auth.guards.api.provider' => 'users']);
            $router->forAccessTokens();
        }, ['prefix' => 'api/oauth']);
    }
}
