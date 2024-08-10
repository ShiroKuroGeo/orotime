<div class="col-lg-auto">
    <div class="email-sidebar email-sidebar-width bg-body phoenix-offcanvas phoenix-offcanvas-fixed"
        id="emailSidebarColumn">
        <div class="email-content scrollbar-overlay">
            <div class="d-flex justify-content-between align-items-center">
                <p class="text-uppercase fs-10 text-body-tertiary text-opacity-85 mb-2 fw-bold">Mainbox</p>
                <button class="btn d-lg-none p-0 mb-2" data-phoenix-dismiss="offcanvas">
                    <span class="uil uil-times fs-8"></span>
                </button>
            </div>
            <ul class="nav flex-column border-top border-translucent fs-9 vertical-nav mb-4">
                <li class="nav-item">
                    <a class="nav-link py-2 ps-0 pe-3 border-end border-bottom border-translucent text-start outline-none {{ Request::routeIs('inbox') ? 'active' : '' }}"
                        aria-current="page" href="{{ route('inbox') }}">
                        <div class="d-flex align-items-center">
                            <span class="me-2 nav-icons uil uil-inbox"></span>
                            <span class="flex-1">Inbox</span>
                            <span class="nav-item-count">5</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-2 ps-0 pe-3 border-end border-bottom border-translucent text-start outline-none {{ Request::routeIs('sent') ? 'active' : '' }}"
                        aria-current="page" href="{{ route('sent') }}">
                        <div class="d-flex align-items-center">
                            <span class="me-2 nav-icons uil uil-location-arrow"></span>
                            <span class="flex-1">Sent</span>
                            <span class="nav-item-count">23</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="phoenix-offcanvas-backdrop d-lg-none top-0" data-phoenix-backdrop="data-phoenix-backdrop"></div>
</div>