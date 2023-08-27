@extends('layouts.main');

@section('title', 'Comics List')

@section('main-content')
    <main>
        <ul>
            @forelse ($comics as $comic)
                <li>
                    <h4>{{ $comic['title'] }}</h4>
                </li>
            @empty
                <h3 class="text-danger">
                    No comic available
                </h3>
            @endforelse
        </ul>
        <a href="{{ route('home') }}">Back to home</a>
    </main>
@endsection