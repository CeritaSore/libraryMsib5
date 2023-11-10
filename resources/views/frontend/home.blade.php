@extends('frontend.index')
@section('content')
<section id="billboard">

    <div class="container">
    <div class="row">
        <div class="col-md-12">

            <button class="prev slick-arrow">
                <i class="icon icon-arrow-left"></i>
            </button>

            <div class="main-slider pattern-overlay">
                <div class="slider-item">
                    <div class="banner-content">
                        <h2 class="banner-title">Life of the Wild</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero
                            ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis
                            urna, a eu.</p>
                        <div class="btn-wrap">
                            <a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
                                    class="icon icon-ns-arrow-right"></i></a>
                        </div>
                    </div><!--banner-content-->
                    <img src="{{ asset('frontend/assets/images/main-banner1.jpg') }}" alt="banner" class="banner-image">
                </div><!--slider-item-->

                <div class="slider-item">
                    <div class="banner-content">
                        <h2 class="banner-title">Birds gonna be Happy</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet, libero
                            ipsum enim pharetra hac. Urna commodo, lacus ut magna velit eleifend. Amet, quis
                            urna, a eu.</p>
                        <div class="btn-wrap">
                            <a href="#" class="btn btn-outline-accent btn-accent-arrow">Read More<i
                                    class="icon icon-ns-arrow-right"></i></a>
                        </div>
                    </div><!--banner-content-->
                    <img src="{{ asset('frontend/assets/images/main-banner2.jpg') }}" alt="banner" class="banner-image">
                </div><!--slider-item-->

            </div><!--slider-->

            <button class="next slick-arrow">
                <i class="icon icon-arrow-right"></i>
            </button>

        </div>
    </div>
    </div>

    <!--<section id="quotation" class="align-center pb-5 mb-5">
		<div class="inner-content">
			<h2 class="section-title divider">Quote of the day</h2>
			<blockquote data-aos="fade-up">
				<q>“The more that you read, the more things you will know. The more that you learn, the more places
					you’ll go.”</q>
				<div class="author-name">Dr. Seuss</div>
			</blockquote>
		</div>
	</section> -->

    <section id="best-selling" class="leaf-pattern-overlay">
		<div class="corner-pattern-overlay"></div>
		<div class="container">
			<div class="row justify-content-center">

				<div class="col-md-8">

					<div class="row">

						<div class="col-md-6">
							<figure class="products-thumb">
								<img src="{{ asset('frontend/assets/images/single-image.jpg') }}" alt="book" class="single-image">
							</figure>
						</div>

						<div class="col-md-6">
							<div class="product-entry">
								<h2 class="section-title divider">Best Selling Book</h2>

								<div class="products-content">
									<div class="author-name">By Timbur Hood</div>
									<h3 class="item-title">Birds gonna be happy</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eu feugiat amet,
										libero ipsum enim pharetra hac.</p>
									<div class="item-price">$ 45.00</div>
									<div class="btn-wrap">
										<a href="#" class="btn-accent-arrow">shop it now <i
												class="icon icon-ns-arrow-right"></i></a>
									</div>
								</div>

							</div>
						</div>

					</div>
					<!-- / row -->

				</div>

			</div>
		</div>
	</section>

</section>
@endsection