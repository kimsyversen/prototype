<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>
@include('includes.menu')
@yield('body')

 <div class="well">
<h2>Personlig agenda</h2>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Kurs 2 - Porteføljestyring</h3>
    </div>
    <div class="panel-body">
        <p><span class='glyphicon glyphicon-time'> Tid: 09:00-17:30</span></p>
        <p><a href="#">Les mer om sesjonen</a></p>
    </div>
       <div class="panel-footer">
                <button type="button" class="btn  btn-block" style="opacity:1; background: rgba(39, 48, 66, 0.0)"> <span class="glyphicon glyphicon-remove"></span> <a href="#">Fjern fra min agenda</a></button>
       </div>
    </div>

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Kurs 6 - Big data og offentlig sektor</h3>
    </div>
    <div class="panel-body">
            <p><span class='glyphicon glyphicon-time'> Tid: 09:00-17:30</span></p>
            <p><a href="#">Les mer om sesjonen</a></p>
    </div>
       <div class="panel-footer">
                <button type="button" class="btn  btn-block" style="opacity:1; background: rgba(39, 48, 66, 0.0)"> <span class="glyphicon glyphicon-remove"></span> <a href="#">Fjern fra min agenda</a></button>
       </div>
    </div>
</div>
</body>
</html>