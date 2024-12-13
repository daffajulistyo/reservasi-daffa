@extends('layout')

@section('content')
    <h1 class="text-center">Data Kamar</h1>
    <a href="{{ route('kamar.create') }}" class="btn btn-primary">Tambah Kamar</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Hotel</th>
                <th>Tipe Kamar</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kamars as $kamar)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kamar->hotel->nama_hotel ?? '-'}}</td>
                    <td>{{ $kamar->tipe_kamar }}</td>
                    <td>Rp {{ number_format($kamar->harga, 2, ',', '.') }}</td>
                    <td>{{ $kamar->status }}</td>
                    <td>
                        <a href="{{ route('kamar.edit', $kamar) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('kamar.destroy', $kamar) }}" method="POST" style="display:inline;">
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
