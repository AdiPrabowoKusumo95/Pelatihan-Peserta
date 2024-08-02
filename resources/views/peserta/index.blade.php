@extends('layouts2.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Peserta</h5>
                    <!-- Table with stripped rows -->
                    <a href="{{ route('peserta.create') }}" type="button" class="btn btn-outline-primary">Tambah</a>
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Status</th>
                                <th>Nama Peserta</th>
                                <th>Gelombang</th>
                                <th>Jurusan yang Dipilih</th>
                                <th>Jenis Kelamin</th>
                                <th>NIK</th>
                                <th>Nomor HP</th>
                                <th>Email</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Pendidikan Terakhir</th>
                                <th>Nama Sekolah</th>
                                <th>Kejuruan</th>
                                <th>Aktivitas Saat Ini</th>
                                <th>Kartu Keluarga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @php
                                            if($data->status == 0){
                                                $statusnya = "Belum Ada Status";
                                            }else if($data->status == 1){
                                                $statusnya = "Lolos";
                                            }else{
                                                $statusnya = "Tidak Lolos";
                                            }
                                        @endphp
                                        {{ $statusnya }}</td>
                                    <td>{{ $data->nama_lengkap }}</td>
                                    <td>{{ $data->gelombang->nama_gelombang }}</td>
                                    <td>{{ $data->jurusan->nama_jurusan }}</td>
                                    <td>{{ $data->jenis_kelamin }}</td>
                                    <td>{{ $data->nik }}</td>
                                    <td>{{ $data->nomor_hp }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->tempat_lahir }}</td>
                                    <td>{{ $data->tanggal_lahir }}</td>
                                    <td>{{ $data->pendidikan_terakhir }}</td>
                                    <td>{{ $data->nama_sekolah }}</td>
                                    <td>{{ $data->kejuruan }}</td>
                                    <td>{{ $data->aktivitas_saat_ini }}</td>
                                    <td>{{ $data->kartu_keluarga }}</td>
                                    <td>
                                        <a href="{{ route('peserta.edit', $data->id) }}" type="button" class="btn btn-outline-primary">Ubah</a>

                                        <form action="{{ route('peserta.destroy', $data->id) }}" method="POST">
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
