<!DOCTYPE html>
    <html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.topmenu')

        {{HTML::script('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js')}}
        {{HTML::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js')}}
        {{HTML::script('js/slidein-menu.js')}}

        @yield('body')

        <div class="well">
        <p>Test</p>
        </div>
    </body>
</html>