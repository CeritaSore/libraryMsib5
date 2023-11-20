@extends('backend.index')
@section('content')

<div class="col-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Form Buku</h4>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>
                                    {{ $error }}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                  <form class="forms-sample" method="POST" action="{{ route('buku.store') }}"
                        enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Judul Buku</label>
                      <input type="text" name="judulbuku" class="form-control" id="exampleInputName1" placeholder="Judul Buku">
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectKategori">Kategori Buku</label>
                        <select name="kategori_idkategori" class="form-control" id="exampleSelectKategori">
                          <option>-- Kategori Buku --</option>
                          @foreach($ar_kategori as $k)
                          <option value="{{ $k->idkategori }}"> {{ $k->listkategori }} </option>
                          @endforeach
                        </select>
                      </div>
                    <div class="form-group">
                      <label>Upload Foto</label>
                      <input type="file" name="img[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleTextarea1">Tentang Buku</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <button class="btn btn-light">Kembali</button>
                  </form>
                </div>
              </div>
            </div>

@endsection