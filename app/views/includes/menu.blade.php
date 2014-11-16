    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
       <div class="container">
    	<div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".sidebar-nav">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
              <span class="icon-bar"></span>
           </button>
           <a class="navbar-brand" href="/">Hjem</a>
    	</div>
       </div>
    </div>

    <div class="container">
      <div class="row row-offcanvas row-offcanvas-left menu">

        <!-- sidebar -->
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas menu" id="sidebar" role="navigation">
            <ul class="nav">
                <li><a href="/program">Konferanseprogram</a></li>
                @if (Auth::check())
                    <li><a href="/profile/agenda">Min agenda</a></li>
                @endif
                 <!-- <li><a href="/participants">Deltakerliste</a></li> -->
                 <!-- <li><a href="/participant-profile">Deltakerprofil</a></li> -->
                 <li><a href="/profile/messages">Meldingsinnboks</a></li>
                 <li><a href="/map">Kart</a></li>
                 <hr>
                 @if (Auth::check())
                    <!-- <li><a href="/users/profile">Profile</a></li> -->
                    <li><a href="/users/logout">Logg ut</a></li>
                 @else
                     <li><a href="/users/login">Logg inn på brukerkonto</a></li>
                     <li><a href="/users/create">Lag brukerkonto</a></li>
                 @endif
                 <hr>
                 <li><a href="/newsfeed">Nyhetsfeed</a></li>
            </ul>
        </div>
<div class="col-xs-12 col-sm-9">
        @include('includes.messages')