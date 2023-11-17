@extends('backend.index')
@section('content')

@php
$ar_judul = ['No','Judul Buku','Kategori','Action'];
$no = 1;
@endphp
<main id="main" class="col-md-12">
<br>
<h3>Daftar Buku</h3>
<a href="{{ route('buku.create') }}" class="btn btn-primary btn-sm" title="Tambah Data">
    <i class="bi bi-clipboard-plus"></i> Tambah
</a>

<br/><br/>

<table class="table datatable ">
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
				<td>{{ $b->kategori_idkategori }}</td>
                <td>
					<form method="POST" action="">
					@csrf
                    @method('DELETE')		
					<a class="btn btn-info btn-sm" href="{{ route('buku.show', $b->idbuku) }}" title="Detail Buku">
                        <i class="bi bi-eye"></i>
                    </a>
                    <a class="btn btn-warning btn-sm" href="" title="Ubah Buku">
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

</main>
@endsection