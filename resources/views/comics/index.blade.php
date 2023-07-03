@extends('layouts.base')


@section('contents')

    <div class="bg-dark text-light py-2 mb-3">
        <h1 class="ms-4" style="font-weight: 700">Lista comics</h1>
    </div>

    @if (session('delete_success'))
            
    @php
        $comic = session('delete_success') 
    @endphp

    <div class="alert alert-danger">
        Comic '{{$comic->title}}' è stato cancellato
        <form 
            action="{{ route('comics.restore', ['comic' => $comic]) }}"
            class="d-inline-block" 
            method="POST" 
            >
            @csrf
            <button class="btn btn-warning">Ripristina</button>
        </form>
    </div>

    @endif

    @if (session('restore_success'))

    @php
        $comic = session('restore_success')
    @endphp

    <div class="alert alert-success">
        Comic '{{$comic->title}}' è stato ripristinato
    </div>

    @endif

    <button type="button" class="btn btn-primary mt-4 mx-4">
        <a href="{{ '/comics/create' }}" class="card-link text-decoration-none text-light" style="font-weight: 700; font-size:25px">Creare un nuovo Comic</a>
    </button>
    <div class="row row-cols-4 p-4">
        
        @foreach ($comics as $comic)
            <div class="col mb-3">
                <div class="card h-100" style="border:3px solid black">
            
                    <img src={{$comic->thumb}} class="h-100 image-fluid"  alt="..." >
                    
                    
                    <div class="card-body" >
                        
                        <h5 class="card-title" style="font-weight: 700; ">{{$comic->title}}</h5>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    </div>


                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span style="font-weight: 700">Prezzo:</span> {{$comic->price}}.00$
                        </li>
                        <li class="list-group-item">
                            <span style="font-weight: 700">Serie:</span> {{$comic->series}}
                        </li>
                        <li class="list-group-item">
                            <span style="font-weight: 700">Data di vendita:</span> {{$comic->sale_date}}
                        </li>
                        <li class="list-group-item">
                            <span style="font-weight: 700">Tipologia:</span> {{$comic->type}}
                        </li>
                    </ul>

                    <div class="card-body">
                        <button type="button" class="btn btn-primary">
                            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="card-link text-decoration-none text-light" style="font-weight: 700;">Descrizione</a>
                        </button>
                        <button type="button" class="btn btn-secondary">
                            <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="card-link text-decoration-none text-light" style="font-weight: 700;">Edit</a>
                        </button>
                        <form class="d-inline-block" method="POST" action="{{ route('comics.destroy', ['comic' => $comic->id]) }}">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
       
    </div>
    
    <div class="px-4 d-flex flex-column justify-content-start" style=" font-size:20px; font-weight: 700">
        {{ $comics->links() }}
    </div>
@endsection
