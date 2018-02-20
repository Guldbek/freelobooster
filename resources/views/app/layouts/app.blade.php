<!doctype html>
<html lang="{{ app()->getLocale() }}">

        @include('app.layouts.head')
    <body>
        @include('app.layouts.menu')

        <div class="container-fluid" id="content">
          @yield('content')
        </div>
        @include('app.layouts.footer')
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
