<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();

        // Atur masa berlaku token (misalnya, personal access token hanya berlaku 1 jam)
        // Passport::personalAccessTokensExpireIn(now()->addHour());

        Passport::personalAccessTokensExpireIn(now()->addSeconds(10)); // 10 detik
        
        // Atur masa berlaku access token (misalnya, hanya berlaku 1 jam)
        // Passport::tokensExpireIn(now()->addHour());

        Passport::tokensExpireIn(now()->addSeconds(10)); // 10 detik
        // Atur masa berlaku refresh token (misalnya, berlaku 7 hari)

        Passport::refreshTokensExpireIn(now()->addDays(7));
        // Passport::refreshTokensExpireIn(now()->addSeconds(10)); // 10 detik
        //
    }
}
