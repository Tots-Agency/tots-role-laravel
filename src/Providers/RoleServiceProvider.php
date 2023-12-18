<?php

namespace Tots\Role\Providers;

use Illuminate\Support\ServiceProvider;
use Tots\Role\Services\RoleService;

class RoleServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Register migrations
        if($this->app->runningInConsole()){
            $this->registerMigrations();
        }
        // Register role singleton
        $this->app->singleton(RoleService::class, function ($app) {
            return new RoleService(config('role'));
        });
    }
    /**
     * Register migrations library
     *
     * @return void
     */
    protected function registerMigrations()
    {
        $mainPath = database_path('migrations');
        $paths = array_merge([
            './vendor/tots/role-laravel/database/migrations'
        ], [$mainPath]);
        $this->loadMigrationsFrom($paths);
    }

    /**
     *
     * @return void
     */
    public function boot()
    {
        
    }
}
