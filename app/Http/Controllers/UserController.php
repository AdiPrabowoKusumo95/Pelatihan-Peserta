<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $datas = DB::table('users')
        ->join('levels', 'users.id_level', '=', 'levels.id')
        ->select('users.*', 'levels.nama_level')
        ->get()->where('deleted_at', NULL);

    return view('user.index', compact('datas'));
    }

    public function create()
    {
        $levels = Level::all();
        return view('user.create', compact('levels'));
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'id_level' => 'required',
        'foto_profil' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $userData = $request->all();

    if ($request->hasFile('foto_profil')) {
        $file = $request->file('foto_profil');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('foto-profil'), $filename);
        $userData['foto_profil'] = 'foto-profil/' . $filename;
    }

    $userData['password'] = bcrypt($request->password); // Enkripsi password

    User::create($userData);
    return redirect()->to('user')->with('success', 'User created successfully.');
}


    public function show(string $id)
    {
        $user = User::with('level')->findOrFail($id);
        return view('user.show', compact('user'));
    }

    public function edit(string $id)
    {
        $edit = User::findOrFail($id);
        $levels = Level::all();
        return view('user.edit', compact('edit', 'levels'));
    }

    public function update(Request $request, string $id)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users,email,' . $id,
        'id_level' => 'required',
        'foto_profil' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $user = User::findOrFail($id);
    $userData = $request->all();

    if ($request->hasFile('foto_profil')) {
        // Hapus foto lama jika ada
        if ($user->foto_profil && file_exists(public_path($user->foto_profil))) {
            unlink(public_path($user->foto_profil));
        }

        $file = $request->file('foto_profil');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('foto-profil'), $filename);
        $userData['foto_profil'] = 'foto-profil/' . $filename;
    }

    if ($request->filled('password')) {
        $userData['password'] = bcrypt($request->password); // Enkripsi password
    } else {
        unset($userData['password']); // Jangan update password jika tidak diisi
    }

    $user->update($userData);
    return redirect()->to('user')->with('success', 'User updated successfully.');
}


public function destroy(string $id)
{
    $user = User::findOrFail($id);

    // Hapus foto jika ada
    if ($user->foto_profil && file_exists(public_path($user->foto_profil))) {
        unlink(public_path($user->foto_profil));
    }

    $user->delete();
    return redirect()->to('user')->with('success', 'User deleted successfully.');
}

}

