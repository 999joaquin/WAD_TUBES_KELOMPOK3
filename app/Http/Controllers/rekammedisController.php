<?php

namespace App\Http\Controllers;

use App\Models\Rekammedis;
use Illuminate\Http\Request;

class RekammedisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rekammedis = Rekammedis::all();
        return view('rekammedis.index', compact('rekammedis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rekammedis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'namaPasien' => 'required',
            'umur' => 'required|numeric',
            'tglRekamMedis' => 'required|date',
            'diagnosis' => 'required',
            'catatan' => 'required'
        ]);

        // Simpan rekam medis ke database
        Rekammedis::create([
            'namaPasien' => $request->namaPasien,
            'umur' => $request->umur,
            'tglRekamMedis' => $request->tglRekamMedis,
            'diagnosis' => $request->diagnosis,
            'catatan' => $request->catatan
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('rekammedis.index')->with('success', 'Rekam medis berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */

    public function show($id)
    {
        $rekammedis = Rekammedis::findOrFail($id);
        return view('rekammedis.show', compact('rekammedis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $patient = Rekammedis::findOrFail($id);
        return view('rekammedis.edit', compact('rekammedis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rekammedis $telyucare_db)
    {
        // Validasi input
        $telyucare_db->validate([
            'namaPasien' => 'required',
            'umur' => 'required|numeric',
            'tglRekamMedis' => 'required|date',
            'diagnosis' => 'required',
            'catatan' => 'required',
        ]);

        // Update rekam medis di database
        $telyucare_db->update([
            'namaPasien' => $request->namaPasien,
            'umur' => $request->umur,
            'tglRekamMedis' => $request->tglRekamMedis,
            'diagnosis' => $request->diagnosis,
            'catatan' => $request->catatan,
        ]);

        // Redirect dengan pesan sukses
        Rekammedis::whereId($id)->update($request);
        return redirect()->route('rekammedis.index')->with('success', 'Rekam medis berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rekammedis $telyucare_db)
    {
        // Hapus rekam medis dari database
        $telyucare_db->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('rekammedis.index')->with('success', 'Rekam medis berhasil dihapus');
    }
}
