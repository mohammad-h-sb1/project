<?php


namespace Naranjhub\Cms;


use Carbon\Laravel\ServiceProvider;
use Naranjhub\Cms\Http\Middleware\Admin;

class CmsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('Cms',function (){
            return new Cms;
        });
        $this->mergeConfigFrom(__DIR__ . '\config/mine.php','cms');
    }

    public function boot()
    {
        require __DIR__ . '\Http\api.php';

        $this->publishes([
            __DIR__.'/config/mine.php'=>config_path('cms.php'),
            __DIR__ . '/Http/Controller/UserController.php' =>base_path('App/Http/Controllers/UserController.php'),
            __DIR__.'/Migrations'=>database_path('/migrations')
        ]);
//        $this->app['router']->middleware('admin',\Naranjhub\Cms\Http\Middleware\Admin::class);
        $this->app['router']->aliasMiddleware('admin', Admin::class);
    }
}
