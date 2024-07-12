<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;


class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanans = Layanan::all();
        return view('admin.layanan.index', compact('layanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'total_biaya' => 'required|integer',
            'rating' => 'required|integer'
        ]);

        Layanan::create($validated);

        return redirect('dashboard/layanan')->with('pesan', 'Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $layanan = Layanan::find($id);
        return view('admin.layanan.show', compact('layanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $layanan = Layanan::find($id);
        return view('admin.layanan.edit', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validasi form update
        $validated = $request->validate([
            'kode' => 'required|string',
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'total_biaya' => 'required|integer',
            'rating' => 'required|integer'
        ]);

        $layanan = Layanan::find($id);
        $layanan->update($validated);

        return redirect('dashboard/layanan')->with('pesan', 'Data Berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $layanan = Layanan::find($id);
        $layanan->delete();

        return redirect('dashboard/layanan')->with('pesan', 'Data Berhasil di Hapus');
    }
}
