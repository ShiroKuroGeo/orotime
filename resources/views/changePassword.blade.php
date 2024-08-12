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
                                            <h4 class="text-body-highlight">Request Forgot Password?</h4>
                                            <p class="text-body-tertiary mb-5">Enter your code below <br class="d-md-none" /> send you <br class="d-none d-xxl-block" />a reset link</p>
                                                <form method="POST" class="text-start mb-3" action="{{ route('passwordUpdate') }}">
                                                    @csrf
                                                    <input type="hidden" name="token" value="{{ $token }}">
                                                    <div class="form-input mb-3">
                                                        <label for="email" class="form-label ps-0">Email Address</label>
                                                        <input id="email" class="form-control" type="email" name="email" value="{{ old('email', $email) }}" required autofocus>
                                                    </div>
                                                    @error('email')
                                                        <span>{{ $message }}</span>
                                                    @enderror

                                                    <div class="form-input mb-3">
                                                        <label for="password" class="form-label ps-0">
                                                            <i style="height: 15px; width: 15px" data-feather="lock"></i>
                                                            New Password
                                                        </label>
                                                        <div class="position-relative" data-password="data-password">
                                                            <input id="password" type="password" name="password" class="form-control"  data-password-input="data-password-input" required>
                                                            <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle" type="button">
                                                                <i data-feather="eye" class="show" style="width: 16px; height: 16px"></i>
                                                                <i data-feather="eye-off" class="hide" style="width: 16px; height: 16px"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    @error('password')
                                                        <span>{{ $message }}</span>
                                                    @enderror
                                                    
                                                    
                                                    <div class="form-input mb-3">
                                                        <label for="password" class="form-label ps-0">
                                                            <i style="height: 15px; width: 15px" data-feather="lock"></i>
                                                            Confirm Password
                                                        </label>
                                                        <div class="position-relative" data-password="data-password">
                                                            <input id="password" type="password" name="password_confirmation" class="form-control"  data-password-input="data-password-input" required>
                                                            <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle" type="button">
                                                                <i data-feather="eye" class="show" style="width: 16px; height: 16px"></i>
                                                                <i data-feather="eye-off" class="hide" style="width: 16px; height: 16px"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-center">
                                                        <button type="submit" class="col-6 btn btn-primary">Reset Password</button>
                                                    </div>
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
