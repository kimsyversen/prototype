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
    @include('includes.agenda')


 @include('includes.bottom')