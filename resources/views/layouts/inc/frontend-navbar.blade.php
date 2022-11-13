<header class="section page-header rd-navbar-dark">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="166px" data-xl-stick-up-offset="166px" data-xxl-stick-up-offset="166px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-panel">
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-main"><span></span></button>
            </div>
            <div class="rd-navbar-main">
                <div class="rd-navbar-main-top">
                    <div class="rd-navbar-main-container container">
                        <ul class="rd-navbar-list">
                            @php
                                $setting = App\Models\Setting::find(1);
                            @endphp
                            @if($setting)
                                <img src="{{ asset('uploads/settings/'.$setting->logo) }}" class="w-25" alt="logo">
                            @endif
                        </ul>
                        <div class="col-md-9 my-auto">
                            <div class="border text-center p-2">
                                <h5>Advertise Here</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rd-navbar-main-bottom rd-navbar-darker">
                    <div class="rd-navbar-main-container container">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="rd-nav-item">
                                <a class="rd-nav-link" href="{{ url('/') }}">Home</a>
                            </li>
                            @php
                                $categories = App\Models\Category::where('navbar_status','0')->where('status','0')->get();
                            @endphp
                            @foreach ($categories as $cateitem)
                                <li class="rd-nav-item">
                                    <a class="rd-nav-link" href="{{ url('tutorial/'.$cateitem->slug) }}">{{ $cateitem->name }}</a>
                                </li>
                            @endforeach
                            @if(Auth::check())
                                <li class="rd-nav-item">
                                    <a class="rd-nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
