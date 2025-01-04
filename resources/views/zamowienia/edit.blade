
@extends('layouts.app')

@section('content')
<h1>Edytuj zamówienie</h1>
<form action="{{ route('zamowienia.update', $zamowienie->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="klient_id">Klient</label>
        <select name="klient_id" id="klient_id" class="form-control">
            @foreach($klienci as $klient)
            <option value="{{ $klient->id }}" {{ $zamowienie->klient_id == $klient->id ? 'selected' : '' }}>
                {{ $klient->nazwa_uzytkownika }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="data_zamowienia">Data zamówienia</label>
        <input type="date" name="data_zamowienia" id="data_zamowienia" class="form-control" 
               value="{{ $zamowienie->data_zamowienia }}" required>
    </div>
    <div class="form-group">
        <label for="cena_calkowita">Cena całkowita</label>
        <input type="number" step="0.01" name="cena_calkowita" id="cena_calkowita" class="form-control" 
               value="{{ $zamowienie->cena_calkowita }}" required>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" id="status" class="form-control">
            <option value="oczekujące" {{ $zamowienie->status == 'oczekujące' ? 'selected' : '' }}>Oczekujące</option>
            <option value="zrealizowane" {{ $zamowienie->status == 'zrealizowane' ? 'selected' : '' }}>Zrealizowane</option>
        </select>
    </div>
    <div class="form-group">
        <label for="status_platnosci">Status płatności</label>
        <select name="status_platnosci" id="status_platnosci" class="form-control">
            <option value="oczekująca" {{ $zamowienie->status_platnosci == 'oczekująca' ? 'selected' : '' }}>Oczekująca</option>
            <option value="zapłacona" {{ $zamowienie->status_platnosci == 'zapłacona' ? 'selected' : '' }}>Zapłacona</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
    <a href="{{ route('zamowienia.index') }}" class="btn btn-secondary">Anuluj</a>
</form>
@endsection
