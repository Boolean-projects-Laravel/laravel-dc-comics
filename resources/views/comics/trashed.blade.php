@extends('layouts.base')

@section('contents')
<div class="bg-dark text-light py-2 mb-3">
    <h1 class="ms-4" style="font-weight: 700">Cestino</h1>
</div>

@if (session('delete_success'))
    @php $comic = session('delete_success') @endphp
    <div class="alert alert-danger">
        Il comic "{{ $comic->title }}" è stato eliminato definitivamente
    </div>
@endif

<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Tipo</th>
                <th scope="col">Data di vendita</th>
                <th scope="col">Tipologia</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($trashedComics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        <form
                            action="{{ route('comics.restore', ['comic' => $comic->id]) }}"
                            method="post"
                            class="d-inline-block"
                        >
                            @csrf
                            <button class="btn btn-success">Ripristina</button>
                        </form>
                        <form
                            action="{{ route('comics.harddelete', ['comic' => $comic->id]) }}"
                            method="post"
                            class="d-inline-block"
                        >
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger button_delete">
                                Elimina definitivamente
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



{{ $trashedComics->links() }}
@endsection