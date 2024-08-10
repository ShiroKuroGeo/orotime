<x-layout.customerApp>

    @include('components.customerChatAssistance');

    <main class="content-wrapper">
        <section class="pt-5 pb-9">
            <div class="container">
                <h1 class="mb-5 fw-bolder">Check out</h1>
                <div class="row justify-content-between">
                    <div class="col-lg-7 col-xl-7">
                        <form>
                            <div class="d-flex align-items-end">
                                <h3 class="mb-0 me-3">Shipping Details</h3>
                                <a class="btn btn-link p-0" href="{{ route('cus-info') }}">Edit</a>
                            </div>

                            <table class="table table-borderless mt-4">
                                <tbody>
                                    <tr>
                                        <td class="py-2 ps-0 ">
                                            <div class="d-flex">
                                                <span class="fs-10 me-2" data-feather="user"> </span>
                                                <h6 class="me-4">Full Name</h6>
                                            </div>
                                        </td>
                                        <td class="py-2 fw-bold lh-sm">:</td>
                                        <td class="py-2 px-3">
                                            <h5 class="fw-normal text-body-secondary">Shiro George Alfeser</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 ps-0">
                                            <div class="d-flex">
                                                <span class="fs-10 me-2" data-feather="home"> </span>
                                                <h6 class="me-4">Address</h6>
                                            </div>
                                        </td>
                                        <td class="py-2 fw-bold lh-sm">:</td>
                                        <td class="py-2 px-3">
                                            <h5 class="fw-normal text-body-secondary">Atabay Caumbay Poblacion, <br>
                                                Cordova, Cebu </h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 ps-0">
                                            <div class="d-flex">
                                                <span class="fs-10 me-2" data-feather="phone"> </span>
                                                <h6 class="me-4">Phone</h6>
                                            </div>
                                        </td>
                                        <td class="py-2 fw-bold lh-sm">: </td>
                                        <td class="py-2 px-3">
                                            <h5 class="fw-normal text-body-secondary">+63 912 3456 789</h5>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <hr class="my-6">

                            <h3 class="mb-3">Delivery Type</h3>

                            <div class="row gy-6">
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="d-flex flex-wrap align-items-center mb-1">
                                        <div class="form-check mb-0"><input class="form-check-input" type="radio"
                                                name="shippingRadio" id="free_shipping" /><label
                                                class="form-check-label fs-8 text-body" for="free_shipping">
                                                Free Shipping</label></div><span
                                            class="d-inline-block text-body-emphasis fw-bold ms-2">$0.00 </span>
                                        <span class="badge bg-info ms-2 ms-lg-4 ms-xl-2">Available</span>
                                    </div>
                                    <div class="ps-4">
                                        <h6 class="text-info lh-base mb-0">Get Free Shipped products in Time!</h6>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="d-flex flex-wrap align-items-center mb-1">
                                        <div class="form-check mb-0"><input class="form-check-input" type="radio"
                                                name="shippingRadio" id="two_days_shipping" /><label
                                                class="form-check-label fs-8 text-body" for="two_days_shipping">Two days
                                                Shipping</label></div><span
                                            class="d-inline-block text-body-emphasis fw-bold ms-2">$20.00</span>
                                    </div>
                                    <div class="ps-4">
                                        <h6 class="text-info lh-base mb-0">Everything faster with minimum shipping fee.
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="d-flex flex-wrap align-items-center mb-1">
                                        <div class="form-check mb-0"><input class="form-check-input" type="radio"
                                                name="shippingRadio" id="standard_shipping" /><label
                                                class="form-check-label fs-8 text-body" for="standard_shipping">Standard
                                                Shipping</label></div><span
                                            class="d-inline-block text-body-emphasis fw-bold ms-2">$10.00</span>
                                    </div>
                                    <div class="ps-4">
                                        <h6 class="text-info lh-base mb-0">Get timely delivery with economy shipping.
                                        </h6>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <div class="d-flex flex-wrap align-items-center mb-1">
                                        <div class="form-check mb-0">
                                            <input class="form-check-input" type="radio" name="shippingRadio" checked="checked" id="one_day_shipping" />
                                            <label class="form-check-label fs-8 text-body" for="one_day_shipping">One day Shipping</label>
                                        </div>
                                        <span
                                            class="d-inline-block text-body-emphasis fw-bold ms-2">$30.00</span>
                                        <span class="badge bg-warning ms-2 ms-lg-4 ms-xl-2">Popular</span>
                                    </div>
                                    <div class="ps-4">
                                        <h6 class="text-info lh-base mb-0">Highest priority shipping at the lowest
                                            cost.</h6>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-6">
                            <h3 class="mb-5">Payment Method</h3>
                            <div class="row g-4 mb-7">
                                <div class="col-12">
                                    <div class="row gx-lg-11">
                                        <div class="col-md-auto">
                                            <div class="form-check">
                                                <input class="form-check-input" id="gcash" type="radio" name="paymentMethod"/>
                                                Gcash
                                            </div>
                                        </div>
                                        <div class="col-md-auto">
                                            <div class="form-check">
                                                <input class="form-check-input" id="creditCard" type="radio" name="paymentMethod"/>
                                                Cash On Delivery
                                            </div>
                                        </div>
                                        <div class="col-md-auto">
                                            <div class="form-check">
                                                <input class="form-check-input" id="creditCard" type="radio" name="paymentMethod"/>
                                                <label class="form-check-label fs-8 text-body text-nowrap d-flex gap-2" for="creditCard">
                                                    Credit card
                                                    <img class="h-100" src="{{ asset('images/orotime-images/visa.png') }}" alt="visa" />
                                                    <img class="h-100" src="{{ asset('images/orotime-images/discover.png') }}" alt="discover" />
                                                    <img class="h-100" src="{{ asset('images/orotime-images/mastercard.png') }}" alt="mastercard" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fs-8 text-body-highlight ps-0 text-transform-none" for="selectCard">Select card</label>
                                    <select class="form-select text-body-emphasis" id="selectCard">
                                        <option selected hidden>Select a card</option>
                                        <option value="visa">Visa</option>
                                        <option value="discover">Discover</option>
                                        <option value="mastercard">Mastercard</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fs-8 text-body-highlight ps-0 text-transform-none" for="inputCardNumber">Card number</label>
                                    <input class="form-control" id="inputCardNumber" type="number" placeholder="Enter card number" aria-label="Card number" /></div>
                                <div class="col-12">
                                    <label class="form-label fs-8 text-body-highlight ps-0 text-transform-none" for="inputName">Full name</label>
                                    <input class="form-control" id="inputName" type="text" placeholder="Juan Dela Cruz" aria-label="Full name" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fs-8 text-body-highlight ps-0 text-transform-none">Expires on</label>
                                    <div class="d-flex">
                                        <select class="form-select text-body-emphasis me-3">
                                            <option selected="selected">Month</option>
                                            <option>January</option>
                                            <option>February</option>
                                            <option>March</option>
                                        </select>
                                        <select class="form-select text-body-emphasis">
                                            <option selected="selected">Year</option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1992">1992</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fs-8 text-body-highlight ps-0 text-transform-none" for="inputCardCVC">CVC</label>
                                    <input class="form-control" id="inputCardCVC" type="number" placeholder="Enter a valid CVC" aria-label="CVC" />
                                </div>
                            </div>
                            <div class="row g-2 my-3 mb-lg-0">
                                <div class="col-md-8 col-lg-9 d-grid">
                                    <button class="btn btn-primary" type="submit">Pay $695.20</button>
                                </div>
                                <div class="col-md-4 col-lg-3 d-grid">
                                    <button class="btn btn text-nowrap" type="submit">Save Order and Exit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-5 col-xl-4">
                        <div class="card mt-3 mt-lg-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h3 class="mb-0 fw-bold">Summary</h3>
                                    <a class="pe-0 text-decoration-none" href="{{ route('cus-cart') }}">Edit</a>
                                </div>
                                <div class="border-dashed border-bottom border-translucent mt-4">
                                    <div class="ms-n2">
                                        <div class="row align-items-center mb-2 g-3">
                                            <div class="col-8 col-md-7 col-lg-8">
                                                <div class="d-flex align-items-center">
                                                    <img class="me-2 ms-1" src="{{ asset('images/orotime-images/Flyer1.jpg') }}" width="40" alt="" />
                                                    <h6 class="text-body-highlight lh-base text-truncate">
                                                        Pure Silver Ring 5 Grams
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="col-2 col-md-3 col-lg-2">
                                                <h6 class="mb-0">x1</h6>
                                            </div>
                                            <div class="col-2 ps-0">
                                                <h5 class="mb-0 text-end small">$398</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-dashed border-bottom border-translucent mt-4">
                                    <div class="d-flex justify-content-between m-0 p-0">
                                        <h6 class="text-body">Items subtotal: </h6>
                                        <h6 class="text-body">$691</h6>
                                    </div>
                                    <div class="d-flex justify-content-between m-0 p-0">
                                        <h6 class="text-body">Shipping Fee: </h6>
                                        <h6 class="text-body">$691</h6>
                                    </div>
                                    <div class="d-flex justify-content-between m-0 p-0">
                                        <h6 class="text-body">Discount: </h6>
                                        <h6 class="text-body">$50</h6>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between border-dashed-y pt-3">
                                    <h5 class="mb-0 fw-bold">Total :</h5>
                                    <h5 class="mb-0 fw-bold">{{ 691 + 691 - 50 }}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="py-4">
                            Another way to buy product?
                            <a href="#" class="text-decoration-none">Click Here!</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-layout.customerApp>
<script>
    $(document).ready(function() {
        enPnReady();
        wayOfPayment();
    })

    function enPnReady() {
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

    function wayOfPayment() {
        const paymentMethod = $('#wayMethod');
        const flexpay = $('#flexpay');

        paymentMethod.on('change', function() {
            if ($(this).val() === '1') {
                flexpay.removeClass('d-none');
            } else {
                flexpay.addClass('d-none');
            }
        });
    }
</script>
