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
                                                href="{{ route('getCategory', ['cat' => 'All Collection' ]) }}">
                                                <span class="animate-target text-truncate">All Collection</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12 p-0">
                                    <div class="position-relative d-flex min-w-0 align-items-center">
                                        <div class="min-w-0 ps-3">
                                            <a class="nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1"
                                                href="{{ route('getCategory', ['cat' => 'All Gold' ]) }}">
                                                <span class="animate-target text-truncate">All Gold</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12 p-0">
                                    <div class="position-relative d-flex min-w-0 align-items-center">
                                        <div class="min-w-0 ps-3">
                                            <a class="nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1"
                                                href="{{ route('getCategory', ['cat' => 'All Silver' ]) }}">
                                                <span class="animate-target text-truncate">All Silver</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12 p-0">
                                    <div class="position-relative d-flex min-w-0 align-items-center">
                                        <div class="min-w-0 ps-3">
                                            <a class="nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1"
                                                href="{{ route('getCategory', ['cat' => 'Best Seller' ]) }}">
                                                <span class="animate-target text-truncate">Best Seller</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12 p-0">
                                    <div class="position-relative d-flex min-w-0 align-items-center">
                                        <div class="min-w-0 ps-3">
                                            <a class="nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1"
                                                href="{{ route('getCategory', ['cat' => 'Best Reviews' ]) }}">
                                                <span class="animate-target text-truncate">Best Reviews</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12 p-0">
                                    <div class="position-relative d-flex min-w-0 align-items-center">
                                        <div class="min-w-0 ps-3">
                                            <a class="nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1"
                                                href="{{ route('getCategory', ['cat' => 'Bracelets' ]) }}">
                                                <span class="animate-target text-truncate">Bracelets</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12 p-0">
                                    <div class="position-relative d-flex min-w-0 align-items-center">
                                        <div class="min-w-0 ps-3">
                                            <a class="nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1"
                                                href="{{ route('getCategory', ['cat' => 'Earrings' ]) }}">
                                                <span class="animate-target text-truncate">Earrings</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12 p-0">
                                    <div class="position-relative d-flex min-w-0 align-items-center">
                                        <div class="min-w-0 ps-3">
                                            <a class="nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1"
                                                href="{{ route('getCategory', ['cat' => 'Rings' ]) }}">
                                                <span class="animate-target text-truncate">Rings</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-12 p-0">
                                    <div class="position-relative d-flex min-w-0 align-items-center">
                                        <div class="min-w-0 ps-3">
                                            <a class="nav-link animate-underline stretched-link fs-base fw-semibold p-0 mb-1"
                                                href="{{ route('getCategory', ['cat' => 'Necklace' ]) }}">
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


                                @for ($i = 1; $i <= 12; $i++)
                                    <div class="col">
                                        <div class="card product-card h-100 bg-transparent border-0 shadow-none">
                                            <div class="position-relative z-2">
                                                <a class="d-block p-2 p-lg-3" href="{{ route('getPurchase', ['pid' => $i]) }}">
                                                    <img src="{{ asset('images/orotime-images/follow1.jpg') }}"
                                                        alt="Image" class="img-fluid w-100 h-100">
                                                </a>
                                            </div>
                                            <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-0">
                                                <h3 class="fs-sm lh-base mb-0">
                                                    <a class="text-primary hover-effect-underline fw-normal"
                                                        href="#">Silver Ring</a>
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
                                                <a class="d-block p-2 p-lg-3" href="#">
                                                    <img src="{{ asset('images/orotime-images/follow1.jpg') }}"
                                                        alt="Image" class="img-fluid w-100 h-100">
                                                </a>
                                            </div>
                                            <div class="card-body pt-0 px-1 px-md-2 px-lg-3 pb-0">
                                                <h3 class="fs-sm lh-base mb-0">
                                                    <a class="text-primary hover-effect-underline fw-normal"
                                                        href="{{ route('getPurchase', ['pid' => $i]) }}">Silver Ring
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
        @include('components.cusrating')
    </main>
</x-layout.customerApp>
