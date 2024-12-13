@extends('layout')

@section('content')
    <h1 class="text-center">Data Reservasi</h1>
    <a href="{{ route('reservasi.create') }}" class="btn btn-primary">Tambah Reservasi</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Kamar</th>
                <th>Nama Pelanggan</th>
                <th>Tanggal Check-in</th>
                <th>Tanggal Check-out</th>
                <th>Total Biaya</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservasis as $index => $reservasi)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $reservasi->kamar->tipe_kamar }}</td>
                    <td>{{ $reservasi->nama_pelanggan }}</td>
                    <td>{{ $reservasi->tanggal_checkin }}</td>
                    <td>{{ $reservasi->tanggal_checkout }}</td>
                    <td>Rp {{ number_format($reservasi->total_biaya, 2, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('reservasi.edit', $reservasi) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('reservasi.destroy', $reservasi) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
