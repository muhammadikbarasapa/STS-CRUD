@extends('layouts.index')

@section('content')

<form action="{{ route('Absen.update', $Absen->id) }}" method="POST" class="card p-5">
    @csrf
    @method('PATCH')

    @if ($errors->any())
        <ul class="alert alert-danger p-3">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Nama Peralatan:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" value="{{ $Absen->name }}">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="type" class="col-sm-2 col-form-label">Jenis Peralatan:</label>
        <div class="col-sm-10">
            <select class="form-select" id="type" name="type">
                <option selected disabled hidden>Pilih</option>
                <option value="raket" {{ $Absen->type == 'raket' ? 'selected' : '' }}>Raket</option>
                <option value="shuttlecock" {{ $Absen->type == 'shuttlecock' ? 'selected' : '' }}>Shuttlecock</option>
                <option value="tas" {{ $Absen->type == 'tas' ? 'selected' : '' }}>Tas</option>
                <option value="sepatu" {{ $Absen->type == 'sepatu' ? 'selected' : '' }}>Sepatu</option>
            </select>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="brand" class="col-sm-2 col-form-label">Merek:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="brand" name="brand" value="{{ $Absen->brand }}">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="price" class="col-sm-2 col-form-label">Harga:</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="price" name="price" value="{{ $Absen->price }}">
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Ubah Data</button>
</form>
@endsection