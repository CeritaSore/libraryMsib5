@extends('layout.main')
@php
    $judul = ['no','nama','nilai','action'];
    // $mhs1 = ['udin','ti19','10','lulus','1','semangat!!!'];
    // $mhs2 = ['gina','ti19','10','lulus','1','semangat!!!'];
    // $mhs3 = ['badrol','ti19','10','lulus','1','semangat!!!'];
    // $mhs4 = ['maskulin','ti19','10','lulus','1','semangat!!!'];
    // $mhs5 = ['jidan','ti19','10','lulus','1','semangat!!!'];
    // $mhs = [$mhs1,$mhs2,$mhs3,$mhs4,$mhs5];
    $no=1;
@endphp
@section('container')

    <h1>ini halaman post</h1>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                    @foreach ($judul as $jdl)
                        <th class="text-center">{{$jdl}}</th>
                    @endforeach
                </thead>
                <tbody>
                    <p class="display-4 fw-bold text-center">daftar siswa</p>
                    <div class="d-flex justify-content-start">
                        <a href="{{route('mahasiswa.create')}}" class="btn btn-Primary"><i class="bi bi-plus-square"></i>tambahkan</a>
                    </div>
                    {{-- @foreach ($ar_mhs as $mahasiswa) --}}
                    <tr>
                        {{-- <td class="text-center">{{$no++}}</td>     --}}
                        {{-- <td class="text-center">{{ $mahasiswa->nama }}</td> --}}
                        {{-- <td class="text-center">{{ $mahasiswa->nilai }}</td> --}}
                        {{-- <td class="text-center">{{$mahasiswa[2]}}</td>
                        <td class="text-center">{{$mahasiswa[3]}}</td>
                        <td class="text-center">{{$mahasiswa[4]}}</td>
                        <td class="text-center"> {{$mahasiswa[5]}}</td> --}}
                        <td ><div class="d-flex justify-content-around"><i class="bi bi-pencil-square"></i><i class="bi bi-trash"></i></div>
                        </td>
                    </tr>
                
                    {{-- @endforeach --}}
                    
                </tbody>
            </table>
        </div>
    </div>
@endsection