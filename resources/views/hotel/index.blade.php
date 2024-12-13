@extends('layout')

@section('content')
    <h1 class="text-center">Data Hotel</h1>
    <a href="{{ route('hotel.create') }}" class="btn btn-primary">Tambah Hotel</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Hotel</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hotels as $index => $hotel)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $hotel->nama_hotel }}</td>
                    <td>{{ $hotel->alamat }}</td>
                    <td>{{ $hotel->telepon }}</td>
                    <td>
                        <a href="{{ route('hotel.edit', $hotel) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('hotel.destroy', $hotel) }}" method="POST" style="display:inline;">
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
