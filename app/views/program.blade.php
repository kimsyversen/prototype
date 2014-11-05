<!DOCTYPE html>
    <html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.menu')



        @yield('body')


        <div class="well">
                 Select day  <?php echo Form::select('size', array('Monday' => 'Monday', 'T' => 'Tuesday', 'W' => 'Wednesday'), array('class' => 'select-picker')); ?>
         </div>


        <?php
        $ical   = new ICal("/Users/kim/Sites/prototype/app/storage/MyCal.ics");
        $events = $ical->events();

        $date = $events[0]['DTSTART'];
        /*echo "The ical date: ";
        echo $date;
        echo "<br/>";

        echo "The Unix timestamp: ";
        echo $ical->iCalDateToUnixTimestamp($date);
        echo "<br/>";

        echo "The number of events: ";
        echo $ical->event_count;
        echo "<br/>";

        echo "The number of todos: ";
        echo $ical->todo_count;
        echo "<br/>";
        echo "<hr/><hr/>";*/



        foreach ($events as $event) {

            //echo "Unique ID: ".$event['UID']."<br/>";
            //echo "CREATED: ".$event['CREATED']."<br/>";

            if($event['STATUS'] == "CONFIRMED")
                echo "<span class='badge'>".$event['STATUS']."</span>";



            echo "<div class='well'>";
            echo "<p>".$event['SUMMARY']."</p>";
            echo "Location: ".$event['LOCATION']."<br/>";
            echo "Start Date: " . date('Y-m-d H:i:s', $ical->iCalDateToUnixTimestamp($event['DTSTART'])). "<br>";

            echo "End Date: " . date('Y-m-d H:i:s', $ical->iCalDateToUnixTimestamp($event['DTEND'])). "<br>";



            // echo "DTSTAMP: " . date('Y-m-d H:i:s', $ical->iCalDateToUnixTimestamp($event['DTSTAMP'])). "<br>";



            echo "Description: ".$event['DESCRIPTION']."<br/>";

            // echo "LAST-MODIFIED: ".$event['LAST-MODIFIED']."<br/>";
            //echo "SEQUENCE: ".$event['SEQUENCE']."<br/>";

            //echo "TRANSP: ".$event['TRANSP']."<br/>";
            echo "</div>";
        }

        ?>

    </body>
</html>