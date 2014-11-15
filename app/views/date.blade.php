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
                    <div class="form-group">
                     {{ Form::open(array('action' => array('ProgramController@view_date'), 'method' => 'post')) }}
                     {{ Form::label('in_program','Velg dag') }}

                     <?php

                     $progs = array();
                     $progs[] = "Alle";
                     $progs[] = "Mandag 28/10";
                     $progs[] = "Onsdag 30/10";
                        ?>

                     {{ Form::select('date', $progs, 'date_id') }}
                     {{Form::submit('Vis program for valgt dato', array('class' => 'btn btn-primary'))}}
                       {{ Form::close() }}
                    </div>


             </div>

                <?php
                 foreach($items as $sessions)
                 {
                  echo '<div class="panel panel-default">';
                         echo '<div class="panel-heading">';
                               echo '<h3 class="panel-title"><span class="glyphicon glyphicon-time"></span> ' . $sessions['date'] . " / " . $sessions['time_from'] . " - " .  $sessions['time_to'] . '</h3>';
                         echo '</div>';

                     //Spesifiser
                     foreach($sessions['data'] as $session)
                     {
                         if($session->program_confirmed == 1)
                             echo '<div class="panel panel-success">';
                         else {
                             echo '<div class="panel panel-danger">';
                         }

                             echo '<div class="panel-heading">';
                                 echo '<h3 class="panel-title">'. $session->title;
                                 if($session->program_confirmed == 0)
                                     echo "<span class='badge'>Kansellert</span>";

                                 echo '</h3>';
                             echo '</div>';


                             echo '<div class="panel-body">';
                             if($session->program_confirmed == 1)
                                 echo "<p><span class='glyphicon glyphicon-globe'>Rom ". $session->program_location ."</span>";
                                 if($session->program_type == 0 && $session->program_confirmed == 1)
                                     echo "<p><span class='glyphicon glyphicon-facetime-video'></span> Videostrømming er tilgjenglig</p>";
                                  if($session->program_confirmed == 1)
                                     echo '<p><span class="glyphicon glyphicon-zoom-in"></span><a href="program/' . $session->id  . '">Les mer</a></p>';
                             echo '</div>';


                             echo '<div class="panel-footer">';
                                 if($session->program_confirmed == 1)
                                     echo '<button type="button" class="btn  btn-block" style="opacity:1; background: rgba(39, 48, 66, 0.1) "><span class="glyphicon glyphicon-plus"></span>Legg til i min agenda</button>';
                             echo '</div>';
                         echo '</div>';
                     }

                 echo '</div>';
                 }
           ?>


            </div>
         </body>
     </html>