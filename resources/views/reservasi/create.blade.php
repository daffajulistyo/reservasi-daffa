@extends('layout')

@section('content')
    <h1 class="text-center">Tambah Reservasi</h1>
    <form action="{{ route('reservasi.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Pilih Kamar</label>
            <select name="id_kamar" class="form-control" required>
                <option value="">Pilih Kamar</option>
                @foreach($kamars as $kamar)
                    <option value="{{ $kamar->id }}">{{ $kamar->tipe_kamar }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tanggal Check-in</label>
            <input type="date" name="tanggal_checkin" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tanggal Check-out</label>
            <input type="date" name="tanggal_checkout" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Total Biaya</label>
            <input type="number" name="total_biaya" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('reservasi.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
