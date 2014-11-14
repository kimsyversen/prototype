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

            <?php
                foreach($items as $group)
                {
                    echo '<div class="panel panel-default">';
                        echo '<div class="panel-heading">';
                            echo "Gruppe med sesjoner";
                        echo '</div>';
                        foreach($group as $session)
                        {
                            echo '<div class="panel panel-default">';
                                echo '<div class="panel-heading">';
                                    echo '<h3 class="panel-title"><span class="glyphicon glyphicon-time"></span> '. $session->time_from . " - " .  $session->time_to . '</h3>';
                                echo '</div>';
                                echo '<div class="panel-body">';
                                    echo "Sesjon: " . $session->title;
                                    echo "<p><span class='glyphicon glyphicon-globe'>Rom ". $session->program_location ."</span>";
                                    if($session->program_type == 0)
                                        echo "<p><span class='glyphicon glyphicon-facetime-video'></span> Videostrømming er tilgjenglig</p>";
                                echo '</div>';
                            echo '</div>';

                      }

                    echo '</div>';
              }


          ?>
</div>
         </body>
     </html>