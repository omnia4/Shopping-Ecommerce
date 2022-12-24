
<section class="section-padding">
    <div class="container">
      <div class="text-center pb-3">
        <h3 class="mb-0 h3 fw-bold">{{ trans('main_trans.Featured Products') }}</h3>
        <p class="mb-0 text-capitalize">The purpose of lorem ipsum</p>
      </div>
      <div class="product-thumbs">
       @foreach ($Featureds as $item)
        @include('V1.productDivWishlist')
        @endforeach

      </div>
    </div>
  </section>
