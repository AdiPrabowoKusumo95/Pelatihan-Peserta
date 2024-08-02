@include('layouts2.inc.css')
@include('layouts2.inc.js')

<div class="row justify-content-center mt-3">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                
                <h5 class="card-title text-center">Formulir Pendaftaran Peserta PPKD Jakarta Pusat</h5>

                <!-- General Form Elements -->
                <form action="{{ route('daftar-peserta.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="inputNama" class="col-form-label">Nama Lengkap</label>
                        <input name="nama_lengkap" type="text" class="form-control" id="inputNama">
                    </div>
                    <div class="form-group mb-3">
                        <label for="inputNik" class="col-form-label">NIK</label>
                        <input name="nik" type="text" class="form-control" id="inputNik">
                    </div>
                    <div class="form-group mb-3">
                        <label for="inputNoKk" class="col-form-label">No Kartu Keluarga</label>
                        <input name="kartu_keluarga" type="text" class="form-control" id="inputNoKk">
                    </div>
                    <div class="form-group mb-3">
                        <label for="inputJnisKlmin" class="col-form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="inputJnisKlmin">
                            <option selected hidden disabled>--Pilih--</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="inputTL" class="col-form-label">Tempat Lahir</label>
                        <input name="tempat_lahir" type="text" class="form-control" id="inputTL">
                    </div>
                    <div class="form-group mb-3">
                        <label for="inputDate" class="col-form-label">Tanggal Lahir</label>
                        <input name="tanggal_lahir" type="date" class="form-control" id="inputDate">
                    </div>
                    <div class="form-group mb-3">
                        <label for="id_jurusan" class="col-form-label">Jurusan</label>
                        <select name="id_jurusan" class="form-control" id="id_jurusan">
                            <option selected hidden disabled>--Pilih Jurusan--</option>
                            @foreach ($jurusans as $jurusan)
                                <option value="{{ $jurusan->id }}">{{ $jurusan->nama_jurusan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="inputPnddknTrkhr" class="col-form-label">Pendidikan Terakhir</label>
                        <input name="pendidikan_terakhir" type="text" class="form-control" id="inputPnddknTrkhr">
                    </div>
                    <div class="form-group mb-3">
                        <label for="inputNmSklh" class="col-form-label">Nama Sekolah</label>
                        <input name="nama_sekolah" type="text" class="form-control" id="inputNmSklh">
                    </div>
                    <div class="form-group mb-3">
                        <label for="inputKjrn" class="col-form-label">Kejuruan</label>
                        <input name="kejuruan" type="text" class="form-control" id="inputKjrn">
                    </div>
                    <div class="form-group mb-3">
                        <label for="inputNoHp" class="col-form-label">Nomor HP</label>
                        <input name="nomor_hp" type="text" class="form-control" id="inputNoHp">
                    </div>
                    <div class="form-group mb-3">
                        <label for="inputEmail" class="col-form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="inputEmail">
                    </div>
                    <div class="form-group mb-3">
                        <label for="inputAktvtsStini" class="col-form-label">Aktivitas Saat Ini</label>
                        <input name="aktivitas_saat_ini" type="text" class="form-control" id="inputAktvtsStini" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="hidden" name="status" value="0">
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" readonly value="{{ $gelombang['nama_gelombang'] }}" name="" class="form-control"
                            placeholder="Nama Gelombang">
                        <input hidden name="id_gelombang" value=" {{ $gelombang['id'] }}">
                    </div>
                    {{-- <div class="form-group mb-3">
                        <select name="id_jurusan" class="form-control" id="id_jurusan" disabled>
                            <option selected value="{{ $gelombang->id }}">{{ $gelombang->nama_gelombang }}</option>
                        </select>
                    </div> --}}
                    <div class="form-group mb-3" align="center">
                        <button type="submit" class="btn btn-primary">Submit Form</button>
                    </div>
                </form><!-- End General Form Elements -->
            </div>
        </div>
    </div>
</div>
