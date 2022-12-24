<section class="cartegory-slider section-padding bg-section-2">
    <div class="container">
      <div class="text-center pb-3">
        <h3 class="mb-0 h3 fw-bold">{{trans('main_trans.Top Categories')}}</h3>
        <p class="mb-0 text-capitalize">{{trans('main_trans.Select your favorite categories and purchase')}}</p>
      </div>
      <div class="cartegory-box">

      @foreach ($categories as $cat)

        <a href="{{route('category.show', [1, $cat->id])}}">
          <div class="card">
            <div class="card-body">

              <div class="overflow-hidden">
                <img src="{{ asset("{$cat->img}") }}" class="card-img-top rounded-0" @if ($cat->upload_img == null) height="240px" @endif>
              </div>

              <div class="text-center">
                <h5 class="mb-1 cartegory-name mt-3 fw-bold">{{ $cat->name }}</h5>

                <h6 class="mb-0 product-number fw-bold">{{ $cat->products()->count() }} Products</h6>
              </div>
            </div>
          </div>
        </a>
        @endforeach

      </div>
    </div>
  </section>
