<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index()
    {
        $reservasis = Reservasi::with('kamar')->get();
        return view('reservasi.index', compact('reservasis'));
    }

    public function create()
    {
        $kamars = Kamar::all();
        return view('reservasi.create', compact('kamars'));
    }

    public function store(Request $request)
    {
        Reservasi::create($request->all());
        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil ditambahkan!');
    }

    public function edit(Reservasi $reservasi)
    {
        $kamars = Kamar::all();
        return view('reservasi.edit', compact('reservasi', 'kamars'));
    }

    public function update(Request $request, Reservasi $reservasi)
    {
        $reservasi->update($request->all());
        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil diperbarui!');
    }

    public function destroy(Reservasi $reservasi)
    {
        $reservasi->delete();
        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil dihapus!');
    }

}
