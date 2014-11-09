<!DOCTYPE html>
    <html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.menu')
        @yield('body')
  <div class="well">
        <h2>Konferanseprogram</h2>
         <div class="well">
                 Velg dag <?php echo Form::select('size', array('Monday' => 'Mandag 27/10', 'T' => 'Tirsdag 28/10', 'W' => 'Onsdag 29/10'), array('class' => 'select-picker')); ?>
         </div>

        <?php
        $ical   = new ICal("/Users/kim/Sites/prototype/app/storage/MyCal.ics");
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
                <?php
                    echo "Rom: ".$event['LOCATION']."<br/>";
                    echo "Starter: " . date('H:i:s', $ical->iCalDateToUnixTimestamp($event['DTSTART'])). "<br>";
                    echo "Slutter: " . date('H:i:s', $ical->iCalDateToUnixTimestamp($event['DTEND'])). "<br>";

                    ?>
                    <p><a href="#">Les mer..</a></p> <!-- program/1 -->


                   <?php
                        //if($event['UID'] == "15lc1nvupht8dtfiptenljoiv4@google.com")
                        //    echo "<button><a href='program/1'>Read description</a></button>";

                        //echo "Description: ".$event['DESCRIPTION']."<br/>";
                        echo "</div>";
                    ?>

                     <?php
                        if($event['STATUS'] == "CONFIRMED") { ?>
                            <div class="panel-footer">
                            <button type="button" class="btn  btn-block" style="opacity:1; background: rgba(39, 48, 66, 0.0) "><span class="glyphicon glyphicon-plus"></span>Legg til i min agenda</button>
                            </div>
                            <?php } ?>

                    </div>

                    <?php
                }
                ?>
 </div>
    </body>
</html>