<x-layout.customerApp>
    <main class="content-wrapper">

        <section class="container pb-5 mb-1 mb-sm-2 mb-md-3 mb-lg-4 mb-xl-5 my-5">
            <div class="row">

                <div class="col-md-6">
                    <img src="{{ asset('images/orotime-images/product-image.jpg') }}" alt=""
                        class="img-fluid w-100 h-100">
                </div>

                <div class="col-md-6 col-xl-5 offset-xl-1 pt-4">
                    <div class="ps-md-4 ps-xl-0">
                        <div class="position-relative" id="zoomPane">

                            <h1 class="text-primary">Golder Ring</h1>

                            <div class="d-flex flex-wrap align-items-center mb-3">
                                <div class="mb-0 me-3 text-oro-color">Wedding Ring</div>
                            </div>

                            <div class="d-flex flex-wrap align-items-center mb-3">
                                <div class="h4 mb-0 me-3 text-oro-color">&#8369;940.00</div>
                            </div>

                            <div class="d-flex flex-wrap align-items-center mb-3">
                                <div class="mb-0 me-3 text-oro-color"><span class="link-primary">17</span> Available to
                                    order</div>
                            </div>

                            <div class="d-flex flex-wrap align-items-center mb-3">
                                <div class="mb-0 me-3 text-oro-color">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#askQuestion"
                                        class="text-decoration-none">
                                        <span class="link-primary pe-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                fill="currentColor" class="bi bi-question-circle" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                <path
                                                    d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286m1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94" />
                                            </svg>
                                        </span>
                                    </a>
                                    <div class="modal fade" id="askQuestion" tabindex="-1"
                                        aria-labelledby="askQuestionLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="askQuestionLabel">Ask Question</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <label for="">Ask about this product.</label>
                                                    <textarea name="askQuestionCustomer" id="askQuestionCustomer" cols="30" rows="10" class="form-control"
                                                        placeholder="Enter Question"></textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    Ask Question
                                </div>

                                <div class="mb-0 me-3 text-oro-color">
                                    <span class="link-primary pe-1" data-bs-toggle="modal" data-bs-target="#shareModal">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-share-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.5 2.5 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5" />
                                        </svg>
                                    </span>
                                    <div class="modal fade" id="shareModal" tabindex="-1"
                                        aria-labelledby="shareModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="shareModalLabel">Share Link</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="text" name="shareUrl" id="shareUrl"
                                                        class="form-control" value="{{ url()->current() }}" disabled>
                                                    <div class="links m-0">
                                                        <div class="">
                                                            <a href="facebook.com">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-facebook" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                                                </svg>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Okay</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    Share
                                </div>

                            </div>

                            <div
                                class="d-flex flex-wrap flex-sm-nowrap flex-md-wrap flex-lg-nowrap gap-3 gap-lg-2 gap-xl-3 mb-4">
                                <div class="count-input flex-shrink-0 order-sm-1">
                                    <button type="button" class="btn btn-icon btn-lg" data-decrement=""
                                        aria-label="Decrement quantity">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                            <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                                        </svg>
                                    </button>
                                    <input type="number" class="form-control form-control-lg" value="1"
                                        min="1" max="5" readonly="">
                                    <button type="button" class="btn btn-icon btn-lg" data-increment=""
                                        aria-label="Increment quantity">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                                        </svg>
                                    </button>
                                </div>
                                <a type="button" href="{{ route('getPurchase', ['pid' => 123]) }}"
                                    class="btn btn-lg btn-primary w-100 animate-slide-end order-sm-2 order-md-4 order-lg-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" class="bi bi-bag-fill fs-base animate-target ms-n1 me-2"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4z" />
                                    </svg>
                                    Buy Product
                                </a>
                            </div>
                            <div class="col-12 mt-5" style="height: 30vh; overflow: auto">
                                <ul class="nav nav-tabs rounded-0" id="myTab" role="tablist"
                                    style="position: sticky;top: 0">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active btn-sm rounded-0" id="description-tab"
                                            data-bs-toggle="tab" data-bs-target="#description" type="button"
                                            role="tab" aria-controls="description"
                                            aria-selected="true">Description</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn-sm rounded-0" id="Reviews-tab"
                                            data-bs-toggle="tab" data-bs-target="#Reviews" type="button"
                                            role="tab" aria-controls="Reviews"
                                            aria-selected="false">Reviews</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" disabled id="profile-tab" data-bs-toggle="tab"
                                            data-bs-target="#profile" type="button" role="tab"
                                            aria-controls="profile" aria-selected="false"></button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">

                                    {{-- Tabs for Product Descriptions --}}
                                    <div class="tab-pane fade show active" id="description" role="tabpanel"
                                        aria-labelledby="description-tab">
                                        <div class="tab-content" id="ex1-content">
                                            <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel"
                                                aria-labelledby="ex1-tab-1">
                                                <p>
                                                    With supporting text below as a natural lead-in to additional
                                                    content. Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    Ut
                                                    enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                                                    ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                                    pariatur.
                                                </p>
                                                <div class="col-12 col-md-6 mb-2">
                                                    <ul class="list-unstyled mb-0">
                                                        <li>
                                                            Some great feature name here
                                                        </li>
                                                        <li>
                                                            Lorem ipsum dolor sit amet, consectetur
                                                        </li>
                                                        <li>
                                                            Duis aute irure dolor in reprehenderit
                                                        </li>
                                                        <li>
                                                            Optical heart sensor
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Tabs for reviews --}}
                                    <div class="tab-pane fade" id="Reviews" role="tabpanel"
                                        aria-labelledby="Reviews-tab">
                                        <div class="border-bottom py-3 mb-3">
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="text-nowrap me-3">
                                                    <span class="h6 mb-0">George Alfeser</span>
                                                </div>
                                                <span class="text-body-secondary fs-sm ms-auto">May 15, 2024</span>
                                            </div>
                                            <div class="d-flex gap-1 fs-sm pb-2 mb-1">
                                                <i class="ci-star-filled text-warning"></i>
                                                <i class="ci-star-filled text-warning"></i>
                                                <i class="ci-star-filled text-warning"></i>
                                                <i class="ci-star-filled text-warning"></i>
                                                <i class="ci-star text-body-tertiary opacity-75"></i>
                                            </div>
                                            <p class="fs-sm">
                                                This jewelry is sooo much amazing I love it. Thank you!
                                            </p>

                                            <div class="nav">
                                                <div class="col-12">
                                                    <a class="text-decoration-none" data-bs-toggle="collapse"
                                                        href="#collapseExample" role="button" aria-expanded="false"
                                                        aria-controls="collapseExample">
                                                        Reply
                                                    </a>
                                                </div>

                                                <div class="col-12">
                                                    <div class="collapse" id="collapseExample">
                                                        <div class="card card-body">
                                                            <div class="">
                                                                <div class="reviews border-bottom mb-2">
                                                                    <div class="d-flex align-items-center mb-3">
                                                                        <div class="text-nowrap me-3">
                                                                            <span class="h6 mb-0">George Alfeser</span>
                                                                        </div>
                                                                        <span
                                                                            class="text-body-secondary fs-sm ms-auto">May
                                                                            15, 2024</span>
                                                                    </div>
                                                                    <div class="d-flex gap-1 fs-sm pb-2 mb-1">
                                                                        <i class="ci-star-filled text-warning"></i>
                                                                        <i class="ci-star-filled text-warning"></i>
                                                                        <i class="ci-star-filled text-warning"></i>
                                                                        <i class="ci-star-filled text-warning"></i>
                                                                        <i
                                                                            class="ci-star text-body-tertiary opacity-75"></i>
                                                                    </div>
                                                                    <p class="fs-sm">
                                                                        This jewelry is sooo much amazing I love it.
                                                                        Thank you!
                                                                    </p>
                                                                </div>
                                                                <div class="">
                                                                    <textarea name="reviewsRepy" id="reviewsRepy" cols="20" rows="4" class="form-control"
                                                                        placeholder="Enter reply"></textarea>
                                                                </div>
                                                                <div class="d-flex justify-content-end mt-3">
                                                                    <button
                                                                        class="btn btn-primary col-5">Reply</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section class="container pb-4 pb-md-5 mb-2 mb-sm-0 mb-lg-2 mb-xl-4">

            <h2 class="h3 border-bottom pb-4 mb-0">Best Ratings</h2>


            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">

                @for ($i = 1; $i < 5; $i++)
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
                            <div class="w-100 min-w-0 p-1">
                                <h3 class="pb-1 mb-2">
                                    <a class="d-block fs-sm fw-medium text-truncate" href="#">
                                        <span class="animate-target">Ring handmade 15k grams Japan</span>
                                    </a>
                                </h3>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="lh-1 mb-0">&#8369; 899.00</div>
                                    <button type="button" class="btn btn-primary ms-2 p-2">
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
