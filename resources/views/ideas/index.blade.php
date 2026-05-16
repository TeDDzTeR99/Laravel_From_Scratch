<x-layout title="Ideas">        
        @if ($ideas->count() > 0)
            <div class="mt-6 text-white">
                <h2 class="font-bold"> Your Ideas </h2>
                <ul class="mt-6">
                    @foreach ($ideas as $idea)
                        <li><a href="/ideas/{{ $idea->id }}" class="text-sm hover:text-indigo-400 focus-visible:outline-indigo-500">{{ $idea->description }}</a></li>
                    @endforeach
                </ul>
            </div>
        @else
            <p class="mt-6 text-sm text-gray-400">You have no ideas yet. <a href="/ideas/create" class="text-indigo-400 hover:text-indigo-300">Create one</a>.</p>
        @endif
</x-layout>