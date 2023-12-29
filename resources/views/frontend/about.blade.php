@extends('frontend.index')
@section('container')
    <div class="site-banner">
        <div class="banner-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="colored">
                            <h1 class="page-title">About Us</h1>
                            <div class="breadcum-items">
                                <span class="item"><a href="index.html">Home /</a></span>
                                <span class="item colored">About Us</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="chief-detail padding-medium">
        <div class="container">
            <div class="row">
                <div class="single-image col-md-12">
                    <p>Proyek kami adalah pengembangan sistem perpustakaan online yang bertujuan untuk mengatasi tantangan
                        dalam pengelolaan perpustakaan dan proses peminjaman sebelum era digitalisasi. Dengan adopsi
                        teknologi, kami berusaha meningkatkan efisiensi dan aksesibilitas dalam mengelola koleksi
                        perpustakaan serta memfasilitasi proses peminjaman buku secara lebih efektif. Melalui sistem ini,
                        pengguna dapat dengan mudah mencari dan meminjam buku secara daring, mengurangi kerumitan
                        administratif, dan meningkatkan keterlibatan masyarakat terhadap kegiatan literasi. Tujuan utama
                        proyek ini adalah menyederhanakan pengelolaan perpustakaan tradisional menjadi pengalaman yang lebih
                        modern dan terhubung secara digital.</p>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title mb-4">Our Team</h3>
                </div>
            </div>

            <div class="row justify-content-around">
                @foreach ($listTeam as $team)
                    <div class="col-md-4">

                        <div class="team-member text-center pb-5">

                            <figure>
                                <a href="#"><img src="{{$team->foto}}" alt="post"
                                        class="member-image"></a>
                            </figure>

                            <div class="member-details text-center">
                                <h4>{{$team->nama}}</h4>
                                <div class="designation colored">{{$team->asal}}</div>
                                <div class="designation colored">{{$team->roles}}</div>
                               
                            </div>

                        </div>

                    </div>
                @endforeach
                <!--col-md-3-->


            </div>


        </div>
    </section>
@endsection
