<div class="offcanvas offcanvas-end offcanvas-lg-custom" id="chatSupport" tabindex="-1" >
    <div class="offcanvas-header border-bottom">
        <h4 class="h5 offcanvas-title">Chat Assistance</h4>
        <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body border">
        <div class="d-flex scrollbar p-3">
            <div class="text-center">
                <img class="rounded-circle border border-3 border-light-subtle" src="{{ asset('images/customer-images/user_profile.jpg') }}" alt="" style="width: 4rem; height: 4rem" />
                <h5 class="mt-2 mb-3">Customer Representative</h5>
                <p class="text-center text-body-emphasis mb-0">Ask us anything - we'll get back to you here or by email or phone number within 24 hours.</p><br>
            </div>
        </div>

        <div class="text-end my-3">
            <div class="text-end d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary-chat py-2 ps-4 pe-3" href="#!">
                <p class="mb-0 fw-semibold fs-9">I need help with something</p>
                <span class="fa-solid fa-paper-plane text-primary fs-9 ms-3"></span>
                <i data-feather="send" style="width: 16px; height: 16px"></i>
            </div>
            <div>
                <small>
                    December 25, 2002 at 16:10
                </small>
            </div>
        </div>
        <div class="text-start my-3">
            <div class="text-end d-inline-flex align-items-center text-decoration-none text-body-emphasis bg-body-hover rounded-pill border border-primary py-2 ps-4 pe-3" href="#!">
                <i data-feather="send" class="me-3" style="width: 16px; height: 16px"></i>
                <p class="mb-0 fw-semibold fs-9">I need help with something</p>
            </div>
            <div>
                <small>
                    December 25, 2002 at 16:10
                </small>
            </div>
        </div>

    </div>
    <div class="offcanvas-footer d-flex align-items-between justify-content-between gap-2 border-top border-translucent ps-3 pe-4 py-3">
        <div class="d-flex align-items-center flex-1 gap-3 border border-translucent rounded-pill px-4">
            <textarea name="message" id="message" cols="30" rows="1" class="form-control outline-none border-0 flex-1 fs-9 px-0" placeholder="Write Message"></textarea>
            <label class="btn btn-link d-flex p-0 text-body-quaternary fs-9 border-0" for="supportChatPhotos">
                <span data-feather="image" style="width: 16px; height: 16px"></span>
            </label>
            <input class="d-none" type="file" accept="image/*" id="supportChatPhotos" />
        </div>
        <button class="btn p-0 border-0 send-btn">
            <span data-feather="send" style="width: 16px; height: 16px"></span>
        </button>
    </div>
</div>

<div class="floating-buttons position-fixed top-50 end-0 z-sticky me-3 me-xl-4 pb-4">
    <a class="btn btn-sm btn-outline-secondary text-uppercase bg-body rounded-pill shadow animate-rotate ms-2 me-n5" href="#chatSupport" style="font-size: .625rem; letter-spacing: .05rem;" data-bs-toggle="offcanvas" role="button" aria-controls="customizer">
        Chat
        <i data-feather="message-square" class="ms-2 animate-target" style="width: 16px; height: 16px"></i>
    </a>
</div>