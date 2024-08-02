<?php

namespace App\Http\Controllers;

use App\Models\Gelombang;
use Illuminate\Http\Request;

class GelombangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Gelombang::all();
        return view('gelombang.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('gelombang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gelombang::create($request->all());
        return redirect()->to('gelombang');
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
        $edit = Gelombang::find($id);
        return view ('gelombang.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Gelombang::where('id', $id)->update([
            'nama_gelombang'=>$request->nama_gelombang,
            'aktif'=>$request->aktif,
            // 'tidak_aktif'=>$request->tidak_aktif
        ]);
        return redirect()->to('gelombang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Gelombang::where('id', $id)->delete();
        return redirect()->to('gelombang');
    }
}
