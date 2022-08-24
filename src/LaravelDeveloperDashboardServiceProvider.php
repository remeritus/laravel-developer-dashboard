<?php

namespace Remeritus\LaravelDeveloperDashboard;

use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Remeritus\LaravelDeveloperDashboard\Http\Livewire\DeveloperDashboard;

class LaravelDeveloperDashboardServiceProvider extends PackageServiceProvider
{
    public function bootingPackage() {
        Livewire::component('developer-dashboard', DeveloperDashboard::class);
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
            ->hasConfigFile()
            ->hasViews();
    }
}
