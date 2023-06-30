@extends('layouts.base')

@section('contents')
    <div class="row row-cols-4 p-4">
        
        @foreach ($comics as $comic)
            <div class="col mb-3">
                <div class="card h-100" style="border:3px solid black">
            
                    <img src={{$comic->thumb}} class="h-100 image-fluid"  alt="..." >
                    
                    
                    <div class="card-body" >
                    <h6 class="card-title">{{$comic->title}}</h6>
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                    </div>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><span style="font-weight: 700">Prezzo:</span> {{$comic->price}}.00$</li>
                    <li class="list-group-item"><span style="font-weight: 700">Serie:</span> {{$comic->series}}</li>
                    <li class="list-group-item"><span style="font-weight: 700">Data di vendita:</span> {{$comic->sale_date}}</li>
                    <li class="list-group-item"><span style="font-weight: 700">Tipologia:</span> {{$comic->type}}</li>
                    </ul>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary"><a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="card-link text-decoration-none text-light" style="font-weight: 700;">Descrizione</a></button>
                        <button type="button" class="btn btn-secondary"><a href="" class="card-link text-decoration-none text-light" style="font-weight: 700;">Altro</a></button>
                  
                    </div>
                </div>
            </div>
            

        @endforeach
    </div>
    
    

@endsection