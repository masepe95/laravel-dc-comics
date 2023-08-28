@extends('layouts.main')
@section('title', 'Add Comic')
@section('main-content')
    <main>
        <div class="card-header">
            <h1>Add your comic</h1>
            <a href="{{ route('comics.index') }}">Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input name="title" required type="text" class="form-control" id="title">
                        </div>
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Picture (link)</label>
                            <input name="thumb" required type="url" class="form-control" id="thumb">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price (in $)</label>
                            <input name="price" required type="number" class="form-control" id="price">
                        </div>
                        <div class="mb-3">
                            <label for="series" class="form-label">Series</label>
                            <input name="series" required type="text" class="form-control" id="series">
                        </div>
                        <div class="mb-3">
                            <label for="sale_date" class="form-label">Date</label>
                            <input name="sale_date" required type="date" class="form-control" id="sale_date">
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input name="type" required type="text" class="form-control" id="type">
                        </div>
                        <div class="mb-3">
                            <label for="artists" class="form-label">Artists</label>
                            <input name="artists" required type="text" class="form-control" id="artists">
                        </div>
                        <div class="mb-3">
                            <label for="writers" class="form-label">Writers</label>
                            <input name="writers" required type="text" class="form-control" id="writers">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input name="description" required type="text" class="form-control" id="description">
                        </div>
                    </div>
                </div>
                <div class="inputs">
                    <input type="submit" value="CREA">
                    <input type="reset" value="CANELLA">
                </div>
            </form>
        </div>
    </main>
@endsection