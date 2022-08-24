<?php

namespace Remeritus\LaravelDeveloperDashboard\Http\Livewire;

use Illuminate\View\View;
use Livewire\Component;

class DeveloperDashboard extends Component
{
    public function render(): View
    {
        return view('developer-dashboard::livewire.developer-dashboard');
    }
}
