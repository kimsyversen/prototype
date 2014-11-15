<!DOCTYPE html>
    <html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.menu')
        @yield('body')


            <h2>Konferanseprogram</h2>



<div class="well">
    <div class="form-group">
     {{ Form::open(array('action' => array('ProgramController@view_date'), 'method' => 'post')) }}
     {{ Form::label('in_program','Velg dag') }}

     <?php

     $progs = array();
     $progs[] = "Alle";
     $progs[] = "Mandag 27/10";
     $progs[] = "Onsdag 29/10";
        ?>

     {{ Form::select('date', $progs, 'date_id') }}
     {{Form::submit('Vis program for valgt dato', array('class' => 'btn btn-primary'))}}
     {{ Form::close() }}

    </div>
 </div>

@foreach ($items as $sessions)
     <div class="panel panel-default">
        <div class="panel-heading">
              <h3 class="panel-title"><span class="glyphicon glyphicon-time"></span> {{{ $sessions['date'] }}} / {{{ $sessions['time_from']   }}} - {{{ $sessions['time_to']  }}}</h3>
        </div>
       @foreach ($sessions['data'] as $session)
            @if($session->program_confirmed == 1)
                <div class="panel panel-success">
             @else
                <div class="panel panel-danger">
             @endif
        <div class="panel-heading">
            <h3 class="panel-title"> {{{ $session->title }}}
                @if($session->program_confirmed == 0)
                    <span class='badge'>Kansellert</span>
                @endif
            </h3>
        </div>
        <div class="panel-body">
            @if($session->program_confirmed == 1)
                <p><span class='glyphicon glyphicon-globe'>Rom: {{{ $session->program_location }}}</span>
                <p><span class="glyphicon glyphicon-zoom-in"></span><a href="program/{{{ $session->id }}}">Les mer</a></p>
            @endif

            @if( ($session->program_confirmed == 1) && ($session->program_type == 0) )
                <p><span class='glyphicon glyphicon-facetime-video'></span> Videostrømming er tilgjenglig</p>
            @endif
        </div>
        <div class="panel-footer">
            @if($session->program_confirmed == 1)
                @if(Auth::check())
                    @if($session->user_has_program_on_agenda == 1)
                        {{ Form::open(array('action' => array('UserProgramController@remove'), 'method' => 'post')) }}
                        {{ Form::hidden('programId',  $session->id  ) }}
                        {{ Form::submit('Fjern fra min agenda', array('class' => 'btn btn-block')) }}
                        {{ Form::close() }}
                    @else
                         {{ Form::open(array('action' => array('UserProgramController@add'), 'method' => 'post')) }}
                        {{ Form::hidden('programId',  $session->id  ) }}
                        {{ Form::submit('Legg til fra min agenda', array('class' => 'btn btn-block')) }}
                        {{ Form::close() }}
                    @endif
                @else
                        {{ Form::open(array('action' => array('UseController@login'), 'method' => 'get')) }}
                        {{ Form::hidden('programId',  $session->id  ) }}
                        {{ Form::submit('Logg inn for å legge til i agenda', array('class' => 'btn btn-block')) }}
                        {{ Form::close() }}
                @endif
            @endif

       </div>
       </div>
    @endforeach
</div>
@endforeach


            </div>
         </body>
     </html>