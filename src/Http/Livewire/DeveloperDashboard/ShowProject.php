<?php

namespace Remeritus\LaravelDeveloperDashboard\Http\Livewire\DeveloperDashboard;

use Illuminate\View\View;
use Livewire\Component;

class ShowProject extends Component
{
    public function render(): View
    {
        return view('developer-dashboard::livewire.developer-dashboard.show-project');
    }
}
