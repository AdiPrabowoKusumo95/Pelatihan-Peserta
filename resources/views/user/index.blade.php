@extends('layouts2.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Pengguna</h5>
                    <!-- Table with stripped rows -->
                    <a href="{{ route('user.create') }}" type="button" class="btn btn-primary">Tambah</a>
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto Profil</th>
                                <th>Nama Pengguna</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                {{-- @dd($datas) --}}
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($data->foto_profil && file_exists(public_path('foto-profil/' . $data->foto_profil)))
                                            <img id="i" src="{{ asset('foto-profil/' . $data->foto_profil) }}"
                                                width="100px">
                                        @else
                                            Tidak Unggah Foto Profil
                                        @endif
                                    </td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->nama_level }}</td>
                                    <td>
                                        <a href="{{ route('user.edit', $data->id) }}" type="button"
                                            class="btn btn-outline-primary">Ubah</a>

                                        <form action="{{ route('user.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-outline-primary">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->
                </div>
            </div>

        </div>
    </div>
@endsection


