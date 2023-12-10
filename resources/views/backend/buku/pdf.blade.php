@php
$ar_judul = ['no','Judul Buku','kategori'];
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
        @foreach($dataBuku as $buku)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $buku->judulbuku  }}</td>
                <td>{{ $buku->listkategori }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
