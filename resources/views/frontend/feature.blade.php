@extends('frontend.index')
@section('container')
    {{-- featured --}}
    <section id="featured-books" class="py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="section-header align-center">
                        <div class="title">
                            <span>Some quality items</span>
                        </div>
                        <h2 class="section-title">Featured Books</h2>
                    </div>

                    <div class="product-list" data-aos="fade-up">
                        <div class="row">
                            @foreach ($listbuku as $target => $buku)
                                @if ($target == 13)
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="{{ $buku->foto }}" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart"
                                                    data-product-tile="add-to-cart">Add
                                                    to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>{{ $buku->judul_buku }}</h3>
                                                <span>{{ $buku->pengarang->nama_pengarang }}</span>
                                            </figcaption>
                                        </div>
                                    </div>
                                @elseif($target == 14)
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="{{ $buku->foto }}" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart"
                                                    data-product-tile="add-to-cart">Add
                                                    to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>{{ $buku->judul_buku }}</h3>
                                                <span>{{ $buku->pengarang->nama_pengarang }}</span>
                                            </figcaption>
                                        </div>
                                    </div>
                                @elseif($target == 1)
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="{{ $buku->foto }}" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart"
                                                    data-product-tile="add-to-cart">Add
                                                    to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>{{ $buku->judul_buku }}</h3>
                                                <span>{{ $buku->pengarang->nama_pengarang }}</span>
                                            </figcaption>
                                        </div>
                                    </div>
                                @elseif($target == 15)
                                    <div class="col-md-3">
                                        <div class="product-item">
                                            <figure class="product-style">
                                                <img src="{{ $buku->foto }}" alt="Books" class="product-item">
                                                <button type="button" class="add-to-cart"
                                                    data-product-tile="add-to-cart">Add
                                                    to
                                                    Cart</button>
                                            </figure>
                                            <figcaption>
                                                <h3>{{ $buku->judul_buku }}</h3>
                                                <span>{{ $buku->pengarang->nama_pengarang }}</span>
                                            </figcaption>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div><!--ft-books-slider-->
                    </div><!--grid-->


                </div><!--inner-content-->
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="btn-wrap align-right">
                        <a href="/popular" class="btn-accent-arrow">Lihat Semua buku<i
                                class="icon icon-ns-arrow-right"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
