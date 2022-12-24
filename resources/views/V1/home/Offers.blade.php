<section class="product-thumb-slider section-padding">
    <div class="container">
      <div class="text-center pb-3">
        <h3 class="mb-0 h3 fw-bold">{{ trans('main_trans.What We Offer') }}!</h3>
        <p class="mb-0 text-capitalize">The purpose of lorem ipsum</p>
      </div>
      <div class="row row-cols-1 row-cols-lg-4 g-4">

        @foreach ($offers as $xx)
          
        <div class="col d-flex">
          <div class="card depth border-0 rounded-0 border-bottom border-primary border-3 w-100">
            <div class="card-body text-center">
              <div class="h1 fw-bold my-2 text-primary">
                <i class="bi bi-truck"></i>
              </div>
              <h5 class="fw-bold">{{ $xx->name }}</h5>
              <p class="mb-0">{{ $xx->main_items }}</p>
            </div>
          </div>
        </div>

        @endforeach
      </div>
      <!--end row-->
    </div>
  </section>