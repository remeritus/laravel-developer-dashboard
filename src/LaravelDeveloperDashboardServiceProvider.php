<?php

namespace Remeritus\LaravelDeveloperDashboard;

use Livewire\Livewire;
use Remeritus\LaravelDeveloperDashboard\Http\Livewire\DeveloperDashboard\AddProject;
use Remeritus\LaravelDeveloperDashboard\Http\Livewire\DeveloperDashboard\DeveloperDashboard;
use Remeritus\LaravelDeveloperDashboard\Http\Livewire\DeveloperDashboard\ShowProject;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDeveloperDashboardServiceProvider extends PackageServiceProvider
{
    public function bootingPackage()
    {
        Livewire::component('developer-dashboard', DeveloperDashboard::class);
        Livewire::component('add-project', AddProject::class);
        Livewire::component('project', ShowProject::class);
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-developer-dashboard')
            ->hasMigration('create_developer_dashboard_tables')
            ->hasConfigFile()
            ->hasViews();
    }
}
