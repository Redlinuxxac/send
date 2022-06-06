<?php

namespace Reddatasrd\Send;

use Reddatasrd\Send\Send;
use Illuminate\Support\ServiceProvider;
use Reddatasrd\Send\SendFacade;

class SendServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //rutas
        $this->registerRoutes();
        //controlador
        //$this->app->make('Reddatasrd\Send\Controllers\MainController');

         //Resources 
         $this->registerResources();
         //Migrations 
         $this->registerMigrations();
         /**
          *  alias
          */
          $this->app->alias('Send', Send::class);
         //clase 
         $this->app->bind('Send', function($app){
             return new Send();
         });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/'),
        ],'views');
    }
    /**
     * Rusatas
     */
    protected function registerRoutes(): void
    {
        require_once __DIR__ . '/../routes/web.php';
    }
    
    protected function registerResources(): void
    {        
        //Load the views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'Send');
        //Load language translations...
        $this->loadTranslationsFrom(resource_path('lang/vendor/Send'), 'Send');
        $this->loadJsonTranslationsFrom(resource_path('lang/vendor/Send'), 'Send');
    }
    protected function registerMigrations():void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}