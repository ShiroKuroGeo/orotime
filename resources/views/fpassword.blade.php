<x-layout.admin>
    @section('title', 'Orotime - Forgot Password')
    <main class="main" id="top">
        <div class="container">
            <div class="row flex-center position-relative min-vh-100 g-0 py-5">
                <div class="col-11 col-sm-10 col-xl-8">
                    <div class="card border border-translucent auth-card">
                        <div class="card-body pe-md-0">
                            <div class="row align-items-center gx-0 gy-7">
                                <div
                                    class="col-auto bg-body-highlight dark__bg-gray-1100 rounded-3 position-relative overflow-hidden auth-title-box me-3 order-md-2">
                                    <div class="bg-holder"
                                        style="background-image:url({{ asset('images/orotime-images/flyer1.jpg') }});">
                                    </div>
                                    <div class="position-relative z-n1 mb-6 d-none d-md-block text-center mt-md-5">
                                        <img class="auth-title-box-img d-dark-none rounded mb-1"
                                            src="{{ asset('images/orotime-images/flyer1.jpg') }}" alt="" />
                                        <img class="auth-title-box-img d-light-none rounded"
                                            src="{{ asset('images/orotime-images/flyer1.jpg') }}" alt="" />
                                    </div>
                                </div>

                                <div class="col mx-auto order-md-1">
                                    <div class="auth-form-box">
                                        <div class="text-center">
                                            <h4 class="text-body-highlight">Forgot your password? </h4>
                                            <p class="text-body-tertiary mb-5">Enter your email below and we will <br
                                                    class="d-md-none" />send you <br class="d-none d-xxl-block" />a
                                                reset link</p>
                                            <form class="d-flex align-items-center mb-5">
                                                <input class="form-control flex-1" id="email" type="email"
                                                    placeholder="Email" />
                                                <button class="btn btn-primary ms-2" id="sendEmail">
                                                    Send
                                                    <i data-feather="chevron-right" class="ms-2" style="height: 15px; width: 15px"></i>
                                                </button>

                                            </form>
                                            <a class="fs-9 fw-bold" href="#!">Still having problems?</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</x-layout.admin>
