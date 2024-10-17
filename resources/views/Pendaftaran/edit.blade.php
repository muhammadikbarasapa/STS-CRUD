<!-- @extends('layouts.app')

@section('content')
<h2>Edit Pendaftaran Pemain</h2>

<form action="{{ route('pendaftaran.update', $pendaftaran->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Nama Pemain:</label>
        <input type="text" name="nama_pemain" class="form-control" value="{{ $pendaftaran->nama_pemain }}" required>
    </div>
    <div class="form-group">
        <label>Umur:</label>
        <input type="number" name="umur" class="form-control" value="{{ $pendaftaran->umur }}" required>
    </div>
    <div class="form-group">
        <label>Kategori:</label>
        <select name="kategori" class="form-control" required>
            <option value="Junior" {{ $pendaftaran->kategori == 'Junior' ? 'selected' : '' }}>Junior</option>
            <option value="Senior" {{ $pendaftaran->kategori == 'Senior' ? 'selected' : '' }}>Senior</option>
        </select>
    </div>
    <div class="form-group">
        <label>Tanggal Pendaftaran:</label>
        <input type="date" name="tanggal_pendaftaran" class="form-control" value="{{ $pendaftaran->tanggal_pendaftaran }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Perbarui</button>
</form>
@endsection -->
