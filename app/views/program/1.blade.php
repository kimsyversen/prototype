<!DOCTYPE html>
    <html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.menu')



        @yield('body')
  <div class="col-xs-12 col-sm-9">
        {{{ print_r($items) }}}
</div>
    </body>
</html>