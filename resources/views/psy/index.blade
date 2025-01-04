@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista psów</h1>
    <a href="{{ route('psy.create') }}" class="btn btn-primary mb-3">Dodaj psa</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nazwa</th>
                <th>Rasa</th>
                <th>Wiek</th>
                <th>Kolor</th>
                <th>Płeć</th>
                <th>Właściciel</th>
                <th>Kategoria</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($psy as $pies)
                <tr>
                    <td>{{ $pies->nazwa }}</td>
                    <td>{{ $pies->rasa }}</td>
                    <td>{{ $pies->wiek }}</td>
                    <td>{{ $pies->kolor }}</td>
                    <td>{{ $pies->plec == 'm' ? 'Męski' : 'Żeński' }}</td>
                    <td>{{ $uzytkownicy->find($pies->wlasciciel_id)->nazwa_uzytkownika }}</td>
                    <td>{{ $kategorie->find($pies->kategoria_id)->nazwa }}</td>
                    <td>
                        <a href="{{ route('psy.edit', $pies->id) }}" class="btn btn-warning">Edytuj</a>
                        <form action="{{ route('psy.destroy', $pies->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Usuń</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
