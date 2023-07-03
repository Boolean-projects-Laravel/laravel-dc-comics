@extends('layouts.base')

@section('contents')
<div class="bg-dark text-light py-2 mb-3">
    <h1 class="ms-4" style="font-weight: 700">Modifica Comic</h1>
</div>
<div class="p-5" style="margin-inline: 10rem">
    
    <form method="POST" action="{{ route('comics.update', ['comic' => $comic->id] )}}">
        {{-- Per protezione dati --}}
        @csrf 
        @method('PUT')
        {{-- Per protezione dati --}}

        <div class="mb-3">
            <label for="thumb" class="form-label" style="font-weight:700; font-size: 20px">Immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb', $comic->thumb)}}">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label" style="font-weight:700; font-size: 20px">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title', $comic->title)}}">
        </div>

        

        <div class="mb-3">
            <label for="price" class="form-label" style="font-weight:700; font-size: 20px">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{old('price', $comic->price)}}">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label" style="font-weight:700; font-size: 20px">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{old('series', $comic->series)}}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label" style="font-weight:700; font-size: 20px">Data di vendita</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date', $comic->sale_date)}}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label" style="font-weight:700; font-size: 20px">Tipologia</label>
            <input type="text" class="form-control" id="type" name="type" value="{{old('type', $comic->type)}}">
        </div>


        <div class="mb-3">
            <label for="descriprion" class="form-label" style="font-weight:700; font-size: 20px">Descrizione</label>
            <textarea  class="form-control" id="description" rows="3" name="description">{{old('description', $comic->description)}}</textarea>
        </div>

        <button class="btn btn-primary" style="font-size: 20px">Aggiorna</button>
    </form>
</div>
    
@endsection