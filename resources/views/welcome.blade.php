<x-layout.app>
    @section('title', 'Orotime Jewelry')
    <main class="container">
        <section class="position-relative">
            <div class="pt-md-5 py-0" data-aos="zoom-in">
                <div class="row align-items-center">
                    <video class="w-100 h-100" autoplay loop muted>
                        <source src="{{ asset('video/jewelryvideo.mp4') }}" type="video/mp4" />
                    </video>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="row row-cols-2 row-cols-md-3 g-3">

                <div class="col">
                    <div class="d-flex flex-column flex-xxl-row align-items-center">
                        <div class="rounded-circle p-4 mb-3 mb-xxl-0">
                            <i style="width: 100px; height: 100px" data-feather="credit-card"></i>
                        </div>
                        <div class="text-center text-xxl-start ps-xxl-3">
                            <h3 class="h6 mb-1 text-primary fw-bold">0% Layaways Interest</h3>
                            <p class="fs-sm mb-0">Enjoy 0% Interest Layaways: Shop now, pay later with no additional
                                charges!</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="d-flex flex-column flex-xxl-row align-items-center">
                        <div class="rounded-circle p-4 mb-3 mb-xxl-0">
                            <i style="width: 100px; height: 100px" data-feather="shield"></i>
                        </div>
                        <div class="text-center text-xxl-start ps-xxl-3">
                            <h3 class="h6 mb-1 text-primary fw-bold">Secure Payment</h3>
                            <p class="fs-sm mb-0">Secure Payment Guaranteed: Shop with confidence knowing your
                                transactions are safe and protected.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="d-flex flex-column flex-xxl-row align-items-center">
                        <div class="rounded-circle p-4 mb-3 mb-xxl-0">
                            <i style="width: 100px; height: 100px" data-feather="globe"></i>
                        </div>
                        <div class="text-center text-xxl-start ps-xxl-3">
                            <h3 class="h6 mb-1 text-primary fw-bold">Shipping World Wide</h3>
                            <p class="fs-sm mb-0">Worldwide Shipping Available: Get your favorite items delivered
                                anywhere across the globe.</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="container my-5 py-5">
            <div class="text-center my-5">
                <h2 class="h2 w-100 fw-bold pb-2 mb-1 text-primary">
                    View Collections
                </h2>
                <span>
                    Explore our stunning jewelry collection. Click here to view more exquisite pieces.
                </span>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 gy-5">
                <div class="col" data-aos="fade-right">
                    <div class="hover-effect-scale">
                        <h2 class="h2 d-flex w-100 pb-2 mb-1">
                            <a class="animate-underline animate-target text-primary d-inline text-truncate"
                                href="{{ route('CategoryProduct', ['cat' => 'necklaces']) }}">Necklaces</a>
                        </h2>
                        <a class="d-block bg-body-tertiary rounded mb-4"
                            href="{{ route('CategoryProduct', ['cat' => 'necklaces']) }}">
                            <div class="ratio" style="--c-oro-aspect-ratio: calc(184 / 258 * 100%); height: 50vh">
                                <img src="{{ asset('images/orotime-images/necklace.jpg') }}"
                                    class="hover-effect-target rounded object-fit-cover" alt="Necklaces">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col" data-aos="fade-right">
                    <div class="hover-effect-scale">
                        <h2 class="h2 d-flex w-100 pb-2 mb-1">
                            <a class="animate-underline animate-target text-primary d-inline text-truncate"
                                href="{{ route('CategoryProduct', ['cat' => 'earrings']) }}">Earrings</a>
                        </h2>
                        <a class="d-block bg-body-tertiary rounded mb-4"
                            href="{{ route('CategoryProduct', ['cat' => 'earrings']) }}">
                            <div class="ratio" style="--c-oro-aspect-ratio: calc(184 / 258 * 100%); height: 50vh">
                                <img src="{{ asset('images/orotime-images/earring.jpg') }}"
                                    class="hover-effect-target rounded object-fit-cover" alt="Earrings">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col" data-aos="fade-left">
                    <div class="hover-effect-scale">
                        <h2 class="h2 d-flex w-100 pb-2 mb-1">
                            <a class="animate-underline animate-target text-primary d-inline text-truncate"
                                href="{{ route('CategoryProduct', ['cat' => 'rings']) }}">Rings</a>
                        </h2>
                        <a class="d-block bg-body-tertiary rounded mb-4"
                            href="{{ route('CategoryProduct', ['cat' => 'rings']) }}">
                            <div class="ratio" style="--c-oro-aspect-ratio: calc(184 / 258 * 100%); height: 50vh">
                                <img src="{{ asset('images/orotime-images/ring.jpg') }}"
                                    class="hover-effect-target rounded object-fit-cover" alt="Rings">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col" data-aos="fade-left">
                    <div class="hover-effect-scale">
                        <h2 class="h2 d-flex w-100 pb-2 mb-1">
                            <a class="animate-underline animate-target text-primary d-inline text-truncate"
                                href="{{ route('CategoryProduct', ['cat' => 'bracelets']) }}">Bracelets</a>
                        </h2>
                        <a class="d-block bg-body-tertiary rounded mb-4"
                            href="{{ route('CategoryProduct', ['cat' => 'bracelets']) }}">
                            <div class="ratio" style="--c-oro-aspect-ratio: calc(184 / 258 * 100%); height: 50vh">
                                <img src="{{ asset('images/orotime-images/bracelet.jpg') }}"
                                    class="hover-effect-target rounded object-fit-cover" alt="Bracelets">
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </section>
        <section class="container my-5 py-5">
            <div class="row my-5">
                <h2 class="h2 w-100 fw-bold pb-2 mb-1 text-primary">
                    Shop Now
                </h2>
            </div>
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 gy-5">
                @for ($i = 1; $i <= 10; $i++)
                    <div class="col" data-aos="fade-up">
                        <div class="product-card animate-underline hover-effect-opacity bg-body">
                            <div class="position-relative">
                                <a class="d-block rounded-top overflow-hidden"
                                    href="{{ route('viewProduct', ['pid' => encryptData($i)]) }}">
                                    <div class="ratio" style="--c-oro-aspect-ratio: calc(100 / 100 * 100%)">
                                        <img src="{{ asset('images/orotime-images/product-image.png') }}"
                                            alt="Ring">
                                    </div>
                                </a>
                            </div>
                            <div class="w-100 min-w-0 px-1 py-2 px-sm-3 py-sm-3">
                                <h3 class="pb-1 mb-2">
                                    <a class="d-block fs-sm fw-medium text-truncate"
                                        href="{{ route('viewProduct', ['pid' => encryptData($i)]) }}">
                                        <span class="animate-target">Ring handmade 15k grams Japan</span>
                                    </a>
                                </h3>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="h5 lh-1 mb-0">&#8369; 899.00</div>
                                    <a type="button"
                                        href="{{ route('guestPurchaser', ['pid' => encryptData($i)]) }}"
                                        class="product-card-button btn btn-icon btn-primary animate-slide-end ms-2"
                                        aria-label="Add to Cart">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="white" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor

            </div>
        </section>
        <section class="container my-5 py-5">
            <div class="container-lg text-center">
                <h1 class="h1 fw-bold col-12 px-lg-5 mx-lg-5">
                    Explore our <span class="text-primary">stunning collection</span> of pure <span
                        class="text-primary text-capitalize">gold</span> and <span
                        class="text-primary text-capitalize">silver</span> jewelry.
                </h1>
            </div>
            <div class="row row-cols-2">
                <div class="col">
                    <img src="{{ asset('images/orotime-images/Flyer1.jpg') }}" class="img-fluid" alt="Flyers">
                </div>
                <div class="col">
                    <img src="{{ asset('images/orotime-images/Flyer1.jpg') }}" class="img-fluid" alt="Flyers">
                </div>
            </div>
            <div class="d-flex justify-content-center my-5">
                <a href="{{ route('guest-explore') }}" class="nav-link customize-hover">
                    Explore More
                    <i data-feather="chevrons-right" class="pt-1"></i>
                </a>
            </div>
        </section>
        <section class="container my-5 py-5">
            <div class="d-flex justify-content-between align-items-between py-3">
                <h1 class="">
                    <span class="fw-bold h1" style="font-size: 50px">
                        FLASH SALE
                    </span>
                    <span class="position-absolute">
                        <i data-feather="tag" style="height: 35px; width: 100%; color: red;"></i>
                    </span>
                </h1>
                <h1 class="text-dark fs-6 my-auto py-2 px-4 display-1">
                    1:00:00
                </h1>
            </div>
            <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30"
                slides-per-view="2"
                breakpoints='{"320": {"slidesPerView": 1}, "768": {"slidesPerView": 2}, "1024": {"slidesPerView": 5}}'>
                @for ($i = 1; $i < 11; $i++)
                    <swiper-slide>
                        <div class="col" data-aos="fade-up">
                            <div class="product-card animate-underline hover-effect-opacity bg-body">
                                <div class="position-relative">
                                    <a class="d-block rounded-top overflow-hidden"
                                        href="{{ route('viewProduct', ['pid' => encryptData($i)]) }}">
                                        <div class="ratio" style="--c-oro-aspect-ratio: calc(100 / 100 * 100%)">
                                            <img src="{{ asset('images/orotime-images/product-image.png') }}"
                                                alt="Ring">
                                        </div>
                                    </a>
                                </div>
                                <div class="w-100 min-w-0 px-1 py-2 px-sm-3 py-sm-3">
                                    <h3 class="pb-1 mb-2">
                                        <a class="d-block fs-sm fw-medium text-truncate"
                                            href="{{ route('viewProduct', ['pid' => encryptData($i)]) }}">
                                            <span class="animate-target">Ring handmade 15k grams Japan</span>
                                        </a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="h5 lh-1 mb-0">&#8369; 899.00</div>
                                        <a type="button"
                                            href="{{ route('guestPurchaser', ['pid' => encryptData($i)]) }}"
                                            class="product-card-button btn btn-icon btn-primary animate-slide-end ms-2"
                                            aria-label="Add to Cart">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="white" class="bi bi-cart-fill" viewBox="0 0 16 16">
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
        </section>
    </main>
</x-layout.app>
