<x-layout.ref>
    @include('components.refnavtopstart')
    <main class="main mt-5 pt-5">

        <section class="pt-5 pb-9">
            <div class="product-filter-container"><button
                    class="btn btn-sm btn-oro-secondary text-body-tertiary mb-5 d-lg-none" data-oro-toggle="offcanvas"
                    data-oro-target="#productFilterColumn"><span
                        class="fa-solid fa-filter me-2"></span>Filter</button>
                <div class="row">
                    <div class="col-lg-3 col-xxl-2 ps-2 ps-xxl-3">
                        <div class="oro-offcanvas-filter bg-body scrollbar oro-offcanvas oro-offcanvas-fixed"
                            id="productFilterColumn" style="top: 92px">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h3 class="mb-0">Filters</h3><button class="btn d-lg-none p-0"
                                    data-oro-dismiss="offcanvas"><span class="uil uil-times fs-8"></span></button>
                            </div>

                            <a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse"
                                href="#collapseColorFamily" role="button" aria-expanded="true"
                                aria-controls="collapseColorFamily">
                                <div class="d-flex align-items-center justify-content-between w-100">
                                    <div class="fs-8 text-body-highlight">Color family</div><span
                                        class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                                </div>
                            </a>
                            <div class="collapse show" id="collapseColorFamily">
                                <div class="mb-2">
                                    <div class="form-check mb-0"><input class="form-check-input mt-0"
                                            id="flexCheckGold" type="checkbox" name="color" checked><label
                                            class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0"
                                            for="flexCheckGold">Gold</label></div>
                                    <div class="form-check mb-0"><input class="form-check-input mt-0"
                                            id="flexCheckSilver" type="checkbox" name="color"><label
                                            class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0"
                                            for="flexCheckSilver">Silver</label></div>
                                    <div class="form-check mb-0"><input class="form-check-input mt-0"
                                            id="flexCheckSilverGold" type="checkbox" name="color"><label
                                            class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0"
                                            for="flexCheckSilverGold">Silver Gold</label></div>
                                </div>
                            </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse"
                                href="#collapseBrands" role="button" aria-expanded="true"
                                aria-controls="collapseBrands">
                                <div class="d-flex align-items-center justify-content-between w-100">
                                    <div class="fs-8 text-body-highlight">Brands</div><span
                                        class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                                </div>
                            </a>
                            <div class="collapse show" id="collapseBrands">
                                <div class="mb-2">
                                    <div class="form-check mb-0"><input class="form-check-input mt-0"
                                            id="flexCheckNecklace" type="checkbox" name="brands" checked><label
                                            class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0"
                                            for="flexCheckNecklace">Necklace
                                        </label></div>
                                    <div class="form-check mb-0"><input class="form-check-input mt-0"
                                            id="flexCheckRing" type="checkbox" name="brands"><label
                                            class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0"
                                            for="flexCheckRing">Ring
                                        </label></div>
                                    <div class="form-check mb-0"><input class="form-check-input mt-0"
                                            id="flexCheckEarning" type="checkbox" name="brands"><label
                                            class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0"
                                            for="flexCheckEarning">Earning
                                        </label></div>
                                    <div class="form-check mb-0"><input class="form-check-input mt-0"
                                            id="flexCheckBracelet" type="checkbox" name="brands"><label
                                            class="form-check-label d-block lh-sm fs-8 text-body fw-normal mb-0"
                                            for="flexCheckBracelet">Bracelet
                                        </label></div>

                                </div>
                            </div><a class="btn px-0 d-block collapse-indicator" data-bs-toggle="collapse"
                                href="#collapsePriceRange" role="button" aria-expanded="true"
                                aria-controls="collapsePriceRange">
                                <div class="d-flex align-items-center justify-content-between w-100">
                                    <div class="fs-8 text-body-highlight">Price range</div><span
                                        class="fa-solid fa-angle-down toggle-icon text-body-quaternary"></span>
                                </div>
                            </a>
                            <div class="collapse show" id="collapsePriceRange">
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="input-group me-2"><input class="form-control" type="text"
                                            aria-label="First name" placeholder="Min"><input class="form-control"
                                            type="text" aria-label="Last name" placeholder="Max"></div><button
                                        class="btn btn-oro-primary px-3" type="button">Go</button>
                                </div>
                            </div>
                        </div>
                        <div class="oro-offcanvas-backdrop d-lg-none" data-oro-backdrop style="top: 92px">
                        </div>
                    </div>
                    <div class="col-lg-9 col-xxl-10">
                        <div class="row gx-3 gy-6 mb-8">
                            @for ($i = 1; $i <= 18; $i++)
                                <div class="col-12 col-sm-6 col-md-4 col-xxl-2">
                                    <div class="product-card-container h-100">
                                        <div class="position-relative text-decoration-none product-card h-100">
                                            <div class="d-flex flex-column justify-content-between h-100">
                                                <div>
                                                    <div
                                                        class="border border-1 border-translucent rounded-3 position-relative mb-3">
                                                        <img class="img-fluid"
                                                            src="{{ asset('images/orotime-images/flyer1.jpg') }}"
                                                            alt="" />
                                                    </div>
                                                    <a class="stretched-link" data-bs-toggle="modal"
                                                        data-bs-target="#userId{{ $i }}" href="#">
                                                        <h6 class="mb-2 lh-sm line-clamp-3 product-name">Golden Wedding
                                                            Ring 15k Grams</h6>
                                                    </a>
                                                </div>
                                                <div>
                                                    <p class="fs-9 text-body-tertiary mb-2">Wedding Ring</p>
                                                    <div class="d-flex align-items-center mb-1">
                                                        <h3 class="text-body-emphasis mb-0">P{{ 1289.0 * $i }}</h3>
                                                    </div>
                                                    <p class="text-body-tertiary fw-semibold fs-9 lh-1 mb-0">2 colors
                                                    </p>
                                                </div>
                                                <div class="modal fade" id="userId{{ $i }}"
                                                    aria-labelledby="userIdLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="userIdLabel">Save Referral Link</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <small class="text-danger">Note: Copy the link inside the box.</small>
                                                                <input type="text" name="referralLink" id="referralLink" disabled class="form-control" value="{{ Request::url() }}/{{ 150 * $i }}/{{ 250 * $i }}">
                                                                <small class="text-danger">Note: You can only get your commission if someone is buying your referral.</small><br>
                                                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('refed-Product', ['refId' => 150 * $i, 'proId' => 250 * $i])) }}" target="_blank"><i data-feather="facebook" class="fs-base p-1 txt-primary"></i></a>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        <div class="d-flex justify-content-end">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination mb-0">
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <span class="fas fa-chevron-left"> </span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link active" href="#">1</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer position-relative">
            <div class="row g-0 justify-content-between align-items-center h-100">
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 mt-2 mt-sm-0 text-body">Thank you for visiting Orotime Jewelry<span
                            class="d-none d-sm-inline-block"></span><span
                            class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2024 &copy;
                </div>
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 text-body-tertiary text-opacity-85">{{ version() }}</p>
                </div>
            </div>
        </footer>
    </main>
</x-layout.ref>
