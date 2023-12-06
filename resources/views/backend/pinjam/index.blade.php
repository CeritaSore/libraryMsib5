@extends('backend.index')
@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Peminjaman</h4>
                <p class="card-description">
                    Masukan buku serta tanggal peminjaman yang sesuai dengan kamu
                </p>
                <form class="forms-sample">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama Peminjam</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukan nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1">Nama Buku</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukan Buku">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">tanggal peminjaman</label>
                        <input type="date" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal pengembalian</label>
                        <input type="date" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js">
    $('.js-example-basic-single').select2({
        placeholder: 'Select an option'
    });
</script> --}}