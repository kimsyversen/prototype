<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>
@include('includes.menu')
@yield('body')
<h3>Rediger brukerprofil</h3>
<div class="well">

@section('body')

    <div class="well">
        <h4>Deg</h4>
        <p>Navn: {{ Confide::user()->first_name }} {{ Confide::user()->last_name }}</p>
        <p>E-post:{{ Confide::user()->email }}

    </div>

    <div class="well">
                    <h4>Oppdater Navn</h4>
                    {{ Form::open(array('action' => 'ProfileController@edit_name', 'method' => 'post')) }}

                    <div class="form-group">
                        {{Form::label('first_name','First name')}}
                        {{Form::text('first_name', null,array('class' => 'form-control'))}}
                    </div>
                    <div class="form-group">
                        {{Form::label('last_name','Last name')}}
                        {{Form::text('last_name', null, array('class' => 'form-control'))}}
                    </div>

                    <div class="form-group">
                        {{Form::submit('Save', array('class' => 'btn btn-primary'))}}
                    </div>
                    {{ Form::close() }}
                 </div>
</div>
</div>
</body>
</html>