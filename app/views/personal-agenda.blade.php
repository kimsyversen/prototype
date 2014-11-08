<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>
@include('includes.menu')
@yield('body')



<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Kurs 2 - Porteføljestyring</h3>
    </div>
    <div class="panel-body">
        <p>Time: 09:00-17:30</p>
        <div style="float: left;">
            <p><a href="#">Remove from my schedule</a></p>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Kurs 6 - Big data og offentlig sektor</h3>
    </div>
    <div class="panel-body">
        <p>Time: 09:00-17:30</p>
        <div style="float: left;">
            <p><a href="#">Remove from my schedule</a></p>
        </div>
    </div>
</div>



</body>
</html>