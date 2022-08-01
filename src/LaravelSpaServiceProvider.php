<?php /** @noinspection ReturnTypeCanBeDeclaredInspection */

declare(strict_types=1);

namespace Authanram\LaravelSpa;

use Illuminate\Support\ServiceProvider;

final class LaravelSpaServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-spa.php', 'laravel-spa');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-spa');
    }
}
