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
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     */
    public function show(kost $product) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kost $product) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kost $product) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kost $product) {}
}
