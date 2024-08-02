@extends('layouts2.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Vertical Form</h5>

            <!-- Vertical Form -->
            <form action="{{ route('peserta.update', $edit->id) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="inputNama" class="col-sm-2 col-form-label">Nama Lengkap Peserta</label>
                    <input value="{{$edit->nama_lengkap}}" type="text" class="form-control" name="nama_lengkap" id="inputNama">
                </div>
                <div class="form-group mb-3">
                    <label for="inputNik" class="col-sm-2 col-form-label">NIK</label>
                    <input value="{{$edit->nik}}" type="text" class="form-control" name="nik" id="inputNik">
                </div>
                <div class="form-group mb-3">
                    <label for="inputNoKk" class="col-sm-2 col-form-label">No Kartu Keluarga</label>
                    <input value="{{$edit->kartu_keluarga}}" type="text" class="form-control" name="kartu_keluarga" id="inputNoKk">
                </div>
                <div class="form-group mb-3">
                    <label for="inputJnisKlmin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <input value="{{$edit->jenis_kelamin}}" type="text" class="form-control" name="jenis_kelamin" id="inputJnisKlmin">
                </div>
                <div class="form-group mb-3">
                    <label for="inputTL" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <input value="{{$edit->tempat_lahir}}" type="text" class="form-control" name="tempat_lahir" id="inputTL">
                </div>
                <div class="form-group mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <input value="{{$edit->tanggal_lahir}}" type="date" class="form-control" name="tanggal_lahir" id="inputDate">
                </div>
                <div class="form-group mb-3">
                    <label for="id_jurusan" class="col-form-label">Jurusan</label>
                    <select name="id_jurusan" class="form-control" id="id_jurusan">
                        <option selected disabled>Pilih Jurusan</option>
                        @foreach ($jurusans as $jurusan)
                            <option value="{{ $jurusan->id }}">{{ $jurusan->nama_jurusan }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="inputPnddknTrkhr" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                    <input value="{{$edit->pendidikan_terakhir}}" type="text" class="form-control" name="pendidikan_terakhir" id="inputPnddknTrkhr">
                </div>
                <div class="form-group mb-3">
                    <label for="inputNmSklh" class="col-sm-2 col-form-label">Nama Sekolah</label>
                    <input value="{{$edit->nama_sekolah}}" type="text" class="form-control" name="nama_sekolah" id="inputNmSklh">
                </div>
                <div class="form-group mb-3">
                    <label for="inputKjrn" class="col-sm-2 col-form-label">Kejuruan</label>
                    <input value="{{$edit->kejuruan}}" type="text" class="form-control" name="kejuruan" id="inputKjrn">
                </div>
                <div class="form-group mb-3">
                    <label for="inputNoHp" class="col-sm-2 col-form-label">Nomor HP</label>
                    <input value="{{$edit->nomor_hp}}" type="text" class="form-control" name="nomor_hp" id="inputNoHp">
                </div>
                <div class="form-group mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <input value="{{$edit->email}}" type="email" class="form-control name="email"" id="inputEmail">
                </div>
                <div class="form-group mb-3">
                    <label for="inputAktvtsStini" class="col-sm-2 col-form-label">Aktivitas Saat Ini</label>
                    <input value="{{$edit->aktivitas_saat_ini}}" type="text" class="form-control" name="aktivitas_saat_ini" id="inputAktvtsStini">
                </div>
                <div class="form-group mb-3">
                    <input type="text" readonly value="{{ $gelombang['nama_gelombang'] }}" name="" class="form-control"
                        placeholder="Nama Gelombang">
                    <input hidden name="id_gelombang" value=" {{ $gelombang['id'] }}">
                </div>
                {{-- <div class="form-group mb-3">
                    <input type="text" readonly value="<?php echo $dataGelombang['nama_gelombang']; ?>" name="" class="form-control"
                        placeholder="Nama Gelombang">
                    <input hidden name="id_gelombang" value="<?php echo $dataGelombang['id']; ?>">
                </div> --}}
                <div>
                    <div class="form-group mb-3">
                        <label for="verif" class="col-sm-2 col-form-label">Verifikasi Peserta</label>
                        <select name="status" id="verif">
                            <option value="" disabled>Pilih Status</option>
                            <option value="0">Belum Ada Status</option>
                            <option value="1">Lolos</option>
                            <option value="2">Tidak Lolos</option>
                        </select>
                    </div>
                </div>
                <div class="form-group mb-3" align="center">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                </div>
                <div class="text-center">
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <a href="{{ url()->previous() }}" type="" class="btn btn-danger">Kembali</a>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
@endsection
