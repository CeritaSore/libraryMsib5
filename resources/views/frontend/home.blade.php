@extends('frontend.index')
@section('container')
    {{-- banner --}}
    <section id="billboard">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <button class="prev slick-arrow">
                        <i class="icon icon-arrow-left"></i>
                    </button>
                    <div class="main-slider pattern-overlay">
                        @foreach ($listbuku as $buku)
                            <div class="slider-item">
                                <div class="banner-content">
                                    <h2 class="banner-title text-truncate">{{ $buku->judul_buku }}</h2>
                                    <p>{{ $buku->deskripsi }}</p>
                                    
                                </div><!--banner-content-->
                                <div style="max-height:35.7rem;max-width:24.6rem; overflow:hidden;">
                                    <img src="{{ $buku->foto }}" alt="banner" class="banner-image">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!--slider-item-->

                    <!-- <div class="slider-item">
                                            <div class="banner-content">
                                                <h2 class="banner-title">Birds gonna be Happy</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero
                                                    ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis
                                                    urna, a eu.</p>
                                                <div class="btn-wrap">
                                                    <a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
                                                            class="icon icon-ns-arrow-right"></i></a>
                                                </div>
                                            </div>
                                            <img src="images/main-banner2.jpg" alt="banner" class="banner-image">
                                        </div>slider-item-->

                    <!--slider-->

                    <button class="next slick-arrow">
                        <i class="icon icon-arrow-right"></i>
                    </button>

                </div>
            </div>
        </div>

    </section>
    {{-- quoute --}}
    <section id="quotation" class="align-center pb-5 mb-5">
        <div class="inner-content">
            <h2 class="section-title divider">Kata-Kata Hari Ini</h2>
            <blockquote data-aos="fade-up">
                <q>“Semua hal besar berasal dari awal yang kecil. Benih dari setiap kebiasaan adalah satu keputusan kecil”</q>
                <div class="author-name">James Clear | Pengarang Atomic Habits

                </div>
            </blockquote>
        </div>
    </section>
@endsection
