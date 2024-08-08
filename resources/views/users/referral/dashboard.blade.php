<x-layout.ref>
    @include('components.refnavtopstart')
    <div class="content">
        <div class="row gy-3 mb-4 justify-content-between">
            <div class="col-xxl-6">
                <div class="d-flex justify-content-between row ">
                    <div class="col">
                        <h2 class="mb-2 text-body-emphasis">Shiro George Alfeser Inoc</h2>
                        <h5 class="text-body-tertiary fw-semibold mb-4">Check your business growth in one place</h5>
                    </div>
                    <div class="col text-end">
                        <a class="btn btn-primary" href=" {{ route('ref-product') }} ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path
                                    d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                            </svg>
                            Get Commission
                        </a>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-1 row-cols-lg-3 g-3 mb-3">

                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex d-sm-block justify-content-between">
                                    <div class="border-bottom-sm border-translucent mb-sm-4">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center icon-wrapper-sm shadow-primary-100"
                                                style="transform: rotate(-7.45deg);">
                                                <i data-feather="sunrise" class="text-primary fs-7 z-1 ms-2"></i>
                                            </div>
                                            <p class="text-body-tertiary fs-9 mb-0 ms-2 mt-3">Today's Earning</p>
                                        </div>
                                        <p class="text-primary mt-2 fs-6 fw-bold mb-0 mb-sm-4">
                                            &#8369; 1153.00
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex flex-column justify-content-center flex-between-end d-sm-block text-end text-sm-start">
                                        <span class="badge badge-oro badge-oro-success fs-10 mb-2">+24.5%</span>
                                        <p class="mb-0 fs-9 text-body-tertiary">This Week</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex d-sm-block justify-content-between">
                                    <div class="border-bottom-sm border-translucent mb-sm-4">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center icon-wrapper-sm shadow-primary-100"
                                                style="transform: rotate(-7.45deg);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor" class="bi bi-cash text-primary fs-7 z-1 ms-2"
                                                    viewBox="0 0 16 16">
                                                    <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                                    <path
                                                        d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2z" />
                                                </svg>
                                            </div>
                                            <p class="text-body-tertiary fs-9 mb-0 ms-2 mt-3">Week Earning</p>
                                        </div>
                                        <p class="text-primary mt-2 fs-6 fw-bold mb-0 mb-sm-4">
                                            &#8369; 1153.00
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex flex-column justify-content-center flex-between-end d-sm-block text-end text-sm-start">
                                        <span class="badge badge-oro badge-oro-success fs-10 mb-2">+24.5%</span>
                                        <p class="mb-0 fs-9 text-body-tertiary">Last Week</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <div class="d-flex d-sm-block justify-content-between">
                                    <div class="border-bottom-sm border-translucent mb-sm-4">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center icon-wrapper-sm shadow-info-100"
                                                style="transform: rotate(-7.45deg);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                    fill="currentColor"
                                                    class="bi bi-calendar-week-fill text-info fs-7 z-1 ms-2"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2M9.5 7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5m3 0h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5M2 10.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm3.5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5" />
                                                </svg>
                                            </div>
                                            <p class="text-body-tertiary fs-9 mb-0 ms-2 mt-3">Last Month</p>
                                        </div>
                                        <p class="text-info mt-2 fs-6 fw-bold mb-0 mb-sm-4">
                                            &#8369; 11530.00
                                        </p>
                                    </div>
                                    <div
                                        class="d-flex flex-column justify-content-center flex-between-end d-sm-block text-end text-sm-start">
                                        <span class="badge badge-oro badge-oro-warning fs-10 mb-2">+24.5%</span>
                                        <p class="mb-0 fs-9 text-body-tertiary">Last Month Earning</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xxl-6 mb-6">
                <h3>Daily Earning</h3>
                <p class="text-body-tertiary mb-1">Daily Earning starts in Monday until Sunday.</p>
                <div id="main" class="img-thumbnail" style="min-height:270px; width:100%"></div>
            </div>
            <div class="col-12 col-xxl-6 mb-3 mb-sm-0">
                <div class="row img-thumbnail p-4">
                    <div class="col-sm-7 col-md-8 col-xxl-8 mb-md-3 mb-lg-0">
                        <h3>New Products on List</h3>
                        <p class="text-body-tertiary">New Product Details</p>
                        <div class="row g-0">
                            <div class="col-6 col-xl-4">
                                <div
                                    class="d-flex flex-column flex-center align-items-sm-start flex-md-row justify-content-md-between flex-xxl-column p-3 ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end border-translucent">
                                    <div class="d-flex align-items-center mb-1"><span
                                            class="fa-solid fa-square fs-11 me-2 text-primary"
                                            data-fa-transform="up-2"></span><span
                                            class="mb-0 fs-9 text-body">Necklace</span></div>
                                    <h3 class="fw-semibold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0 mb-sm-3">80</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-4">
                                <div
                                    class="d-flex flex-column flex-center align-items-sm-start flex-md-row justify-content-md-between flex-xxl-column p-3 ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end-md-0 border-end-xl border-translucent">
                                    <div class="d-flex align-items-center mb-1"><span
                                            class="fa-solid fa-square fs-11 me-2 text-success"
                                            data-fa-transform="up-2"></span><span
                                            class="mb-0 fs-9 text-body">Bracelet</span></div>
                                    <h3 class="fw-semibold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0 mb-sm-3">65</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-4">
                                <div
                                    class="d-flex flex-column flex-center align-items-sm-start flex-md-row justify-content-md-between flex-xxl-column p-3 ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-bottom border-end border-end-md border-end-xl-0 border-translucent">
                                    <div class="d-flex align-items-center mb-1"><span
                                            class="fa-solid fa-square fs-11 me-2 text-info"
                                            data-fa-transform="up-2"></span><span
                                            class="mb-0 fs-9 text-body">Ring</span></div>
                                    <h3 class="fw-semibold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0 mb-sm-3">40</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-4">
                                <div
                                    class="d-flex flex-column flex-center align-items-sm-start flex-md-row justify-content-md-between flex-xxl-column p-3 ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-end-xl border-bottom border-bottom-xl-0 border-translucent">
                                    <div class="d-flex align-items-center mb-1"><span
                                            class="fa-solid fa-square fs-11 me-2 text-info-light"
                                            data-fa-transform="up-2"></span><span
                                            class="mb-0 fs-9 text-body">Earring</span></div>
                                    <h3 class="fw-semibold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0 mb-sm-3">220</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-4">
                                <div
                                    class="d-flex flex-column flex-center align-items-sm-start flex-md-row justify-content-md-between flex-xxl-column p-3 ps-sm-3 ps-md-4 p-md-3 h-100 border-1 border-end border-translucent">
                                    <div class="d-flex align-items-center mb-1"><span
                                            class="fa-solid fa-square fs-11 me-2 text-danger-lighter"
                                            data-fa-transform="up-2"></span><span class="mb-0 fs-9 text-body">Done
                                            Referred</span></div>
                                    <h3 class="fw-semibold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0 mb-sm-3">120</h3>
                                </div>
                            </div>
                            <div class="col-6 col-xl-4">
                                <div
                                    class="d-flex flex-column flex-center align-items-sm-start flex-md-row justify-content-md-between flex-xxl-column p-3 ps-sm-3 ps-md-4 p-md-3 h-100">
                                    <div class="d-flex align-items-center mb-1"><span
                                            class="fa-solid fa-square fs-11 me-2 text-warning-light"
                                            data-fa-transform="up-2"></span><span class="mb-0 fs-9 text-body">Other
                                            Category</span></div>
                                    <h3 class="fw-semibold ms-xl-3 ms-xxl-0 pe-md-2 pe-xxl-0 mb-0 mb-sm-3">35</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-4 col-xxl-4 my-3 my-sm-0">
                        <div class="position-relative d-flex flex-center mb-sm-4 mb-xl-0 mt-sm-7 mt-lg-4 mt-xl-0">
                            <div id="productOnListMain" style="min-height:350px;width:100%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xxl-6 mb-8 p-4">
                <div class="mb-3">
                    <h3>Referred Leads</h3>
                    <p class="text-body-tertiary mb-0">An action made by a visitor</p>
                </div>
                <div class="row g-6">
                    <div class="col-md-12 mb-2 mb-sm-0">
                        <div class="d-flex align-items-center"><span class="me-2 text-info" data-feather="users"
                                style="min-height:24px; width:24px"></span>
                            <h4 class="text-body-tertiary mb-0">Referred User for the Whole Week
                            </h4><span
                                class="badge badge-oro fs-10 badge-oro-success d-inline-flex align-items-center ms-2"><span
                                    class="badge-label d-inline-block lh-base">+24.5%</span><span
                                    class="ms-1 fa-solid fa-caret-up d-inline-block lh-1"></span></span>
                        </div>
                        <div class="pb-0 pt-4">
                            <div id="totalReferredLead" style="min-height:30vh;width:100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xxl-6 mb-6 gy-0 gy-xxl-3">
                <div class="row align-items-start justify-content-between mb-4 g-3">
                    <div class="col-auto">
                        <h3>History<span class="fw-semibold"> - Total &#8369;
                                {{ 150 * (1 + 2 + 3 + 4 + 5 + 6) * 0.05 }}</span>
                        </h3>
                        <p class="text-body-tertiary mb-1">Show what your history checkout here</p>
                    </div>
                </div>
                <h4 class="mt-4 mb-3">History Checkout</h4>
                <div class="border-top border-bottom-0" id="dealForecastTable"
                    data-list='{"valueNames":["product","buyer","price","Earned","transaction-date"],"page":5}'>
                    <div class="table-responsive scrollbar">
                        <table class="table fs-9 mb-0">
                            <thead>
                                <tr>
                                    <th class="sort border-end border-translucent white-space-nowrap align-middle ps-0 text-uppercase text-body-tertiary"
                                        scope="col" data-sort="product" style="width:15%; min-width:100px">product
                                    </th>
                                    <th class="sort border-end border-translucent align-middle text-end px-3 text-uppercase text-body-tertiary"
                                        scope="col" data-sort="buyer" style="width:15%; min-width:95px">
                                        <div class="d-inline-flex flex-center"><span
                                                class="fa-solid fa-square fs-11 text-primary me-2"
                                                data-fa-transform="up-2"></span><span class="mb-0 fs-9">buyer</span>
                                        </div>
                                    </th>
                                    <th class="sort border-end border-translucent align-middle text-end px-3 text-uppercase text-body-tertiary"
                                        scope="col" data-sort="price" style="width:20%; min-width:100px">
                                        <div class="d-inline-flex flex-center"><span
                                                class="fa-solid fa-square fs-11 text-primary-light me-2"
                                                data-fa-transform="up-2"></span><span class="mb-0 fs-9">price</span>
                                        </div>
                                    </th>
                                    <th class="sort border-end border-translucent align-middle text-end px-3 text-uppercase text-body-tertiary"
                                        scope="col" data-sort="Earned" style="width:20%; min-width:100px">
                                        <div class="d-inline-flex flex-center"><span
                                                class="fa-solid fa-square fs-11 text-success me-2"
                                                data-fa-transform="up-2"></span><span class="mb-0 fs-9">Earned</span>
                                        </div>
                                    </th>
                                    <th class="sort align-middle text-end ps-3 text-uppercase text-body-tertiary"
                                        scope="col" data-sort="transaction-date"
                                        style="width:20%; min-width:100px">
                                        <div class="d-inline-flex flex-center"><span
                                                class="fa-solid fa-square fs-11 text-info me-2"
                                                data-fa-transform="up-2"></span><span class="mb-0 fs-9">Transaction
                                                Date</span></div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list" id="table-deal-forecast-body">
                                @for ($i = 1; $i <= 6; $i++)
                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                        <td
                                            class="contact border-end border-translucent align-middle white-space-nowrap py-2 ps-0 px-3">
                                            <a class="fw-semibold" href="#!">Wedding Ring Gold
                                                {{ $i }}</a>
                                        </td>
                                        <td
                                            class="appointment border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">
                                            Shiro Geo {{ $i }}</td>
                                        <td
                                            class="qualified border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">
                                            &#8369; {{ 150 * $i }}</td>
                                        <td
                                            class="closed-won border-end border-translucent align-middle white-space-nowrap text-end fw-semibold text-body py-2 px-3">
                                            &#8369; {{ 150 * $i * 0.05 }}</td>
                                        <td
                                            class="contact-sent border-end-0 align-middle white-space-nowrap text-end fw-semibold text-body ps-3 py-2">
                                            November 2{{ $i }}, 2024</td>
                                    </tr>
                                @endfor
                            </tbody>
                            <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                <td
                                    class="align-middle border-bottom-0 border-end border-translucent white-space-nowrap text-end fw-bold text-body-emphasis pt-2 lh-sm pb-0 px-3">
                                </td>
                                <td
                                    class="align-middle border-bottom-0 border-end border-translucent white-space-nowrap text-end fw-bold text-body-emphasis pt-2 lh-sm pb-0 px-3">
                                    4,744</td>
                                <td
                                    class="align-middle border-bottom-0 border-end border-translucent white-space-nowrap text-end fw-bold text-body-emphasis pt-2 lh-sm pb-0 px-3">
                                    &#8369; {{ 150 * (1 + 2 + 3 + 4 + 5 + 6) }}</td>
                                <td
                                    class="align-middle border-bottom-0 border-end border-translucent white-space-nowrap text-end fw-bold text-body-emphasis pt-2 lh-sm pb-0 px-3">
                                    &#8369; {{ 150 * (1 + 2 + 3 + 4 + 5 + 6) * 0.05 }}</td>
                                <td
                                    class="border-bottom-0 align-middle white-space-nowrap text-end fw-bold text-body-emphasis pt-2 pb-0 ps-3">
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xxl-6 mb-6 gy-0 gy-xxl-3 d-flex justify-content-center align-items-center">
                Orotime Jewelry Logo's and Picture
            </div>
        </div>
        <footer class="footer position-absolute">
            <div class="row g-0 justify-content-between align-items-center h-100">
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 mt-2 mt-sm-0 text-body">Thank you for visiting Orotime Jewelry <span
                            class="d-none d-sm-inline-block"></span><span
                            class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2024 &copy;
                </div>
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85">{{ version() }} </p>
                </div>
            </div>
        </footer>
    </div>
</x-layout.ref>
