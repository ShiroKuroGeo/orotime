<x-layout.customerApp>
    @section('title', 'Orotime Home')
    <main class="container">
        <section class="position-relative">
            <div class="container pt-md-5 py-xl-0" data-aos="zoom-in">
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
            <div class="text-center mt-4 mb-3">
                <h2 class="h2 w-100 fw-bold pb-2 mb-1 text-primary">
                    View Collections
                </h2>
                <span>
                    Explore our stunning jewelry collection. Click here to view more exquisite pieces.
                </span>
            </div>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-4 gy-5">

                <div class="col" data-aos="fade-right">
                    <div class="hover-effect-scale">
                        <h2 class="h2 d-flex w-100 pb-2 mb-1">
                            <a class="animate-underline animate-target text-primary d-inline text-truncate"
                                href="{{ route('getCategory', ['cat' => 'necklaces']) }}">Necklaces</a>
                        </h2>
                        <a class="d-block bg-body-tertiary rounded mb-4"
                            href="{{ route('getCategory', ['cat' => 'necklaces']) }}">
                            <div class="ratio" style="--c-oro-aspect-ratio: calc(184 / 258 * 100%);  height: 50vh">
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
                                href="{{ route('getCategory', ['cat' => 'earrings']) }}">Earrings</a>
                        </h2>
                        <a class="d-block bg-body-tertiary rounded mb-4"
                            href="{{ route('getCategory', ['cat' => 'earrings']) }}">
                            <div class="ratio" style="--c-oro-aspect-ratio: calc(184 / 258 * 100%);  height: 50vh">
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
                                href="{{ route('getCategory', ['cat' => 'rings']) }}">Rings</a>
                        </h2>
                        <a class="d-block bg-body-tertiary rounded mb-4"
                            href="{{ route('getCategory', ['cat' => 'rings']) }}">
                            <div class="ratio" style="--c-oro-aspect-ratio: calc(184 / 258 * 100%);  height: 50vh">
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
                                href="{{ route('getCategory', ['cat' => 'bracelets']) }}">Bracelets</a>
                        </h2>
                        <a class="d-block bg-body-tertiary rounded mb-4"
                            href="{{ route('getCategory', ['cat' => 'bracelets']) }}">
                            <div class="ratio" style="--c-oro-aspect-ratio: calc(184 / 258 * 100%);  height: 50vh">
                                <img src="{{ asset('images/orotime-images/bracelet.jpg') }}"
                                    class="hover-effect-target rounded" alt="Bracelets">
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </section>
        <section class="container my-5 py-5">
            <div class="row my-5">
                <h2 class="h1 w-100 fw-bold pb-2 mb-1 text-primary">
                    <span id="mainTyped"></span>
                </h2>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4">
                @for ($i = 1; $i < 11; $i++)
                    <div class="col" data-aos="fade-up">
                        <div class="product-card animate-underline hover-effect-opacity bg-body">
                            <div class="position-relative">
                                <a class="d-block rounded-top overflow-hidden"
                                    href="{{ route('getViewProduct', ['pid' => $i]) }}">
                                    <div class="ratio" style="--c-oro-aspect-ratio: calc(100 / 100 * 100%)">
                                        <img src="{{ asset('images/orotime-images/product-image.png') }}"
                                            alt="Ring">
                                    </div>
                                </a>
                            </div>
                            <div class="w-100 min-w-0 p-1">
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
                                        <a class="text-decoration-none" href="#" role="button"
                                            id="cartWishMore" data-bs-toggle="dropdown" aria-expanded="false">
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
                @endfor
            </div>
        </section>
        <section class="container my-5 py-5">
            <div class="container-lg text-center">
                <h1 class="h1 fw-bold col-12 px-lg-5 mx-lg-5 py-5">
                    Explore our <span class="text-primary">stunning collection</span> of pure <span
                        class="text-primary text-capitalize">gold</span> and <span
                        class="text-primary text-capitalize">silver</span> jewelry.
                </h1>
            </div>
            <div class="row row-cols-2 py-5">
                <div class="col">
                    <img src="{{ asset('images/orotime-images/Flyer1.jpg') }}" class="img-fluid" alt="Flyers">
                </div>
                <div class="col">
                    <img src="{{ asset('images/orotime-images/Flyer1.jpg') }}" class="img-fluid" alt="Flyers">
                </div>
            </div>
            <div class="d-flex justify-content-center my-3">
                <a href="#" class="nav-link customize-hover">
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
                @for ($i = 1; $i <= 10; $i++)
                    <swiper-slide>
                        <div class="col">
                            <div class="product-card animate-underline hover-effect-opacity bg-body">
                                <div class="position-relative">
                                    <a class="d-block rounded-top overflow-hidden"
                                        href="{{ route('getViewProduct', ['pid' => $i]) }}">
                                        <div class="ratio" style="--c-oro-aspect-ratio: calc(100 / 100 * 100%)">
                                            <img src="{{ asset('images/orotime-images/product-image.png') }}"
                                                alt="Ring">
                                        </div>
                                    </a>
                                </div>
                                <div class="w-100 min-w-0 p-1">
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
                                            <a class="text-decoration-none" href="#" role="button"
                                                id="cartWishMore" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i data-feather="more-horizontal" class="p-1"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="cartWishMore">
                                                <li>
                                                    <a class="dropdown-item m-0"
                                                        href="{{ route('getPurchase', ['pid' => $i]) }}">
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
        </section>
    </main>
</x-layout.customerApp>
