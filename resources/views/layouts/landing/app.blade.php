<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.landing.head')
    </head>
    <body>
        @include('layouts.landing.header')
        @yield('content')
        @include('layouts.landing.footer')
        @include('layouts.landing.scripts')
    </body>
</html>