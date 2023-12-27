@extends('frontend.index')
@section('container')
    {{-- popular --}}
    <section id="popular-books" class="bookshelf py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="section-header align-center">
                        <div class="title">
                            <span>Some quality items</span>
                        </div>
                        <h2 class="section-title">Popular Books</h2>
                    </div>

                    <ul class="tabs">
                        <li data-tab-target="#all-genre" class="active tab">All Genre</li>
                        <li data-tab-target="#Fiksi" class="tab">Fiksi</li>
                        <li data-tab-target="#NonFiksi" class="tab">Non Fiksi</li>
                        <li data-tab-target="#Self-Improvement" class="tab">Self Improvement</li>
                        <li data-tab-target="#Psikologi" class="tab">Psikologi</li>
                    </ul>

                    <div class="tab-content">
                        <div id="all-genre" data-tab-content class="active">
                            <div class="row">
                                @foreach ($listbuku as $buku)
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="{{ $buku->foto }}" alt="Books" class="product-item">
                                                <a href="/pinjam">
                                                    <button type="button" class="add-to-cart"
                                                        data-product-tile="add-to-cart">Pinjam</button>
                                                    </a>
                                            </figure>
                                            <figcaption>
                                                <h3>{{ $buku->judul_buku }}</h3>
                                                <span>{{ $buku->pengarang->nama_pengarang }}</span>
                                            </figcaption>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                        </div>
                        <div id="Fiksi" data-tab-content>
                            <div class="row">
                                @foreach ($kat3 as $kategori)
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="{{ $kategori->foto }}" alt="Books" class="product-item">
                                                <a href="/pinjam">
                                                    <button type="button" class="add-to-cart"
                                                        data-product-tile="add-to-cart">Pinjam</button>
                                                    </a>
                                            </figure>
                                            <figcaption>
                                                <h3>{{ $kategori->judul_buku }}</h3>
                                                <span>{{ $kategori->pengarang->nama_pengarang }}</span>

                                            </figcaption>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div id="NonFiksi" data-tab-content>
                            <div class="row">
                                @foreach ($kat1 as $kategori)
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="{{ $kategori->foto }}" alt="Books" class="product-item">
                                                <a href="/pinjam">
                                                    <button type="button" class="add-to-cart"
                                                        data-product-tile="add-to-cart">Pinjam</button>
                                                    </a>
                                            </figure>
                                            <figcaption>
                                                <h3>{{ $kategori->judul_buku }}</h3>
                                                <span>{{ $kategori->pengarang->nama_pengarang }}</span>

                                            </figcaption>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div id="Self-Improvement" data-tab-content>


                            <div class="row">
                                @foreach ($kat2 as $kategori)
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="{{ $kategori->foto }}" alt="Books" class="product-item">
                                                <a href="/pinjam">
                                                    <button type="button" class="add-to-cart"
                                                        data-product-tile="add-to-cart">Pinjam</button>
                                                    </a>
                                            </figure>
                                            <figcaption>
                                                <h3>{{ $kategori->judul_buku }}</h3>
                                                <span>{{ $kategori->pengarang->nama_pengarang }}</span>

                                            </figcaption>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div id="Psikologi" data-tab-content>
                            <div class="row">
                                @foreach ($kat4 as $kategori)
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="{{ $kategori->foto }}" alt="Books" class="product-item">
                                                <a href="/pinjam">
                                                    <button type="button" class="add-to-cart"
                                                        data-product-tile="add-to-cart">Pinjam</button>
                                                    </a>
                                            </figure>
                                            <figcaption>
                                                <h3>{{ $kategori->judul_buku }}</h3>
                                                <span>{{ $kategori->pengarang->nama_pengarang }}</span>

                                            </figcaption>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                    </div>

                </div><!--inner-tabs-->

            </div>
        </div>
    </section>
@endsection
