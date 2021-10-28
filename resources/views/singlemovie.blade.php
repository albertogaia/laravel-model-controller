@extends('layouts.app')
@section('title', $movie['title'])
    
@section('content')
<section id="single-movie">
    <div class="container">
        <h1>Titolo: {{$movie['title']}}</h1>
        <h2>Titolo originale: {{$movie['original_title']}}</h2>
        <h2>Nationality: {{$movie['nationality']}}</h2>
        <h2>Anno di uscita: {{$movie['date']}}</h2>
        <h2>Voto: {{$movie['vote']}}</h2>
    </div>
    
</section>
@endsection
