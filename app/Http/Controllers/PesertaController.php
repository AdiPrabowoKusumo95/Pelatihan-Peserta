<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Gelombang;
use Illuminate\Http\Request;
use App\Models\Peserta_pelatihan;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Peserta_pelatihan::with('jurusan','gelombang')->get();
        return view('peserta.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jurusans = Jurusan::get();
        $gelombang = Gelombang::get()->where('aktif',1)->last();
        return view ('peserta.create', compact('jurusans', 'gelombang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Peserta_pelatihan::create($request->all());
        return redirect()->to('peserta');
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
        $edit = Peserta_pelatihan::find($id);
        $jurusans = Jurusan::get();
        $gelombang = Gelombang::get()->where('aktif',1)->last();
        return view ('peserta.edit', compact('edit','jurusans','gelombang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Peserta_pelatihan::where('id', $id)->update([
            'nama_lengkap'=>$request->nama_lengkap,
            'status'=>$request->status
        ]);
        return redirect()->to('peserta');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Peserta_pelatihan::where('id', $id)->delete();
        return redirect()->to('peserta');
    }
}
