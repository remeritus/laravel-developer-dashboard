<?php

namespace Remeritus\LaravelDeveloperDashboard\Http\Livewire\DeveloperDashboard;

use Illuminate\Auth\Access\Response;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Livewire\Component;
use Remeritus\LaravelDeveloperDashboard\Models\DeveloperDashboard\Project;

class DeveloperDashboard extends Component
{
    protected $listeners = [
        'newProjectAdded',
    ];

    public bool $showNewProjectModal = false;

    public function render(): Factory|\Illuminate\Contracts\View\View|Response|bool|Application
    {
        return view('developer-dashboard::livewire.developer-dashboard.developer-dashboard', [
            'projects' => Project::all(),
        ]);
    }

    public function newProjectAdded(string $projectTitle)
    {
        $this->showNewProjectModal = false;
    }
}
