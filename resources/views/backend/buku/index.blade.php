@extends('backend.index')
@section('content')
    @php
        $ar_judul = ['No', 'Judul Buku', 'Kategori', 'Action'];
        $no = 1;
    @endphp
    <main id="main" class="col-md-12">
        <br>
        <h3>Daftar Buku</h3>
        <a href="{{ route('buku.create') }}" class="btn btn-primary btn-sm" title="Tambah Data">
            <i class="bi bi-clipboard-plus"></i> Tambah
        </a>

        <br /><br />
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                @foreach ($ar_judul as $jdl)
                                    <th>{{ $jdl }}</th>
                                @endforeach
                            </thead>
                            <tbody>
                                @foreach ($ar_buku as $b)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $b->judulbuku }}</td>
                                        <td>{{ $b->kategori_idkategori }}</td>
                                        <td>

                                            {{-- <a class="btn btn-info btn-sm" href="#" title="Detail Buku">
                                                <i class="  ti-pencil  "></i>
                                            </a> --}}

                                            {{-- <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal"
                                                data-bs-target="#exampleModal-2"></button> --}}
                                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal-2"><i class="  ti-pencil  "></i></button>

                                            <button class="btn btn-warning btn-sm" href="#" title="Ubah Buku"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal-2">
                                                <i class=" ti-eye  "></i>
                                            </button>
                                            <button type="submit" class="btn btn-danger btn-sm show-alert-delete-box"
                                                title="Hapus Asset" data-bs-toggle="modal" data-bs-target="#exampleModal-2">
                                                <i class=" ti-trash "></i>
                                            </button>

                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        {{-- input --}}
        <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel-2">Modal title</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- isi disini --}}
                        <form class="forms-sample" method="POST" action="{{ route('buku.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Judul Buku</label>
                                <input type="text" name="judulbuku" class="form-control" id="exampleInputName1"
                                    placeholder="Judul Buku">
                            </div>
                            <div class="form-group">
                                <label for="exampleSelectKategori">Kategori Buku</label>
                                <select name="kategori_idkategori" class="form-control" id="exampleSelectKategori">
                                    <option>-- Kategori Buku --</option>
                                    {{-- @foreach ($ar_kategori as $k)
                                        <option value="{{ $k->idkategori }}"> {{ $k->listkategori }} </option>
                                    @endforeach --}}
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Upload Foto</label>
                                <input type="file" name="img[]" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled
                                        placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleTextarea1">Tentang Buku</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Kembali</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
        {{-- edit --}}
        <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel-2">Modal title</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- isi disini --}}
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- view --}}
        <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel-2">Modal title</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- isi disini --}}
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- delete --}}
        <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel-2">Modal title</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{-- isi disini --}}
                        <p>Modal body text goes here.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>


    </main>
@endsection
