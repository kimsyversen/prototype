@foreach ($items as $sessions)
    @if($sessions['count'] > 1)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">(Parallellsesjoner)  {{{ $sessions['date'] }}} / {{{ $sessions['time_from']   }}} - {{{ $sessions['time_to']  }}}</h3>
            </div>
        @foreach ($sessions['data'] as $session)
                   @if($session->program_confirmed == 0)
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title"> {{{ $session->title }}} <span class='badge'>Kansellert</span> </h3>
                            </div>
                        </div>
                    @else

                            <div class="panel panel-success">

                            <div class="panel-heading">
                                <h3 class="panel-title"> {{{ $session->title }}} </h3>
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
                                        @if($session->user_has_program_on_agenda != 0)
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
                                            {{ Form::open(array('action' => array('UsersController@login'), 'method' => 'get')) }}
                                            {{ Form::hidden('programId',  $session->id  ) }}
                                            {{ Form::submit('Logg inn for å legge til i agenda', array('class' => 'btn btn-block')) }}
                                            {{ Form::close() }}
                                    @endif
                                @endif
                           </div>
                           </div>
                    @endif
        @endforeach

                @if($sessions['count'] > 1)
                        </div>
                @endif

    @else
            <!-- En sesjon -->
            @foreach ($sessions['data'] as $session)
                               @if($session->program_confirmed == 0)
                                    <div class="panel panel-danger">
                                        <div class="panel-heading"> <h3 class="panel-title"> {{{ $session->title }}} <span class='badge'>Kansellert</span> </h3>
                                    </div>
                                @else

                                    <div class="panel panel-success">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><span class="glyphicon glyphicon-time"></span> {{{ $sessions['date'] }}} / {{{ $sessions['time_from']   }}} - {{{ $sessions['time_to']  }}} | {{{ $session->title }}}</h3>
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
                                                @if($session->user_has_program_on_agenda != 0)
                                                    {{ Form::open(array('action' => array('UserProgramController@remove'), 'method' => 'post')) }}
                                                    {{ Form::hidden('programId',  $session->id  ) }}
                                                    {{ Form::submit('Fjern fra min agenda', array('class' => 'btn btn-block')) }}
                                                    {{ Form::close() }}
                                                @else
                                                     {{ Form::open(array('action' => array('UserProgramController@add'), 'method' => 'post')) }}
                                                    {{ Form::hidden('programId',  $session->id  ) }}
                                                    {{ Form::submit('Legg til i min agenda', array('class' => 'btn btn-block')) }}
                                                    {{ Form::close() }}
                                                @endif
                                            @else
                                                    {{ Form::open(array('action' => array('UsersController@login'), 'method' => 'get')) }}
                                                    {{ Form::hidden('programId',  $session->id  ) }}
                                                    {{ Form::submit('Logg inn for å legge til i min agenda', array('class' => 'btn btn-block')) }}
                                                    {{ Form::close() }}
                                            @endif
                                        @endif
                                   </div>



                                 </div>
                                @endif
                    @endforeach







@endif
@endforeach

