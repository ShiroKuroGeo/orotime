<x-layout.csr>
    @section('title', 'Inbox');
    @include('components.csrnavtopstart')

    <div class="content pt-0">
        <div class="email-container">
            <div class="row g-lg-6 mb-8">
                
                @include('components.chatNavbar')

                <div class="col-lg">
                    <div class="px-lg-1">
                        <div
                            class="d-flex align-items-center flex-wrap position-sticky pb-2 bg-body z-2 email-toolbar inbox-toolbar">
                            <div class="d-flex align-items-center flex-1 me-2"><button class="btn btn-sm p-0 me-2"
                                    type="button" onclick="location.reload()"><span
                                        class="text-primary fas fa-redo fs-10"></span></button>
                                <p class="fw-semibold fs-10 text-body-tertiary text-opacity-85 mb-0 lh-sm text-nowrap">
                                    Last refreshed 1m ago</p>
                            </div>
                            <div class="d-flex">
                                <p class="text-body-tertiary text-opacity-85 fs-9 fw-semibold mb-0 me-3">Showing :
                                    <span class="text-body">1-7 </span>of <span class="text-body">205</span></p>
                                <button class="btn p-0 me-3" type="button"><span
                                        class="text-body-quaternary fa-solid fa-angle-left fs-10"></span></button><button
                                    class="btn p-0" type="button"><span
                                        class="text-primary fa-solid fa-angle-right fs-10"></span></button>
                            </div>
                        </div>
                        <div class="border-top border-translucent py-2 d-flex justify-content-between">
                            <div class="form-check mb-0 fs-8"><input class="form-check-input" type="checkbox"
                                    data-bulk-select-row="data-bulk-select-row" /></div>
                            <div><button
                                    class="btn p-0 me-2 text-body-quaternary hover text-body-tertiary text-opacity-85"
                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Archive"><span
                                        class="fas fa-archive fs-10"></span></button><button
                                    class="btn p-0 me-2 text-body-quaternary hover text-body-tertiary text-opacity-85"
                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete"><span
                                        class="fas fa-trash fs-10"></span></button><button
                                    class="btn p-0 me-2 text-body-quaternary hover text-body-tertiary text-opacity-85"
                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Star"><span
                                        class="fas fa-star fs-10"></span></button><button
                                    class="btn p-0 text-body-quaternary hover text-body-tertiary text-opacity-85"
                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tags"><span
                                        class="fas fa-tag fs-10"></span></button></div>
                        </div>
                        <div class="border-top border-translucent hover-actions-trigger py-3">
                            <div class="row align-items-sm-center gx-2">
                                <div class="col-auto">
                                    <div class="d-flex flex-column flex-sm-row"><input
                                            class="form-check-input mb-2 m-sm-0 me-sm-2" type="checkbox"
                                            id="checkbox-1" data-bulk-select-row="data-bulk-select-row" /><button
                                            class="btn p-0"><span class="fas text-warning fa-star"></span></button>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="avatar avatar-s  rounded-circle">
                                        <img class="rounded-circle " src="../../assets/img/team/60.webp"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="col-auto"><a class="text-body-emphasis fw-bold inbox-link fs-9"
                                        href="../../apps/email/email-detail.html">Jessica Ball</a></div>
                                <div class="col-auto ms-auto">
                                    <div class="hover-actions end-0"><button
                                            class="btn btn-phoenix-secondary btn-icon dropdown-toggle dropdown-caret-none"
                                            type="button" data-bs-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false"
                                            data-bs-reference="parent"><span
                                                class="fa-solid fa-ellipsis"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Mark Unread</a><a class="dropdown-item"
                                                href="#!">Mark Important</a><a class="dropdown-item"
                                                href="#!">Archive</a><a class="dropdown-item"
                                                href="#!">Download</a><a class="dropdown-item"
                                                href="#!">Print</a><a class="dropdown-item"
                                                href="#!">Report Spam</a><a class="dropdown-item"
                                                href="#!">Report Phishing</a><a class="dropdown-item"
                                                href="#!">Mute Jessica Ball</a><a class="dropdown-item"
                                                href="#!">Block Jessica Ball</a><a
                                                class="dropdown-item text-danger" href="#!">Delete</a></div>
                                    </div><span class="fs-10 fw-bold">1 M</span>
                                </div>
                            </div>
                            <div class="ms-4 mt-n3 mt-sm-0 ms-sm-11"><a class="d-block inbox-link"
                                    href="../../apps/email/email-detail.html"><span
                                        class="fs-9 line-clamp-1 text-body-emphasis">Query about purchased soccer
                                        socks</span>
                                    <p class="fs-9 ps-0 text-body-tertiary mb-0 line-clamp-2">Greetings. I have
                                        purchased some socks under the bundle offer you availed this week. According to
                                        the offer I was thrilled to get a 25% off of any product I bought. Regardless, I
                                        had to pay the exact full price for them...</p>
                                </a></div>
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
                    <p class="mb-0 text-body-tertiary text-opacity-85">v1.18.0</p>
                </div>
            </div>
        </footer>
    </div>
</x-layout.csr>
