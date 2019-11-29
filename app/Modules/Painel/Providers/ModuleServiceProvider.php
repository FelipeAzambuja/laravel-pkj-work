<?php

namespace App\Modules\Painel\Providers;

use Caffeinated\Modules\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the module services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(module_path('painel', 'Resources/Lang', 'app'), 'painel');
        $this->loadViewsFrom(module_path('painel', 'Resources/Views', 'app'), 'painel');
        $this->loadMigrationsFrom(module_path('painel', 'Database/Migrations', 'app'), 'painel');
        if(!$this->app->configurationIsCached()) {
            $this->loadConfigsFrom(module_path('painel', 'Config', 'app'));
        }
        $this->loadFactoriesFrom(module_path('painel', 'Database/Factories', 'app'));
    }

    /**
     * Register the module services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
