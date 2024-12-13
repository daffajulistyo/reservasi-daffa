<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    public function index()
    {
        $kamars = Kamar::with('hotel')->get(); // Pastikan Anda menggunakan with untuk eager loading
        return view('kamar.index', compact('kamars'));
    }


    public function create()
    {
        $hotels = Hotel::all();
        return view('kamar.create', compact('hotels'));
    }

    public function store(Request $request)
    {
        Kamar::create($request->all());
        return redirect()->route('kamar.index')->with('success', 'Kamar berhasil ditambahkan!');
    }

    public function edit(Kamar $kamar)
    {
        $hotels = Hotel::all();
        return view('kamar.edit', compact('kamar', 'hotels'));
    }

    public function update(Request $request, Kamar $kamar)
    {
        $kamar->update($request->all());
        return redirect()->route('kamar.index')->with('success', 'Kamar berhasil diperbarui!');
    }

    public function destroy(Kamar $kamar)
    {
        $kamar->delete();
        return redirect()->route('kamar.index')->with('success', 'Kamar berhasil dihapus!');
    }
}
