<!DOCTYPE html>
    <html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.menu')

        @yield('body')

        <div class="well">
        <p>Test</p>
        </div>
    </body>
</html>