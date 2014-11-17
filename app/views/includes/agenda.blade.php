@foreach ($items as $sessions)
    @if($sessions['count'] > 1)
        <div class="panel panel-default"  style="padding: 1em;">
            <div class="panel-heading">
                <h3 class="panel-title">Parallellsesjoner </h3>
            </div>

        @foreach ($sessions['data'] as $session)
                   @if($session->program_confirmed == 0)
                        <div class="panel panel-danger">
                            <div class="panel-heading" >
                                <h4 class="panel-title"> {{{ $session->title }}} <span class='badge'>Kansellert</span> </h4>
                            </div>
                        </div>
                    @else

                            <div class="panel panel-primary">
                                <div class="panel-heading" style="overflow:hidden;">
                                    <h4 class="panel-title">{{{ $session->title }}} <span style="float: right"> {{{ $session->date }}}, {{{ $sessions['time_from']   }}} - {{{ $sessions['time_to']  }}}</span></h4>
                                </div>
                                <div class="panel-body">
                                    @if($session->program_confirmed == 1)
                                        <p><span class='glyphicon glyphicon-globe'>Rom: {{{ $session->program_location }}}</span>
                                    @endif

                                    @if( ($session->program_confirmed == 1) && ($session->program_type == 0) )
                                        <!-- <p><span class='glyphicon glyphicon-facetime-video'></span> Videostrømming er tilgjenglig</p> -->
                                    @endif

                                    @if($session->program_confirmed == 1)
                                           <p><span class="glyphicon glyphicon-zoom-in"></span><a href="/program/{{{ $session->id }}}">Les mer</a></p>
                                   @endif
                                </div>
                                <div class="panel-footer">
                                    @if($session->program_confirmed == 1)
                                        @if(Auth::check())
                                            @if($session->user_has_program_on_agenda != 0)
                                                {{ Form::open(array('action' => array('UserProgramController@remove'), 'method' => 'post')) }}
                                                {{ Form::hidden('programId',  $session->id  ) }}
                                                {{ Form::button(
                                                '<span class="glyphicon glyphicon-minus"></span>Fjern fra min agenda',

                                                array(
                                                'class'=>'btn btn-block',
                                                'type'=>'submit'))
                                                }}
                                                {{ Form::close() }}
                                            @else
                                                {{ Form::open(array('action' => array('UserProgramController@add'), 'method' => 'post')) }}
                                                {{ Form::hidden('programId',  $session->id  ) }}
                                                {{ Form::button(
                                                '<span class="glyphicon glyphicon-plus"></span>Legg til fra min agenda',

                                                array(
                                                'class'=>'btn btn-block',
                                                'type'=>'submit'))
                                                }}
                                                {{ Form::close() }}
                                            @endif
                                        @else
                                                {{ Form::open(array('action' => array('UsersController@login'), 'method' => 'get')) }}
                                                {{ Form::hidden('programId',  $session->id  ) }}
                                                {{ Form::button(
                                                '<span class="glyphicon glyphicon-plus"></span>Logg inn for å legge til i min agenda',

                                                array(
                                                'class'=>'btn btn-block',
                                                'type'=>'submit'))
                                                }}
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
                                    <div class="panel-heading"  style="overflow:hidden;"> <h3 class="panel-title"> {{{ $session->title }}} <span class='badge'>Kansellert</span> </h3>
                                </div>
                            @else
                                <div class="panel panel-primary">

                                    <div class="panel-heading"  style="overflow:hidden;">
                                        <h4 class="panel-title">{{{ $session->title }}} <span style="float: right"> {{{ $session->date }}}, {{{ $sessions['time_from']   }}} - {{{ $sessions['time_to']  }}}</span></h4>
                                    </div>


                                <div class="panel-body">
                                  @if($session->program_confirmed == 1)
                                        <p><span class='glyphicon glyphicon-globe'>Rom: {{{ $session->program_location }}}</span>
                                     @endif

                                     @if( ($session->program_confirmed == 1) && ($session->program_type == 0) )
                                         <!-- <p><span class='glyphicon glyphicon-facetime-video'></span> Videostrømming er tilgjenglig</p> -->
                                     @endif

                                     @if($session->program_confirmed == 1)
                                            <p><span class="glyphicon glyphicon-zoom-in"></span><a href="/program/{{{ $session->id }}}">Les mer</a></p>
                                    @endif
                                </div>

                                    <div class="panel-footer">
                                        @if($session->program_confirmed == 1)
                                        @if(Auth::check())
                                        @if($session->user_has_program_on_agenda != 0)
                                        {{ Form::open(array('action' => array('UserProgramController@remove'), 'method' => 'post')) }}
                                        {{ Form::hidden('programId',  $session->id  ) }}
                                        {{ Form::button(
                                        '<span class="glyphicon glyphicon-minus"></span>Fjern fra min agenda',

                                        array(
                                        'class'=>'btn btn-block',
                                        'type'=>'submit'))
                                        }}
                                        {{ Form::close() }}
                                        @else
                                        {{ Form::open(array('action' => array('UserProgramController@add'), 'method' => 'post')) }}
                                        {{ Form::hidden('programId',  $session->id  ) }}
                                        {{ Form::button(
                                        '<span class="glyphicon glyphicon-plus"></span>Legg til fra min agenda',

                                        array(
                                        'class'=>'btn btn-block',
                                        'type'=>'submit'))
                                        }}
                                        {{ Form::close() }}
                                        @endif
                                        @else
                                        {{ Form::open(array('action' => array('UsersController@login'), 'method' => 'get')) }}
                                        {{ Form::hidden('programId',  $session->id  ) }}
                                        {{ Form::button(
                                        '<span class="glyphicon glyphicon-plus"></span>Logg inn for å legge til i min agenda',

                                        array(
                                        'class'=>'btn btn-block',
                                        'type'=>'submit'))
                                        }}
                                        {{ Form::close() }}
                                        @endif
                                        @endif
                                    </div>



                             </div>
                            @endif
                @endforeach
    @endif
@endforeach

