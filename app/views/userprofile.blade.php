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
        <p>Name: {{ Confide::user()->first_name }} {{ Confide::user()->last_name }}</p>
        <p>Email:{{ Confide::user()->email }}

    </div>
</div>
</div>
</body>
</html>