@extends('backend.index')
@php
    $no = 1;
@endphp
@section('content')
    @if (Auth::user()->role != 'guest')
        <main id="main" class="col-md-12 mb-5">

            <h3>Daftar Penerbit</h3>
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
                                        <th class="sortStyle descStyle">Penerbit Buku<i class="ti-angle-down"></i></th>
                                        <th class="sortStyle descStyle">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($namapenerbit as $penerbit)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $penerbit->namapenerbit }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary bi bi-pencil btn-sm"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal1{{ $penerbit->idpenerbit }}">

                                                </button>
                                                <button type="button" class="btn btn-warning bi bi-eye btn-sm"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal2{{ $penerbit->idpenerbit }}">

                                                </button>
                                                <button type="button" class="btn btn-danger bi bi-trash btn-sm"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal3{{ $penerbit->idpenerbit }}">

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
                        <form class="forms-sample" action="{{ route('simpandata2') }}" method="POST">
                            @csrf
                            <div class="form-floating">
                                <input type="text" class="form-control mb-3" placeholder="Masukan nama"
                                    id="floatingTextarea2" name="nama" required />
                                <label for="floatingTextarea2">Penerbit</label>
                            </div>


                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        {{-- edit --}}
        @foreach ($namapenerbit as $penerbit)
            <div class="modal fade" id="exampleModal1{{ $penerbit->idpenerbit }}" tabindex="-1"
                aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel1">Edit Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="forms-sample" action="{{ route('ubahdata2', $penerbit->idpenerbit) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-floating">
                                    <input type="text" class="form-control mb-3" placeholder="Masukan nama"
                                        id="floatingTextarea2" name="nama" value="{{ $penerbit->namapenerbit }}"
                                        required />
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
        @foreach ($namapenerbit as $penerbit)
            <div class="modal fade" id="exampleModal2{{ $penerbit->idpenerbit }}" tabindex="-1"
                aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel1">View</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="h3">Penerbit : {{$penerbit->namapenerbit}}</p>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
        @foreach ($namapenerbit as $penerbit)
            <div class="modal fade" id="exampleModal3{{ $penerbit->idpenerbit }}" tabindex="-1"
                aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel1">delete Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="forms-sample" action="{{ route('hapusdata2', $penerbit->idpenerbit) }}"
                                method="POST">
                                @csrf
                                @method('delete')
                                <div class="form-floating">
                                    <input type="text" class="form-control mb-3" placeholder="Masukan nama"
                                        id="floatingTextarea2" name="nama" value="{{ $penerbit->namapenerbit }}" />
                                    <label for="floatingTextarea2">Nama</label>
                                </div>


                                <button type="submit" class="btn btn-primary">Hapus</button>
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    @else
        @include('backend.accessDenied')
    @endif
@endsection
