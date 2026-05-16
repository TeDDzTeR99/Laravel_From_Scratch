<x-layout title="Ideas">
    @if ($ideas->count() > 0)
        <div class="mt-6">
            <a href="/ideas/create" class="text-indigo-400 hover:text-indigo-300">Add New Idea</a>
            <h2 class="font-bold"> Your Ideas </h2>
            <ul class="mt-6 grid grid-cols-2 gap-x-6 gap-y-4">
                @foreach ($ideas as $idea)
                    <x-idea-card href="/ideas/{{ $idea->id }}/edit">
                        {{ $idea->description }}
                    </x-idea-card>
                @endforeach
            </ul>

        </div>
    @else
        <p class="mt-6 text-sm text-gray-400">You have no ideas yet. <a href="/ideas/create"
                class="text-indigo-400 hover:text-indigo-300">Create one</a>.</p>
    @endif
</x-layout>
