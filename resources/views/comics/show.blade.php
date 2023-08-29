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
        <a class="right-link btn btn-primary" href="{{ route('comics.edit', $comic) }}">Edit comic</a>
        <form id="delete-form" action="{{ route('comics.destroy', $comic) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Comic</button>
        </form>
    </div>
</main>
<script>
    const deleteForm = document.getElementById('delete-form');
    deleteForm.addEventListener('submit', e => {
        e.preventDefault();
        const hasConfirmed = confirm('Are you sure you want to delete this comic?');
        if (hasConfirmed) deleteForm.submit()
    })
</script>
@endsection