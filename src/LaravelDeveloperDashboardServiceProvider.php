<?php

namespace Remeritus\LaravelDeveloperDashboard;

use Remeritus\LaravelDeveloperDashboard\Commands\LaravelDeveloperDashboardCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDeveloperDashboardServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-developer-dashboard')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-developer-dashboard_table')
            ->hasCommand(LaravelDeveloperDashboardCommand::class);
    }
}
