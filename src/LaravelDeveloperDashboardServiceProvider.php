<?php

namespace Remeritus\LaravelDeveloperDashboard;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Remeritus\LaravelDeveloperDashboard\Commands\LaravelDeveloperDashboardCommand;

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