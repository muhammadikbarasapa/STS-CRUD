<!-- @extends('layouts.index')

@section('content')
<h2>Daftar Pendaftaran Pemain</h2>
<a href="{{ route('pendaftaran.create') }}" class="btn btn-primary">Tambah Pendaftaran</a>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>Nama Pemain</th>
            <th>Umur</th>
            <th>Kategori</th>
            <th>Tanggal Pendaftaran</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pendaftarans as $pendaftaran)
        <tr>
            <td>{{ $pendaftaran->nama_pemain }}</td>
            <td>{{ $pendaftaran->umur }}</td>
            <td>{{ $pendaftaran->kategori }}</td>
            <td>{{ $pendaftaran->tanggal_pendaftaran }}</td>
            <td>
                <a href="{{ route('pendaftaran.show', $pendaftaran->id) }}" class="btn btn-info">Detail</a>
                <a href="{{ route('pendaftaran.edit', $pendaftaran->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('pendaftaran.destroy', $pendaftaran->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection -->
