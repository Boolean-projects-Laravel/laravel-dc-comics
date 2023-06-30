@extends('layouts.base')

@section('contents')
<div class="p-5" style="margin-inline: 10rem">
    <h1>Inserisci un nuovo Comic</h1>
    <form method="POST" action="{{ route('comics.store') }}">
        {{-- Per protezione dati --}}
        @csrf 
        {{-- Per protezione dati --}}

        <div class="mb-3">
            <label for="thumb" class="form-label" style="font-weight:700">Immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label" style="font-weight:700">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        

        <div class="mb-3">
            <label for="price" class="form-label" style="font-weight:700">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label" style="font-weight:700">Serie</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label" style="font-weight:700">Data di vendita</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label" style="font-weight:700">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>


        <div class="mb-3">
            <label for="descriprion" class="form-label" style="font-weight:700">Descrizione</label>
            <textarea class="form-control" id="description" rows="3" name="description"></textarea>
        </div>

        <button class="btn btn-primary">Salva</button>
    </form>
</div>
    
@endsection