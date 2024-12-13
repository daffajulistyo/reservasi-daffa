@extends('layout')

@section('content')
    <h1 class="text-center">Tambah Kamar</h1>
    <form action="{{ route('kamar.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Pilih Hotel</label>
            <select name="id_hotel" class="form-control" required>
                <option value="">Pilih Hotel</option>
                @foreach($hotels as $hotel)
                    <option value="{{ $hotel->id }}">{{ $hotel->nama_hotel }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Tipe Kamar</label>
            <input type="text" name="tipe_kamar" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control" required>
                <option value="Tersedia">Tersedia</option>
                <option value="Dipesan">Dipesan</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('kamar.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
