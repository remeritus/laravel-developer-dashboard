<?php

namespace Remeritus\LaravelDeveloperDashboard\Http\Livewire\DeveloperDashboard;

use Illuminate\View\View;
use Livewire\Component;

class DeveloperDashboard extends Component
{
    public function render(): View
    {
        return view('developer-dashboard::livewire.developer-dashboard.developer-dashboard');
    }
}
