<x-layout.admin>
    @section('title', 'Admin invoice');
    @include('components.navtopstart')
    <section class="mt-5 pt-5 pb-9 bg-body-emphasis dark__bg-gray-1200 border-top">
        <div class="container-small">
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h2 class="mb-0">Invoice</h2>
                <div>
                    <button class="btn btn-oro-secondary me-2">
                        <span data-feather="download" class="me-1" style="height: 16px; width: 16px"></span>
                        <span class="d-none d-sm-inline-block">Download Invoice</span>
                    </button>
                    <button class="btn btn-oro-secondary">
                        <span data-feather="printer" class="me-1" style="height: 16px; width: 16px"></span>
                        <span class="d-none d-sm-inline-block">Print</span>
                    </button>
                </div>
            </div>
            <div class="bg-body dark__bg-gray-1100 p-4 mb-4 rounded-2">
                <div class="row g-4">
                    <div class="col-12 col-lg-3">
                        <div class="row g-4 g-lg-2">
                            <div class="col-12 col-sm-6 col-lg-12">
                                <div class="row align-items-center g-0">
                                    <div class="col-auto col-lg-6 col-xl-5">
                                        <h6 class="mb-0 me-3">Invoice No :</h6>
                                    </div>
                                    <div class="col-auto col-lg-6 col-xl-7">
                                        <p class="fs-9 text-body-secondary fw-semibold mb-0">#FLR978282</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-12">
                                <div class="row align-items-center g-0">
                                    <div class="col-auto col-lg-6 col-xl-5">
                                        <h6 class="me-3">Invoice Date :</h6>
                                    </div>
                                    <div class="col-auto col-lg-6 col-xl-7">
                                        <p class="fs-9 text-body-secondary fw-semibold mb-0">November 28, 2001</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5">
                        <div class="row g-4 gy-lg-5">
                            <div class="col-12 col-lg-8">
                                <h6 class="mb-2 me-3">Sold by :</h6>
                                <p class="fs-9 text-body-secondary fw-semibold mb-0">Orotime<br /> IT Park Cebu</p>
                            </div>
                            <div class="col-12 col-lg-4">
                                <h6 class="mb-2"> Order No :</h6>
                                <p class="fs-9 text-body-secondary fw-semibold mb-0">{{ decryptData(Request::route('oid')) }}</p>
                            </div>
                            <div class="col-12 col-lg-4">
                                <h6 class="mb-2"> Order Date :</h6>
                                <p class="fs-9 text-body-secondary fw-semibold mb-0">November 29, 2001</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="row g-4">
                            <div class="col-12 col-lg-6">
                                <h6 class="mb-2"> Billing Address :</h6>
                                <div class="fs-9 text-body-secondary fw-semibold mb-0">
                                    <p class="mb-2">Inoc Shiro George Alfeser,</p>
                                    <p class="mb-2">Cordova Cebu,<br />Poblaction, 6015,</p>
                                    <p class="mb-2">shirogeorge@gmail.com</p>
                                    <p class="mb-0">+63 948 4750 030</p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <h6 class="mb-2"> Shipping Address :</h6>
                                <div class="fs-9 text-body-secondary fw-semibold mb-0">
                                    <p class="mb-2">Inoc Shiro George Alfeser,</p>
                                    <p class="mb-2">Cordova Cebu,<br />Poblaction, 6015,</p>
                                    <p class="mb-2">shirogeorge@gmail.com</p>
                                    <p class="mb-0">+63 948 4750 030</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-0">
                <div class="table-responsive scrollbar">
                    <table class="table fs-9 text-body mb-0">
                        <thead class="bg-body-secondary">
                            <tr>
                                <th scope="col" style="width: 24px;"></th>
                                <th scope="col" style="min-width: 60px;">SL NO.</th>
                                <th scope="col" style="min-width: 360px;">Products</th>
                                <th class="ps-5" scope="col" style="min-width: 150px;">Category</th>
                                <th scope="col" style="width: 60px;">Size</th>
                                <th class="text-end" scope="col" style="width: 138px;"></th>
                                <th class="text-end" scope="col" style="width: 80px;">Quantity</th>
                                <th class="text-center" scope="col" style="width: 80px;"></th>
                                <th class="text-end" scope="col" style="width: 100px;">Price</th>
                                <th class="text-end" scope="col" style="min-width: 92px;"></th>
                                <th class="text-end" scope="col" style="min-width: 60px;">Total</th>
                                <th scope="col" style="width: 24px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-0"></td>
                                <td class="align-middle">1</td>
                                <td class="align-middle">
                                    <p class="line-clamp-1 mb-0 fw-semibold">
                                        Fitbit Sense Advanced Smartwatch with Tools
                                        for Heart Health, Stress Management Skin Temperature Trends,
                                        Carbon/Graphite, One Size (S &amp; L Bands)</p>
                                </td>
                                <td class="align-middle ps-5">Necklace</td>
                                <td class="align-middle text-end fw-semibold">XL</td>
                                <td class="align-middle text-end fw-semibold"></td>
                                <td class="align-middle text-end text-body-highlight fw-semibold">2</td>
                                <td class="align-middle text-end fw-semibold"></td>
                                <td class="align-middle text-end fw-semibold">$299</td>
                                <td class="align-middle text-end fw-semibold"></td>
                                <td class="align-middle text-end fw-semibold">$398</td>
                                <td class="border-0"></td>
                            </tr>
                            <tr class="bg-body-secondary">
                                <td></td>
                                <td class="align-middle fw-semibold" colspan="9">Subtotal</td>
                                <td class="align-middle text-end fw-bold">$398</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="border-0"></td>
                                <td colspan="6"></td>
                                <td class="align-middle fw-bold ps-15" colspan="2">Shipping Cost</td>
                                <td class="align-middle text-end fw-semibold" colspan="2">$50</td>
                                <td class="border-0"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="6"></td>
                                <td class="align-middle fw-bold ps-15" colspan="2">Discount/Voucher</td>
                                <td class="align-middle text-end fw-semibold text-danger" colspan="2">-$50</td>
                                <td></td>
                            </tr>
                            <tr class="bg-body-secondary">
                                <td class="align-middle ps-4 fw-bold text-body-highlight" colspan="3"> Grand Total
                                </td>
                                <td class="align-middle fw-bold text-body-highlight text-capitalize" colspan="7">
                                    {{ number_to_words(1236) }}
                                </td>
                                <td class="align-middle text-end fw-bold">&#8369;1236</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-end py-2 border-bottom">
                    <div class="border-0 py-2">
                        <img src="{{ asset('images/customer-images/user_profile.jpg') }}" class="avatar img-fluid"
                            alt="shiro" style="width: 100px; height: 100px" /><br>
                    </div>
                    <h4>Authorized Profile</h4>
                </div>
            </div>
        </div>
    </section>
</x-layout.admin>
