@extends('layout.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <form action="{{ route('mahasiswa.store') }}" method="post">
                @csrf
                <div class="form-group mt-3">
                    <label for="nama">Nama</label>
                    <input id="nama" name="nama" placeholder="Masukkan nama" type="text" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="nilai">Nilai</label>
                    <input id="nilai" name="nilai" placeholder="Masukkan Nilai" type="text" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <button name="proses" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
