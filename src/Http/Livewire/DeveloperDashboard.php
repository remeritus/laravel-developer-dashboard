<?php

namespace Remeritus\LaravelDeveloperDashboard\Http\Livewire;

use Livewire\Component;
use Illuminate\View\View;

class DeveloperDashboard extends Component
{

    public function render(): View
    {
        return view('developer-dashboard::livewire.developer-dashboard');
    }
}
