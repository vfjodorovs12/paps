<?php

namespace Vfjodorovs12\Paps;

use Seat\AbstractSeatPlugin;

class ServiceProvider extends AbstractSeatPlugin
{
    public function boot()
    {
        $this->addRoutes();
        $this->addViews();
        $this->addMigrations();
    }

    public function addRoutes()
    {
        if (! $this->app->routesAreCached()) {
            $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        }
    }

    public function addViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'paps');
    }

    private function addMigrations()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations/');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/Config/paps.sidebar.php',
            'package.sidebar'
        );
    }

    public function getName(): string
    {
        return 'Paps Stat';
    }

    public function getPackageRepositoryUrl(): string
    {
        return 'https://github.com/vfjodorovs12/paps';
    }

    public function getPackagistPackageName(): string
    {
        return 'paps';
    }

    public function getPackagistVendorName(): string
    {
        return 'vfjodorovs12';
    }
}
