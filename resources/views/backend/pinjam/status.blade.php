@extends('backend.index')
@php
    $listjudul = ['#', 'nama peminjam', 'buku yang dipinjam', 'tanggal peminjaman', 'tanggal pengambilan'];
    $no = 1;
@endphp
@section('content')
    <main id="main" class="col-md-12 mb-5">
        <h3>Status Peminjaman</h3>
        <p>Lihat status peminjaman disini</p>
    </main>
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="table-sorter-wrapper col-lg-12 table-responsive">
                        <table id="sortable-table-1" class="table">
                            <thead>
                                <tr>
                                    @foreach ($listjudul as $judul)
                                        <th>{{ $judul }}</th>
                                    @endforeach

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peminjaman as $pinjam)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        @foreach ($listuser as $user)
                                            <td>{{ $user->name }}</td>
                                            
                                        @endforeach
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
