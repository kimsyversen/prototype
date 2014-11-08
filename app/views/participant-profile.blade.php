<!DOCTYPE html>
    <html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.menu')
        @yield('body')

        <div class="container-fluid">

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6  hidden-md hidden-lg main">
            <img src="http://thespiritscience.net/wp-content/uploads/2014/09/Steve-Jobs-Book-cover.png" width="320" height="240"alt="...">
         </div>

         <div class="hidden-sm hidden-xs col-xs-12 col-sm-12 col-md-6 col-lg-6  main">
            <img src="http://thespiritscience.net/wp-content/uploads/2014/09/Steve-Jobs-Book-cover.png" alt="...">
         </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 main" >
            <h1>Ola Nordmann</h1>
            <p>Organization: NTNU</p>
            <button>Send message</button>
            <p>Facebook</p>
            <p>Twitter</p>
         </div>

    </div>
    </body>
</html>