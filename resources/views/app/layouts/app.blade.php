<!doctype html>
<html lang="{{ app()->getLocale() }}">

        @include('app.layouts.head')
    <body>
        @include('app.layouts.menu')
          @yield('content')
        @include('app.layouts.footer')
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</html>
