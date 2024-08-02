@extends('layouts2.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Vertical Form</h5>

            <!-- Vertical Form -->
            <form action="{{ route('gelombang.update', $edit->id) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')
                <div class="col-12">
                    <label for="inputName" class="form-label">Nama Gelombang</label>
                    <input value="{{ $edit->nama_gelombang }}" type="text" class="form-control" name="nama_gelombang" id="inputName">
                </div>
                {{-- <div class="col-12">
                    <label for="inputName" class="form-label">Nama Gelombang</label>
                    <select name="aktif" id="">
                        <option value="">Pilih</option>
                        <option value="1">Aktif</option>
                        <option value="2">Tidak Aktif</option>
                    </select>
                </div> --}}
                <div class="mb-3">
                    <label for="">Status</label>
                    <select name="aktif" id="" class="form-control">
                        <option value="">Pilih Status</option>
                        <option <?php echo ($edit['aktif'] == 1) ? 'selected' : '' ?> value="1">Aktif</option>
                        <option <?php echo ($edit['aktif'] == 0) ? 'selected' : '' ?> value="0">Tidak Aktif</option>
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
