<div class="card">
    <div class="position-relative overflow-hidden">
      <div
        class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
        <a href="javascript:;"><i class="bi bi-heart"></i></a>
        <a href=""><i class="bi bi-basket3"></i></a>
        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#QuickViewModal"><i
            class="bi bi-zoom-in"></i></a>
      </div>

      @if ($x->img)
      <a href="product-details.html">
        <img src="{{  asset("{$x->img}") }}" class="card-img-top" alt="...">
      </a>
      @else
         <img src="{{ asset('V1/assets/images/new-arrival/dd.jpeg') }}" class="card-img-top" alt="...">
      @endif
      {{-- <a href="product-details.html">
        <img src="{{ $x->img }}" class="card-img-top" alt="...">
      </a> --}}
    </div>
    <div class="card-body">
      <div class="product-info text-center">
        <h6 class="mb-1 fw-bold product-name">{{ $x->item_name }}</h6>
        <div class="ratings mb-1 h6">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
        <p class="mb-0 h6 fw-bold product-price">EGP {{ number_format($x->pay_price, 2) }}</p>
      </div>
    </div>
  </div>
