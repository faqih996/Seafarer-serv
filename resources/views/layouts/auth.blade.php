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
        {{-- navbar --}}
        @include('includes.navbar-auth')

        <!-- page content -->
        @yield('content')

        <!-- Script -->
        @stack('prepend-script')
        @include('includes.script')
        @stack('addon-script')

    </body>
</html>
