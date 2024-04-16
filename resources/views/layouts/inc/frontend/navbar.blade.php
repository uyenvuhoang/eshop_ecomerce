<!-- Header -->
<header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                            <li><i class="fa-solid fa-headphones-simple"></i> {{ $appSetting->phone1 ?? 'Phone 1' }}</li>
                            <li><i class="fa-regular fa-envelope"></i> {{ $appSetting->email1 ?? 'Email 1' }}</li>
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <!-- Top Right -->
                    <div class="right-content">
                        <ul class="list-main">
                            <li><i class="fa-solid fa-location-dot"></i> Store location</li>
                            <li><i class="fa-regular fa-clock"></i><a href="#">Daily deal</a></li>

                            @guest
                                @if (Route::has('login'))
                                    <li><i class="fa-solid fa-power-off"></i></i><a href="{{ route('login') }}">Login</a>
                                    </li>
                                @endif
                            @else
                                <li class="dropdown">
                                    <span class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-user"></i>
                                        <a href="">{{ Auth::user()->name }}</a>
                                    </span>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="{{ url('profile') }}">
                                            <i class="fa fa-user"></i>
                                            Profile</a>
                                        <a class="dropdown-item" href="{{ url('orders') }}">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                            My Order</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="/">
                            <h3>{{ $appSetting->wedsite_name ?? 'Wedsite Name' }}</h3>
                        </a>
                    </div>
                    <!--/ End Logo -->
                    <!-- Search Form -->
                    <div class="search-top">
                        <div class="top-search"><a href="#0"><i class="fa fa-search"></i></a></div>
                        <!-- Search Form -->
                        <div class="search-top">
                            <form class="search-form" action="{{ url('search') }}" method="GET">
                                <input type="text" placeholder="Search here..." name="search"
                                    value="{{ Request::get('search') }}">
                                <button value="search" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                    <!--/ End Search Form -->
                    <div class="mobile-nav"></div>
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="search-bar-top">
                        <div class="search-bar">
                            <form role="search" action="{{ url('search') }}" method="GET"
                                style="width:100% !important">
                                <input type="search" name="search" value="{{ Request::get('search') }}"
                                    style="width:100% !important" placeholder="Search your product"
                                    class="form-control" />
                                <button class="btnn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-12">
                    <div class="right-bar">
                        <!-- Search Form -->
                        <div class="sinlge-bar">
                            <a href="{{ url('wishlist') }}" class="single-icon"><i class="fa-regular fa-heart"></i></a>
                        </div>
                        <div class="sinlge-bar shopping">
                            <a href="{{ url('cart') }}" class="single-icon"><i
                                    class="fa-solid fa-bag-shopping"></i></i> <span class="total-count">
                                    <livewire:frontend.cart.cart-count />
                                </span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-3">
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">
                                    <div class="nav-inner">
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li><a href="{{ url('/') }}">Home</a></li>
                                            <li><a href="/collections">All Categories<i class="ti-angle-down"></i></a>
                                                @if ($categories ?? '')
                                                    <ul class="dropdown">
                                                        @foreach ($categories as $categoryItem)
                                                            <li><a
                                                                    href="{{ url('/collections/' . $categoryItem->slug) }}">{{ $categoryItem->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                            <li><a href="/new-arrivals">New Arrivals</a></li>
                                            <li><a href="/featured-products">Featured Products</a></li>
                                            <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
