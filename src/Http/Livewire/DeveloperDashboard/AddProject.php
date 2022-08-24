<?php

namespace Remeritus\LaravelDeveloperDashboard\Http\Livewire\DeveloperDashboard;

use Illuminate\View\View;
use Livewire\Component;
use Remeritus\LaravelDeveloperDashboard\Models\DeveloperDashboard\Project;

class AddProject extends Component
{
    public ?string $title = '';

    protected array $rules = [
        'title' => 'required'
    ];

    public function render(): View
    {
        return view('developer-dashboard::livewire.developer-dashboard.add-project');
    }



    public function addNewProject(): void
    {
        $this->validate();

        Project::create([
            'title' => $this->title
        ]);
    }
}
