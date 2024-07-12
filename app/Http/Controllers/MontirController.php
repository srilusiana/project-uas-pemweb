<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Montir;

class MontirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $montirs = Montir::all();
        return view('admin.montir.index', compact('montirs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.montir.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi form input
        $validated = $request->validate([
            'nomor' => 'required|string',
            'nama' => 'required|string',
            'gender' => 'required|string',
            'tgl_lahir' => 'required|date',
            'tmp_lahir' => 'required|string',
            'keahlian' => 'required|string',
        ]);

        Montir::create($validated);

        return redirect('dashboard/montir')->with('pesan', 'Data Berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $montir = Montir::find($id);
        return view('admin.montir.show', compact('montir'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $montir = Montir::find($id);
        return view('admin.montir.edit', compact('montir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validasi form update
        $validated = $request->validate([
            'nomor' => 'required|string',
            'nama' => 'required|string',
            'gender' => 'required|string',
            'tgl_lahir' => 'required|date',
            'tmp_lahir' => 'required|string',
            'keahlian' => 'required|string',
        ]);

        $montir = Montir::find($id);
        $montir->update($validated);

        return redirect('dashboard/montir')->with('pesan', 'Data Berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $montir = Montir::find($id);
        $montir->delete();

        return redirect('dashboard/montir')->with('pesan', 'Data Berhasil di Hapus');
    }
}
