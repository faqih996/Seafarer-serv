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
        @include('includes.navbar')

        <!-- page content -->
        @yield('content')

        {{-- Footer --}}
        @include('includes.footer')

        <!-- Script -->
        @stack('prepend-script')
        @include('includes.script')
        @stack('addon-script')

    </body>
</html>
