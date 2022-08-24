<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use function Pest\Livewire\livewire;
use Remeritus\LaravelDeveloperDashboard\Http\Livewire\DeveloperDashboard\AddProject;

uses(RefreshDatabase::class);

it('can set a title', function () {
    livewire(AddProject::class)
       ->set('title', 'Hello');
});

it('won\'t submit without title', function () {
    livewire(AddProject::class)
        ->call('addNewProject')
        ->assertHasErrors('title');
});

it('will show validation error to user', function () {
    livewire(AddProject::class)
        ->call('addNewProject')
        ->assertHasErrors('title')
        ->assertSeeText('The title field is required.');
});

it('can create a project', function () {
    livewire(AddProject::class)
        ->set('title', 'Amazing Title')
        ->call('addNewProject');

    $this->assertDatabaseHas('ldd_projects', [
        'title' => 'Amazing Title',
    ]);
});

it('will emit a newProjectAdded Event when project is created.', function () {
    livewire(AddProject::class)
        ->set('title', 'Amazing Title')
        ->call('addNewProject')
        ->assertSuccessful()
        ->assertEmitted('newProjectAdded');
});
