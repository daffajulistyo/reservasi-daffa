@extends('layout')

@section('content')
    <h1 class="text-center">Edit Kamar</h1>
    <form action="{{ route('kamar.update', $kamar) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Pilih Hotel</label>
            <select name="id_hotel" class="form-control" required>
                @foreach($hotels as $hotel)
                    <option value="{{ $hotel->id }}" {{ $kamar->id_hotel == $hotel->id ? 'selected' : '' }}>{{ $hotel->nama_hotel }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Tipe Kamar</label>
            <input type="text" name="tipe_kamar" class="form-control" value="{{ $kamar->tipe_kamar }}" required>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" value="{{ $kamar->harga }}" required>
        </div>
        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control" required>
                <option value="Tersedia" {{ $kamar->status == 'Tersedia' ? 'selected' : '' }}>Tersedia</option>
                <option value="Dipesan" {{ $kamar->status == 'Dipesan' ? 'selected' : '' }}>Dipesan</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('kamar.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
