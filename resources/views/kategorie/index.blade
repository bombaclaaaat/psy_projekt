@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Kategorie</h1>
    <a href="{{ route('kategorie.create') }}" class="btn btn-primary mb-3">Dodaj kategorię</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nazwa</th>
                <th>Opis</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategorie as $kategoria)
                <tr>
                    <td>{{ $kategoria->id }}</td>
                    <td>{{ $kategoria->nazwa }}</td>
                    <td>{{ $kategoria->opis }}</td>
                    <td>
                        <a href="{{ route('kategorie.edit', $kategoria->id) }}" class="btn btn-warning btn-sm">Edytuj</a>
                        <form action="{{ route('kategorie.destroy', $kategoria->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Czy na pewno usunąć?')">Usuń</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection