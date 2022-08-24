<?php

use Remeritus\LaravelDeveloperDashboard\Http\Livewire\DeveloperDashboard\DeveloperDashboard;
use function Pest\Livewire\livewire;
use Remeritus\LaravelDeveloperDashboard\Http\Livewire\DeveloperDashboard\AddProject;

it('has a message about no projects', function (){
    livewire(DeveloperDashboard::class)
        ->assertSeeText('You have no projects.');
});

it('can add projects from dashboard', function () {
    livewire(DeveloperDashboard::class)
        ->assertSeeHtml('wire:click="addNewProject"');
});

it('will show project when it is added', function () {
    livewire(AddProject::class)
        ->set('title', 'Amazing Title')
        ->call('addNewProject');

    livewire(DeveloperDashboard::class)
        ->assertSeeText('Amazing Title');
});
