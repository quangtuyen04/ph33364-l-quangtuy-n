<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- plugins -->
    @include('clients.layouts.partials.link-css')
</head>
<body>
    <!-- navigation -->
    <header class="navigation fixed-top">
        <div class="container">
            @include('clients.layouts.partials.header')
        </div>
    </header>
    <!-- /navigation -->

    @yield('content')

    <footer class="footer">
        @include('clients.layouts.partials.footer')
    </footer>


    @include('clients.layouts.partials.link-js')
</body>
</html>