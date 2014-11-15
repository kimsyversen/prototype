<!DOCTYPE html>
    <html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.menu')
        @yield('body')
<h3>Meldingsinnboks</h3>

<div class="panel panel-primary">

 <div class="panel-heading"  style="overflow:hidden;">
      <h4 class="panel-title">Melding fra administrasjonen <span style="float: right"> 28/10, 15:30</span></h4>
  </div>
  <div class="panel-body">
    Gratulerer, du har vunnet en premie. Møt opp i informasjonen for å motta den.
  </div>
</div>


<div class="panel panel-primary">
 <div class="panel-heading"  style="overflow:hidden;">
      <h4 class="panel-title">Melding fra administrasjonen <span style="float: right"> 28/10, 15:30</span></h4>
  </div>
  <div class="panel-body">
    Det har blitt funnet en grå lommebok. Dens eier kan melde seg i informasjonen.
  </div>
</div>

<div class="panel panel-primary">
 <div class="panel-heading"  style="overflow:hidden;">
      <h4 class="panel-title">Melding fra administrasjonen <span style="float: right"> 28/10, 15:30</span></h4>
  </div>
  <div class="panel-body">
    Konferansen er nå i gang. Vi håper du vil få det flott.
  </div>
</div>


 @include('includes.bottom')















