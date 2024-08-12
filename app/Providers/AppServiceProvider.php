<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Player;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        $playersMenu = Player::all();
        view()->share('playersMenu', $playersMenu);
    
    }
}
