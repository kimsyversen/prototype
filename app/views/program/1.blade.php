<!DOCTYPE html>
    <html>
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.menu')
        @yield('body')
        @foreach ($items as $item)
            <h3>Detaljinformasjon om {{{ $item->title }}}</h3>

            <div class="panel panel-default">
                  <div class="panel-body">
                      <h4> Dato, tid og sted
                            @if ($item->program_confirmed == 0)
                                  <span class='badge'>Kansellert</span>
                            @endif
                       </h4>
                      <p><span class="glyphicon glyphicon-calendar">Dato:</span> {{{ $item->date }}}
                      <p><span class="glyphicon glyphicon-time">Tid:</span>  {{{ $item->time_from  }}} - {{{ $item->time_to }}}
                      <p><span class='glyphicon glyphicon-globe'>Rom: {{{ $item->program_location }}} </span>
                  </div>
             </div>
        @endforeach

        <div class="panel panel-default">
            <div class="panel-body">
                <h4>Beskrivelse</h4>
                {{{ $item->program_description}}}
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                <h4>Personlig</h4>
               <div class="panel-footer">
                   @if($item->program_confirmed == 1)
                       @if(Auth::check())
                           @if($item->user_has_program_on_agenda != 0)
                               {{ Form::open(array('action' => array('UserProgramController@remove'), 'method' => 'post')) }}
                               {{ Form::hidden('programId',  $item->id  ) }}
                               {{ Form::submit('Fjern fra min agenda', array('class' => 'btn btn-block')) }}
                               {{ Form::close() }}
                           @else
                                {{ Form::open(array('action' => array('UserProgramController@add'), 'method' => 'post')) }}
                               {{ Form::hidden('programId',  $item->id  ) }}
                               {{ Form::submit('Legg til i min agenda', array('class' => 'btn btn-block')) }}
                               {{ Form::close() }}
                           @endif
                       @else
                               {{ Form::open(array('action' => array('UsersController@login'), 'method' => 'get')) }}
                               {{ Form::hidden('programId',  $item->id  ) }}
                               {{ Form::submit('Logg inn for å legge til i min agenda', array('class' => 'btn btn-block')) }}
                               {{ Form::close() }}
                       @endif
                   @endif
              </div>
                <!-- <button type="button" class="btn  btn-block" style="opacity:1; background: rgba(39, 48, 66, 0.1) "><span class="glyphicon glyphicon-plus"></span>Lag notat</button> -->
            </div>
        </div>

        @if ($item->program_speaker != "null")
           <div class="panel panel-default">
                <div class="panel-body">
                    <h4>Foredragsholder</h4>
                        <h5>{{{ $item->program_speaker }}}</h5>
                </div>
            </div>
        @endif
 </div>
    </body>
</html>