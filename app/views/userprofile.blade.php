<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>
@include('includes.menu')
@yield('body')

<div class="well">
<h3>Rediger brukerprofil</h3>
@section('body')

    <div class="well">
        <h4>You</h4>
        <p>Name: {{ Confide::user()->first_name }} {{ Confide::user()->last_name }}</p>
        <p>Email:{{ Confide::user()->email }}

    </div>
</div>
</div>
</body>
</html>