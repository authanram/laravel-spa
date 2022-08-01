<?php

declare(strict_types=1);

namespace Authanram\LaravelSite\Tests;

use Authanram\LaravelSite\LaravelSiteServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            LaravelSiteServiceProvider::class,
        ];
    }
}
