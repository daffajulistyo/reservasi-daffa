@extends('layout')

@section('content')
    <h1 class="text-center">Edit Reservasi</h1>
    <form action="{{ route('reservasi.update', $reservasi) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Pilih Kamar</label>
            <select name="id_kamar" class="form-control" required>
                @foreach($kamars as $kamar)
                    <option value="{{ $kamar->id }}" {{ $reservasi->id_kamar == $kamar->id ? 'selected' : '' }}>{{ $kamar->tipe_kamar }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" class="form-control" value="{{ $reservasi->nama_pelanggan }}" required>
        </div>
        <div class="form-group">
            <label>Tanggal Check-in</label>
            <input type="date" name="tanggal_checkin" class="form-control" value="{{ $reservasi->tanggal_checkin }}" required>
        </div>
        <div class="form-group">
            <label>Tanggal Check-out</label>
            <input type="date" name="tanggal_checkout" class="form-control" value="{{ $reservasi->tanggal_checkout }}" required>
        </div>
        <div class="form-group">
            <label>Total Biaya</label>
            <input type="number" name="total_biaya" class="form-control" value="{{ $reservasi->total_biaya }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('reservasi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
