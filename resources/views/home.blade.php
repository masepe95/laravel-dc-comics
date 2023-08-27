@extends('layouts.main');

@section('title', 'Home')

@section('main-content')
    <a href="{{ route('comics.index') }}">Enter</a>
@endsection