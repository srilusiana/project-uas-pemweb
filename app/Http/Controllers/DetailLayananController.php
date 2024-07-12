<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailLayanan;

class DetailLayananController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $detail_layanans = DetailLayanan::all();
        return view('admin.detail_layanan.index', compact('detail_layanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.detail_layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'pekerjaan' => 'required|string',
            'biaya' => 'required|int'
        ]);

        DetailLayanan::create($validated);

        return redirect('dashboard/detail_layanan')->with('pesan', 'Data Berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detail_layanan = DetailLayanan::find($id);
        return view('admin.detail_layanan.show', compact('detail_layanan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $detail_layanan = DetailLayanan::find($id);
        return view('admin.detail_layanan.edit', compact('detail_layanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validasi form update
        $validated = $request->validate([
            'pekerjaan' => 'required|string',
            'biaya' => 'required|int'
        ]);

        $detail_layanan = DetailLayanan::find($id);
        $detail_layanan->update($validated);

        return redirect('dashboard/detail_layanan')->with('pesan', 'Data Berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detail_layanan = DetailLayanan::find($id);
        $detail_layanan->delete();

        return redirect('dashboard/detail_layanan')->with('pesan', 'Data Berhasil di Hapus');
    }
}
