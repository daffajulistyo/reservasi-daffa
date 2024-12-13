@extends('layout')

@section('content')
    <h1 class="text-center">Edit Hotel</h1>
    <form action="{{ route('hotel.update', $hotel) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nama Hotel</label>
            <input type="text" name="nama_hotel" class="form-control" value="{{ $hotel->nama_hotel }}" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="{{ $hotel->alamat }}" required>
        </div>
        <div class="form-group">
            <label>Telepon</label>
            <input type="text" name="telepon" class="form-control" value="{{ $hotel->telepon }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('hotel.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
