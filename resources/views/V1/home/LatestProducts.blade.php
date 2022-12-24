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
                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#new-arrival" type="button">{{trans('main_trans.New Arrival')}} </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#best-sellar" type="button">{{trans('main_trans.Best Seller')}}</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#trending-product"
                  type="button">{{trans('main_trans.Trending')}}</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#special-offer" type="button">
                  {{ __('main_trans.Special Offer') }}</button>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <hr>
      <div class="tab-content tabular-product">
        <div class="tab-pane fade show active" id="new-arrival">
          <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-4">

          @foreach ($Arrivals as $item)
          @include('V1.productDivWishlist')
          <!-- @include('V1.ajax_product') -->
          @endforeach
          </div>
        </div>


        <div class="tab-pane fade" id="best-sellar">
          <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-4">

            @foreach ($sellars as $item)

           @include('V1.productDivWishlist')
            @endforeach
          </div>
        </div>



        <div class="tab-pane fade" id="trending-product">
          <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-4">

            @foreach ($trends as $item)

            @include('V1.productDivWishlist')
            @endforeach
          </div>
        </div>


        <div class="tab-pane fade" id="special-offer">
          <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5 g-4">
            @foreach ($SpecialOffers as $item)
            @include('V1.productDivWishlist')

            @endforeach


          </div>
        </div>
      </div>
    </div>
  </section>
