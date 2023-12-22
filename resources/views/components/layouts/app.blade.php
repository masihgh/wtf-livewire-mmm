<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? '.::Livewire::.' }}</title>
        @vite('resources/css/app.css')
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=actor:400" rel="stylesheet" />
        <style>
            * {
                font-family: 'Actor', sans-serif;
            }
        </style>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
