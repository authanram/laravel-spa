<?php /** @noinspection ReturnTypeCanBeDeclaredInspection */

declare(strict_types=1);

namespace Authanram\LaravelSite;

use Illuminate\Support\ServiceProvider;

final class LaravelSiteServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel-site.php',
            'laravel-site',
        );
    }
}
