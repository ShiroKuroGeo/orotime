<x-layout.customerApp>

    @include('components.customerChatAssistance');
    
    <div class="container my-3">
        <div class="row pt-md-2 pt-lg-3 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-5">

            <div class="col-lg-3">
                @include('components.customerDashboard')
            </div>

            <div class="col-lg-9">
                <div class="ps-xl-0">

                    <div
                        class="d-flex align-items-center justify-content-between pb-3 mb-1 mb-sm-2 mb-md-3 border-bottom">
                        <h1 class="h2 me-3 mb-0">My Carts</h1>
                        <a href="{{ route('cus-viewcart') }}" class="btn btn-sm btn-primary">View Cart</a>
                    </div>

                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                        @for ($i = 0; $i < 10; $i++)
                            <div class="col">
                                <div class="card">
                                    <div class="ratio-1x1" style="--cz-aspect-ratio: calc(320 / 230 * 100%)">
                                        <img src="{{ asset('images/orotime-images/Flyer1.jpg') }}" class="card-img-top"
                                            alt="Image">
                                            <span class="badge text-bg-warning fs-10 product-verified-badge rounded-start-0">
                                                Sold Out
                                                <i data-feather="alert-triangle" style="width: 13px; height: 13px"></i>
                                            </span>
                                    </div>
                                    <div class="card-body p-3">
                                        <div class="d-flex align-items-center">
                                            <div class="w-100 min-w-0">
                                                <h5 class="d-flex animate-underline mb-2">
                                                    <a class="d-block fs-sm fw-medium text-truncate text-primary animate-target" href="#">Golder Retriever Ring 15k Grams</a>
                                                </h5>
                                                <div class="h6 pb-1 mb-2">$989.00</div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    {{-- <div class="count-input rounded-2">
                                                        <button type="button" class="btn btn-icon btn-sm"
                                                            data-decrement="" aria-label="Decrement quantity">
                                                            <i data-feather="minus" class="fs-base p-2"></i>
                                                        </button>
                                                        <input type="number" class="form-control form-control-sm"
                                                            value="1" readonly="">
                                                        <button type="button" class="btn btn-icon btn-sm"
                                                            data-increment="" aria-label="Increment quantity">
                                                            <i data-feather="plus" class="fs-base p-2"></i>
                                                        </button>
                                                    </div> --}}
                                                    <button type="button" class="btn btn-icon fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Add To Cart" aria-label="to cart">
                                                        <i data-feather="shopping-cart" style="width: 16px; height: 16px"></i>
                                                    </button>
                                                    <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-title="Wish" aria-label="Remove to wishlist"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor

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
