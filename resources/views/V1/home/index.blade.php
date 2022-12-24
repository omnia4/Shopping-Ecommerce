@extends('V1.layouts.app')
@section('title','Shopingo - eCommerce HTML Template')
@section('content')
<div class="page-content">
    @if (Session::has('status'))
    <div class="alert alert-success">{{ Session::get('status') }}</div>
    @endif
    @if (Session::has('error'))
    <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif
    @include('V1.includes.slider')
</div>
    <!--start page content-->
    <div class="page-content">

        <!--start Featured Products -->
        <section class="section-padding">
            <div class="container">
              <div class="text-center pb-3">
                <h3 class="mb-0 h3 fw-bold">{{ trans('main_trans.Featured Products') }}</h3>
                <p class="mb-0 text-capitalize">The purpose of lorem ipsum</p>
              </div>
              <div class="product-thumbs">
               @foreach ($featured_products as $item)
                @include('V1.ProductDiv')
                @endforeach
              </div>
            </div>
          </section>
        <!--end Featured Products -->


        <!--start tabular product-->
        <section class="product-tab-section section-padding bg-light">
            <div class="container">
              <div class="text-center pb-3">
                <h3 class="mb-0 h3 fw-bold">{{ __('main_trans.Latest Products') }}</h3>
                <p class="mb-0 text-capitalize">The purpose of lorem ipsum</p>
              </div>
              <div class="row">
                <div class="col-auto mx-auto">
                  <div class="product-tab-menu table-responsive">
                    <ul class="nav nav-pills flex-nowrap" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#new-arrival" type="button">New
                          Arrival</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#best-sellar" type="button">Best
                          Sellar</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#trending-product"
                          type="button">Trending</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#special-offer" type="button">Special Offer'</button>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <hr>
              <div class="tab-content tabular-product">
                <div class="tab-pane fade show active" id="new-arrival">
                  <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-4">

                  @foreach ($latest_products as $item)
                  @include('V1.ProductDiv')
                  @endforeach
                  </div>
                </div>

                <div class="tab-pane fade" id="best-sellar">
                  <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-4">

                    @foreach ($sellars as $item)
                    @include('V1.ProductDiv')
                    @endforeach
                  </div>
                </div>

                <div class="tab-pane fade" id="trending-product">
                  <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-4">

                    @foreach ($trends as $item)
                    @include('V1.ProductDiv')
                    @endforeach
                  </div>
                </div>

                <div class="tab-pane fade" id="special-offer">
                  <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-4">
                    @foreach ($special_offers as $item)
                    @include('V1.ProductDiv')
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
        </section>

        <!--end tabular product-->

        <!--start features-->
{{--        <section class="product-thumb-slider section-padding">--}}
{{--            <div class="container">--}}
{{--              <div class="text-center pb-3">--}}
{{--                <h3 class="mb-0 h3 fw-bold">What We Offer!</h3>--}}
{{--                <p class="mb-0 text-capitalize">The purpose of lorem ipsum</p>--}}
{{--              </div>--}}
{{--              <div class="row row-cols-1 row-cols-lg-4 g-4">--}}

{{--                @foreach ($offers as $offer)--}}

{{--                <div class="col d-flex">--}}
{{--                  <div class="card depth border-0 rounded-0 border-bottom border-primary border-3 w-100">--}}
{{--                    <div class="card-body text-center">--}}
{{--                      <div class="h1 fw-bold my-2 text-primary">--}}
{{--                        <i class="bi bi-truck"></i>--}}
{{--                      </div>--}}
{{--                      <h5 class="fw-bold">{{ $offer->name }}</h5>--}}
{{--                      <p class="mb-0">{{ $offer->main_items }}</p>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                @endforeach--}}
{{--              </div>--}}
{{--              <!--end row-->--}}
{{--            </div>--}}
{{--        </section>--}}

        <!--end features-->


        <!--start cartegory slider-->
        <section class="cartegory-slider section-padding bg-section-2">
            <div class="container">
              <div class="text-center pb-3">
                <h3 class="mb-0 h3 fw-bold">Top Categories</h3>
                <p class="mb-0 text-capitalize">Select your favorite categories and purchase</p>
              </div>
              <div class="cartegory-box">
              @foreach (app('categories') as $cat)
                <a href="shop-grid-type-4.html">
                  <div class="card">
                    <div class="card-body">
                      <div class="overflow-hidden">
                        <img src="{{ asset("{$cat->img}") }}" class="card-img-top rounded-0" @if ($cat->upload_img == null) height="240px" @endif>
                      </div>
                      <div class="text-center">
                        <h5 class="mb-1 cartegory-name mt-3 fw-bold">{{ $cat->name }}</h5>
                          <h6 class="mb-0 product-number fw-bold">{{ $cat->products_count }} Products</h6>
                      </div>
                    </div>
                  </div>
                </a>
                @endforeach
              </div>
            </div>
        </section>

        <!--end cartegory slider-->


        <!--subscribe banner-->
        <section class="product-thumb-slider subscribe-banner p-5">
            <div class="row">
              <div class="col-12 col-lg-6 mx-auto">
                <div class="text-center">
                  <h3 class="mb-0 fw-bold text-white">Get Latest Update by <br> Subscribe Our Newslater</h3>

                   <form action="{{ route('register.show') }}" method="POST">
                    @csrf
                  <div class="mt-3">
                    <input type="text" name="email" class="form-control form-control-lg bubscribe-control rounded-0 px-5 py-3"
                      placeholder="Enter your email">
                  </div>
                  <div class="mt-3 d-grid">
                    <button type="submit" class="btn btn-lg btn-ecomm bubscribe-button px-5 py-3">Subscribe</button>
                  </div>
                </form>

                </div>
              </div>
            </div>
        </section>
        <!--subscribe banner-->


        <!--start blog-->
        <section class="section-padding">
            <div class="container">
              <div class="text-center pb-3">
                <h3 class="mb-0 fw-bold">Latest Blog</h3>
                <p class="mb-0 text-capitalize">Check our latest news</p>
              </div>
              <div class="blog-cards">
                <div class="row row-cols-1 row-cols-lg-3 g-4">
                    @foreach ($blogs as $blog )
                    <div class="col">
                        <div class="card">
                          <img src="{{ $blog->image_url }}" class="card-img-top rounded-0" alt="...">
                          <div class="card-body">
                            <div class="d-flex align-items-center gap-4">
                              <div class="posted-by">
                                <p class="mb-0"><i class="bi bi-person me-2"></i>{{$blog->name}}</p>
                              </div>
                              <div class="posted-date">
                                <p class="mb-0"><i class="bi bi-calendar me-2"></i>{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y')}}</p>
                              </div>
                            </div>
                            <h5 class="card-title fw-bold mt-3">{{$blog->title}}</h5>
                            <p class="mb-0">{{$blog->text}}</p>
                            <a href="blog-read.html" class="btn btn-outline-dark btn-ecomm mt-3">Read More</a>
                          </div>
                        </div>
                      </div>
                    @endforeach

                </div>
                <!--end row-->
              </div>
            </div>
        </section>
        <!--end blog-->


    </div>
    <!--end page content-->
@endsection
