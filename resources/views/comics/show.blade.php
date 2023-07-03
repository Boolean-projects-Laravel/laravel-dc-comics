@extends('layouts.base')

@section('contents')
<div class="bg-dark text-light py-2 mb-3">
    <h1 class="ms-4" style="font-weight: 700">Descrizione Card</h1>
</div>   

<div class="row row-col-4 p-4">
        
    <div class=" offset-4 col-4 mb-3" style="border-radius: 50%">
        <div class="card h-100 p-5" style="border:3px solid black">
            <h1 class="mb-4" style="font-weight: 700">{{ $comic->title }}</h1>
    
            <img src={{$comic->thumb}} class="h-100 image-fluid"  alt="..." >
            
            <div class="card-body" >
                
            {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
            </div>
            <ul class="list-group list-group-flush">
                <li>
                    <h2 class="px-3" style="font-weight: 700">Tipologia: {{ $comic->type }}</h2>
                </li>  
                <li class="list-group-item" style="font-size: 20px">
                    <p>{!! $comic->description !!}</p>
                </li>
            </ul>   
        </div>
    </div>
    
</div>


@endsection