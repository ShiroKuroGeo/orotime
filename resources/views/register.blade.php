<x-layout.admin>
    @section('title', 'Orotime - Login')
    <main class="main" id="top">
        <div class="container">
            <div class="row flex-center min-vh-100 py-5">
                <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3"><a
                        class="d-flex flex-center text-decoration-none mb-4" href="{{ route('back') }}">
                        <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                            <img src="{{ asset('images/orotime-images/orologo.png') }}" alt="oro" width="50"
                                class="img-fluid" />
                        </div>
                    </a>
                    <div class="text-center mb-7">
                        <h3 class="text-body-highlight">Sign Up</h3>
                        <p class="text-body-tertiary">Register, verify, access granted swiftly</p>
                    </div>
                    <form>

                        <div class="mb-3 text-start">
                            <label class="form-label" for="name">Full Name</label>
                            <input class="form-control" name="name" id="name" type="text" placeholder="Name" />
                        </div>

                        <div class="mb-3 text-start">
                            <label class="form-label" for="email">Email Address</label>
                            <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" />
                        </div>

                        <div class="mb-3 text-start">
                            <label class="form-label" for="phNumber">Phone Number</label>
                            <input class="form-control" name="phNumber" id="phNumber" type="number" placeholder="+" />
                        </div>

                        <div class="mb-3 text-start">
                            <label class="form-label" for="type">Type</label>
                            <select name="type" id="type" class="form-select">
                                <option selected hidden value="0">Select what you are? </option>
                                <option value="1">Referral</option>
                                <option value="2">Buyer</option>
                            </select>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-sm-6"><label class="form-label" for="password">Password</label>
                                <div class="position-relative" data-password="data-password"><input
                                        class="form-control form-icon-input pe-6" id="password" type="password"
                                        placeholder="Password" data-password-input="data-password-input" /><button
                                        class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary"
                                        data-password-toggle="data-password-toggle"><span
                                            class="uil uil-eye show"></span><span
                                            class="uil uil-eye-slash hide"></span></button></div>
                            </div>
                            <div class="col-sm-6"><label class="form-label" for="confirmPassword">Confirm
                                    Password</label>
                                <div class="position-relative" data-password="data-password"><input
                                        class="form-control form-icon-input pe-6" id="confirmPassword" type="password"
                                        placeholder="Confirm Password"
                                        data-password-input="data-password-input" /><button
                                        class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary"
                                        data-password-toggle="data-password-toggle"><span
                                            class="uil uil-eye show"></span><span
                                            class="uil uil-eye-slash hide"></span></button></div>
                            </div>
                        </div>
                        <div class="form-check mb-3"><input class="form-check-input" id="termsService"
                                type="checkbox" /><label class="form-label fs-9 text-transform-none"
                                for="termsService">I accept the <a href="#!">terms </a>and <a
                                    href="#!">privacy policy</a></label></div><button
                            class="btn btn-primary w-100 mb-3">Sign up</button>
                        <div class="text-center"><a class="fs-9 fw-bold" href="{{ route('login') }}">Sign in to an
                                existing
                                account</a></div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-layout.admin>
