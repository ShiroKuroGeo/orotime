<x-layout.admin>
    @section('title', 'Admin Order');
    @include('components.navtopstart')
    <div class="content">
        <nav class="mx-4" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#!">Order</a></li>
                <li class="breadcrumb-item active">List</li>
            </ol>
        </nav>
        <div class="mb-9">
            <div class="row g-3 mb-4">
                <div class="col-auto">
                    <h2 class="mb-0">Orderss</h2>
                </div>
            </div>
            <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#"><span>All
                        </span><span class="text-body-tertiary fw-semibold">(123)</span></a></li>
                <li class="nav-item"><a class="nav-link" href="#"><span>Completed</span><span
                            class="text-body-tertiary fw-semibold">(6,810)</span></a></li>
            </ul>
            <div id="orderTable"
                data-list='{"valueNames":["order","total","customer","payment_status","fulfilment_status","delivery_type","date"],"page":10,"pagination":true}'>
                <div class="mb-4">
                    <div class="row g-3">
                        <div class="col-auto">
                            <div class="search-box">
                                <form class="position-relative"><input class="form-control search-input search"
                                        type="search" placeholder="Search orders" aria-label="Search" />
                                    <span class="fas fa-search search-box-icon"></span>
                                    <i class="fs-base-pe-2 search-box-icon" data-feather="serch"></i>
                                </form>
                            </div>
                        </div>
                        <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                            <div class="btn-group position-static" role="group">
                                <div class="btn-group position-static text-nowrap" role="group"><button
                                        class="btn btn-sm btn-oro-secondary px-7 flex-shrink-0" type="button"
                                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                        aria-expanded="false" data-bs-reference="parent">Payment Method<span
                                            class="fas fa-angle-down ms-2"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group position-static text-nowrap" role="group"><button
                                        class="btn btn-oro-secondary px-7 flex-shrink-0" type="button"
                                        data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                        aria-expanded="false" data-bs-reference="parent">Payment Status<span
                                            class="fas fa-angle-down ms-2"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
                    <div class="table-responsive scrollbar mx-n1 px-1">
                        <table class="table table-hover table-sm fs-9 mb-0">
                            <thead>
                                <tr>
                                    <th class="white-space-nowrap fs-9 align-middle ps-0" style="width:26px;">
                                    </th>
                                    <th class="sort white-space-nowrap align-middle pe-3" scope="col"
                                        data-sort="order" style="width:5%;">ORDER</th>
                                    <th class="sort align-middle text-end" scope="col" data-sort="total"
                                        style="width:6%;">TOTAL</th>
                                    <th class="sort align-middle ps-8" scope="col" data-sort="customer"
                                        style="width:28%; min-width: 250px;">CUSTOMER</th>
                                    <th class="sort align-middle pe-3" scope="col" data-sort="payment_status"
                                        style="width:10%;">PAYMENT METHOD</th>
                                    <th class="sort align-middle text-start pe-3" scope="col"
                                        data-sort="fulfilment_status" style="width:12%; min-width: 200px;">PAYMENT
                                        STATUS</th>
                                    <th class="sort align-middle text-start" scope="col" data-sort="delivery_type"
                                        style="width:15%;">DELIVERY TYPE</th>
                                    <th class="sort align-middle text-start" scope="col" data-sort="delivery_type"
                                        style="width:30%;">CSR Reviews</th>
                                    <th class="sort align-middle text-end pe-0" scope="col" data-sort="date">DATE
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list" id="order-table-body">
                                @for ($i = 1; $i <= 10; $i++)
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td class="fs-9 align-middle px-0 py-3"></td>
                                        <td class="align-middle white-space-nowrap py-3 py-0"><a class="fw-semibold"
                                                href="#!">#2453</a></td>
                                        <td class="align-middle text-end fw-semibold text-body-highlight">$87</td>
                                        <td class="align-middle white-space-nowrap ps-8">
                                            <a class="d-flex align-items-center text-body" type="button"
                                                data-bs-toggle="modal" data-bs-target="#viewOrderModal">
                                                <div class="avatar avatar-m"><img class="rounded-circle"
                                                        src="{{ asset('images/customer-images/user_profile.jpg') }}"
                                                        alt="" /></div>
                                                <h6 class="mb-0 ms-3 text-body">
                                                    Carry Anna <br>
                                                    <small style="color: #dedede">Customer / Guest</small>
                                                </h6>
                                            </a>
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap text-start fw-bold text-body-tertiary">
                                            Flexi Pay
                                        </td>
                                        <td
                                            class="align-middle white-space-nowrap text-start fw-bold text-body-tertiary">
                                            <span class="badge badge-oro fs-10 badge-oro-primary"><span
                                                    class="badge-label">Fully Paid</span><span class="ms-1"
                                                    data-feather="x"
                                                    style="height:12.8px;width:12.8px;"></span></span>
                                        </td>
                                        <td class="align-middle white-space-nowrap text-body fs-9 text-start">
                                            Cash on Fully Paid</td>
                                        <td class="align-middle white-space-nowrap text-body-tertiary fs-9">
                                            Dec 12, 12:56 PM</td>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                        <div class="modal fade" id="viewOrderModal" tabindex="-1"
                            aria-labelledby="viewOrderModalModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="viewOrderModalModalLabel">Order Details</h5>
                                        <button class="btn btn-close p-1" type="button" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <div class="modal-body">
                                        <div class="mb-9">
                                            <h2 class="mb-0">Order <span>#349</span></h2>
                                            <div class="d-sm-flex flex-between-center mb-3">
                                                <p class="text-body-secondary lh-sm mb-0 mt-2 mt-sm-0">Customer ID
                                                    : <a class="fw-bold" href="#!"> 2364847</a></p>
                                                <div class="d-flex"><button
                                                        class="btn btn-link pe-3 ps-0 text-body"><span
                                                            class="fas fa-print me-2"></span>Print</button><button
                                                        class="btn btn-link px-3 text-body"><span
                                                            class="fas fa-undo me-2"></span>Refund</button>
                                                    <div class="dropdown"><button
                                                            class="btn text-body dropdown-toggle dropdown-caret-none ps-3 pe-0"
                                                            type="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">More action<span
                                                                class="fas fa-chevron-down ms-2"></span></button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Action</a>
                                                            </li>
                                                            <li><a class="dropdown-item" href="#">Another
                                                                    action</a></li>
                                                            <li><a class="dropdown-item" href="#">Something
                                                                    else here</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-5 gy-7">
                                                <div class="col-12 col-xl-7 col-xxl-8">
                                                    <div id="orderTable"
                                                        data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":10}'>
                                                        <div class="table-responsive scrollbar">
                                                            <table
                                                                class="table fs-9 mb-0 border-top border-translucent">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="sort white-space-nowrap align-middle fs-10"
                                                                            scope="col"></th>
                                                                        <th class="sort white-space-nowrap align-middle"
                                                                            scope="col" style="min-width:400px;"
                                                                            data-sort="products">PRODUCTS</th>
                                                                        <th class="sort align-middle ps-4"
                                                                            scope="col" data-sort="color"
                                                                            style="width:150px;">COLOR</th>
                                                                        <th class="sort align-middle ps-4"
                                                                            scope="col" data-sort="size"
                                                                            style="width:300px;">SIZE</th>
                                                                        <th class="sort align-middle text-end ps-4"
                                                                            scope="col" data-sort="price"
                                                                            style="width:150px;">PRICE</th>
                                                                        <th class="sort align-middle text-end ps-4"
                                                                            scope="col" data-sort="quantity"
                                                                            style="width:200px;">QUANTITY</th>
                                                                        <th class="sort align-middle text-end ps-4"
                                                                            scope="col" data-sort="total"
                                                                            style="width:250px;">TOTAL</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="list" id="order-table-body">
                                                                    <tr
                                                                        class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                        <td
                                                                            class="align-middle white-space-nowrap py-2">
                                                                        </td>
                                                                        <td class="products align-middle py-0"><a
                                                                                class="fw-semibold line-clamp-2 mb-0"
                                                                                href="../../../apps/e-commerce/landing/product-details.html">Fitbit
                                                                                Sense Advanced Smartwatch with Tools
                                                                                for Heart Health, Stress Management
                                                                                &amp; Skin Temperature Trends,
                                                                                Carbon/Graphite, One Size (S &amp; L
                                                                                Bands)</a></td>
                                                                        <td
                                                                            class="color align-middle white-space-nowrap text-body py-0 ps-4">
                                                                            Pure matte black</td>
                                                                        <td
                                                                            class="size align-middle white-space-nowrap text-body-tertiary fw-semibold py-0 ps-4">
                                                                            42</td>
                                                                        <td
                                                                            class="price align-middle text-body fw-semibold text-end py-0 ps-4">
                                                                            $57</td>
                                                                        <td
                                                                            class="quantity align-middle text-end py-0 ps-4 text-body-tertiary">
                                                                            4</td>
                                                                        <td
                                                                            class="total align-middle fw-bold text-body-highlight text-end py-0 ps-4">
                                                                            $228</td>
                                                                    </tr>
                                                                    <tr
                                                                        class="hover-actions-trigger btn-reveal-trigger position-static">
                                                                        <td
                                                                            class="align-middle white-space-nowrap py-2">
                                                                            <a class="d-block border border-translucent rounded-2"
                                                                                href="../../../apps/e-commerce/landing/product-details.html"><img
                                                                                    src="../../../assets/img//products/2.png"
                                                                                    alt=""
                                                                                    width="53" /></a>
                                                                        </td>
                                                                        <td class="products align-middle py-0"><a
                                                                                class="fw-semibold line-clamp-2 mb-0"
                                                                                href="../../../apps/e-commerce/landing/product-details.html">iPhone
                                                                                13 pro max-Pacific Blue-128GB
                                                                                storage</a></td>
                                                                        <td
                                                                            class="color align-middle white-space-nowrap text-body py-0 ps-4">
                                                                            Glossy black</td>
                                                                        <td
                                                                            class="size align-middle white-space-nowrap text-body-tertiary fw-semibold py-0 ps-4">
                                                                            XL</td>
                                                                        <td
                                                                            class="price align-middle text-body fw-semibold text-end py-0 ps-4">
                                                                            $199</td>
                                                                        <td
                                                                            class="quantity align-middle text-end py-0 ps-4 text-body-tertiary">
                                                                            2</td>
                                                                        <td
                                                                            class="total align-middle fw-bold text-body-highlight text-end py-0 ps-4">
                                                                            $398</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-flex flex-between-center py-3 border-bottom border-translucent mb-6">
                                                        <p class="text-body-emphasis fw-semibold lh-sm mb-0">Items
                                                            subtotal :</p>
                                                        <p class="text-body-emphasis fw-bold lh-sm mb-0">$1690</p>
                                                    </div>
                                                    <div
                                                        class="row gx-4 gy-6 g-xl-7 justify-content-sm-center justify-content-xl-start">
                                                        <div class="col-12 col-sm-auto">
                                                            <h4 class="mb-5">Billing details</h4>
                                                            <div class="row g-4 flex-sm-column">
                                                                <div class="col-6 col-sm-12">
                                                                    <div class="d-flex align-items-center mb-1">
                                                                        <span class="me-2" data-feather="user"
                                                                            style="stroke-width:2.5;"></span>
                                                                        <h6 class="mb-0">Customer</h6>
                                                                    </div><a class="d-block fs-9 ms-4"
                                                                        href="#!">Shatinon Mekalan</a>
                                                                </div>
                                                                <div class="col-6 col-sm-12">
                                                                    <div class="d-flex align-items-center mb-1">
                                                                        <span class="me-2" data-feather="mail"
                                                                            style="stroke-width:2.5;"></span>
                                                                        <h6 class="mb-0">Email</h6>
                                                                    </div><a class="d-block fs-9 ms-4"
                                                                        href="mailto:shatinon@jeemail.com:">shatinon@jeemail.com</a>
                                                                </div>
                                                                <div class="col-6 col-sm-12 order-sm-1">
                                                                    <div class="d-flex align-items-center mb-1">
                                                                        <span class="me-2" data-feather="home"
                                                                            style="stroke-width:2.5;"></span>
                                                                        <h6 class="mb-0">Address</h6>
                                                                    </div>
                                                                    <div class="ms-4">
                                                                        <p class="text-body-secondary mb-0 fs-9">
                                                                            Shatinon Mekalan</p>
                                                                        <p class="text-body-secondary mb-0 fs-9">
                                                                            Vancouver, British Columbia,<br
                                                                                class="d-none d-sm-block" />Canada
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-sm-12">
                                                                    <div class="d-flex align-items-center mb-1">
                                                                        <span class="me-2" data-feather="phone"
                                                                            style="stroke-width:2.5;"> </span>
                                                                        <h6 class="mb-0">Phone</h6>
                                                                    </div><a class="d-block fs-9 ms-4"
                                                                        href="tel:+1234567890">+1234567890</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-auto">
                                                            <h4 class="mb-5">Shipping details</h4>
                                                            <div class="row g-4 flex-sm-column">
                                                                <div class="col-6 col-sm-12">
                                                                    <div class="d-flex align-items-center mb-1">
                                                                        <span class="me-2" data-feather="mail"
                                                                            style="stroke-width:2.5;"> </span>
                                                                        <h6 class="mb-0">Email</h6>
                                                                    </div><a class="d-block fs-9 ms-4"
                                                                        href="mailto:shatinon@jeemail.com:">shatinon@jeemail.com</a>
                                                                </div>
                                                                <div class="col-6 col-sm-12">
                                                                    <div class="d-flex align-items-center mb-1">
                                                                        <span class="me-2" data-feather="phone"
                                                                            style="stroke-width:2.5;"> </span>
                                                                        <h6 class="mb-0">Phone</h6>
                                                                    </div><a class="d-block fs-9 ms-4"
                                                                        href="tel:+1234567890">+1234567890</a>
                                                                </div>
                                                                <div class="col-6 col-sm-12 order-sm-1">
                                                                    <div class="d-flex align-items-center mb-1">
                                                                        <span class="me-2" data-feather="home"
                                                                            style="stroke-width:2.5;"> </span>
                                                                        <h6 class="mb-0">Address</h6>
                                                                    </div>
                                                                    <div class="ms-4">
                                                                        <p class="text-body-secondary mb-0 fs-9">
                                                                            Shatinon Mekalan</p>
                                                                        <p class="text-body-secondary mb-0 fs-9">
                                                                            Vancouver, British Columbia <br />Canada
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 col-sm-12">
                                                                    <div class="d-flex align-items-center mb-1">
                                                                        <span class="me-2" data-feather="calendar"
                                                                            style="stroke-width:2.5;"></span>
                                                                        <h6 class="mb-0">Shipping Date</h6>
                                                                    </div>
                                                                    <p class="mb-0 text-body-secondary fs-9 ms-4">
                                                                        12 Nov, 2021</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-5 col-xxl-4">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card mb-3">
                                                                <div class="card-body">
                                                                    <h3 class="card-title mb-4">Summary</h3>
                                                                    <div>
                                                                        <div class="d-flex justify-content-between">
                                                                            <p class="text-body fw-semibold">Items
                                                                                subtotal :</p>
                                                                            <p class="text-body-emphasis fw-semibold">
                                                                                $691</p>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between">
                                                                            <p class="text-body fw-semibold">
                                                                                Discount :</p>
                                                                            <p class="text-danger fw-semibold">-$59
                                                                            </p>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between">
                                                                            <p class="text-body fw-semibold">Tax :
                                                                            </p>
                                                                            <p class="text-body-emphasis fw-semibold">
                                                                                $126.20</p>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between">
                                                                            <p class="text-body fw-semibold">
                                                                                Subtotal :</p>
                                                                            <p class="text-body-emphasis fw-semibold">
                                                                                $665</p>
                                                                        </div>
                                                                        <div class="d-flex justify-content-between">
                                                                            <p class="text-body fw-semibold">
                                                                                Shipping Cost :</p>
                                                                            <p class="text-body-emphasis fw-semibold">
                                                                                $30</p>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex justify-content-between border-top border-translucent border-dashed pt-4">
                                                                        <h4 class="mb-0">Total :</h4>
                                                                        <h4 class="mb-0">$695.20</h4>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <form action="" method="post">
                                                                        <h3 class="card-title mb-4">Order Status</h3>
                                                                        <h6 class="mb-2">Payment status</h6><select
                                                                            class="form-select mb-4"
                                                                            aria-label="delivery type">
                                                                            <option value="cod">Processing</option>
                                                                            <option value="card">Canceled</option>
                                                                            <option value="paypal">Completed</option>
                                                                        </select>
                                                                        <h6 class="mb-2">Fulfillment status</h6>
                                                                        <select class="form-select"
                                                                            aria-label="delivery type">
                                                                            <option value="cod">Unfulfilled</option>
                                                                            <option value="card">Fulfilled</option>
                                                                            <option value="paypal">Pending</option>
                                                                        </select>
                                                                        <button type="submit"
                                                                            class="btn btn-info mt-4 col-12">Update
                                                                            Status</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" type="button">Okay</button>
                                        <button class="btn btn-outline-primary" type="button"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                        <div class="col-auto d-flex">
                            <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body"
                                data-list-info="data-list-info"></p><a class="fw-semibold" href="#!"
                                data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                                    data-fa-transform="down-1"></span></a><a class="fw-semibold d-none"
                                href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1"
                                    data-fa-transform="down-1"></span></a>
                        </div>
                        <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span
                                    class="fas fa-chevron-left"></span></button>
                            <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                                data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer position-absolute">
            <div class="row g-0 justify-content-between align-items-center h-100">
                <div class="col-12 col-sm-auto text-center">
                    <br class="d-sm-none" />2024 &copy;<a class="mx-1 text-primary-light" href="#!">Orotime</a>
                    </p>
                </div>
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85">v1.0.0</p>
                </div>
            </div>
        </footer>
    </div>
</x-layout.admin>
