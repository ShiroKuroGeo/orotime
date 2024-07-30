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

        @include('components.cusrating')

    </main>
</x-layout.customerApp>
