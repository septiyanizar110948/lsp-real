<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sertifikat;

class SertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sertifikats = Sertifikat::all();
        return view('sertifikat.edit', compact('sertifikats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sertifikats = Sertifikat::all();
        return view('sertifikat.create', compact('sertifikats'));    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'company' => 'required|string',
            'kepsek' => 'required|string',
            'kaprok' => 'required|string',
            'tempat' => 'required|string',
            'tgl_sertifikat' => 'required|date',
            'gambar_kepsek' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gambar_kaprok' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Store each file individually

        $namaFileKepsek = $request->file('gambar_kepsek')->getClientOriginalName();
        $request->file('gambar_kepsek')->move(public_path('gambar'), $namaFileKepsek);

        $namaFileKaprok = $request->file('gambar_kaprok')->getClientOriginalName();
        $request->file('gambar_kaprok')->move(public_path('gambar'), $namaFileKaprok);

        // Save data to database
        $sertifikat = Sertifikat::create([
            'company' => $request->company,
            'kepsek' => $request->kepsek,
            'kaprok' => $request->kaprok,
            'tempat' => $request->tempat,
            'tgl_sertifikat' => $request->tgl_sertifikat,
            'gambar_kepsek' => 'gambar/' . $namaFileKepsek,
            'gambar_kaprok' => 'gambar/' . $namaFileKaprok,
        ]);

        return redirect()->route('peserta.index');
    }


    public function edit($id)
    {
        $sertifikat = Sertifikat::findOrFail($id);
        return view('sertifikat.edit', compact('sertifikat'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'company' => 'required|string',
            'kepsek' => 'required|string',
            'kaprok' => 'required|string',
            'tempat' => 'required|string',
            'tgl_sertifikat' => 'required|date',
            'gambar_kepsek' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'gambar_kaprok' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the sertifikat by ID
        $sertifikat = Sertifikat::findOrFail($id);

        // Update sertifikat data
        $sertifikat->company = $request->company;
        $sertifikat->kepsek = $request->kepsek;
        $sertifikat->kaprok = $request->kaprok;
        $sertifikat->tempat = $request->tempat;
        $sertifikat->tgl_sertifikat = $request->tgl_sertifikat;

        // Check if new kepsek image is uploaded
        if ($request->hasFile('gambar_kepsek')) {
            $namaFileKepsek = $request->file('gambar_kepsek')->getClientOriginalName();
            $request->file('gambar_kepsek')->move(public_path('gambar'), $namaFileKepsek);
            $sertifikat->gambar_kepsek = 'gambar/' . $namaFileKepsek;
        }

        // Check if new kaprok image is uploaded
        if ($request->hasFile('gambar_kaprok')) {
            $namaFileKaprok = $request->file('gambar_kaprok')->getClientOriginalName();
            $request->file('gambar_kaprok')->move(public_path('gambar'), $namaFileKaprok);
            $sertifikat->gambar_kaprok = 'gambar/' . $namaFileKaprok;
        }

        // Save updated sertifikat data
        $sertifikat->save();

        return redirect()->route('peserta.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sertifikat = Sertifikat::findOrFail($id);
        return view('sertifikat.show', compact('sertifikat'));
    }
}
