<!DOCTYPE html>
    <html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.menu')
        @yield('body')

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 main" >
            <h3>Ola Nordmann</h3>
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

 @include('includes.bottom')