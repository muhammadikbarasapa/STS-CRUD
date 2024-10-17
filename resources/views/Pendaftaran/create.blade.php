<!-- @extends('layouts.index')

@section('content')
<h2>Tambah Pendaftaran Pemain</h2>

<form action="{{ route('pendaftaran.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Nama Pemain:</label>
        <input type="text" name="nama_pemain" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Umur:</label>
        <input type="number" name="umur" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Kategori:</label>
        <select name="kategori" class="form-control" required>
            <option value="Junior">Junior</option>
            <option value="Senior">Senior</option>
        </select>
    </div>
    <div class="form-group">
        <label>Tanggal Pendaftaran:</label>
        <input type="date" name="tanggal_pendaftaran" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection -->
