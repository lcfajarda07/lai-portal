<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('LAI', 'LAI : LAI Portal') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <!-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900" style="background:url('https://lh3.googleusercontent.com/u/0/drive-viewer/AKGpihabHrXvE_G0W0AKIPuc2z_ubyuPaf4RYxjXV_DP6kwbkbOgO6HEgo73lJbBDVOfJCoI2TYjvvkoZvPi5yVg2jLEtZOOcCbcinc=w1318-h612-rw-v1'); background-size: cover;"> -->
            <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900" style="background-color:#1390B4; background-size: cover;">

            <div class="text-center">
            <image style="height:100px;width:100px;" src="https://lh3.googleusercontent.com/u/0/drive-viewer/AKGpihbM27N-hIkEQp3pBtO4DqAhVtpqLDkPV0xQBNJGksTUHXIAPwyA1dDqMkwQa6cauZ54dnXESGN92nTK0kpMULsnoT-fQRZ5T-4=w1318-h612-rw-v1"/>

             
                <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 mb-10 bg-white dark:bg-gray-1000 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
