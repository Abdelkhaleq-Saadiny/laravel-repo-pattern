<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $repositorys = config('repository');

        foreach($repositorys as $nom => $impl){
            $interface = "App\\Repositories\\Interfaces\\" . ucfirst($nom) . "RepoInterface";
            $implementation = "App\\Repositories\\Implementations\\" . ucfirst($impl) . "\\" . ucfirst($nom) . "Repo";
            
            $this->app->bind($interface, $implementation);
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
