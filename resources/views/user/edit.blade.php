@extends('layouts2.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Vertical Form</h5>

            <!-- Vertical Form -->
            <form action="{{ route('user.update', $edit->id) }}" method="POST" class="row g-3" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <label for="foto_profil">Foto Profil:</label>
                    <input value="{{asset('foto-profil/'. $edit->foto_profil)}}" type="file" name="foto_profil" id="foto_profil">
                </div>
                <div class="col-12">
                    <div id="preview"></div>
                </div>
                <div class="col-12">
                    <label for="inputName" class="form-label">Nama Pengguna</label>
                    <input value="{{ $edit->name }}" type="text" class="form-control" name="name" id="inputName">
                </div>
                <div class="col-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input value="{{ $edit->email }}" type="text" class="form-control" name="email" id="inputEmail">
                </div>
                <div class="col-12">
                    <label for="inputLevel" class="form-label ">Level</label>
                    <select id="inputLevel" name="id_level" class="form-control">
                        <option disabled selected hidden>--Pilih Level--</option>
                        @foreach ($levels as $level)
                            <option value="{{ $level->id }}" {{ $level->id == $edit->level_id ? 'selected' : '' }}>
                                {{ $level->nama_level }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <a href="{{ url()->previous() }}" type="" class="btn btn-danger">Kembali</a>
                </div>
            </form><!-- Vertical Form -->

        </div>
    </div>
@endsection
