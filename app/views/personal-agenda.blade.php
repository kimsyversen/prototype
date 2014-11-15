<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>
<body>
@include('includes.menu')
@yield('body')
<h3>Personlig agenda</h3>

    @if( count($items) == 0)
        <p>Du har ingen sesjoner i din agenda. Gå til programmet for å legge til.</p>
    @endif



    @include('includes.agenda')


 @include('includes.bottom')