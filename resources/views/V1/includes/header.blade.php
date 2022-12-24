<!--page loader-->
<div class="loader-wrapper">
    <div class="d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
        <div class="spinner-border text-dark" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>
<!--end loader-->

<!--start top header-->

<header class="top-header">

    <nav class="navbar navbar-expand-xl w-100 navbar-dark container gap-3">
        <a class="navbar-brand d-none d-xl-inline" href="index.html"><img src="{{ asset('v1/assets/images/logo.webp') }}"
                class="logo-img" alt=""></a>
        <a class="mobile-menu-btn d-inline d-xl-none" href="javascript:;" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar">
            <i class="bi bi-list"></i>
        </a>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
            <div class="offcanvas-header">
                <div class="offcanvas-logo"><img src="{{ asset('v1/assets/images/logo.webp') }}" class="logo-img"
                        alt="">
                </div>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body primary-menu">
                <ul class="navbar-nav justify-content-start flex-grow-1 gap-1">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">{{ trans('main_trans.Home') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="tv-shows.html"
                            data-bs-toggle="dropdown">
                            {{ trans('main_trans.Categories') }}
                        </a>
                        <div class="dropdown-menu dropdown-large-menu">
                            <div class="row">

                                @foreach (app('categories') as $category)
                                    <div class="col-12 col-xl-4">
                                       <a href="{{ route('category.show', [1, $category->id]) }}">
                                           <h6 class="large-menu-title" style="color: blue">{{ $category->name }}</h6>
                                        </a>
                                        <ul class="list-unstyled">
                                            @if ($category->subCategories)
                                                @foreach ($category->subCategories as $subCategory)
                                                    <li><a  href="javascript:;">{{ $subCategory->name }}</a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                @endforeach




                                <!-- end col-3 -->
                                <div class="col-12 col-xl-4 d-none d-xl-block">
                                    <div class="pramotion-banner1">
                                        {{-- <img src="{{ asset('v1/assets/images/menu-img.webp')}}" class="img-fluid" alt="" /> --}}
                                    </div>
                                </div>
                                <!-- end col-3 -->
                            </div>
                            <!-- end row -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                            data-bs-toggle="dropdown">
                            {{ trans('main_trans.Shop') }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item"
                                    href="{{ route('cart.list') }}">{{ trans('main_trans.Shop Cart') }}</a></li>
                            <li><a class="dropdown-item" href="{{ route('wishlist') }}"
                                    :active="request() - > routeIs('wishlist')">{{ trans('main_trans.Wishlist') }}</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('Favorite') }}"
                                    :active="request() - > routeIs('Favorite')">{{ trans('main_trans.Favorite') }}</a>
                            </li>


                            {{-- <li><a class="dropdown-item"
                                    href="billing-details.html">{{ trans('main_trans.Billing Details') }}</a></li> --}}
                            {{-- <li><a class="dropdown-item" href="address.html">{{ trans('main_trans.Addresses') }}</a> --}}
                            {{-- </li> --}}
                            <li><a class="dropdown-item"
                                    href="{{ route('category.show', 1) }}">{{ trans('main_trans.Shop') }}</a></li>

                            <li><a class="dropdown-item" href="{{ route('search.show') }}">{{ trans('main_trans.Search') }}</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('aboutus.show')}}">{{trans('main_trans.About Us')}}</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{route('contact.show')}}">{{trans('main_trans.Contact Us')}}</a>
                     </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                            data-bs-toggle="dropdown">
                            {{ trans('main_trans.Account') }}
                        </a>





                        @if (auth()->check())
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="{{route('order_List')}}">{{trans('main_trans.My Orders')}}</a></li>
                                <li><a class="dropdown-item" href="{{route('ShowProfile')}}">{{trans('main_trans.Edit Profile')}}</a></li>

                                {{-- <li><a class="dropdown-item"
                                        href="account-saved-address.html">{{ trans('main_trans.Addresses') }}</a></li> --}}

                                <li><a class="dropdown-item"
                                        href="{{ route('logout') }}">{{ trans('main_trans.Log Out') }}</a></li>
                            </ul>
                        @else
                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item"
                                        href="{{ route('login.show') }}">{{ trans('main_trans.Login') }}</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('register.show') }}">{{ trans('main_trans.Register') }}</a>
                                </li>

                            </ul>
                        @endif
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;" data-bs-toggle="dropdown">
                        {{trans('main_trans.Blog')}}
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#blog">{{trans('main_trans.Blog Post')}}</a></li>
                        {{-- <li><a class="dropdown-item" href="{{ route('read.show') }}">{{trans('main_trans.Blog Read')}}</a></li> --}}
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="navbar-nav secondary-menu flex-row">
            <li class="nav-item">
                <a class="nav-link dark-mode-icon" href="javascript:;">
                    <div class="mode-icon">
                        <i class="bi bi-moon"></i>
                    </div>
                </a>
            </li>

            <li class="nav-item">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                    data-bs-toggle="dropdown">
                    <i class="bi bi-translate"></i>
                </a>
                <ul class="dropdown-menu">
                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li><a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a>
                        </li>
                    @endforeach
                </ul>

                <a class="nav-link" href="translate.html"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('category.show', 1) }}"><i class="bi bi-search"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('Favorite') }}"><i class="bi bi-suit-heart"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('wishlist') }}"><i class="bi bi-bell"></i></a>
            </li>
            <li class="nav-item" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
                <a class="nav-link position-relative" href="javascript:;">

                    <div class="cart-badge">{{ Cart::getContent()->count() }}</div>
                    <i class="bi bi-basket2"></i>
                </a>

            </li>

            <li class="nav-item">
                @if (auth()->check())
                    <a class="nav-link" href="account-dashboard.html"><i class="bi bi-person-circle"></i></a>
                @else
            <li class="nav-item">
                <a class="nav-link btn" href="{{ route('login.show') }}">{{ __('main_trans.Login') }}</a>
            </li>
            </li>
            @endif
            </li>
        </ul>
    </nav>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasRight"
        aria-labelledby="offcanvasRightLabel">

        @include('V1.includes.cartCard')
    </div>
</header>
<!--end top header-->
