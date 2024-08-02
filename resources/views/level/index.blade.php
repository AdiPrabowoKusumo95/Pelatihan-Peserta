@extends('layouts2.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Pengguna</h5>
                    <!-- Table with stripped rows -->
                    <a href="{{ route('level.create') }}" type="button" class="btn btn-outline-primary">Tambah</a>
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Level</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->nama_level }}</td>
                                    <td>
                                        <a href="{{ route('level.edit', $data->id) }}" type="button" class="btn btn-outline-primary">Ubah</a>

                                        <form action="{{ route('level.destroy', $data->id) }}" method="POST">
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
