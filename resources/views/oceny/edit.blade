@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edytuj ocenę psa</h1>

    <form action="{{ route('oceny.update', $ocena->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="pies_id">Pies</label>
            <select name="pies_id" id="pies_id" class="form-control" required>
                @foreach($psy as $pies)
                    <option value="{{ $pies->id }}" {{ $ocena->pies_id == $pies->id ? 'selected' : '' }}>
                        {{ $pies->nazwa }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="wystawa_id">Wystawa</label>
            <select name="wystawa_id" id="wystawa_id" class="form-control" required>
                @foreach($wystawy as $wystawa)
                    <option value="{{ $wystawa->id }}" {{ $ocena->wystawa_id == $wystawa->id ? 'selected' : '' }}>
                        {{ $wystawa->nazwa }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="sedzia_id">Sędzia</label>
            <select name="sedzia_id" id="sedzia_id" class="form-control" required>
                @foreach($sedziowie as $sedzia)
                    <option value="{{ $sedzia->id }}" {{ $ocena->sedzia_id == $sedzia->id ? 'selected' : '' }}>
                        {{ $sedzia->nazwa_uzytkownika }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="ocena">Ocena</label>
            <input type="number" name="ocena" id="ocena" class="form-control" value="{{ $ocena->ocena }}" min="1" max="10" required>
        </div>

        <div class="form-group">
            <label for="komentarze">Komentarze</label>
            <textarea name="komentarze" id="komentarze" class="form-control">{{ $ocena->komentarze }}</textarea>
        </div>

        <button type="submit" class="btn btn-warning">Zaktualizuj</button>
    </form>
</div>
@endsection
