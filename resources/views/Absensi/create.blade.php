@extends('layouts.index')

@section('content')
<div class="container mt-5">
    <div class="card p-5">
        <h2 class="card-title">Formulir Absensi Badminton</h2>
        <form action="{{ route('Absen.store') }}" method="POST">
            @csrf

            {{-- Success message --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>

            @endif

            {{-- Error handling --}}
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            {{-- Nama Pemain --}}
            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Nama Pemain:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="nama_pemain"
                        placeholder="Masukkan nama pemain" required>
                </div>
            </div>

            {{-- Status Kehadiran --}}
            <div class="mb-3 row">
                <label for="attendance_status" class="col-sm-2 col-form-label">Status Kehadiran:</label>
                <div class="col-sm-10">
                    <select class="form-select" id="attendance_status" name="attendance_status" required>
                        <option selected disabled hidden>Pilih status kehadiran</option>
                        <option value="hadir">Hadir</option>
                        <option value="sakit">Sakit</option>
                        <option value="tidak_hadir">Tidak Hadir</option>
                    </select>
                </div>
            </div>

            {{-- Tanggal --}}
            <div class="mb-3 row">
                <label for="date" class="col-sm-2 col-form-label">Tanggal:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
            </div>

            {{-- Waktu Kehadiran --}}
            <div class="mb-3 row">
                <label for="time" class="col-sm-2 col-form-label">Waktu Kehadiran:</label>
                <div class="col-sm-10">
                    <input type="time" class="form-control" id="time" name="time" required>
                </div>
            </div>

            {{-- Button Simpan --}}
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Simpan Absensi</button>
            </div>
        </form>
    </div>
</div>
@endsection