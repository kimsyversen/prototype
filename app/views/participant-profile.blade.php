<!DOCTYPE html>
    <html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.menu')
        @yield('body')
     
        <div class="col-xs-12 col-sm-9">

        <div class="col-md-12 col-lg-12  hidden-md hidden-lg main">
            <img src="http://thespiritscience.net/wp-content/uploads/2014/09/Steve-Jobs-Book-cover.png" width="320" height="240"alt="...">
         </div>

         <div class="hidden-sm hidden-xs col-xs-12 col-sm-12 col-md-6 col-lg-6  main">
            <img src="http://thespiritscience.net/wp-content/uploads/2014/09/Steve-Jobs-Book-cover.png" alt="...">
         </div>

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 main" >
            <h1>Ola Nordmann</h1>
            <p>Organisasjon: NTNU</p>

          <button type="button" class="btn btn-default btn-lg">
              <span class="glyphicon glyphicon-asterisk"></span> Se Facebook-profil
            </button>

          <button type="button" class="btn btn-default btn-lg">
              <span class="glyphicon glyphicon-asterisk"></span> Se Twitter-profil
            </button>

            <button type="button" class="btn btn-default btn-lg">
              <span class="glyphicon glyphicon-envelope"></span> Send in-app melding
            </button>

           <button type="button" class="btn btn-default btn-lg">
              <span class="glyphicon glyphicon-envelope"></span> <a href="sms:+4741586535">Send SMS </a>
            </button>
         </div>

   </div>
    </body>
</html>