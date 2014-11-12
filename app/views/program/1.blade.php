<!DOCTYPE html>
    <html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.menu')



        @yield('body')

    <div class="well">
        <h2>Detaljinformasjon om sesjon</h2>
        <div class="panel panel-default">
            <div class="panel-body">
                <h4> Dato og tid</h4>
                <p><span class="glyphicon glyphicon-calendar"></span> Mandag 27/10, 2014
                <p><span class="glyphicon glyphicon-time"></span> 09:00 - 17:30
            </div>
        </div>



        <div class="panel panel-default">
            <div class="panel-body">
                <h4>Beskrivelse</h4>
                <p>Det er krevende å gjennomføre digitaliseringsprosjekter på en god måte og det er enda vanskeligere å dokumentere at man tar ut de forventede gevinster. God planlegging er en forutsetning for å iverksette de riktige tiltak og å sikre bedre gjennomføringsevne. Difi lanserte en ny versjon av Prosjektveiviseren.no i 2012. Kurset vil gi en innføring i hvordan prosjektmetodikk og andre virkemidler kan bidra til flere vellykkede digitaliseringsprosjekter.Prosjektveiviseren 2.0. er en anbefalt prosjektmodell for IKT prosjekter i offentlig sektor som blant annet skal styrke planlegging, styringen, kvalitet og gevinstrealisering i offentlige IKT-prosjekter. Prosjektveiviseren er basert på metodikk fra PRINCE2. PRINCE2 er en prosjektledelsesmetode som brukes over hele verden og har sertifisering som anses som beste praksis for gjennomføring av prosjekter. Metodkikken kan tilpasses alle typer prosjekter uavhengig av størrelse, bransje, organisasjonsform, geografi og kultur.
            </div>
        </div>

       <div class="panel panel-default">
            <div class="panel-body">
                <h4>Videostreaming</h4>
                <button type="button" class="btn  btn-block" style="opacity:1; background: rgba(39, 48, 66, 0.1) "><span class="glyphicon glyphicon-plus"></span>Se video</button>
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-body">
                <h4>Personlig</h4>
                <button type="button" class="btn  btn-block" style="opacity:1; background: rgba(39, 48, 66, 0.1) "><span class="glyphicon glyphicon-plus"></span>Legg til i min agenda</button>
                <button type="button" class="btn  btn-block" style="opacity:1; background: rgba(39, 48, 66, 0.1) "><span class="glyphicon glyphicon-plus"></span>Lag notat</button>
            </div>
        </div>

      <div class="panel panel-default">
            <div class="panel-body">
                <h4>Sosialt</h4>

                <button type="button" class="btn  btn-block" style="opacity:1; background: rgba(39, 48, 66, 0.1) "><span class="glyphicon glyphicon-comment"></span>Del på Twitter</button>
                <button type="button" class="btn  btn-block" style="opacity:1; background: rgba(39, 48, 66, 0.1) "><span class="glyphicon glyphicon-comment"></span>Del på Facebook</button>
            </div>
        </div>


        <div class="panel panel-default">
            <div class="panel-body">
                <h4>Tilbakemelding</h4>
                <button type="button" class="btn  btn-block" style="opacity:1; background: rgba(39, 48, 66, 0.1) "><span class="glyphicon glyphicon-pencil"></span>Delta i poll</button>
                <button type="button" class="btn  btn-block" style="opacity:1; background: rgba(39, 48, 66, 0.1) "><span class="glyphicon glyphicon-pencil"></span>Si hva du synes om sesjonen</button>
            </div>
        </div>



        <div class="panel panel-default">
            <div class="panel-body">
                <h4>Foredragsholder</h4>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6  hidden-md hidden-lg main ">
                            <img src="http://thespiritscience.net/wp-content/uploads/2014/09/Steve-Jobs-Book-cover.png" width="270" height="200"alt="...">
                     </div>

                     <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6  hidden-sm hidden-xs  main ">
                        <img src="http://thespiritscience.net/wp-content/uploads/2014/09/Steve-Jobs-Book-cover.png" alt="...">
                     </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6   main">
                        <h5>Ola Nordmann, (NTNU)</h5>
                        <h5>Om</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque volutpat ultricies viverra. Phasellus leo neque, convallis sed posuere a, maximus fringilla erat. Quisque finibus congue dui nec ornare. Morbi in iaculis risus. Nulla facilisi. Etiam finibus purus quis placerat porttitor. Aenean imperdiet, lectus eget mollis semper, elit lectus porttitor dolor, eget cursus ex lorem eu justo. Maecenas aliquet vehicula quam ut pharetra. Morbi urna dui, tempor ut efficitur vel, accumsan quis justo. Donec fringilla aliquam nisl, et fringilla ante vestibulum eget. Aliquam fringilla vitae metus in vulputate.

                           Fusce ac suscipit purus. Aenean blandit rutrum congue. Aliquam fringilla vestibulum lobortis. Aliquam id ex tincidunt, ullamcorper eros eget, dignissim felis. Nam tellus leo, rutrum eu nisl non, ultrices faucibus libero. Quisque orci mauris, gravida vitae laoreet eu, cursus non dolor. Sed faucibus quis sem ac mollis. Cras rutrum sodales neque sit amet dapibus. Donec lobortis dignissim justo, et sollicitudin odio molestie non. Nunc eleifend nisl nulla, et tincidunt eros rhoncus vitae.</p>
                     </div>
            </div>
        </div>

    </div>
    </body>
</html>