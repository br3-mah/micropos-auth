<div class="d-flex align-items-center me-2 me-lg-4">
    <a href="#" class="btn btn-icon btn-borderless btn-color-white btn-active-primary bg-white bg-opacity-10" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
        <i class="ki-duotone ki-user fs-1 text-white">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </a>
    <!--begin::User account menu-->
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <div class="menu-content d-flex align-items-center px-3">
                <!--begin::Avatar-->
                <div class="symbol symbol-50px me-5">
                    <img alt="Logo" src="assets/media/avatars/300-1.jpg" />
                </div>
                <!--end::Avatar-->
                <!--begin::Username-->
                <div class="d-block ">
                    <p class="fw-bold d-flex align-items-center fs-5">{{ auth()->user()->name }} </p>
                    <p class="badge badge-light-success fw-bold fs-8">Administration</p>
                    <p class="fw-semibold text-muted text-hover-primary fs-7">{{ auth()->user()->name }}</p>
                </div>
                <!--end::Username-->
            </div>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <a href="user/profile" class="menu-link px-5">My Profile</a>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        {{-- <div class="menu-item px-5">
            <a href="../../demo10/dist/apps/projects/list.html" class="menu-link px-5">
                <span class="menu-text">My Projects</span>
                <span class="menu-badge">
                    <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                </span>
            </a>
        </div> --}}
        <!--end::Menu item-->
        <!--begin::Menu item-->
        {{-- <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" data-kt-menu-offset="-15px, 0">
            <a href="#" class="menu-link px-5">
                <span class="menu-title">My Subscription</span>
                <span class="menu-arrow"></span>
            </a>
            <!--begin::Menu sub-->
            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="../../demo10/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="../../demo10/dist/account/billing.html" class="menu-link px-5">Billing</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="../../demo10/dist/account/statements.html" class="menu-link px-5">Payments</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="../../demo10/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
                    <span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
                        <i class="ki-duotone ki-information-5 fs-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span></a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content px-3">
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                            <span class="form-check-label text-muted fs-7">Notifications</span>
                        </label>
                    </div>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::Menu sub-->
        </div> --}}
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <!--end::Menu item-->
        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        
        <!--end::Menu item-->
        <!--begin::Menu item-->
        {{-- <div class="menu-item px-5 my-1">
            <a href="../../demo10/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
        </div> --}}
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <a class="menu-link px-5" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Sign Out') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form></a>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::User account menu-->
</div>