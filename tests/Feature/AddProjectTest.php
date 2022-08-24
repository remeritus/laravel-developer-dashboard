<?php

use Livewire\Livewire;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Remeritus\LaravelDeveloperDashboard\Http\Livewire\DeveloperDashboard\AddProject;
use Remeritus\LaravelDeveloperDashboard\Models\DeveloperDashboard\Project;
use function Pest\Livewire\livewire;

uses(RefreshDatabase::class);

it('can set a title', function (){
   livewire(AddProject::class)
       ->set('title', 'Hello');
});

it('won\'t submit without title', function(){
    livewire(AddProject::class)
        ->call('addNewProject')
        ->assertHasErrors('title');
});

it('can create a project', function () {

    livewire(AddProject::class)
        ->set('title', 'Amazing Title')
        ->call('addNewProject');

    $this->assertDatabaseHas('ldd_projects', [
        'title' => 'Amazing Title'
    ]);
});
