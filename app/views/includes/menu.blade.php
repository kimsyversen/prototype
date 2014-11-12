<div class="container-fluid">
     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
         <div class="container">
             <div class="navbar-header">
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand" href="/">Hjem</a>
             </div>

             <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                 <ul class="nav navbar-nav navbar-right">
                     <li><a href="/program">Konferanse-agenda</a></li>
                     <li><a href="/profile/agenda">Personlig agenda</a></li>
                     <li><a href="/participants">Deltakerliste</a></li>
                     <li><a href="/participants2">Deltakerliste 2</a></li>
                     <li><a href="/participant-profile">Deltakerprofil</a></li>
                     <li><a href="/profile/messages">Meldingsinnboks</a></li>
                     <li><a href="/map">Kart</a></li>
                      @if (Auth::check())
                      <li><a href="/users/profile">Profile</a></li>
                     <li><a href="/users/logout">Log Out</a></li>

                     @else
                     <li><a href="/users/login">Login</a></li>
                     <!-- <li><a href="/users/create">Sign Up</a></li> -->
                     @endif

                 </ul>
             </div>
         </div>
     </nav>
 </div>

{{HTML::script('http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js')}}
{{HTML::script('http://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js')}}
{{HTML::script('js/bootstrap-select.js')}}