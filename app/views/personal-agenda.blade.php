<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>
@include('includes.menu')
@yield('body')
<div class="col-xs-12 col-sm-9">
@if( Session::has('items'))
    @if( count($session) == 0)
        <p>Du har ingen sesjoner i din agenda. Gå til programmet for å legge til.</p>
    @endif
@else
    <h3>Personlig agenda</h3>
@endif
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
                         {{ Form::open(array('action' => array('UserProgramController@remove'), 'method' => 'post')) }}
                        {{ Form::hidden('programId',  $session->id  ) }}
                        {{ Form::submit('Fjern fra min agenda', array('class' => 'btn btn-block')) }}
                        {{ Form::close() }}
                    @endif
                 @endif

            @endif
       </div>
       </div>
    @endforeach
</div>
@endforeach

 </div>
     <!-- insert the rest of your page markup here -->
 </div>
</body>
</html>