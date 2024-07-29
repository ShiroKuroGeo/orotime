<x-layout.customerApp>
    <main class="my-5">
        <div class="container px-5">
            <h1 class="text-capitalize text-center">{{ request()->route('cat') }}</h1>

            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-1 g-4 my-3">
                <div class="col">
                    <img src="{{ asset('images/orotime-images/product-image.jpg') }}" 
                        alt="{{ request()->route('cat') }}" class="img-fluid" data-aos="zoom-in">
                </div>
                <div class="col">
                    <img src="{{ asset('images/orotime-images/product-image.jpg') }}"
                        alt="{{ request()->route('cat') }}" class="img-fluid" data-aos="zoom-in">
                </div>
                <div class="col">
                    <img src="{{ asset('images/orotime-images/product-image.jpg') }}"
                        alt="{{ request()->route('cat') }}" class="img-fluid" data-aos="zoom-in">
                </div>
            </div>

            <div class="content my-5">
                <section class="container pb-5 mb-2 mb-sm-3 mb-lg-4 mb-xl-5">
                    <div class="row">

                        <div class="col-lg-3 pb-2 pb-sm-3 pb-md-4 mb-5 mb-lg-0">
                            <h2 class="h3 border-bottom pb-3 pb-md-4 mb-4">Categories</h2>
                            <div class="row nav g-1 g-sm-2">
                                <div class="col-sm-6 col-md-4 col-lg-12 p-0">
                                    <div class="position-relative d-flex min-w-0 align-items-center">
                                        <div class="min-w-0 ps-3">
                                            <a class="nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1"
                                                href="shop-catalog-grocery.html">
                                                <span class="animate-target text-truncate">All Collection</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12 p-0">
                                    <div class="position-relative d-flex min-w-0 align-items-center">
                                        <div class="min-w-0 ps-3">
                                            <a class="nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1"
                                                href="shop-catalog-grocery.html">
                                                <span class="animate-target text-truncate">All Gold</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12 p-0">
                                    <div class="position-relative d-flex min-w-0 align-items-center">
                                        <div class="min-w-0 ps-3">
                                            <a class="nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1"
                                                href="shop-catalog-grocery.html">
                                                <span class="animate-target text-truncate">All Silver</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12 p-0">
                                    <div class="position-relative d-flex min-w-0 align-items-center">
                                        <div class="min-w-0 ps-3">
                                            <a class="nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1"
                                                href="shop-catalog-grocery.html">
                                                <span class="animate-target text-truncate">Best Seller</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12 p-0">
                                    <div class="position-relative d-flex min-w-0 align-items-center">
                                        <div class="min-w-0 ps-3">
                                            <a class="nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1"
                                                href="shop-catalog-grocery.html">
                                                <span class="animate-target text-truncate">Best Reviews</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12 p-0">
                                    <div class="position-relative d-flex min-w-0 align-items-center">
                                        <div class="min-w-0 ps-3">
                                            <a class="nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1"
                                                href="shop-catalog-grocery.html">
                                                <span class="animate-target text-truncate">Bracelets</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12 p-0">
                                    <div class="position-relative d-flex min-w-0 align-items-center">
                                        <div class="min-w-0 ps-3">
                                            <a class="nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1"
                                                href="shop-catalog-grocery.html">
                                                <span class="animate-target text-truncate">Earrings</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12 p-0">
                                    <div class="position-relative d-flex min-w-0 align-items-center">
                                        <div class="min-w-0 ps-3">
                                            <a class="nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1"
                                                href="shop-catalog-grocery.html">
                                                <span class="animate-target text-truncate">Rings</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12 p-0">
                                    <div class="position-relative d-flex min-w-0 align-items-center">
                                        <div class="min-w-0 ps-3">
                                            <a class="nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1"
                                                href="shop-catalog-grocery.html">
                                                <span class="animate-target text-truncate">Necklace</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-9">
                            <div
                                class="d-flex align-items-center justify-content-between border-bottom pb-3 pb-md-4 mb-3 mb-lg-4">
                                <h2 class="h3 mb-0">Products</h2>
                                <div class="nav ms-3">
                                    <a class="nav-link animate-underline px-0 py-2" data-bs-toggle="collapse"
                                        href="#collapseViewMore" role="button" aria-expanded="false"
                                        aria-controls="collapseViewMore">
                                        <span class="animate-target">View all</span>
                                        <i class="ci-chevron-right fs-base ms-1"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Products grid -->
                            <div class="row row-cols-2 row-cols-sm-1 row-cols-md-4 row-cols-lg-3 row-cols-xl-4 g-4">


                                @for ($i = 1; $i <= 8; $i++)
                                    <div class="col">
                                        <div class="card product-card h-100 bg-transparent border-0 shadow-none">
                                            <div class="position-relative z-2">
                                                <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                                                    <img src="{{ asset('images/orotime-images/follow1.jpg') }}"
                                                        alt="Image" class="img-fluid w-100 h-100">
                                                </a>
                                            </div>
                                            <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-0">
                                                <h3 class="fs-sm lh-base mb-0">
                                                    <a class="text-primary hover-effect-underline fw-normal"
                                                        href="shop-product-grocery.html">Silver Ring</a>
                                                </h3>
                                                <div class="h6 mb-2 text-body-secondary">Wedding Ring</div>
                                            </div>
                                            <div class="fs-xs text-dark px-1 px-md-2 px-lg-3 pb-0 pb-md-3">
                                                P152.00
                                            </div>
                                        </div>
                                    </div>
                                @endfor

                            </div>

                            <!-- Products grid -->

                            <div class="row row-cols-2 row-cols-sm-1 row-cols-md-4 row-cols-lg-3 row-cols-xl-4 g-4 collapse"
                                id="collapseViewMore">


                                @for ($i = 9; $i <= 16; $i++)
                                    <div class="col">
                                        <div class="card product-card h-100 bg-transparent border-0 shadow-none">
                                            <div class="position-relative z-2">
                                                <a class="d-block p-2 p-lg-3" href="shop-product-grocery.html">
                                                    <img src="{{ asset('images/orotime-images/follow1.jpg') }}"
                                                        alt="Image" class="img-fluid w-100 h-100">
                                                </a>
                                            </div>
                                            <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-0">
                                                <h3 class="fs-sm lh-base mb-0">
                                                    <a class="text-primary hover-effect-underline fw-normal"
                                                        href="shop-product-grocery.html">Silver Ring
                                                        {{ $i }}</a>
                                                </h3>
                                                <div class="h6 mb-2 text-body-secondary">Wedding Ring</div>
                                            </div>
                                            <div class="fs-xs text-dark px-1 px-md-2 px-lg-3 pb-0 pb-md-3">
                                                P152.00
                                            </div>
                                        </div>
                                    </div>
                                @endfor

                            </div>

                        </div>
                    </div>
            </div>
            </section>
        </div>
        </div>

        <section class="container pb-4 pb-md-5 mb-2 mb-sm-0 mb-lg-2 mb-xl-4">

            <h2 class="h3 border-bottom pb-4 mb-0">Best Ratings</h2>


            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">

                @for ($i = 1; $i < 5; $i++)
                    <div class="col">
                        <div class="product-card animate-underline hover-effect-opacity bg-body">
                            <div class="position-relative">
                                <a class="d-block rounded-top overflow-hidden"
                                    href="{{ route('getViewProduct', ['pid' => $i]) }}">
                                    <div class="ratio" style="--c-oro-aspect-ratio: calc(100 / 100 * 100%)">
                                        <img src="{{ asset('images/orotime-images/product-image.jpg') }}"
                                            alt="Ring">
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
                                    <button type="button" class="btn btn-primary ms-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="white" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor

            </div>
        </section>
    </main>
</x-layout.customerApp>
