@extends('backend.index')
@section('content')
<div class="card">
    <div class="row">
        <div class="col-md-6">
			<center>
			@empty($rs->foto)
				<br/><img src="{{ asset('backend/assets/img/noimage.png') }}" class="img-fluid rounded-start" />
			@else
				<img src="{{ asset('backend/assets/img') }}/{{ $rs->foto }}" />
			@endempty
			</center>
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <h5 class="card-title">{{ $rs->judulbuku }}</h5>
                <p class="card-text">
					Kategori Buku: {{ $rs->kategori_idkategori }}

				</p>
				<a href="{{ url('/asset') }}" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
