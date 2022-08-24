<div x-data="{ open : @entangle('showNewProjectModal') }">
    @unless($projects->count() == 0)
        <button wire:click="$toggle('showNewProjectModal')">Add New Project</button>
    @endunless
    @forelse($projects as $project)
        <p>{{ $project->title }}</p>
    @empty
        <p>You have no projects.</p>
        <div>
            <button wire:click="$toggle('showNewProjectModal')">Add New Project</button>
        </div>
    @endforelse
    <div class="fixed top-0 left-0 w-full min-h-screen bg-black bg-opacity-30 backdrop-blur-sm"
         x-show="open">
        <div @click.outside="open = false"
             class="rounded overflow-hidden shadow-md absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            <livewire:add-project />
        </div>
    </div>
</div>
