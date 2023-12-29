@php
$ar_judul = ['no','peminjam','tanggal pinjam','tanggal ambil','batas pengembalian','status'];
$no = 1;
@endphp
<h3 align="center">Daftar Peminjaman</h3>
<br/><br/>
<table border="1" align="center" cellpadding="10" cellspacing="0">
	<thead>
		<tr>
			@foreach($ar_judul as $jdl)
				<th>{{ $jdl }}</th>
			@endforeach
		</tr>
	</thead>
    <tbody>
        @foreach($peminjaman as $p)
            <tr>
                <td>{{ $no++ }}</td>
                <td>Peminjaman {{ $p->idpeminjaman  }}</td>
                <td>{{ $p->tgl_pinjam }}</td>
                <td>{{ $p->tgl_ambil }}</td>
                <td>{{ $p->lama_peminjaman }}</td>
                <td>{{ $p->status_peminjaman }}</td>
            </tr>
            @endforeach
        </tbody>
</table>