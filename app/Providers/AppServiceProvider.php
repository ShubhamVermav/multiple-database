<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        

     // change the user to main user by this code 
    // Request::macro('mainuser', function () {
    //     return $this->user(); // or return Auth::user();
    // });


    }
}
