@extends('layouts.base')

@section('contents')
    

<h1>{{ $comic->title }}</h1>
<h2>Tipo: {{ $comic->type }}</h2>

<div style="height: 500px">
    <img class="h-100 image-fluid" src="{{ $comic->thumb }}" alt="">
</div>


<p>{!! $comic->description !!}</p>

@endsection