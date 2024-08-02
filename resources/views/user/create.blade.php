@extends('layouts2.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Vertical Form</h5>

            <!-- Vertical Form -->
            <form action="{{ route('user.store') }}" method="POST" class="row g-3" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="foto_profil">Foto Profil:</label>
                    <input type="file" name="foto_profil" id="foto_profil">
                </div>
                <div class="col-12">
                    <div id="preview"></div>
                </div>
                <div class="col-12">
                    <label for="inputName" class="form-label">Nama Pengguna</label>
                    <input type="text" class="form-control" name="name" id="inputName">
                </div>
                <div class="col-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="inputEmail">
                </div>
                <div class="col-12">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="inputPassword">
                </div>
                <div class="col-12">
                    <label for="inputLevel" class="col-form-label">Level</label>
                    <select id="inputLevel" name="id_level" class="form-control" >
                        <option disabled selected hidden>--Pilih Level--</option>
                        @foreach ($levels as $level)
                        <option value="{{ $level->id }}" >
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
