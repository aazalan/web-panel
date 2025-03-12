<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Event::listen(BuildingMenu::class, static function (BuildingMenu $event): void {
//            $user = auth()->user();

            $event->menu->add([
                'text' => 'info',
                'route' => 'info',
                'icon' => '',
            ]);

            $event->menu->add([
                'text' => 'users',
                'route' => 'users',
                'icon' => '',
            ]);
        });
    }
}
