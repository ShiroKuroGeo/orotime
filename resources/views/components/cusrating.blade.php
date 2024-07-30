<section class="container pb-4 pb-md-5 mb-2 mb-sm-0 mb-lg-2 mb-xl-4">

    <h2 class="h3 pb-4 mb-0">Best Ratings</h2>

    <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30" slides-per-view="2"
        breakpoints='{"320": {"slidesPerView": 1}, "768": {"slidesPerView": 2}, "1024": {"slidesPerView": 5}}'>
        @for ($i = 1; $i < 11; $i++)
            <swiper-slide>
                <div class="col" data-aos="fade-up">
                    <div class="product-card animate-underline hover-effect-opacity bg-body">
                        <div class="position-relative">
                            <a class="d-block rounded-top overflow-hidden"
                                href="{{ route('viewProduct', ['pid' => '1']) }}">
                                <div class="ratio" style="--c-oro-aspect-ratio: calc(100 / 100 * 100%)">
                                    <img src="{{ asset('images/orotime-images/product-image.jpg') }}" alt="Ring">
                                </div>
                            </a>
                        </div>
                        <div class="w-100 min-w-0 px-1 py-2 px-sm-3 py-sm-3">
                            <h3 class="pb-1 mb-2">
                                <a class="d-block fs-sm fw-medium text-truncate" href="#">
                                    <span class="animate-target">Ring handmade 15k grams Japan</span>
                                </a>
                            </h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="h5 lh-1 mb-0">&#8369; 899.00</div>
                                <a type="button" href="{{ route('guestPurchaser', ['pid' => '1']) }}"
                                    class="product-card-button btn btn-icon btn-secondary animate-slide-end ms-2"
                                    aria-label="Add to Cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                                        class="bi bi-cart-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </swiper-slide>
        @endfor
    </swiper-container>

    </div>
</section>
