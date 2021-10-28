@extends('layouts.app')
@section('title', 'Homepage')
    
@section('content')
<section id="home-movies">
    <div class="container">
        <div class="movies">
            @foreach ($movies as $item)
                <a href="{{route('pagina-movie', ['id' => $item['id']])}}">
                    <div class="movie__card">
                        <h3 class="movie__title">{{$item['title']}}</h3>
                        <h4 class="movie__vote">Voto: {{$item['vote']}}</h4>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
    
    
@endsection