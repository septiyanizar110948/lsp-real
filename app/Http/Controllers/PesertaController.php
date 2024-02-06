<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesertas = Peserta::all(); // Fetch all Peserta data
        return view('peserta.index', compact('pesertas')); // Pass $pesertas to the view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peserta = Peserta::all();
        return view('peserta.create', compact('peserta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'nama' => 'required',
            'tema_pelatihan' => 'required',
            'nilai_sertifikat' => 'required', // Validate the nilai_sertifikat field
        ]);

        $no = str_pad(rand(1, 9999999), 7, '0', STR_PAD_LEFT);

        Peserta::create([
            'no_sertifik' => $no,
            'nama' => $request->nama,
            'tema_pelatihan' => $request->tema_pelatihan,
            'nilai_sertifikat' => $request->nilai_sertifikat, // Save nilai_sertifikat to database
        ]);

        return redirect()->route('peserta.index')->with('success', 'Peserta created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $peserta = Peserta::findOrFail($id);
        return view('peserta.show', compact('peserta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $peserta = Peserta::findOrFail($id);
        return view('peserta.edit', compact('peserta'));
    }

/**
 * Update the specified resource in storage.
 */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'tema_pelatihan' => 'required',
        ]);

        $peserta = Peserta::findOrFail($id);

        $peserta->update([
            'nama' => $request->nama,
            'tema_pelatihan' => $request->tema_pelatihan,
        ]);

        return redirect()->route('peserta.index')->with('success', 'Peserta updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */public function destroy(string $id)
{
    $peserta = Peserta::findOrFail($id);

    $peserta->forceDelete();

    // If you want to permanently delete the record, you can use the forceDelete method:
    // $peserta->forceDelete();

    return redirect()->route('peserta.index')->with('success', 'Peserta deleted successfully');
}
}
