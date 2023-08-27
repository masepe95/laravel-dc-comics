@extends('layouts.main');

@section('title', 'Comic Info')

@section('main-content')
<main>
    <img src="{{ $comic->thumb }}" alt="">
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->series }}</p>
    <h3>{{ $comic->price }}</h3>
    <p>Type: {{ $comic->type }}</p>
    <p>Date: {{ $comic->sale_date }}</p>
    <p>Artists: {{ $comic->artists }}</p>
    <p class="mb-5">Writers: {{ $comic->writers }}</p>
    <a href="{{ route('comics.index') }}">Back to comic list</a>
</main>
@endsection