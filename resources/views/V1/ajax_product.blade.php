    <div class="col">
        <div class="card border shadow-none">
            <div class="position-relative overflow-hidden">
                <div class="product-options d-flex align-items-center justify-content-center gap-2 mx-auto position-absolute bottom-0 start-0 end-0">
                <a href="javascript:;"><i class="bi bi-heart"></i></a>
                <a href="javascript:;"><i class="addCart bi bi-basket3" value="{{ $item->id }}"></i></a>
                <a href="javascript:;"><i class="bi bi-zoom-in"></i></a>
                </div>
                <a href="{{route('product-details',$item->id)}}">
                    <img src="{{$item->image_url}}" alt="" class="card-img-top rounded-0">
                </a>
            </div>
            <div class="card-body border-top">
                <h6 class="mb-0 fw-bold product-short-title">{{ $item->item_name }}</h6>
                <p class="mb-0 product-short-name">{{ $item ->type->name ?? 'No name' }}</p>
                @if($item->withDiscount !== Null )
                    <div class="product-price d-flex align-items-center gap-2 mt-2">
                        <div style="font-size: 15px" class="h6 fw-bold">EGP {{ number_format($item ->sale_price - ($item ->sale_price * ($item ->discount_percent/100)),2) }}</div>
                        <div style="font-size: 12px" class="h6 fw-light text-muted text-decoration-line-through">EGP {{ number_format($item ->sale_price,2) }}</div>
                        <div style="font-size: 14px" class="h6 fw-bold text-danger">({{ number_format( $item ->discount_percent) }} off)</div>
                    </div>
                @else
                    <div class="product-price d-flex align-items-center gap-2 mt-2">
                        <div style="font-size: 16px" class="h6 fw-bold">EGP {{ number_format($item -> sale_price,2) }}</div>
                    </div>
                @endif
            </div>
        </div>
    </div>




