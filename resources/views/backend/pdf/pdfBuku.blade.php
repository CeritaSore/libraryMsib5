@php
$ar_judul = ['no','Judul Buku','tahun terbit','deskripsi','status'];
$no = 1;
@endphp
<h3 align="center">Daftar Buku</h3>
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
        @foreach($listbuku as $buku)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $buku->judul_buku  }}</td>
                <td>{{ $buku->tahun_terbit }}</td>
                <td>{{ $buku->deskripsi }}</td>
                <td>{{ $buku->status_buku }}</td>
            </tr>
            @endforeach
        </tbody>
</table>