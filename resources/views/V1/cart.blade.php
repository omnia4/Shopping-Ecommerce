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
                        <li class="breadcrumb-item"><a href="javascript:;">{{trans('main_trans.Home')}}</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;"> {{ trans('main_trans.Shop') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ trans('main_trans.Cart') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
<!-- {{trans('main.trans.')}} -->

        <div class="row g-4">
            <div class="col-12 col-xl-8">

                @foreach ($cartItems as $item)
                    <div class="deleteDiv{{ $item->id }} card rounded-0 mb-3">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-lg-row gap-3">
                                <div class="product-img">
                                    <img src="{{ asset('v1/assets/images/featured-products/01.webp') }}" width="150"
                                        alt="">
                                </div>
                                <div class="product-info flex-grow-1">
                                    <h5 class="fw-bold mb-0">{{ $item->name }}</h5>
                                    <div class="product-price d-flex align-items-center gap-2 mt-3">

                                        <div class="h6 fw-bold ">EGP </div>
                                        <div
                                            class="h6 fw-bold @if ($item['attributes']->discount) text-decoration-line-through @endif">
                                            {{ $item->price }} </div>

                                            <div class="h6 fw-bold">
                                            @if ($item['attributes']->discount)

                                                {{ number_format( $item->price - (($item->price * $item['attributes']->discount_percent) /100) , 2) }}
                                            @endif
                                        </div>

                                    </div>
                                    <div class="mt-3 hstack gap-2">
                                        {{-- <button type="button" class="btn btn-sm btn-light border rounded-0" data-bs-toggle="modal" data-bs-target="#SizeModal">Size : M</button> --}}
                                        {{-- <button type="button" class="btn btn-sm btn-light border rounded-0" data-bs-toggle="modal" data-bs-target="#QtyModal">Qty : 1</button> --}}
                                    </div>
                                </div>
                                <div class="d-none d-lg-block vr"></div>
                                <div class="d-grid gap-2 align-self-start align-self-lg-center">

                                    <!-- <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                           @csrf
                         <button type="submit" class="btn btn-ecomm"><i class="bi bi-x-lg me-2"></i>Remove</button>
                      </form> -->

                                    <button type="button" class=" removeCart btn btn-ecomm" value="{{ $item->id }}"><i
                                            class="bi bi-x-lg me-2"></i> {{trans('main_trans.Remove')}}</button>


                                    <button type="button" class="btn dark btn-ecomm"><i
                                            class="bi bi-suit-heart me-2"></i> {{trans('main_trans.Move to Wishlist')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>


            <div class="col-12 col-xl-4">
                <div class="card rounded-0 mb-3">
                    <div class="card-body">
                        <h5 class="fw-bold mb-4">{{trans('main_trans.Order Summary')}}</h5>
                        <div class="hstack align-items-center justify-content-between">
                            <p class="mb-0">{{trans('main_trans.Cart Total')}}</p>
                            <p class="mb-0">EGP {{ Cart::getTotal() }}


                            </p>
                        </div>
                        <hr>
                        <div class="hstack align-items-center justify-content-between">
                            <p class="mb-0">{{trans('main_trans.Cart discount')}}</p>

                          <!-- <//?php $items = DB::table('items')
                              ->whereDate('add_date', '>=', $discount_start_date)
                               ->whereDate('add_date', '<=', $discount_end_date)
                               ->get();
                                 ?>
                            @//if ($totalDiscount = 0;)
                             @//foreach ($Items as $item)-->
                              <?php $totalDiscount = 0; ?>
                                @foreach ($cartItems as $item)
                                    @if($item['attributes']->discount)
                                    <?php
                                    $totalDiscount += ($item->price * $item['attributes']->discount_percent) /100;
                                    ?>
                                    @endif
                                @endforeach
                            <p class="mb-0 text-success">EGP {{ number_format($totalDiscount ,2) }}</p>
                        </div>
                        <hr>
                        <div class="hstack align-items-center justify-content-between">

                            <p class="mb-0">{{ __('main_trans.shipping fee') }}</p>
                            <p class="mb-0">0</p>
                        </div>
                        <hr>
                        <div class="hstack align-items-center justify-content-between fw-bold text-content">
                            <p class="totalAmount mb-0">{{trans('main_trans.Net Amount')}}</p>
                            <p class="mb-0">EGP {{ number_format( Cart::getTotal() -  $totalDiscount, 2) }}</p>
                        </div>
                        <hr>

                        <div class="d-grid mt-4">
                            <a href="{{ route('checkout') }}" type="button" class="btn btn-dark btn-ecomm py-3 px-5">
                            {{trans('main_trans.Place Order')}}</a>
                        </div>
                    </div>
                </div>
                <div class="card rounded-0">
                    <div class="card-body">
                        <h5 class="fw-bold mb-4">{{trans('main_trans.Apply Coupon')}}</h5>
                        <div class="input-group">
                            <input type="text" class="form-control rounded-0" placeholder="{{trans('main_trans.Enter coupon code')}}">
                            <button class="btn btn-dark btn-ecomm rounded-0" type="button">{{trans('main_trans.Apply')}}</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--end row-->

    </div>
    </section>
