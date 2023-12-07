@extends('backend.index')
@php
    $no = 1;

@endphp
@section('content')
    <main id="main" class="col-md-12 mb-5">
        <h3>Daftar Buku</h3>
        {{-- <button type="button" class="btn btn-primary btn-sm" title="Tambah Data" data-bs-toggle="modal"
            data-bs-target="#exampleModal-1">
            
        </button> --}}
        @if (Auth::user()->role != 'anggota')
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-clipboard-plus"></i> Tambah
            </button>
        @endif

    </main>
    @foreach ($judulbuku as $buku)
        <div class="col-4 mb-3">
            <div class="card bg-primary" style="width: 18rem;">
                <div style="max-height: 15rem; overflow:hidden;">
                    <img src="storage/{{ $buku->foto }}" class="card-img-top  rounded-top-4 " alt="...">
                </div>
                <div class="card-body d-flex flex-column justify-content-center">
                    <h5 class="card-title text-center text-light">{{ $buku->judulbuku }}</h5>
                    <p class="card-text text-center text-light">{{ $buku->pengarang->namapengarang }}</p>
                    <button type="button" class="btn btn-light fw-bold" data-bs-toggle="modal"
                        data-bs-target="#exampleModalDetail{{ $buku->idbuku }}">Lihat</button>
                </div>
            </div>
        </div>
    @endforeach

    {{-- <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic Sortable Table</h4>
                <p class="card-description">Add class <code>.sortable-table</code></p>
                <div class="row">
                    <div class="table-sorter-wrapper col-lg-12 table-responsive">
                        <table id="sortable-table-1" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th class="sortStyle descStyle">Judul Buku<i class="ti-angle-down"></i></th>
                                    <th class="sortStyle descStyle">Kategori<i class="ti-angle-down"></i></th>
                                    <th class="sortStyle descStyle">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($judulbuku as $buku)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $buku->judulbuku }}</td>
                                        <td>{{ $buku->kategori->listkategori }}</td>
                                        <td>
                                            @if (Auth::user()->role != 'anggota')
                                                <button type="button" class="btn btn-primary bi bi-pencil btn-sm"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal1{{ $buku->idbuku }}">
                                            @endif
                                            </button>
                                            <button type="button" class="btn btn-warning bi bi-eye btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal2{{ $buku->idbuku }}">

                                            </button>
                                            @if (Auth::user()->role != 'anggota')
                                                <button type="button" class="btn btn-danger bi bi-trash btn-sm"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal3{{ $buku->idbuku }}">
                                            @endif
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
    </div> --}}
    @if (Auth::user()->role != 'anggota')
        {{-- input --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Input Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="forms-sample" action="{{ route('simpandata0') }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                            <div class="form-floating">
                                <input type="text" class="form-control mb-3" placeholder="Masukan nama"
                                    id="floatingTextarea2" name="nama" required />
                                <label for="floatingTextarea2">Judul Buku </label>
                            </div>
                            <div class="form-floating">
                                <select name="pengarang" class="form-select mb-3" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option>-- pengarang Buku --</option>
                                    @foreach ($listpengarang as $pengarang)
                                        <option value="{{ $pengarang->idpengarang }}"> {{ $pengarang->namapengarang }}
                                        </option>
                                    @endforeach
                                </select>
                                <label class="floatingSelect"for="exampleSelectKategori">Kategori Buku</label>
                            </div>
                            <div class="form-floating">
                                <select name="penerbit" class="form-select mb-3" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option>-- penerbit Buku --</option>
                                    @foreach ($listpenerbit as $penerbit)
                                        <option value="{{ $penerbit->idpenerbit }}"> {{ $penerbit->namapenerbit }}
                                        </option>
                                    @endforeach
                                </select>
                                <label class="floatingSelect"for="exampleSelectKategori">Kategori Buku</label>
                            </div>
                            <div class="form-floating">
                                <select name="kategori" class="form-select mb-3" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option>-- Kategori Buku --</option>
                                    @foreach ($listkategori as $kategori)
                                        <option value="{{ $kategori->idkategori }}"> {{ $kategori->listkategori }}
                                        </option>
                                    @endforeach
                                </select>
                                <label class="floatingSelect"for="exampleSelectKategori">Kategori Buku</label>
                            </div>
                            <div class="form-floating">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Upload Cover Buku</label>
                                    <input class="form-control" type="file" id="formFile" name="foto" required>
                                </div>
                            </div>
                            <div class="form-floating">

                                <textarea class="form-control mb-3" placeholder="Masukan Deskripsi(opsional)" id="floatingTextarea" name="deskripsi"></textarea>
                                <label for="floatingTextarea">Deskripsi</label>

                            </div>



                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        {{-- edit --}}
        @foreach ($judulbuku as $buku)
            <div class="modal fade" id="exampleModal1{{ $buku->idbuku }}" tabindex="-1"
                aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel1">Edit Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="forms-sample" action="{{ route('ubahdata0', $buku->idbuku) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-floating">
                                    <input type="text" class="form-control mb-3" placeholder="Masukan nama"
                                        id="floatingTextarea2" name="nama" value="{{ $buku->judulbuku }}" required />
                                    <label for="floatingTextarea2">Nama</label>
                                </div>
                                <div class="form-floating">
                                    <select name="pengarang" class="form-select mb-3" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option>-- pengarang Buku --</option>
                                        @foreach ($listpengarang as $pengarang)
                                            @php
                                                $select1 = $pengarang->idpengarang === $buku->pengarang_idpengarang ? 'selected' : '';
                                            @endphp
                                            <option value="{{ $pengarang->idpengarang }}" {{ $select1 }}>
                                                {{ $pengarang->namapengarang }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label class="floatingSelect"for="exampleSelectKategori">Kategori Buku</label>
                                </div>
                                <div class="form-floating">
                                    <select name="penerbit" class="form-select mb-3" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option>-- penerbit Buku --</option>
                                        @foreach ($listpenerbit as $penerbit)
                                            @php
                                                $select2 = $penerbit->idpenerbit === $buku->penerbit_idpenerbit ? 'selected' : '';
                                            @endphp
                                            <option value="{{ $penerbit->idpenerbit }}" {{ $select2 }}>
                                                {{ $penerbit->namapenerbit }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label class="floatingSelect"for="exampleSelectKategori">Kategori Buku</label>
                                </div>
                                <div class="form-floating">
                                    <select name="kategori" class="form-select mb-3" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option>-- Kategori Buku --</option>
                                        @foreach ($listkategori as $kategori)
                                            @php
                                                $select3 = $kategori->idkategori === $buku->kategori_idkategori ? 'selected' : '';
                                            @endphp
                                            <option value="{{ $kategori->idkategori }}" {{ $select3 }}>
                                                {{ $kategori->listkategori }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label class="floatingSelect"for="exampleSelectKategori">Kategori Buku</label>
                                </div>
                                <div class="form-floating">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Upload Cover Buku</label>
                                        <input class="form-control" type="file" id="formFile" name="foto" required/>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    @endif
    @foreach ($judulbuku as $buku)
        <div class="modal fade" id="exampleModal2{{ $buku->idbuku }}" tabindex="-1"
            aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel1">Edit Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">


                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body text-center">
                                <div class=" mb-4">
                                    <img src="storage/{{ $buku->foto }}" class="" style="height: 14rem" />
                                </div>
                                <h4 class="mb-2">{{ $buku->judulbuku }}</h4>
                                <p class="text-muted mb-4">{{ $buku->pengarang->namapengarang }} <span
                                        class="mx-2">|</span> <a href="#!">{{ $buku->penerbit->namapenerbit }}</a>
                                </p>
                                <div class="mb-4 pb-2">
                                    <button type="button" class="btn btn-outline-primary btn-floating">
                                        <i class=" ti-facebook "></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-primary btn-floating">
                                        <i class=" ti-twitter "></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-primary btn-floating">
                                        <i class=" ti-skype "></i>
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
    @if (Auth::user()->role != 'anggota')
        @foreach ($judulbuku as $buku)
            <div class="modal fade" id="exampleModal3{{ $buku->idbuku }}" tabindex="-1"
                aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel1">Edit Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="forms-sample" action="{{ route('hapusdata0', $buku->idbuku) }}" method="POST">
                                @csrf
                                @method('delete')
                                <div class="form-floating">
                                    <input type="text" class="form-control mb-3" placeholder="Masukan nama"
                                        id="floatingTextarea2" name="nama" value="{{ $buku->judulbuku }}" required />
                                    <label for="floatingTextarea2">Nama</label>
                                </div>


                                <button type="submit" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection
@foreach ($judulbuku as $buku)
    <div class="modal fade" id="exampleModalDetail{{ $buku->idbuku }}" tabindex="-1"
        aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel1">Detail</h1>
                    <button type="button" class="btn-close" dat a-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body text-center">
                            <div class=" mb-4">
                                <img src="storage/{{ $buku->foto }}" class="" style="height: 14rem" />
                            </div>
                            <h4 class="mb-2">{{ $buku->judulbuku }}</h4>
                            <p class="text-muted mb-4">{{ $buku->pengarang->namapengarang }} <span
                                    class="mx-2">|</span> <a href="#!">{{ $buku->penerbit->namapenerbit }}</a>
                            </p>
                            <p class="text-center">Deskripsi : {{ $buku->deskripsi }}</p>
                            <p class="text-center">Status saat ini : {{ $buku->status }}</p>
                            <div class="mb-4 pb-2">
                                <a href="/pinjam" class="btn btn-outline-success btn-floating">
                                    <i class=" ti-ticket "></i>
                                </a>
                                @if (Auth::user()->role != 'anggota')
                                    <button type="button" class="btn btn-outline-warning btn-floating"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal1{{ $buku->idbuku }}">
                                        <i class=" ti-pencil "></i>
                                    </button>
                                @endif
                                @if (Auth::user()->role == 'administrator')
                                    <button type="button" class="btn btn-danger bi bi-trash btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal3{{ $buku->idbuku }}">
                                    </button>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endforeach
