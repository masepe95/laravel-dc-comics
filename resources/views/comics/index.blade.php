@extends('layouts.main')
@section('title', 'Comics List')
@section('main-content')
    <main>
        <ul>
            @forelse ($comics as $comic)
                <li>
                    <h4>{{ $comic['title'] }}</h4>
                    <a href="{{ route('comics.show', $comic) }}">More details</a>
                </li>
            @empty
                <h3 class="text-danger">
                    No comics available
                </h3>
            @endforelse
        </ul>
        <a href="{{ route('home') }}">Back to home</a>
    </main>
@endsection