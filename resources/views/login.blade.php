<x-layout.admin>
    @section('title', 'Orotime - Login')
    <main class="main" id="top">
        <div class="container">
            <div class="row flex-center min-vh-100 py-5">
                <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3">
                    <a class="d-flex flex-center text-decoration-none mb-4" href="{{ route('back') }}">
                        <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                            <img src="{{ asset('images/orotime-images/orologo.png') }}" alt="oro" width="50"
                                class="img-fluid" />
                        </div>
                    </a>
                    <div class="text-center mb-7">
                        <h3 class="text-body-highlight">Sign In</h3>
                        <p class="text-body-tertiary">Get access to your account</p>
                    </div>
                    <div class="mb-3 text-start"><label class="form-label" for="email">Email address</label>
                        <div class="form-icon-container">
                            <input class="form-control form-icon-input" id="email" type="email"
                                placeholder="name@example.com" />
                            <i data-feather="user" class="text-body fs-9 form-icon" style="width: 16px; height: 16px"></i>
                        </div>
                    </div>
                    <div class="mb-3 text-start">
                        <label class="form-label" for="password">Password</label>
                        <div class="form-icon-container">
                            <input class="form-control form-icon-input pe-6" id="password" type="password" placeholder="Password" />
                            <i data-feather="key" class="text-body fs-9 form-icon" style="width: 16px; height: 16px"></i>
                        </div>
                    </div>
                    <div class="row flex-between-center mb-7">
                        <div class="col-auto">
                            <div class="form-check mb-0">
                                <input class="form-check-input" id="basic-checkbox" type="checkbox" checked="checked" />
                                <label class="form-check-label mb-0">Remember me</label>
                            </div>
                        </div>
                        <div class="col-auto">
                            <a class="fs-9 fw-semibold" href="{{ route('forgotPassword') }}">Forgot Password?</a>
                        </div>
                    </div>
                    <button class="btn btn-primary w-100 mb-3">Sign In</button>
                    <div class="text-center">
                        <a class="fs-9 fw-bold" href="{{ route('register') }}">Create an account</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout.admin>
