@extends('layouts.app')
@section('title', 'Homepage')
    
@section('content')
    <h1>Sono il main</h1>
    @foreach ($movies as $item)
        <p>{{$item['title']}}</p>
    @endforeach
@endsection