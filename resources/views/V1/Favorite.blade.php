@extends('V1.layouts.app')
<!--page loader-->

@section('content')
    <div class="loader-wrapper">
        <div class="d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
            <div class="spinner-border text-dark" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>


    <!--start page content-->
    <div class="page-content">


        <!--start breadcrumb-->
        <div class="py-4 border-bottom">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:;">{{ trans('main_trans.Home') }}</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">{{ trans('main_trans.Shop') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ trans('main_trans.Favorite') }} </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ trans('main_trans.Hello') }}
                            {{ auth()->user()->client_name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->


        <!--start product wishlist-->
        <section class="section-padding">
            <div class="container">
                <div class="d-flex align-items-center px-3 py-2 border mb-4">
                    <div class="text-start">
                        <h4 class="mb-0 h4 fw-bold">{{ trans('main_trans.Favorite') }} {{ trans('main_trans.Items') }}
                        </h4>
                    </div>
                    <div class="ms-auto">
                        <button
                            type="button"class="btn btn-light btn-ecomm">{{ trans('main_trans.Continue Shopping') }}</button>
                    </div>
                </div>

                <div class="similar-products">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 g-4">
                        <!--  Product Div Of Wishlist -->


                        {{-- {{ dd($items) }} --}}
                        @if (count($items) > 0)
                            @foreach ($items as $item)
                                @include('V1.productDivWishlist')
                            @endforeach
                        @else
                            {{ trans('main_trans.no items added in favorite!') }}
                        @endif

                    </div>
                    <!--end row-->
                </div>
            </div>
        </section>
    @endsection
