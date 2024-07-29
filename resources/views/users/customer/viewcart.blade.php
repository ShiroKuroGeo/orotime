<x-layout.customerApp>

    <main class="content-wrapper">

        <section class="container pb-5 mb-2 mb-md-3 mb-lg-4 mb-xl-5 pt-3">
            <h1 class="h3 mb-4">Shopping Cart</h1>
            <div class="row">

                <div class="col-lg-8">
                    <div class="pe-lg-2 pe-xl-3 me-xl-3">
                        <p class="fs-sm">Buy <span class="text-dark-emphasis fw-semibold">$183</span> more to get <span
                                class="text-dark-emphasis fw-semibold">Free Shipping</span></p>

                        <table class="table position-relative z-2 mb-4">
                            <thead>
                                <tr>
                                    <th scope="col" class="fs-sm fw-normal py-3 ps-0"><span
                                            class="text-body">Product</span></th>
                                    <th scope="col" class="text-body fs-sm fw-normal py-3 d-none d-xl-table-cell">
                                        <span class="text-body">Price</span>
                                    </th>
                                    <th scope="col" class="text-body fs-sm fw-normal py-3 d-none d-md-table-cell">
                                        <span class="text-body">Quantity</span>
                                    </th>
                                    <th scope="col" class="text-body fs-sm fw-normal py-3 d-none d-md-table-cell">
                                        <span class="text-body">Total</span>
                                    </th>
                                    <th scope="col" class="py-0 px-0">
                                        <div class="nav justify-content-end">
                                            <button type="button"
                                                class="nav-link d-inline-block text-decoration-underline text-nowrap py-3 px-0">Clear
                                                cart</button>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                @for ($i = 0; $i < 3; $i++)
                                    <tr>
                                        <td class="py-3 ps-0">
                                            <div class="d-flex align-items-center">
                                                <a class="flex-shrink-0" href="#">
                                                    <img src="{{ asset('images/orotime-images/flyer1.jpg') }}"
                                                        width="110" alt="Golden Retriever Ring">
                                                </a>
                                                <div class="w-100 min-w-0 ps-2 ps-xl-3">
                                                    <h5 class="d-flex animate-underline mb-2">
                                                        <a class="d-block fs-sm fw-medium text-truncate animate-target"
                                                            href="#">Golden Retriever Ring</a>
                                                    </h5>
                                                    <ul class="list-unstyled gap-1 fs-xs mb-0">
                                                        <li><span class="text-body-secondary">Color:</span> <span
                                                                class="text-dark-emphasis fw-medium">Gold</span></li>
                                                        <li><span class="text-body-secondary">Category:</span> <span
                                                                class="text-dark-emphasis fw-medium">Ring</span></li>
                                                        <li class="d-xl-none"><span
                                                                class="text-body-secondary">Price:</span>
                                                            <span class="text-dark-emphasis fw-medium">$899.00</span>
                                                        </li>
                                                    </ul>
                                                    <div class="count-input rounded-2 d-md-none mt-3">
                                                        <button type="button" class="btn btn-sm btn-icon"
                                                            data-decrement="" aria-label="Decrement quantity">
                                                            <i data-feather="minus" class="fs-base p-2"></i>
                                                        </button>
                                                        <input type="number" class="form-control form-control-sm"
                                                            value="1" readonly="">
                                                        <button type="button" class="btn btn-sm btn-icon"
                                                            data-increment="" aria-label="Increment quantity">
                                                            <i data-feather="plus" class="fs-base p-2"> </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="h6 py-3 d-none d-xl-table-cell">$899.00</td>
                                        <td class="py-3 d-none d-md-table-cell">
                                            <div class="count-input">
                                                <button type="button" class="btn btn-icon" data-decrement=""
                                                    aria-label="Decrement quantity">
                                                    <i data-feather="minus" class="fs-base p-2"></i>
                                                </button>
                                                <input type="number" class="form-control" value="1"
                                                    readonly="">
                                                <button type="button" class="btn btn-icon" data-increment=""
                                                    aria-label="Increment quantity">
                                                    <i data-feather="plus" class="fs-base p-2"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <td class="h6 py-3 d-none d-md-table-cell">$899.00</td>
                                        <td class="text-end py-3 px-0">
                                            <button type="button" class="btn-close fs-sm" data-bs-toggle="tooltip"
                                                data-bs-custom-class="tooltip-sm" data-bs-title="Remove"
                                                aria-label="Remove from cart"></button>
                                        </td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>

                        <div class="nav position-relative z-2 mb-4 mb-lg-0">
                            <a class="nav-link animate-underline px-0" href="shop-catalog-electronics.html">
                                <i class="ci-chevron-left fs-lg me-1"></i>
                                <span class="animate-target">Continue shopping</span>
                            </a>
                        </div>
                    </div>
                </div>

                <aside class="col-lg-4" style="margin-top: -100px">
                    <div class="position-sticky top-0" style="padding-top: 100px">
                        <div class="bg-body-tertiary rounded-5 p-4 mb-3">
                            <div class="p-sm-2 p-lg-0 p-xl-2">
                                <h5 class="border-bottom pb-4 mb-4">Order summary</h5>
                                <ul class="list-unstyled fs-sm gap-3 mb-0">
                                    <li class="d-flex justify-content-between">
                                        Subtotal (3 items):
                                        <span class="text-dark-emphasis fw-medium">$2,427.00</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        Saving:
                                        <span class="text-danger fw-medium">-$110.00</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        Tax collected:
                                        <span class="text-dark-emphasis fw-medium">$73.40</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        Shipping:
                                        <span class="text-dark-emphasis fw-medium">Calculated at checkout</span>
                                    </li>
                                </ul>
                                <div class="border-top pt-4 mt-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <span class="fs-sm">Estimated total:</span>
                                        <span class="h5 mb-0">$2,390.40</span>
                                    </div>
                                    <a class="btn btn-lg btn-primary w-100" href="checkout-v1-delivery-1.html">
                                        Proceed to checkout
                                        <i class="ci-chevron-right fs-lg ms-1 me-n1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </section>

        <section class="container pb-4 pb-md-5 mb-2 mb-sm-0 mb-lg-2 mb-xl-4">

            <h2 class="h3 border-bottom pb-4 mb-0">Best Ratings</h2>


            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 g-4">

                @for ($i = 1; $i < 6; $i++)
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
