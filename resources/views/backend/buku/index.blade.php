@extends('backend.index')
@section('content')

@php
$ar_judul = ['No','Judul Buku','Kategori'];
$no = 1;
@endphp
<h3>Daftar Buku</h3>
<a href="{{ route('asset.create') }}" class="btn btn-primary btn-sm" title="Tambah Data">
    <i class="bi bi-clipboard-plus"></i> Tambah
</a>
<a href="{{ route('asset.pdf') }}" class="btn btn-danger btn-sm" title="Export to PDF">
	<i class="bi bi-file-earmark-pdf"></i>
</a>
<a href="{{ route('asset.excel') }}" class="btn btn-success btn-sm" title="Export to Excel">
	<i class="bi bi-file-excel"></i>
</a>
<br/><br/>
<table class="table datatable">
	<thead>
		<tr>
			@foreach($ar_judul as $jdl)
				<th>{{ $jdl }}</th>
			@endforeach
		</tr>
	</thead>
	<tbody>
		@foreach($ar_buku as $b)
			<tr>
				<td>{{ $no++ }}</td>
				<td>{{ $b->judulbuku }}</td>
				<td>{{ $a->kategori->listkategori }}</td>
                <td>
					<form method="POST" action="{{ route('asset.delete', $a->id) }}">
					@csrf
                    @method('DELETE')		
					<a class="btn btn-info btn-sm" href="{{ route('asset.show', $a->id) }}" title="Detail Asset">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a class="btn btn-warning btn-sm" href="{{ route('asset.edit', $a->id) }}" title="Ubah Asset">
                        <i class="bi bi-pencil-fill"></i>
                    </a>
					<button type="submit" class="btn btn-danger btn-sm show-alert-delete-box" title="Hapus Asset">
						<i class="bi bi-trash"></i>
					</button>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

@endsection