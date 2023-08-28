@extends('layouts.main')

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
    <div class="options">
        <a class="left-link" href="{{ route('comics.index') }}">Back to comics list</a>
        <a class="right-link" href="{{ route('comics.edit', $comic) }}">Edit comic</a>
    </div>
</main>
@endsection