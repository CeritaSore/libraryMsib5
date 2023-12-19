@extends('backend.index')

@section('content')
    <h1>Daftar Peminjaman</h1>

    <!-- @if(count($buku) > 0) -->
        <table>
            <thead>
                <tr>
                    <th>ID Buku</th>
                    <th>Judul Buku</th>
                    <th>Stok</th>
                    <th>tanggal pengambilan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($buku as $b)
                    <tr>
                        <td>{{ $b->idbuku }}</td>
                        <td>{{ $b->judulbuku }}</td>
                        <td>{{ $b->stok }}</td>
                        <td>
                            @if($b->stok > 0)
                                <form action="{{ route('peminjaman.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="buku_id" value="{{ $b->idbuku }}">
                                    <input type="date" name="tanggal_pengambilan" required>
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->iduser }}">
                                    <button type="submit">Pinjam</button>
                                </form>
                            @else
                                Stok Habis
                            @endif
                        </td>
                        @endforeach
                    <td>
                        @foreach($peminjaman as $p)
                        @if($p->tanggal_pengembalian)
                        Sudah Dikembalikan
                        @else
                        <form action="{{ route('peminjaman.kembalikan', $p->id) }}" method="post">
                            @csrf
                            <button type="submit">Kembalikan</button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada data buku.</p>
    @endif
@endsection
