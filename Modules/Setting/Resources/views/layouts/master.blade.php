<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Setting</title>
        <link rel="stylesheet" href="{{ asset('Modules/Setting/css/core.css') }}">
        <link rel="stylesheet" href="{{ asset(mix('assets/vendor/fonts/fontawesome.css')) }}" />
        <link rel="stylesheet" href="{{ asset(mix('assets/vendor/fonts/tabler-icons.css')) }}" />
        <link rel="stylesheet" href="{{ asset(mix('assets/vendor/fonts/flag-icons.css')) }}" />

       {{-- Laravel Vite - CSS File --}}
       {{-- {{ module_vite('build-setting', 'Resources/assets/sass/app.scss') }} --}}

    </head>
    <body>
        @yield('content')
        @yield('scripts')

        <script src="{{asset('Modules/Setting/js/app.js')}}"></script>
        {{-- Laravel Vite - JS File --}}
        {{-- {{ module_vite('build-setting', 'Resources/assets/js/app.js') }} --}}
    </body>
</html>
