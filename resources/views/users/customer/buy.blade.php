<x-layout.customerApp>
    <main class="content-wrapper">
        <div class="container py-5">
            <div class="row pt-1 pt-sm-3 pt-lg-4 pb-2 pb-md-3 pb-lg-4 pb-xl-5">

                <div class="col-lg-8 col-xl-7 mb-5 mb-lg-0">
                    <div class="d-flex flex-column gap-5 pe-xl-0">
                        
                        <div class="d-flex align-items-start" id="pciguestCollapse">
                            <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle fs-sm fw-semibold lh-1 flex-shrink-0"
                                style="width: 2rem; height: 2rem; margin-top: -.125rem">1</div>
                            <div class="flex-grow-0 flex-shrink-0 ps-3 ps-md-4" style="width: calc(100% - 2rem)">

                                <div class="ms-n5 ms-sm-0" id="inputPCI">
                                    <p class="fs-sm mb-2">Enter your personal contact information for delivery purposes.
                                        Thank you!</p>
                                    <h3 class="h6 pb-4 mb-0">Personal Contact Information</h3>

                                    <div class="mb-lg-4 " id="shippingMethod" role="list">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="purchaseFullname"
                                                placeholder="fullname">
                                            <label for="floatingfullname">Full Name</label>
                                        </div>
                                        <div class="form-floating mt-3">
                                            <input type="email" class="form-control" id="purchaseemail"
                                                placeholder="email">
                                            <label for="floatingemail">Email Address</label>
                                        </div>
                                        <div class="form-floating mt-3">
                                            <input type="number" class="form-control" id="purchaseNumber"
                                                placeholder="number">
                                            <label for="floatingNumber">(+63) </label>
                                        </div>
                                    </div>

                                    <button class="btn btn-lg btn-primary w-100 mt-3" disabled id="btnPCI"
                                        data-bs-toggle="collapse" href="#shippingCollapse" role="button"
                                        aria-expanded="false" aria-controls="shippingCollapse" type="button">
                                        Continue
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                        </svg>
                                    </button>
                                </div>

                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle fs-sm fw-semibold lh-1 flex-shrink-0"
                                style="width: 2rem; height: 2rem; margin-top: -.125rem">2</div>
                            <div class="w-100 ps-3 ps-md-4 collapse" id="shippingCollapse">
                                <h1 class="h5 mb-md-4">Shipping address</h1>
                                <form class="needs-validation" novalidate="">
                                    <div class="row g-3 g-sm-4 mb-4">
                                        <div class="col-12">
                                            <label for="shipping-email" class="form-label">Country</label>
                                            <input type="text" name="countryAddress" id="countryAddress"
                                                class="form-control">
                                        </div>
                                        <div class="col">
                                            <label for="shipping-mobile" class="form-label">Province</label>
                                            <input type="text" class="form-control form-control-lg"
                                                id="shipping-mobile">
                                        </div>
                                        <div class="col">
                                            <label for="shipping-mobile" class="form-label">City</label>
                                            <input type="text" class="form-control form-control-lg"
                                                id="shipping-mobile">
                                        </div>
                                        <div class="col">
                                            <label for="shipping-postcode" class="form-label">Postcode</label>
                                            <input type="text" class="form-control form-control-lg"
                                                id="shipping-postcode" required="">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="shipping-address" class="form-label">House / apartment number and
                                            street address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-lg"
                                            id="shipping-address" required="">
                                    </div>
                                    <button class="btn btn-lg btn-primary w-100" type="button"
                                        data-bs-toggle="collapse" href="#paymentCollapse" role="button"
                                        aria-expanded="false" aria-controls="paymentCollapse" type="button">
                                        Continue
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle fs-sm fw-semibold lh-1 flex-shrink-0"
                                style="width: 2rem; height: 2rem; margin-top: -.125rem">3</div>
                            <div class="w-100 ps-3 ps-md-4 collapse" id="paymentCollapse">
                                <h2 class="h5 mb-0">Payment</h2>
                                <div class="mb-4" id="paymentMethod" role="list">

                                    <div class="mt-4">
                                        <div class="form-check mb-0">
                                            <label class="form-check-label w-100 text-dark-emphasis fw-semibold">
                                                <input type="radio" class="form-check-input fs-base me-2 me-sm-3"
                                                    name="payment-method">
                                                Cash on delivery
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <div class="form-check mb-0" role="listitem" data-bs-toggle="collapse"
                                            data-bs-target="#card" aria-expanded="true" aria-controls="card">
                                            <label
                                                class="form-check-label d-flex align-items-center text-dark-emphasis fw-semibold">
                                                <input type="radio" class="form-check-input fs-base me-2 me-sm-3"
                                                    name="payment-method" checked="">
                                                Credit or debit card
                                                <span class="d-none d-sm-flex gap-2 ms-3">
                                                    <img src="{{ asset('images/orotime-images/amex.svg') }}"
                                                        class="d-block rounded-1" width="36" alt="Amex">
                                                    <img src="{{ asset('images/orotime-images/mastercard.svg') }}"
                                                        class="d-block rounded-1" width="36" alt="Master Card">
                                                    <img src="{{ asset('images/orotime-images/visa.svg') }}"
                                                        class="d-block rounded-1" width="36" alt="Visa">
                                                </span>
                                            </label>
                                        </div>
                                        <div class="collapse show" id="card" data-bs-parent="#paymentMethod">

                                            <div class="position-relative mb-3 mb-sm-4">
                                                <select name="cardselect" id="cardselect"
                                                    class="form-select form-control-lg">
                                                    <option selected hidden>Select Card</option>
                                                    <option value="Amex">Amex</option>
                                                    <option value="Master Card">Master Card</option>
                                                    <option value="Visa">Visa</option>
                                                </select>
                                                <input type="text"
                                                    class="form-control form-control-lg form-icon-end mt-3"
                                                    placeholder="Card number" required="">
                                            </div>

                                            <div class="row row-cols-1 row-cols-sm-2 g-3 g-sm-4">
                                                <div class="col">
                                                    <input type="text" class="form-control form-control-lg"
                                                        placeholder="MM/YY">
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control form-control-lg"
                                                        maxlength="4" placeholder="CVC">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <select name="paymentMethod" id="paymentMethod">
                                    <option value="">Flexi Pay</option>
                                    <option value=""></option>
                                </select>

                                <textarea class="form-control form-control-lg mb-4" rows="3" placeholder="Additional comments"></textarea>

                                <div class="form-check mb-lg-4">
                                    <input type="checkbox" class="form-check-input" id="accept-terms">
                                    <label for="accept-terms" class="form-check-label nav align-items-center">
                                        I accept the
                                        <a class="nav-link text-decoration-underline fw-normal ms-1 p-0"
                                            href="terms-and-conditions.html" target="_blank">Terms and Conditions</a>
                                    </label>
                                </div>

                                <button class="btn btn-lg btn-primary w-100 d-none d-lg-flex">Pay P2,406.90</button>
                            </div>
                        </div>
                    </div>
                </div>

                <aside class="col-lg-4 offset-xl-1" style="margin-top: -100px">
                    <div class="position-sticky top-0" style="padding-top: 100px">
                        <div class="bg-body-tertiary rounded-5 p-4 mb-3">
                            <div class="p-sm-2 p-lg-0 p-xl-2">
                                <div class="border-bottom pb-4 mb-4">
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <h5 class="mb-0">Order summary</h5>
                                    </div>
                                    <a class="d-flex align-items-center gap-2 text-decoration-none"
                                        href="#orderPreview" data-bs-toggle="offcanvas">
                                        <div class="ratio ratio-1x1" style="max-width: 64px">
                                            <img src="{{ asset('images/orotime-images/product-image.jpg') }}"
                                                class="d-block p-1" alt="iPhone">
                                        </div>
                                        <i class="ci-chevron-right text-body fs-xl p-0 ms-auto"></i>
                                    </a>
                                </div>
                                <ul class="list-unstyled fs-sm gap-3 mb-0">
                                    <li class="d-flex justify-content-between">
                                        Subtotal :
                                        <span class="text-dark-emphasis fw-medium">$2,427.00</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        Shipping:
                                        <span class="text-dark-emphasis fw-medium">$16.50</span>
                                    </li>
                                </ul>
                                <div class="border-top pt-4 mt-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <span class="fs-sm">Estimated total:</span>
                                        <span class="h5 mb-0">$2,406.90</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>

            </div>
        </div>
    </main>

</x-layout.customerApp>
<script>
    
    $(document).ready(function() {
        enPnReady();
    })

    const enPnReady = () => {
        $('#purchaseFullname').on('keyup keydown', function() {
            $('#purchaseNumber').on('keyup keydown', function() {
                if ($('#purchaseFullname').val() != '' && $('#purchaseNumber').val() != '') {
                    $('#btnPCI').prop('disabled', false);
                } else {
                    $('#btnPCI').prop('disabled', true);
                }
            })
        })
    }
</script>
