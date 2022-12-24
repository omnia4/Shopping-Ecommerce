<div class="col">
    <div class="deleteDiv card rounded-0 mb-3 ">
        <div class="position-relative overflow-hidden" style="max-height:150px">
                <button type="button" class="btn-close wishlist-close position-absolute end-0 top-0 removeCard" value="{{ $item->id }}"></button>
            <div class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
            <button type='submit' class="addFav btn btn-dark" value="{{ $item->id }}" ><i class="bi bi-heart"></i>
            </button>
            <button type='submit' class="addCart btn btn-dark" value="{{ $item->id }}" ><i class="bi bi-basket3"></i>
            </button>
            <button type='submit' class="addWish btn btn-dark" value="{{ $item->id }}" ><i class="bi bi-bell"></i>
            </button>
            </div>
            <a href="{{route('product-details',$item->id)}}">
                <img src="{{$item->image_url}}" alt="" class="card-img-top rounded-0">
            </a>
        </div>
        <div class="card-body border-top text-center " style="height: 105px;">
            <p class="mb-0 product-short-name" style="display: inline-block;">{{$item->item_name}}</p>
            <div class="product-price d-flex align-items-center gap-2 mt-2 justify-content-center">
                @if($item->withDiscount !== Null )
                <div class="h6 fw-bold">EGP {{ number_format($item ->sale_price - ($item ->sale_price * ($item ->discount_percent/100)),2) }}</div>
                <div class="h6 fw-light text-muted text-decoration-line-through">EGP {{ number_format($item ->sale_price,2) }}</div>
                <div class="h6 fw-bold text-danger">({{ number_format( $item ->discount_percent) }} off)</div>
                @else
                    <div class="product-price d-flex align-items-center gap-2 mt-2">
                        <div style="font-size: 16px" class="h6 fw-bold">EGP {{ number_format($item -> sale_price,2) }}</div>
                    </div>
                @endif
            </div>
        </div>
        <div class="card-footer bg-transparent text-center" >
            <button type='submit' href="" class="addCart btn btn-ecomm w-100" value="{{ $item->id }}">{{trans('main_trans.Move to Bag')}}</button>
        </div>
    </div>
</div>





