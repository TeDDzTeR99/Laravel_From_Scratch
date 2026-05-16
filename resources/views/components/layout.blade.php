 @props([
    'title' => 'Laracast'
 ])
 <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }}</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
            }
            nav {
                background-color: #333;
                padding: 1em;
            }
            nav a {
                color: white;
                margin-right: 1em;
                text-decoration: none;
            }
            main {
                padding: 2em;
            }
            .max-w-400 {
                max-width: 400px;
                margin: 0 auto;
            }
            .card {
                background: #e3e3e3;
                padding: 1em;
                text-align: center;
            }
        </style>
    </head>
    <body>
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
