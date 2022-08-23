<?php

namespace Remeritus\LaravelDeveloperDashboard\Commands;

use Illuminate\Console\Command;

class LaravelDeveloperDashboardCommand extends Command
{
    public $signature = 'laravel-developer-dashboard';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
