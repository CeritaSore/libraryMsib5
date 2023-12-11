@extends('backend.index')
@section('content')
    @php
        $ar_judul = ['No', 'Nama', 'Email', 'Role', 'IsActive', 'Action'];
        $no = 1;
    @endphp
    @if (Auth::user()->role == 'admin')
        <main id="main" class="col-md-12 mb-5">
            <h3>Daftar User</h3>
            {{-- <button type="button" class="btn btn-primary btn-sm" title="Tambah Data" data-bs-toggle="modal"
		data-bs-target="#exampleModal-1">
		
	</button> --}}


        </main>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Basic Sortable Table</h4>
                    <p class="card-description">Add class <code>.sortable-table</code></p>
                    <div class="row">
                        <div class="table-sorter-wrapper col-lg-12 table-responsive">
                            <table table id="sortable-table-1" class="table">
                                <thead>
                                    <tr>
                                        @foreach ($ar_judul as $jdl)
                                            <th>{{ $jdl }}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ar_user as $u)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $u->name }}</td>
                                            <td>{{ $u->email }}</td>
                                            <td>{{ $u->role }}</td>
                                            <td>{{ $u->isactive }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary bi bi-pencil btn-sm"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal1{{ $u->id }}">

                                                </button>
                                                <button type="button" class="btn btn-warning bi bi-eye btn-sm"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal2{{ $u->id }}">

                                                </button>
                                                <button type="button" class="btn btn-danger bi bi-trash btn-sm"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal3{{ $u->id }}">

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
                        <form class="forms-sample" action="{{ route('simpandata10') }}" method="POST">
                            @csrf
                            <div class="form-floating">
                                <input type="text" class="form-control mb-3" placeholder="Masukan nama"
                                    id="floatingTextarea2" name="nama" required />
                                <label for="floatingTextarea2">Nama Pengarang</label>
                            </div>


                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        {{-- edit --}}
        @foreach ($ar_user as $u)
            <div class="modal fade" id="exampleModal1{{ $u->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel1">Edit Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="forms-sample" action="{{ route('ubahdata10', $u->id) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-floating">
                                    <select name="isactive" class="form-select mb-3" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option>-- isactive --</option>
                                        @foreach ($ar_user as $u)
                                            @php
                                                $select3 = $u->id  ? 'selected' : '';
                                            @endphp
                                            <option value="{{ $u->id }}" {{ $select3 }}>
                                                {{ $u->isactive }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label class="floatingSelect"for="exampleSelectKategori">IsActive</label>
                                </div>
								<div class="form-floating">
                                    <select name="isactive" class="form-select mb-3" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option>-- Role --</option>
                                        @foreach ($ar_user as $u)
                                            @php
                                                $select1 = $u->id  ? 'selected' : '';
                                            @endphp
                                            <option value="{{ $u->id }}" {{ $select1 }}>
                                                {{ $u->role }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label class="floatingSelect"for="exampleSelectKategori">Role</label>
                                </div>


                                <button type="submit" class="btn btn-primary">Save changes</button>
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Close</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
        @foreach ($ar_user as $u)
            <div class="modal fade" id="exampleModal2{{ $u->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel1">View</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            
                             <div class="card" style="border-radius: 15px;">
                                <div class="card-body text-center">
                                    <div class="mt-3 mb-4">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                                            class="rounded-circle img-fluid" style="width: 100px;" />
                                    </div>
                                    <h4 class="mb-2">{{ $u->name }}</h4>
                                    <p class="text-muted mb-4">{{ $u->role }}</ <span class="mx-2">|</span>
                                            {{ $u->isactive }}</p>
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
        @foreach ($ar_user as $u)
            <div class="modal fade" id="exampleModal3{{ $u->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel1" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel1">Edit Data</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="forms-sample" action="{{ route('hapusdata10', $u->id) }}"
                                method="POST">
                                @csrf
                                @method('delete')
                                <div class="form-floating">
                                    <input type="text" class="form-control mb-3" placeholder="Masukan nama"
                                        id="floatingTextarea2" name="nama" value="{{ $u->name }}"
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
    @else
        @include('backend.accessDenied')
    @endif
@endsection
