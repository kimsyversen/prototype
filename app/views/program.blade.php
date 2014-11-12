<!DOCTYPE html>
    <html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.menu')
        @yield('body')
        <div class="col-xs-12 col-sm-9">
        <h2>Konferanseprogram</h2>
        <div class="well">
                 Velg dag <?php echo Form::select('size', array('Monday' => 'Mandag 27/10', 'T' => 'Tirsdag 28/10', 'W' => 'Onsdag 29/10'), array('class' => 'select-picker')); ?>
         </div>           

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Parallellsesjoner</h3>
  </div>
  <div class="panel-body">
            <?php
            $ical   = new ICal( app_path() . "/storage/MyCal.ics");
            $events = $ical->events();

            foreach ($events as $event) {
                //echo "Unique ID: ".$event['UID']."<br/>";
                if($event['STATUS'] == "CONFIRMED")
                    echo "<div class='panel panel-primary'>";

                if($event['STATUS'] == "CANCELLED")
                    echo "<div class='panel panel-danger'>";

                ?>
                <div class='panel-heading'>
                    <?php
                        echo $event['SUMMARY'];
                        if($event['STATUS'] == "CANCELLED")
                        echo "<span class='badge'>Kansellert</span>";
                    ?>
                </div>
                 <div class="panel-body">
                    <p><span class='glyphicon glyphicon-time'></span> Fra-til: <?php echo date('H:i:s', $ical->iCalDateToUnixTimestamp($event['DTSTART'])); echo "-"; echo  date('H:i:s', $ical->iCalDateToUnixTimestamp($event['DTEND'])); ?>
                    <p><span class='glyphicon glyphicon-globe'></span> Rom: <?php echo $event['LOCATION']; ?>

                      <?php
                        if($event['UID'] == "1koigufm110c5hnq6ln57murd4@google.com")
                            echo "<p><span class='glyphicon glyphicon-facetime-video'></span> Videostrømming er tilgjenglig</p>";
                      ?>

                    <p><a href="program/1">Les mer</a></p> <!-- program/1 -->
                </div>


                 <?php
                    if($event['STATUS'] == "CONFIRMED") { ?>
                        <div class="panel-footer">
                        <button type="button" class="btn  btn-block" style="opacity:1; background: rgba(39, 48, 66, 0.0) "><span class="glyphicon glyphicon-plus"></span>Legg til i min agenda</button>
                        </div>
                 <?php } ?>

                </div>

                <?php } ?>


        </div>
    </body>
</html>