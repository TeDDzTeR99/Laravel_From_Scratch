 @props([
    'title' => 'Laracast'
 ])
 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <style>
            
        </style>
    </head>
    <body class="bg-gray-700 p-6 max-w-xl mx-auto">
        <nav>
            <a href="/">Home</a>
            <a href="/about">About Us</a>
            <a href="/contact">Contact Us</a>
        </nav>
        <main>
            {{ $slot }}
        </main>
    </body>
</html>   <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
