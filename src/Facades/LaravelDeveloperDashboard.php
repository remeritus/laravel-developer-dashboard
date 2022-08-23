<?php

namespace Remeritus\LaravelDeveloperDashboard\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Remeritus\LaravelDeveloperDashboard\LaravelDeveloperDashboard
 */
class LaravelDeveloperDashboard extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Remeritus\LaravelDeveloperDashboard\LaravelDeveloperDashboard::class;
    }
}
