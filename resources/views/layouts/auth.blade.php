<!DOCTYPE html>
<html lang="en">
    <head>

        @include('includes.meta')
        <title>@yield('title')</title>

        @stack('prepend-style')
        @include('includes.style')
        @stack('addon-style')

    </head>
    <body>

        <!-- page content -->
        @yield('content')

        <!-- Script -->
        @stack('prepend-script')
        @include('includes.script')
        @stack('addon-script')

    </body>
</html>
