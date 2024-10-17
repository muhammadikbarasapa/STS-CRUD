@extends('layouts.index')

@section('content')
@if (Session::get('success'))

    <div class="alert alert-success">{{Session::get('success')}} </div>
@endif
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Perserta</th>
            <th>keterangan</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @php $no = 1; @endphp
        @foreach ($Absen as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->nama_pemain }}</td>
                <td>{{ $item->attendance_status}}</td>
                <td>{{ $item->date }}</td>
                <td>{{ $item->time }}</td>
                <td class="d-flex justify-content-center">
                    <a href="{{ route('Absen.create', $item->id) }}" class="btn btn-primary me-3">Edit</a>
                    <form action="{{ route('Absen.destroy', $item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection