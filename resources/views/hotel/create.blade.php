@extends('layout')

@section('content')
    <h1 class="text-center">Tambah Hotel</h1>
    <form action="{{ route('hotel.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama Hotel</label>
            <input type="text" name="nama_hotel" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Telepon</label>
            <input type="text" name="telepon" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('hotel.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
