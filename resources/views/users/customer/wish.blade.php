<x-layout.customerApp>
    <div class="container my-3">
        <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">

            <div class="col-lg-3">
                @include('components.customerDashboard')
            </div>

            <div class="col-lg-9">
                <div class="ps-xl-0">

                    <div class="d-flex align-items-center justify-content-between pb-3 mb-1 mb-sm-2 mb-md-3">
                        <h1 class="h2 me-3 mb-0">Wishlist (21)</h1>
                        <div class="nav">
                            <a class="nav-link animate-underline px-0 py-1 py-ms-2" href="#wishlistModal"
                                data-bs-toggle="modal">
                                <i class="ci-plus fs-base me-1"></i>
                                <span class="animate-target">Add wishlist</span>
                            </a>
                        </div>
                    </div>

                    <div class="border-bottom"></div>

                    <div class="nav mb-4">
                        <a class="nav-link active" aria-current="page" href="#"> <input type="checkbox" class="me-1" name="selectWishItem" id="selectWishItem"> Select All || Unselect All</a>
                        <a class="nav-link" href="#"><i data-feather="shopping-cart" class="p-1"></i>to Cart</a>
                        <a class="nav-link" href="#"><i data-feather="x" class="p-1"></i> to Remove</a>
                    </div>

                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 g-4" id="wishlistSelection">

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
                                        <small class="h6 lh-1 mb-0">$340.99</small>
                                        <button type="button"
                                            class="product-card-button btn btn-icon btn-primary animate-slide-end ms-2"
                                            aria-label="Add to Cart">
                                            <i data-feather="shopping-cart" class="p-1"></i>
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
