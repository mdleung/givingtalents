<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Google\Client as GoogleClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(GoogleClient::class, function ($app) {
            $client = new GoogleClient();
            $client->setClientId(config("google.client_id"));
            $client->setClientSecret(config("google.client_secret"));
            $client->setRedirectUri(config("google.redirect_uri"));
            $client->addScope("https://www.googleapis.com/auth/gmail.send");
            $client->setAccessType("offline");
            $client->setPrompt("consent");

            if (config("google.refresh_token")) {
                $client->fetchAccessTokenWithRefreshToken(config("google.refresh_token"));
            }

            return $client;
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
