@extends('layouts2.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Vertical Form</h5>

            <!-- Vertical Form -->
            <form action="{{ route('gelombang.store') }}" method="POST" class="row g-3">
                @csrf
                <div class="col-12">
                    <label for="inputName" class="form-label">Nama Gelombang</label>
                    <input type="text" class="form-control" name="nama_gelombang" id="inputName">
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
