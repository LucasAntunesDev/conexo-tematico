<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="text-gray-700 dark:text-violet-50 flex flex-col h-screen bg-violet-50 dark:bg-neutral-900">

    @include('includes.header')
    
    @yield('content')

    </div>
</body>

@yield('scripts')

</html>