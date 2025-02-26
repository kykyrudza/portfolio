<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>
            {{ config('app.name', 'Laravel') }}
        </title>

        <link
            rel="preconnect"
            href="https://fonts.bunny.net"
        />
        <link
            href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600"
            rel="stylesheet"
        />
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css"
            rel="stylesheet"
            integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        @routes
        @vite(['resources/js/app.ts'])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
