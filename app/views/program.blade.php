<!DOCTYPE html>
    <html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.menu')
        @yield('body')
         <div class="well">
                 Select day  <?php echo Form::select('size', array('Monday' => 'Monday 27/10', 'T' => 'Tuesday 28/10', 'W' => 'Wednesday 29/10'), array('class' => 'select-picker')); ?>
         </div>
        <?php
        $ical   = new ICal("/Users/kim/Sites/prototype/app/storage/MyCal.ics");
        $events = $ical->events();

//echo "<span class='badge'>".$event['STATUS']."</span>";

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
                    echo "<span class='badge'>".$event['STATUS']."</span>";
                ?>
            </div>
             <div class="panel-body">
                <?php
                    echo "Location: ".$event['LOCATION']."<br/>";
                    echo "Start: " . date('H:i:s', $ical->iCalDateToUnixTimestamp($event['DTSTART'])). "<br>";
                    echo "End: " . date('H:i:s', $ical->iCalDateToUnixTimestamp($event['DTEND'])). "<br>";

                    //if($event['UID'] == "15lc1nvupht8dtfiptenljoiv4@google.com")
                    //    echo "<button><a href='program/1'>Read description</a></button>";

                    //echo "Description: ".$event['DESCRIPTION']."<br/>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>

    </body>
</html>