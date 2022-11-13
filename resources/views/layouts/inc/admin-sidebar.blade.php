<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
            <img src="{{ asset('assets/img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Admin Dashboard</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div id="sidenav-collapse-main">
{{--       class=" collapse navbar-collapse w-auto" --}}
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/dashboard') ? 'active':'' }}" href="{{url('admin/dashboard')}}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">INTERFACE</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/category') || Request::is('admin/add-category') || Request::is('admin/edit-category/*') ? 'collapsed active':'collapsed' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-archive-2 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Category</span>
                </a>
                <div class="collapse {{ Request::is('admin/category') || Request::is('admin/add-category') || Request::is('admin/edit-category/*') ? 'show':'' }}" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <a class="nav-link {{ Request::is('admin/add-category') ? 'active':'' }}" href="{{ url('admin/add-category') }}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"></div>
                        <span class="nav-link-text ms-1">Add Category</span>
                    </a>
                    <a class="nav-link {{ Request::is('admin/category') || Request::is('admin/edit-category/*') ? 'active':'' }}" href="{{url('admin/category') }}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"></div>
                        <span class="nav-link-text ms-1">View Category</span>
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/posts') || Request::is('admin/add-post') || Request::is('admin/post/*') ? 'collapsed active':'collapsed' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePost" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-books text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Posts</span>
                </a>
                <div class="collapse {{ Request::is('admin/posts') || Request::is('admin/add-post') || Request::is('admin/post/*') ? 'show':'' }}" id="collapsePost" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <a class="nav-link {{ Request::is('admin/add-post') ? 'active':'' }}" href="{{ url('admin/add-post') }}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"></div>
                        <span class="nav-link-text ms-1">Add Post</span>
                    </a>
                    <a class="nav-link {{ Request::is('admin/posts') || Request::is('admin/post/*') ? 'active':'' }}" href="{{url('admin/posts') }}">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center"></div>
                        <span class="nav-link-text ms-1">View Post</span>
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/users') ? 'active':'' }}" href="{{url('admin/users')}}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">User</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Addons</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/settings') ? 'active':'' }}" href="{{ url('admin/settings') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-settings text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
