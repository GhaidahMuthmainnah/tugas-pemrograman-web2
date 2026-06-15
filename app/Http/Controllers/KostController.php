<?php

namespace App\Http\Controllers;

use App\Models\kost;
use Illuminate\Http\Request;


class KostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kost.index', [
            'title' => 'Data Kost',
            'kosts' => Kost::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kost.create', [
            'title' => 'Tambah Data Kost',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kost' => 'required',
            'pemilik' => 'required',
            'alamat' => 'required',
            'harga_per_bulan' => 'required|numeric',
            'jumlah_kamar' => 'required|numeric',
            'status' => 'required',
        ]);

        Kost::create($validated);

        return redirect()->route('kost.index')->with('success', 'Data kost berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(kost $kost) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kost $kost)
    {
        return view('kost.edit', [
            'title' => 'Edit Data Kost',
            'kost' => $kost,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kost $kost)
    {
        $validated = $request->validate([
            'nama_kost' => 'required',
            'pemilik' => 'required',
            'alamat' => 'required',
            'harga_per_bulan' => 'required|numeric',
            'jumlah_kamar' => 'required|numeric',
            'status' => 'required',
        ]);

        $kost->update($validated);

        return redirect()
            ->route('kost.index')
            ->with(
                'success',
                'Data kost berhasil diubah.'
            );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kost $kost) {}
}
