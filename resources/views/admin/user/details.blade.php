<x-layout.admin>
    @section('title', 'Admin User');
    @include('components.navtopstart')
    <div class="content">
        <div class="mb-9">
            <div class="row align-items-center justify-content-between g-3 mb-4">
                <div class="col-auto">
                    <h2 class="mb-0">Customer details</h2>
                </div>
                <div class="col-auto">
                    <div class="row g-3">
                        <div class="col-auto">
                            <button class="btn btn-oro-danger">
                                <span class="fa-solid fa-trash-can me-2"></span>
                                Delete customer
                            </button>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-oro-secondary">
                                <span class="fas fa-key me-2"></span>
                                Reset password
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-12 col-xxl-4">
                    <div class="g-3 h-100 mb-5">
                        <div class="col-12 col-md-7 col-xxl-12">
                            <div class="card h-100 h-xxl-auto">
                                <div class="card-body d-flex flex-column justify-content-between pb-3">
                                    <div class="row align-items-center g-5 mb-3 text-center text-sm-start">
                                        <div class="col-12 col-sm-auto mb-sm-2">
                                            <div class="avatar avatar-5xl">
                                                <img class="rounded-circle"
                                                    src="{{ asset('images/customer-images/user_profile.jpg') }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-auto flex-1">
                                            <h3>Shiro George Alfeser</h3>
                                            <p class="text-body-secondary">Joined 3 months ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-5 col-xxl-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <h3 class="me-1">Default Address</h3>
                                        <button class="btn btn-link p-0">
                                            <span class="fas fa-pen fs-8 ms-3 text-body-quaternary"></span>
                                        </button>
                                    </div>
                                    <h5 class="text-body-secondary">Address</h5>
                                    <p class="text-body-secondary">Atabay Caumbay<br />Poblacion, Cordova<br />Cebu,
                                        6015</p>
                                    <div class="mb-3">
                                        <h5 class="text-body-secondary">Email</h5><a
                                            href="mailto:shirogeorge@gmail.com">shirogeorge@gmail.com</a>
                                    </div>
                                    <h5 class="text-body-secondary">Phone</h5><a class="text-body-secondary"
                                        href="tel:+639484750030">+63 948 4750 030</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xxl-8">
                    <div class="mb-6">
                        <h3 class="mb-4">Orders <span class="text-body-tertiary fw-normal">(97)</span></h3>
                        <div class="border-top border-bottom border-translucent" id="customerOrdersTableDetails"
                            data-list='{"valueNames":["order","total","status","fulfilment","delivery_type","date"],"page":6,"pagination":true}'>
                            <div class="table-responsive scrollbar">
                                <table class="table table-sm fs-9 mb-0">
                                    <thead>
                                        <tr>
                                            <th class="sort white-space-nowrap align-middle ps-0 pe-3" scope="col"
                                                data-sort="order" style="width:10%;">ORDER</th>
                                            <th class="sort align-middle text-end pe-7" scope="col" data-sort="total"
                                                style="width:10%;">TOTAL</th>
                                            <th class="sort align-middle white-space-nowrap pe-3" scope="col"
                                                data-sort="status" style="width:15%;">PAYMENT STATUS</th>
                                            <th class="sort align-middle white-space-nowrap text-start pe-3"
                                                scope="col" data-sort="fulfilment" style="width:20%;"> FULFILMENT
                                                STATUS</th>
                                            <th class="sort align-middle white-space-nowrap text-start" scope="col"
                                                data-sort="delivery_type" style="width:30%;">DELIVERY TYPE</th>
                                            <th class="sort align-middle text-end pe-0" scope="col" data-sort="date">
                                                DATE</th>
                                            <th class="sort text-end align-middle pe-0 ps-5" scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="customer-order-table-body">
                                        @for ($i = 1; $i <= 97; $i++)
                                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                <td class="order align-middle white-space-nowrap ps-0">
                                                    <a class="fw-semibold" href="#!">#{{ 2453 * $i }}</a>
                                                </td>
                                                <td
                                                    class="total align-middle text-end fw-semibold pe-7 text-body-highlight">
                                                    $87
                                                </td>
                                                <td
                                                    class="payment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary">
                                                    <span class="badge badge-oro fs-10 badge-oro-success">
                                                        <span class="badge-label">Paid</span>
                                                        <span class="ms-1" data-feather="check"
                                                            style="height:12.8px;width:12.8px;"></span>
                                                    </span>
                                                </td>
                                                <td
                                                    class="fulfilment_status align-middle white-space-nowrap text-start fw-bold text-body-tertiary">
                                                    <span class="badge badge-oro fs-10 badge-oro-success">
                                                        <span class="badge-label">Order Fulfilled</span>
                                                        <span class="ms-1" data-feather="check"
                                                            style="height:12.8px;width:12.8px;"></span>
                                                    </span>
                                                </td>
                                                <td
                                                    class="delivery_type align-middle white-space-nowrap text-body fs-9 text-start">
                                                    Cash on delivery
                                                </td>
                                                <td
                                                    class="date align-middle white-space-nowrap text-body-tertiary fs-9 ps-4 text-end">
                                                    Dec 12, 12:56 PM
                                                </td>
                                                <td class="align-middle white-space-nowrap text-end pe-0 ps-5">
                                                    <div class="btn-reveal-trigger position-static">
                                                        <as class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10"
                                                            type="button" data-bs-toggle="dropdown">
                                                            <i data-feather="more-horizontal"
                                                                style="width: 16px; height: 16px"></i>
                                                        </as>
                                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                                            <a class="dropdown-item" href="#!">View</a>
                                                            <a class="dropdown-item" href="#!">Export</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger"
                                                                href="#!">Remove</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                            <div class="row align-items-center justify-content-end py-2 pe-0 fs-9">
                                <div class="col-auto d-flex">
                                    <button class="page-link" data-list-pagination="prev">
                                        <span class="fas fa-chevron-left"></span>
                                    </button>
                                    <ul class="mb-0 pagination"></ul>
                                    <button class="page-link pe-0" data-list-pagination="next">
                                        <span class="fas fa-chevron-right"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6">
                        <h3 class="mb-4">Wishlist <span class="text-body-tertiary fw-normal">(43)</span></h3>
                        <div class="border-translucent border-top border-bottom" id="customerWishlistTable"
                            data-list='{"valueNames":["products","category","size","price","qty","total"],"page":5,"pagination":true}'>
                            <div class="table-responsive scrollbar">
                                <table class="table fs-9 mb-0">
                                    <thead>
                                        <tr>
                                            <th class="sort white-space-nowrap align-middle fs-10" scope="col"
                                                style="width:5%;"></th>
                                            <th class="sort white-space-nowrap align-middle" scope="col"
                                                style="width:35%; min-width:250px;" data-sort="products">PRODUCTS</th>
                                            <th class="sort align-middle" scope="col" data-sort="category"
                                                style="width:15%;">Category</th>
                                            <th class="sort align-middle" scope="col" data-sort="size"
                                                style="width:10%;">SIZE</th>
                                            <th class="sort align-middle text-end" scope="col" data-sort="price"
                                                style="width:15%;">PRICE</th>
                                            <th class="sort align-middle text-end" scope="col" data-sort="qty"
                                                style="width:15%;">QUANTITY</th>
                                            <th class="sort align-middle text-end" scope="col" data-sort="total"
                                                style="width:15%;">TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="customer-wishlist-table-body">
                                        @for ($i = 0; $i < 43; $i++)
                                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                <td class="align-middle white-space-nowrap py-1">
                                                    <a class="border border-translucent rounded-2 d-inline-block"
                                                        href="#">
                                                        <img src="{{ asset('images/customer-images/user_profile.jpg') }}"
                                                            alt="" width="40" height="40" />
                                                    </a>
                                                </td>
                                                <td class="products align-middle"><a class="fw-semibold mb-0"
                                                        href="#">Golding Ring 5 Grams</a></td>
                                                <td class="color align-middle white-space-nowrap fs-9 text-body">
                                                    Necklace</td>
                                                <td
                                                    class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">
                                                    42 </td>
                                                <td
                                                    class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">
                                                    2 </td>
                                                <td class="price align-middle text-body fs-9 fw-semibold text-end">
                                                    &#8369;57 </td>
                                                <td class="total align-middle fw-bold text-body-highlight text-end">
                                                    &#8369;57 </td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                            <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                                <div class="col-auto d-flex">
                                    <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body"
                                        data-list-info="data-list-info"></p><a class="fw-semibold" href="#!"
                                        data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                                            data-fa-transform="down-1"></span></a><a class="fw-semibold d-none"
                                        href="#!" data-list-view="less">View Less<span
                                            class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                                </div>
                                <div class="col-auto d-flex"><button class="page-link"
                                        data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                                    <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                                        data-list-pagination="next"><span
                                            class="fas fa-chevron-right"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="mb-4">Ratings & reviews <span class="text-body-tertiary fw-normal">(43)</span>
                        </h3>
                        <div class="border-top border-bottom border-translucent" id="customerRatingsTable"
                            data-list='{"valueNames":["product","rating","review","status","date"],"page":5,"pagination":true}'>
                            <div class="table-responsive scrollbar">
                                <table class="table fs-9 mb-0">
                                    <thead>
                                        <tr>
                                            <th class="sort white-space-nowrap align-middle ps-0" scope="col" style="width:20%;" data-sort="product">PRODUCT</th>
                                            <th class="sort align-middle" scope="col" data-sort="rating" style="width:10%;">RATING</th>
                                            <th class="sort align-middle" scope="col" style="width:50%;" data-sort="review">REVIEW</th>
                                            <th class="sort text-end align-middle" scope="col" style="width:10%;" data-sort="status">STATUS</th>
                                            <th class="sort text-end align-middle" scope="col" style="width:10%;" data-sort="date">DATE</th>
                                            <th class="sort text-end pe-0 align-middle" scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="customer-rating-table-body">
                                        @for ($i = 1; $i <= 43; $i++)
                                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                <td class="align-middle product white-space-nowrap">
                                                    <a class="fw-semibold" href="#">Apple Magic Mouse (Wireless, Rech...</a>
                                                </td>
                                                <td class="align-middle rating white-space-nowrap fs-10">
                                                    <i data-feather="star" style="width: 16px; height: 16px" class="text-warning"></i>
                                                    <i data-feather="star" style="width: 16px; height: 16px" class="text-warning"></i>
                                                    <i data-feather="star" style="width: 16px; height: 16px" class="text-warning"></i>
                                                    <i data-feather="star" style="width: 16px; height: 16px" class="text-warning"></i>
                                                    <i data-feather="star" style="width: 16px; height: 16px" class="text-warning-light" data-bs-theme="light"></i>
                                                </td>
                                                <td class="align-middle review" style="min-width:350px;">
                                                    <p class="fw-semibold text-body-highlight mb-0">
                                                        It's lovely, works right out of the box (as you'd expect from 
                                                        an Apple device), and has a number of useful functions.
                                                    </p>
                                                </td>
                                                <td class="align-middle text-end status">
                                                    <span class="badge badge-oro fs-10 badge-oro-success">
                                                        <span class="badge-label">Success</span>
                                                        <span class="ms-1" data-feather="check" style="height:12.8px;width:12.8px;"></span>
                                                    </span>
                                                </td>
                                                <td class="align-middle text-end date white-space-nowrap">
                                                    <p class="text-body-tertiary mb-0">Just now</p>
                                                </td>
                                                <td class="align-middle white-space-nowrap text-end pe-0">
                                                    <div class="btn-reveal-trigger position-static">
                                                        <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                                            <i data-feather="more-horizontal" style="width: 16px; height: 16px"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                                            <a class="dropdown-item" href="#!">View</a>
                                                            <a class="dropdown-item" href="#!">Export</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#!">Remove</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endfor
                                    </tbody>
                                </table>
                            </div>
                            <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                                <div class="col-auto d-flex">
                                    <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body"
                                        data-list-info="data-list-info"></p><a class="fw-semibold" href="#!"
                                        data-list-view="*">View all<span class="fas fa-angle-right ms-1"
                                            data-fa-transform="down-1"></span></a><a class="fw-semibold d-none"
                                        href="#!" data-list-view="less">View Less<span
                                            class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                                </div>
                                <div class="col-auto d-flex"><button class="page-link"
                                        data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                                    <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                                        data-list-pagination="next"><span
                                            class="fas fa-chevron-right"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer position-absolute">
            <div class="row g-0 justify-content-between align-items-center h-100">
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 mt-2 mt-sm-0 text-body">Thank you for creating with Phoenix<span
                            class="d-none d-sm-inline-block"></span><span
                            class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2024 &copy;<a
                            class="mx-1" href="https://themewagon.com">Themewagon</a></p>
                </div>
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85">{{ version() }}</p>
                </div>
            </div>
        </footer>
    </div>
</x-layout.admin>
