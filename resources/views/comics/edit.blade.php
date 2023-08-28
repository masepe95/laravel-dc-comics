@extends('layouts.main');
@section('title', 'Add Comic')

@section('main-content')
    <main>
        <section id="edit-comic">
            <div class="card-header">
                <h1>Modifica il fumetto</h1>
                <a href="{{ route('comics.index') }}">Indietro</a>
            </div>
            <div class="card-body">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="title" class="form-label">Titolo</label>
                                <input name="title" required type="text" class="form-control" id="title"
                                    value="{{ $comic->title }}">
                            </div>
                            <div class="mb-3">
                                <label for="thumb" class="form-label">Immagine (link)</label>
                                <input name="thumb" required type="url" class="form-control" id="thumb"
                                    value="{{ $comic->thumb }}">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Prezzo</label>
                                <input name="price" required type="text" class="form-control" id="price"
                                    value="{{ $comic->price }}">
                            </div>
                            <div class="mb-3">
                                <label for="series" class="form-label">Serie</label>
                                <input name="series" required type="text" class="form-control" id="series"
                                    value="{{ $comic->series }}">
                            </div>
                            <div class="mb-3">
                                <label for="sale_date" class="form-label">Data</label>
                                <input name="sale_date" required type="date" class="form-control" id="sale_date"
                                    value="{{ $comic->sale_date }}">
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Tipo</label>
                                <input name="type" required type="text" class="form-control" id="type"
                                    value="{{ $comic->type }}">
                            </div>
                            <div class="mb-3">
                                <label for="artists" class="form-label">Artisti</label>
                                <input name="artists" required type="text" class="form-control" id="artists"
                                    value="{{ $comic->artists }}">
                            </div>
                            <div class="mb-3">
                                <label for="writers" class="form-label">Scrittori</label>
                                <input name="writers" required type="text" class="form-control" id="writers"
                                    value="{{ $comic->writers }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3 mx-5">
                                <label for="floatingTextarea2">Descrizione</label>
                                <div class="form-floating">
                                    <textarea required name="description" class="form-control" placeholder="Descrizione..." id="floatingTextarea2">
                                        {{ $comic->description }}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="inputs text-center">
                            <input class="btn btn-success" type="submit" value="MODIFICA">
                            <input class="btn btn-secondary" type="reset" value="SVUOTA CAMPI">
                        </div>
                </form>
            </div>
        </section>
    </main>
@endsection