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
            <label for="title" class="form-label" style="font-weight:700; font-size: 20px">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $comic->title) }}">
            <div class="invalid-feedback">
                @error('title') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label" style="font-weight:700; font-size: 20px">Image</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
            <div class="invalid-feedback">
                @error('thumb') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label" style="font-weight:700; font-size: 20px">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $comic->price) }}">
            <div class="invalid-feedback">
                @error('price') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label" style="font-weight:700; font-size: 20px">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ old('series', $comic->series) }}">
            <div class="invalid-feedback">
                @error('series') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label" style="font-weight:700; font-size: 20px">Sale Date</label>
            <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
            <div class="invalid-feedback">
                @error('sale_date') {{ $message }} @enderror
            </div>
        </div>
        
        <div class="mb-3">
            <label for="type" class="form-label" style="font-weight:700; font-size: 20px">Type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type', $comic->type) }}">
            <div class="invalid-feedback">
                @error('type') {{ $message }} @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea 
            class="form-control @error('description') is-invalid @enderror" 
            id="description" 
            name="description" 
            rows="3" 
            id="description"
            >{{ old('description', $comic->description) }}</textarea>
            
            <div class="invalid-feedback">
                @error('description') {{ $message }} @enderror
            </div>
        </div>

        <button class="btn btn-primary" style="font-size: 20px">Aggiorna</button>
    </form>
</div>
    
@endsection