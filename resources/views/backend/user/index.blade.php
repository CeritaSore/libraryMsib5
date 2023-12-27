@extends('backend.index')
@section('container')
@php
        $ar_judul = ['No', 'Nama', 'Email', 'Role', 'Status', 'Action'];
        $no = 1;

    @endphp
@if (Auth::user()->role == 'admin')
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-xl-0">
                <h3 class="font-weight-bold">Kelola User</h3>
                <h6 class="font-weight-normal">Hanya untuk mengelola akun yang terdaftar di sistem!
                </h6>
            </div>
        </div>
    </div>
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th class="text-capitalize">Nama</th>
                                <th class="text-capitalize">Email</th>
                                <th class="text-capitalize">Role</th>
                                <th class="text-capitalize">status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ $user->status }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal{{ $user->id }}"><i
                                                class="ti-pencil"></i></button>
                                        
                                                <button type="butar_userhapuston" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal2{{ $user->id }}"><i
                                                class="ti-trash"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- edit --}}
@foreach ($users as $user)
    <div class="modal fade" id="exampleModal{{ $user->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel-2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel-2">Edit Data</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('ubahdata10', $user->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        
                        
                        
                        <div class="form-floating">
                            <select name="status" class="form-select mb-3" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option>-- Status --</option>
                                @foreach ($liststatus as $status)
                                    <option value="{{ $status }}"
                                        {{ $user->status === $status ? 'selected' : '' }}>
                                        {{ $status }}
                                    </option>
                                @endforeach
                            </select>
                            <label class="floatingSelect" for="exampleSelectKategori">Status</label>
                        </div>

                        <div class="form-floating">
                            <select name="isactive" class="form-select mb-3" id="floatingSelect"
                                aria-label="Floating label select example" name="role">
                                <option>-- Role --</option>
                                @foreach ($listrole as $role)
                                    <option value="{{ $role }}"
                                        {{ $user->role === $role ? 'selected' : '' }}>
                                        {{ $role }}
                                    </option>
                                @endforeach
                            </select>
                            <label class="floatingSelect"for="exampleSelectKategori">Role</label>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endforeach

{{-- delete --}}
@foreach ($users as $user)
    <div class="modal fade" id="exampleModal2{{ $user->id }}" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel-2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel-2">Delete Data</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('hapusdata10', $user->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('delete')
                        <div class="form-group">
                            <label for="exampleInputName1">Nama</label>
                            <input type="text" name="nama" class="form-control" id="exampleInputName1"
                                placeholder="Name" value="{{ $user->name }}">
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endif

