@extends('backend.index')

@section('content')
    <h3>Ubah Buku</h3>
    <form action="{{ route('buku.edit', $asset->id) }}" method="post">
        @csrf
        @method('PUT')
        <!-- Form input disini -->
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
