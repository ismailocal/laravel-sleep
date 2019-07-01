<?php
/**
 * Created by PhpStorm.
 * User: ismailocal
 * Date: 01.07.2019
 * Time: 02:43
 */

namespace Ismailocal\Sleep;

use Ismailocal\Sleep\Middlewares\CheckSleepMiddleware;

class SleepServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot(){
        $this->loadMigrationsFrom(__DIR__.'/Migrations/');
        $this->publishes([
            __DIR__.'/Config/sleep.php' => config_path('sleep.php'),
        ]);

        app('router')->aliasMiddleware('check.sleep', CheckSleepMiddleware::class);
    }

    public function register(){

    }
}