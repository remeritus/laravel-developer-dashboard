<div class="bg-gray-50 p-4">
    <h1 class="font-bold">Add New Project</h1>
    <div>
        <label>
            <p>Project Title</p>
            @error('title')
                <p class="text-xs text-red-500">{{ $message}}</p>
            @enderror
            <input type="text"
                   wire:model="title"
                   placeholder="Developer Dashboard"
                   class="rounded">
        </label>
    </div>
    <div class="mt-2">
        <button wire:click="addNewProject"
                class="bg-blue-500 p-2 transition hover:-translate-y-[1px] rounded text-xs font-bold text-white shadow-sm">Add New Project</button>
    </div>
</div>
