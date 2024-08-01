{{-- View only in lg --}}
<div class="d-none d-lg-block">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title my-3" id="accountSidebarLabel">Dashboard</h5>
        <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#accountSidebar"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-header d-lg-block py-3 p-lg-0">
        <div class="d-flex align-items-center">
            <div class="h5 d-flex justify-content-center align-items-center flex-shrink-0 text-primary bg-primary-subtle lh-1 rounded-circle mb-0"
                style="width: 3rem; height: 3rem" id="previewSelectedImage"> S </div>
            <div class="min-w-0 ps-3">
                <h5 class="h6 mb-1">Shiro Geo</h5>
                <div class="nav flex-nowrap text-nowrap min-w-0">
                    <a class="nav-link animate-underline text-body p-0" href="#bonusesModal" data-bs-toggle="modal">
                        <span class="animate-target me-1">Customer</span>
                    </a>
                </div>
            </div>
        </div>
        <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#accountSidebar"
            aria-label="Close"></button>
    </div>

    <div class="offcanvas-body d-block pt-2 pt-lg-4 pb-lg-0">
        <nav class="list-group list-group-borderless">
            <a class="list-group-item list-group-item-action d-flex align-items-center {{ Request::routeIs('cus-order') ? 'active pe-none' : '' }}"
                href="{{ route('cus-order') }}">
                <i data-feather="shopping-bag" class="fs-base pe-2"></i>
                Orders
                <span class="badge bg-primary rounded-pill ms-auto">1</span>
            </a>
            <a class="list-group-item list-group-item-action d-flex align-items-center {{ Request::routeIs('cus-wishlist') ? 'active pe-none' : '' }}"
                href="{{ route('cus-wishlist') }}">
                <i data-feather="heart" class="fs-base pe-2"></i>
                Wishlist
                <span class="badge bg-primary rounded-pill ms-auto">21</span>
            </a>
            <a class="list-group-item list-group-item-action d-flex align-items-center {{ Request::routeIs('cus-review') ? 'active pe-none' : '' }}"
                href="{{ route('cus-review') }}">
                <i data-feather="star" class="fs-base pe-2"></i>
                My Reviews
                <span class="badge bg-primary rounded-pill ms-auto">32</span>
            </a>
            <a class="list-group-item list-group-item-action d-flex align-items-center {{ Request::routeIs('cus-cart') ? 'active pe-none' : '' }}"
                href="{{ route('cus-cart') }}">
                <i data-feather="shopping-cart" class="fs-base pe-2"></i>
                My Cart <span class="badge bg-primary rounded-pill ms-auto">10</span>
            </a>
        </nav>
        <h6 class="pt-4 ps-2 ms-1">Manage account</h6>
        <nav class="list-group list-group-borderless">
            <a class="list-group-item list-group-item-action d-flex align-items-center {{ Request::routeIs('cus-info') ? 'active pe-none' : '' }}"
                href="{{ route('cus-info') }}">
                <i data-feather="user" class="fs-base pe-2"></i>
                Personal Information
            </a>
        </nav>
    </div>
</div>

{{-- View only in sm --}}
<div class="offcanvas-md offcanvas-start d-lg-none" tabindex="-1" id="accountSidebar"
    aria-labelledby="accountSidebarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title my-3" id="accountSidebarLabel">Dashboard</h5>
        <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#accountSidebar"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-header d-lg-block py-3 p-lg-0">
        <div class="d-flex align-items-center">
            <div class="h5 d-flex justify-content-center align-items-center flex-shrink-0 text-primary bg-primary-subtle lh-1 rounded-circle mb-0"
                style="width: 3rem; height: 3rem">S</div>
            <div class="min-w-0 ps-3">
                <h5 class="h6 mb-1">Shiro Geo</h5>
                <div class="nav flex-nowrap text-nowrap min-w-0">
                    <a class="nav-link animate-underline text-body p-0" href="#bonusesModal" data-bs-toggle="modal">
                        <span class="animate-target me-1">Customer</span>
                    </a>
                </div>
            </div>
        </div>
        <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#accountSidebar"
            aria-label="Close"></button>
    </div>

    <div class="offcanvas-body d-block pt-2 pt-lg-4 pb-lg-0">
        <nav class="list-group list-group-borderless">
            <a class="list-group-item list-group-item-action d-flex align-items-center {{ Request::routeIs('cus-order') ? 'active pe-none' : '' }}"
                href="{{ route('cus-order') }}">
                <i data-feather="shopping-bag" class="fs-base pe-2"></i>
                Orders
                <span class="badge bg-primary rounded-pill ms-auto">1</span>
            </a>
            <a class="list-group-item list-group-item-action d-flex align-items-center {{ Request::routeIs('cus-wishlist') ? 'active pe-none' : '' }}"
                href="{{ route('cus-wishlist') }}">
                <i data-feather="heart" class="fs-base pe-2"></i>
                Wishlist
                <span class="badge bg-primary rounded-pill ms-auto">21</span>
            </a>
            <a class="list-group-item list-group-item-action d-flex align-items-center {{ Request::routeIs('cus-review') ? 'active pe-none' : '' }}"
                href="{{ route('cus-review') }}">
                <i data-feather="star" class="fs-base pe-2"></i>
                My reviews
                <span class="badge bg-primary rounded-pill ms-auto">32</span>
            </a>
            <a class="list-group-item list-group-item-action d-flex align-items-center {{ Request::routeIs('cus-cart') ? 'active pe-none' : '' }}"
                href="{{ route('cus-cart') }}">
                <i data-feather="shopping-cart" class="fs-base pe-2"></i>
                My Cart
                <span class="badge bg-primary rounded-pill ms-auto">10</span>
            </a>
        </nav>
        <h6 class="pt-4 ps-2 ms-1">Manage account</h6>
        <nav class="list-group list-group-borderless">
            <a class="list-group-item list-group-item-action d-flex align-items-center {{ Request::routeIs('cus-info') ? 'active pe-none' : '' }}"
                href="{{ route('cus-info') }}">
                <i data-feather="user" class="fs-base pe-2"></i>
                Personal info
            </a>
        </nav>
    </div>
</div>
