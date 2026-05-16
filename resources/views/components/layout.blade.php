 @props([
     'title' => 'Laracast',
 ])
 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>{{ $title }}</title>
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
     <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
     <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
     <style>

     </style>
 </head>

 <body class="">
     <x-nav />
     
     <main class="max-w-3xl mx-auto mt-10">
         {{ $slot }}
     </main>
 </body>

 </html> <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
