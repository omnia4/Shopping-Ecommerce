@extends('V1.layouts.app')
@section('title', 'Shopingo - eCommerce HTML Template')
@section('content')

    <body>
        {{-- {{ dd($errors) }} --}}

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

        <!--end top header-->


        <!--start page content-->
        <div class="page-content">

            <!--start breadcrumb-->
            <div class="py-4 border-bottom">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('cart.list') }}">Shop Cart</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->

            <!--start product details-->
            <section class="section-padding">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="container">
                    <div class="d-flex align-items-center px-3 py-2 border mb-4">
                        <div class="text-start">
                            <h4 class="mb-0 h4 fw-bold">Checkout Details</h4>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-12 col-lg-8 col-xl-8">

                            <form class="register-form" action="{{ route('checkout.store') }}" method="POST">
                                @csrf
                                <h6 class="fw-bold mb-3 py-2 px-3 bg-light">Client Details</h6>
                                <div class="card rounded-0 mb-3">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <h4 class="checkout-subtitle">Already registered?</h4>

                                            <div class="col-12 col-lg-6">
                                                <div class="form-floating">
                                                    <div class="hstack align-items-center fw-bold text-content">
                                                        <label for="floatingClientName"
                                                            class="col-sm-2 col-form-label">Name</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control rounded-0" type="text"
                                                                name="client_name" value=" {{ auth()->user()->client_name }}"
                                                                aria-label="readonly input example" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-6">
                                                <div class="form-floating">
                                                    <div class="hstack align-items-center fw-bold text-content">

                                                        <label for="floatingClientName"
                                                            class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control rounded-0" type="text"
                                                                name="email" value=" {{ auth()->user()->email }}"
                                                                aria-label="readonly input example" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-lg-6">
                                                <div class="form-floating">
                                                    <div class="hstack align-items-center fw-bold text-content">
                                                        <label for="floatingClientName"
                                                            class="col-sm-3 col-form-label">Number</label>
                                                        <div class="col-sm-10">

                                                            <input class="form-control rounded-0" type="text"
                                                                name="mobile" value=" {{ auth()->user()->mobile1 }}"
                                                                aria-label="readonly input example" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                                <h6 class="fw-bold mb-3 py-2 px-3 bg-light">Shipping Details</h6>
                                <div class="card rounded-0">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="form-group">
                                                <h5>Address <span class="text-danger"> *</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="address"
                                                        class="form-control unicase-form-control text-input"
                                                        id="exampleInputAddress" placeholder="Address" required="">

                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <h5>Notes </h5>
                                                <textarea class="form-control" cols="30" rows="5" placeholder="Notes" name="notes"></textarea>
                                            </div> <!-- // end form group  -->

                                            <div class="row">
                                                <div class="col-md-6 ">
                                                    <div class="form-group">
                                                        <label for="projectinput1"> select your location </label>
                                                        <input type="text" id="pac-input" class="form-control"
                                                            placeholder="  " name="map">


                                                    </div>
                                                </div>
                                            </div>
                                            <!--Google map-->
                                            <div class="form-group">

                                                <div id="map" style="height: 500px;width: 700px;"></div>

                                            </div>
                                            <!--Google Maps-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>


                        </div>
                        <div class="col-12 col-lg-4 col-xl-4">
                            <div class="card rounded-0 mb-3">
                                <div class="card-body">
                                    <h5 class="fw-bold mb-4">Checkout Progress</h5>

                                    <hr>
                                    <div class="hstack align-items-center justify-content-between">
                                        <p class="mb-0">Bag Total</p>
                                        <input class="mb-0" name="total" value="{{ \Cart::getTotal() }} "
                                            readonly><strong>EGP</strong>
                                    </div>
                                    <hr>
                                    <div class="hstack align-items-center justify-content-between">
                                        <p class="mb-0">Bag discount</p>
                                        <?php $totalDiscount = 0; ?>
                                        @foreach ($cartItems as $item)
                                            @if ($item['attributes']->discount)
                                                <?php
                                                $totalDiscount += ($item->price * $item['attributes']->discount_percent) / 100;
                                                ?>
                                            @endif
                                        @endforeach
                                        <p class="mb-0 text-success">EGP {{ number_format($totalDiscount, 2) }}</p>
                                    </div>
                                    <hr>
                                    <div class="hstack align-items-center justify-content-between">
                                        <p class="mb-0">Delivery</p>
                                        <p class="mb-0">0</p>
                                    </div>
                                    <hr>
                                    <div class="hstack align-items-center justify-content-between fw-bold text-content">
                                        <p class="totalAmount mb-0">Net Amount</p>
                                        <p class="mb-0">EGP {{ number_format(Cart::getTotal() - $totalDiscount, 2) }}
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <!-- payment method-->
                            <div class="payment-method">
                                <div class="card rounded-0 mb-3">
                                    <div class="card-body">
                                        <h5 class="fw-bold mb-4">Payment Method</h5>

                                        <hr>

                                        <!-- end col md 4 -->
                                        <div class="row">
                                            <!-- end col md 4 -->

                                            <div class="form-group">
                                                <label for="">Cash</label>
                                                <input type="radio" name="payment_method" value="0">
                                                <img class="img-h-10"
                                                    src="{{ asset('v1/assets/images/payments/6.png') }}">
                                                <label for=""> Transfer</label>
                                                <input type="radio" name="payment_method" value="1">
                                                <img class="img-h-10"
                                                    src="{{ asset('v1/assets/images/payments/bank-transfer.png') }}">
                                            </div> <!-- end col md 4 -->

                                            <div class="form-group " id="transfer_file" hidden>


                                                <label for="">Bank transfer receipt</label>

                                                <input type="file" name="trans_img">

                                            </div>
                                            <hr>
                                        </div> <!-- // end row  -->
                                        <hr>

                                        <div class="d-grid mt-4">
                                            <button href="" class="btn btn-dark btn-ecomm py-3 px-5">Payment
                                                submit</button>
                                        </div>


                                    </div>
                                </div>
                                </form>

                            </div>
                        </div>


                    </div>
                    <!--end row-->

                </div>
            </section>
            <!--start product details-->




        </div>
        <!--end page content-->


        <!--start footer-->

        <!--end footer-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class="bi bi-arrow-up"></i></a>
        <!--End Back To Top Button-->

    @endsection
