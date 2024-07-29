<x-layout.customerApp>
    <div class="container my-lg-5 my-3">
        <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">

            <div class="col-lg-3">
                @include('components.customerDashboard')
            </div>

            <div class="col-lg-9">
                <div class="ps-xl-0">

                    <div class="d-flex align-items-center justify-content-between pb-3 mb-1 mb-sm-2 mb-md-3">
                        <h1 class="h2 me-3 mb-0">Wishlist</h1>
                        <div class="nav">
                            <a class="nav-link animate-underline px-0 py-1 py-ms-2" href="#wishlistModal"
                                data-bs-toggle="modal">
                                <i class="ci-plus fs-base me-1"></i>
                                <span class="animate-target">Add wishlist</span>
                            </a>
                        </div>
                    </div>

                    <div class="border-bottom"></div>

                    <div class="nav align-items-center mb-4">
                        <div class="form-checkl nav-link animate-underline fs-lg ps-0 pe-2 py-2 mt-n1 me-4">
                            <input type="checkbox" class="form-check-input" id="wishlist-master" checked="">
                            <label for="wishlist-master" class="form-check-label animate-target mt-1 ms-2">Unselect
                                all</label>
                        </div>
                        <div class="d-flex flex-wrap" id="action-buttons">
                            <a class="nav-link animate-underline px-0 pe-sm-2 py-2 me-4" href="#!">
                                <i class="ci-shopping-cart fs-base me-2"></i>
                                <span class="animate-target d-none d-md-inline">Add to cart</span>
                            </a>
                            <a class="nav-link animate-underline px-0 py-2" href="#!">
                                <i class="ci-trash fs-base me-1"></i>
                                <span class="animate-target d-none d-md-inline">Remove selected</span>
                            </a>
                        </div>
                    </div>

                    <div class="row row-cols-2 row-cols-md-3 g-4" id="wishlistSelection">

                        <div class="col">
                            <div class="product-card animate-underline hover-effect-opacity bg-body rounded">
                                <div class="position-relative">
                                    <div class="position-absolute top-0 end-0 z-1 pt-1 pe-1 mt-2 me-2">
                                        <div class="form-check fs-lg">
                                            <input type="checkbox" class="form-check-input select-card-check"
                                                checked="">
                                        </div>
                                    </div>
                                    <a class="d-block rounded-top overflow-hidden p-3 p-sm-4" href="#">
                                        <div class="ratio-1x1" style="--cz-aspect-ratio: calc(240 / 258 * 100%)">
                                            <img src="{{ asset('images/orotime-images/Flyer1.jpg') }}" alt="VR Glasses">
                                        </div>
                                    </a>
                                </div>
                                <div class="w-100 min-w-0 px-1 pb-2 px-sm-3 pb-sm-3">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <div class="d-flex gap-1 fs-xs">
                                            @for ($i = 0; $i < 5; $i++)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z" />
                                                </svg>
                                            @endfor
                                        </div>
                                        <span class="text-body-tertiary fs-xs">(123)</span>
                                    </div>
                                    <h3 class="pb-1 mb-2">
                                        <a class="d-block fs-sm fw-medium text-truncate" href="#">
                                            <span class="animate-target">Golder Ring with small handler</span>
                                        </a>
                                    </h3>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="h5 lh-1 mb-0">$340.99</div>
                                        <button type="button"
                                            class="product-card-button btn btn-icon btn-primary animate-slide-end ms-2"
                                            aria-label="Add to Cart">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                                <path
                                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="button"
        class="fixed-bottom z-sticky w-100 btn btn-lg btn-primary border-0 border-top border-light border-opacity-10 rounded-0 pb-4 d-lg-none"
        data-bs-toggle="offcanvas" data-bs-target="#accountSidebar" aria-controls="accountSidebar"
        data-bs-theme="light">
        <i data-feather="user"></i>
        Account menu
    </button>
</x-layout.customerApp>
