@extends('backend.index')
@php
    $no = 1;
@endphp
@section('content')
    <main id="main" class="col-md-12 mb-5">
        <h3>Daftar Pengarang</h3>
        {{-- <button type="button" class="btn btn-primary btn-sm" title="Tambah Data" data-bs-toggle="modal"
            data-bs-target="#exampleModal-1">
            
        </button> --}}
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="bi bi-clipboard-plus"></i> Tambah
        </button>

    </main>
    <div class="col-12 grid-margin">
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
                                    <th class="sortStyle descStyle">Nama pengarang<i class="ti-angle-down"></i></th>
                                    <th class="sortStyle descStyle">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listpengarang as $pengarang)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $pengarang->namapengarang }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary bi bi-pencil btn-sm"
                                                data-bs-toggle="modal"
                                                data-bs-target="#exampleModal1{{ $pengarang->idpengarang }}">

                                            </button>
                                            <button type="button" class="btn btn-warning bi bi-eye btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal2{{ $pengarang->idpengarang }}">

                                            </button>
                                            <button type="button" class="btn btn-danger bi bi-trash btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#exampleModal3{{ $pengarang->idpengarang }}">

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
    </div>
    {{-- input --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Input Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample" action="{{ route('simpandata') }}" method="POST">
                        @csrf
                        <div class="form-floating">
                            <input type="text" class="form-control mb-3" placeholder="Masukan nama"
                                id="floatingTextarea2" name="nama" />
                            <label for="floatingTextarea2">Nama</label>
                        </div>


                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    {{-- edit --}}
    @foreach ($listpengarang as $pengarang)
        <div class="modal fade" id="exampleModal1{{ $pengarang->idpengarang }}" tabindex="-1"
            aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel1">Edit Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="forms-sample" action="{{ route('ubahdata', $pengarang->idpengarang) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-floating">
                                <input type="text" class="form-control mb-3" placeholder="Masukan nama"
                                    id="floatingTextarea2" name="nama" value="{{ $pengarang->namapengarang }}" />
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
    @foreach ($listpengarang as $pengarang)
        <div class="modal fade" id="exampleModal2{{ $pengarang->idpengarang }}" tabindex="-1"
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
                                <div class="mt-3 mb-4">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                                        class="rounded-circle img-fluid" style="width: 100px;" />
                                </div>
                                <h4 class="mb-2">{{$pengarang->namapengarang}}</h4>
                                <p class="text-muted mb-4">@Programmer <span class="mx-2">|</span> <a
                                        href="#!">mdbootstrap.com</a></p>
                                <div class="mb-4 pb-2">
                                    <button type="button" class="btn btn-outline-primary btn-floating">
                                        <i class="fab fa-facebook-f fa-lg"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-primary btn-floating">
                                        <i class="fab fa-twitter fa-lg"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-primary btn-floating">
                                        <i class="fab fa-skype fa-lg"></i>
                                    </button>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endforeach
    @foreach ($listpengarang as $pengarang)
        <div class="modal fade" id="exampleModal3{{ $pengarang->idpengarang }}" tabindex="-1"
            aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel1">Edit Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="forms-sample" action="{{ route('hapusdata', $pengarang->idpengarang) }}" method="POST">
                            @csrf
                            @method('delete')
                            <div class="form-floating">
                                <input type="text" class="form-control mb-3" placeholder="Masukan nama"
                                    id="floatingTextarea2" name="nama" value="{{ $pengarang->namapengarang }}" />
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
@endsection
