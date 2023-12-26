@extends('backend.index')
@section('container')
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Welcome Aamir</h3>
                <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have
                    <span class="text-primary">3 unread alerts!</span>
                </h6>
            </div>
        </div>
    </div>
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <form action="{{ route('up4') }}" class="needs-validation" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="judulBuku">Judul Buku</label>
                        <select id="judulBuku" class="form-select js-example-basic-single w-100 select2-hidden-accessible"
                            tabindex="-1" aria-hidden="true" name="judul">
                            <option default selected>Pilih buku</option>
                            @foreach ($listbuku as $buku)
                                <option value="{{ $buku->idbuku }}">{{ $buku->judul_buku }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Tanggl Pengambilan</label>
                        <input type="date" name="tglambil" class="form-control datepicker" id="exampleInputName1"
                            placeholder="Name">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
<style>
    .loading-container {
        position: relative;
    }

    .loading-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.8);
        z-index: 1000;
        display: flex;
        justify-content: center;
        align-items: center;
        backdrop-filter: blur(5px); /* Efek blur */
    }
</style>