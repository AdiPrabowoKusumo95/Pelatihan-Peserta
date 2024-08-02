<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use App\Models\Jurusan;
use App\Models\Pendaftaran;
use App\Models\Peserta_pelatihan;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusans = Jurusan::get();
        $gelombang = Gelombang::get()->where('aktif',1)->last();
        return view('daftar-peserta', compact('jurusans', 'gelombang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'id_jurusan' => 'required',
            'id_gelombang' => 'required',
            'nama_lengkap' => 'required|string|max:255',
            'nik' => 'required|string|max:16',
            'kartu_keluarga' => 'required|string|max:16',
            'jenis_kelamin' => 'required|string|max:10',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'pendidikan_terakhir' => 'required|string|max:255',
            'nama_sekolah' => 'required|string|max:255',
            'kejuruan' => 'required|string|max:255',
            'nomor_hp' => 'required|string|max:15',
            'email' => 'required|string|email|max:255',
            'aktivitas_saat_ini' => 'required|string|max:255',
            'status' => 'required'
        ]);

        // Simpan data ke dalam database
        Peserta_pelatihan::create($validatedData);

        // Redirect ke halaman 'welcome' dengan pesan sukses
        return redirect()->to('daftar-peserta')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

