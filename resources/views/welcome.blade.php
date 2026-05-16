<x-layout title="Welcome">
        {{ $greeting }}, {{ $person }}!
        <h1>Welcome to Laravel!</h1>
        @if(count($tasks))
            <p> You have {{ count($tasks) }} tasks!</p>
        @endif

        @unless (count($tasks))
            <p>You have no tasks!</p>
        @endunless

        @forelse ($tasks as $task)
            <p>- {{ $task }}</p>
        @empty
            <p>No tasks to display.</p>
        @endforelse
</x-layout>