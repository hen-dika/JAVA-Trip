<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>@yield('title')</title>
        @include('includes.app.style')
        @stack('addon-style')
    </head>
    <body>
        <div class="container">
            @include('includes.app.navbar-alternate')
        </div>
        @yield('content')
        @include('includes.app.footer')
        @include('includes.app.script')
        @stack('addon-script')
    </body>
</html>