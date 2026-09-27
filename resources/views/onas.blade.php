@extends('layout.layout')
@section('tytul', ' - WSB - O nas')
@section('podtytul', 'Strona o nas')
@section('tresc')
    <div>Treść strony o nas</div>
    @isset($zadania)
    <ol>
        @foreach ($zadania as $zadanie)
        <li>{{ $zadanie }}</li>   
        @endforeach
    </ol>     
    @endisset
      
@endsection