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
                                href="{{ route('getViewProduct', ['pid' => '1']) }}">
                                <div class="ratio" style="--c-oro-aspect-ratio: calc(100 / 100 * 100%)">
                                    <img src="{{ asset('images/orotime-images/product-image.png') }}" alt="Ring">
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
                                <div class="fs-md text-dark px-1 px-md-2 px-lg-3 pb-0 pb-md-3">
                                    &#8369;152.00
                                </div>

                                <div class="dropup fs-xs text-dark px-1 px-md-2 px-lg-3 pb-0 pb-md-3">
                                    <a class="text-decoration-none" href="#" role="button" id="cartWishMore"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i data-feather="more-horizontal" class="p-1"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cartWishMore">
                                        <li>
                                            <a class="dropdown-item m-0"
                                                href="{{ route('getPurchase', ['pid' => $i]) }}">
                                                <i data-feather="shopping-bag" class="p-1"></i>
                                                Buy
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item m-0" href="#">
                                                <i data-feather="shopping-cart" class="p-1"></i>
                                                Add to cart
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item m-0" href="#">
                                                <i data-feather="heart" class="p-1"></i>
                                                Add to Wish
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </swiper-slide>
        @endfor
    </swiper-container>

    </div>
</section>
