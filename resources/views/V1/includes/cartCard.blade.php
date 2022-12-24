
<!--start cart-->
<div class="offcanvas-header bg-section-2">
    <h5 class="mb-0 fw-bold" id="offcanvasRightLabel" >{{Cart::getContent()->count()}} items in the cart</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
      <div class="cart-list">

@foreach($cartItems as $item)
        <div class="deleteDiv{{$item->id}} d-flex align-items-center gap-3">
          <div class="bottom-product-img">
            <a href="product-details.html">
              <img src="{{ asset('v1/assets/images/new-arrival/01.webp')}}" width="60" alt="">
            </a>
          </div>
          <div class="">
            <h6 class="mb-0 fw-light mb-1">{{ $item->name }}</h6>
            <p class="mb-0"><strong>1 X EGP {{ $item->price }}</strong>
            </p>
          </div>

          <div class="ms-auto fs-5">
            <button  class="link-dark removeCart"  value="{{ $item->id }}"><i class=" bi bi-trash" ></i></button>
          </div>

        </div>

@endforeach

      </div>
    </div>
    <div class="offcanvas-footer p-3 border-top">
      <div class="d-grid">
            <a type="button"  class="btn btn-lg btn-dark btn-ecomm px-5 py-3" href="{{route('cart.list')}}"> {{trans('main_trans.Checkout')}}</a>

      </div>
    </div>


<!--end cat-->

