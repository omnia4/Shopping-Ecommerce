@extends('V1.layouts.app')
@section('title', 'Shopingo - eCommerce HTML Template')
@section('content')

<!doctype html>
<html lang="en">

<body>

    <!--page loader-->
    <div class="loader-wrapper">
        <div
            class="d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
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
                        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Page Details</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <!--start product details-->


        <section class="py-4">
            <div class="container">
                <div class="row g-4">
                    <div class="col-12 col-xl-7">


                        <div class="product-images">
                            <div class="product-zoom-images">
                                <div class="row row-cols-2 g-3">
                                    <div class="col">
                                        <div class="img-thumb-container overflow-hidden position-relative"
                                            data-fancybox="gallery" data-src="assets/images/product-images/01.jpg">
                                            <img src="{{ $items->image_url }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img-thumb-container overflow-hidden position-relative"
                                            data-fancybox="gallery" data-src="assets/images/product-images/02.jpg">
                                            <img src="{{ $items->image_url }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img-thumb-container overflow-hidden position-relative"
                                            data-fancybox="gallery" data-src="assets/images/product-images/03.jpg">
                                            <img src="{{ $items->image_url }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img-thumb-container overflow-hidden position-relative"
                                            data-fancybox="gallery" data-src="assets/images/product-images/04.jpg">
                                            <img src="{{ $items->image_url }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img-thumb-container overflow-hidden position-relative"
                                            data-fancybox="gallery" data-src="assets/images/product-images/05.jpg">
                                            <img src="{{ $items->image_url }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img-thumb-container overflow-hidden position-relative"
                                            data-fancybox="gallery" data-src="assets/images/product-images/06.jpg">
                                            <img src="{{ $items->image_url }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img-thumb-container overflow-hidden position-relative"
                                            data-fancybox="gallery" data-src="assets/images/product-images/07.jpg">
                                            <img src="{{ $items->image_url }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="img-thumb-container overflow-hidden position-relative"
                                            data-fancybox="gallery" data-src="assets/images/product-images/08.jpg">
                                            <img src="{{ $items->image_url }}" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-5">
                        <div class="product-info">


                            <h4 class="product-title fw-bold mb-1">{{ $items->item_name }}</h4>



                            <p class="mb-0">Women Pink & Off-White Printed Kurta with Palazzos</p>


                            <div class="product-rating">
                                <div class="hstack gap-2 border p-1 mt-3 width-content">
                                    <div><span
                                            class="rating-number">{{ $items->rates()->sum('rate') ?? 0 / $items->rates()->count() }}
                                        </span>
                                        <i class="bi bi-star-fill ms-1 text-warning"></i>
                                    </div>
                                    <div class="vr"></div>
                                    <div>{{ $items->rates()->count() }}</div>
                                </div>
                            </div>

                            <hr>


                            <div class="product-price d-flex align-items-center gap-3">
                                <div class="h4 fw-bold">EGP
                                    {{ number_format($items->sale_price) }}</div>
                                <div class="h5 fw-light text-muted text-decoration-line-through">EGP
                                    {{ number_format($items->lowest_price, 2) }}</div>
                                <div class="h4 fw-bold text-danger">({{ number_format($items->disc_value) }}%
                                    off)</div>
                            </div>



                            <p class="fw-bold mb-0 mt-1 text-success">inclusive of all taxes</p>

                            <div class="more-colors mt-4">
                                <h6 class="fw-bold mb-3">More Colors</h6>
                                <div class="d-flex align-items-center gap-3">
                                    <div class="">
                                        <a href="javascript:;">
                                            <img src="{{ asset('v1/assets/images/featured-products/01.webp') }}"
                                                width="65" alt="">
                                        </a>
                                    </div>
                                    <div class="">
                                        <a href="javascript:;">
                                            <img src="{{ asset('v1/assets/images/featured-products/02.webp') }}"
                                                width="65" alt="">
                                        </a>
                                    </div>
                                    <div class="">
                                        <a href="javascript:;">
                                            <img src="{{ asset('v1/assets/images/featured-products/03.webp') }}"
                                                width="65" alt="">
                                        </a>
                                    </div>
                                    <div class="">
                                        <a href="javascript:;">
                                            <img src="{{ asset('v1/assets/images/featured-products/04.webp') }}"
                                                width="65" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="size-chart mt-4">
                                <h6 class="fw-bold mb-3">Select Size</h6>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <div class="">
                                        <button type="button">XS</button>
                                    </div>
                                    <div class="">
                                        <button type="button">S</button>
                                    </div>
                                    <div class="">
                                        <button type="button">M</button>
                                    </div>
                                    <div class="">
                                        <button type="button">L</button>
                                    </div>
                                    <div class="">
                                        <button type="button">XL</button>
                                    </div>
                                    <div class="">
                                        <button type="button">XXL</button>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-buttons mt-3">
                                <div class="buttons d-flex flex-column flex-lg-row gap-3 mt-4">
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="item-id" value="{{ $items->id }}">
                                    <button type="submit"
                                        class=" addCart btn btn-lg btn-dark btn-ecomm px-5 py-3 col-lg-6 "
                                        value="{{ $items->id }}"><i class="bi bi-basket2 me-2"></i>Add to Bag
                                    </button>
                                    <a href="javascript:;" class="btn btn-lg btn-outline-dark btn-ecomm px-5 py-3"><i
                                            class="bi bi-suit-heart me-2"></i>Wishlist</a>
                                </div>
                            </div>


                            <hr class="my-3">
                            <div class="product-info">
                                <h6 class="fw-bold mb-3">Product Details</h6>

                                <p class="mb-1">{{ $items->details }}</p>
                            </div>
                            <hr class="my-3">

                            <div class="customer-ratings">
                                <h6 class="fw-bold mb-3">Customer Ratings</h6>
                                <div class="d-flex align-items-center gap-4 gap-lg-5 flex-wrap flex-lg-nowrap">
                                    <div class="">
                                        <h1 class="mb-2 fw-bold">4.8<span class="fs-5 ms-2 text-warning">
                                                <i class="bi bi-star-fill "></i>
                                            </span></h1>
                                        <p class="mb-0">3.8k Verified Buyers</p>
                                    </div>
                                    <div class="vr d-none d-lg-block"></div>
                                    <div class="w-100">
                                        <div class="rating-wrrap hstack gap-2 align-items-center">
                                            <p class="mb-0">5</p>
                                            <div class=""><i class="bi bi-star rating" data-value="5"></i>
                                            </div>
                                            <div class="progress flex-grow-1 mb-0 rounded-0" style="height: 4px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 75%"></div>
                                            </div>
                                            <p class="mb-0">1528</p>
                                        </div>
                                        <div class="rating-wrrap hstack gap-2 align-items-center">
                                            <p class="mb-0">4</p>
                                            <div class=""><i class="bi bi-star rating" data-value="4"></i>
                                            </div>
                                            <div class="progress flex-grow-1 mb-0 rounded-0" style="height: 4px;">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    style="width: 65%"></div>
                                            </div>
                                            <p class="mb-0">253</p>
                                        </div>
                                        <div class="rating-wrrap hstack gap-2 align-items-center">
                                            <p class="mb-0">3</p>
                                            <div class=""><i class="bi bi-star rating" data-value="3"></i>
                                            </div>
                                            <div class="progress flex-grow-1 mb-0 rounded-0" style="height: 4px;">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 45%">
                                                </div>
                                            </div>
                                            <p class="mb-0">258</p>
                                        </div>
                                        <div class="rating-wrrap hstack gap-2 align-items-center">
                                            <p class="mb-0">2</p>
                                            <div class=""><i class="bi bi-star rating" data-value="2"></i>
                                            </div>
                                            <div class="progress flex-grow-1 mb-0 rounded-0" style="height: 4px;">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    style="width: 35%"></div>
                                            </div>
                                            <p class="mb-0">78</p>
                                        </div>
                                        <div class="rating-wrrap hstack gap-2 align-items-center">
                                            <p class="mb-0">1</p>
                                            <div class=""><i class="bi bi-star rating" data-value="1"></i>
                                            </div>
                                            <div class="progress flex-grow-1 mb-0 rounded-0" style="height: 4px;">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 25%"></div>
                                            </div>
                                            <p class="mb-0">27</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <hr class="my-3">
                            <div class="customer-reviews">
                                <h6 class="fw-bold mb-3">Customer Reviews (875)</h6>




                                <h3>Add Comment...</h3>
                                <div id="success_message">
                                </div>
                                <div class="container m-2 p-2">


                                    <ul id="save_msgList"></ul>
                                    <input type="hidden" id="id" name="id" value="{{ $items->id }}">
                                    <div class="mb-3">
                                        <label for="comment" class="form-label">Comment</label>
                                        <input type="text" class="comment form-control" name="comment" id="comment"
                                            placeholder="Enter Comment">
                                    </div>

                                    @if(auth()->check())
                                        <button type="submit" id="addCommentBtn"
                                            class="btn btn-success ">comment</button>
                                    @else
                                        <button class="btn btn-success ">please Login First</button>
                                    @endif



                                    <div class="reviews-wrapper comment-div">

                                        @foreach($comments as $comment)
                                            <div class="d-flex flex-column flex-lg-row gap-3  ">
                                                <div class=""><span
                                                        class="badge bg-green rounded-0">{{ $comment->rate }}<i
                                                            class="bi bi-star-fill ms-1"></i></span></div>

                                                <div class="flex-grow-1">
                                                    <p class="mb-2">{{ $comment->comment }}</p>
                                                    <div class="review-img">
                                                        <img src="{{ asset('v1/assets/images/featured-products/05.webp') }}"
                                                            alt="" width="70">
                                                    </div>
                                                    <div class="d-flex flex-column flex-sm-row gap-3 mt-3">
                                                        <div class="hstack flex-grow-1 gap-3">
                                                            <p class="mb-0">{{ $comment->client_name }}</p>
                                                            <div class="vr"></div>
                                                            <div class="date-posted">{{ $comment->created_at }}</div>
                                                        </div>
                                                        <div class="hstack">
                                                            <div class=""><i class="bi bi-hand-thumbs-up me-2"></i>68
                                                            </div>
                                                            <div class="mx-3"></div>
                                                            <div class=""><i class="bi bi-hand-thumbs-down me-2"></i>24
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach



                                        <hr>

                                    </div>
                                    <!--add comment-->


                                </div>
                                <!-- end add comment -->

                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
        </section>

        <!--start product details-->


        <!--start product details-->
        <section class="section-padding">
            <div class="container">
                <div class="separator pb-3">
                    <div class="line"></div>
                    <h3 class="mb-0 h3 fw-bold">Similar Products</h3>
                    <div class="line"></div>
                </div>
                <div class="similar-products">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 g-4">



                        @foreach($similarItems as $item)
                            @include('V1.productDivWishlist')
                        @endforeach





                    </div>
                    <!--end row-->
                </div>
            </div>
        </section>

        <!--end product details-->


    </div>
    <!--end page content-->
    <!--start footer-->
    <!--end footer-->
    <!--start cart-->
    <!--end cat-->
    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!--End Back To Top Button-->

    <!-- JavaScript files -->


</body>

</html>
@endsection
@section('scripts')
<script>
    $(document).ready(function () {
        $(document).on('click', '#addCommentBtn', function (e) {
            let comment = 'comment';
            let rating = null;
            sendRate(comment);

        });

        $(document).on('click', '.rating', function (e) {
            let rate = 'rate';
            let rating = $(this).data('value');
            sendRate(rate, rating);

        });
    });

    function sendRate(distributer, rating) {

        let rate = rating;

        if (distributer == comment) {
            let comment = $('.comment').val();
            let rating = rating;
        } else {

            let comment = null;
        }

        var data = {
            'comment': comment,
            'rate': rate,
            'item_id': "{{ $items->id }}",
            'distributer': distributer,
            "_token": "{{ csrf_token() }}"
        }
        alert(45787);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            data: data,
            url: "{{ route('product-rate') }}",
            datatype: "json",
            success: function (dataBack) {
                $("#error").html(
                    "<li class='alert alert-success text-center p-1'> Added Success </li>"
                );
                $(".comment-div").prepend(dataBack)
                $('#exampleModal').modal('hide')
            },
            error: function (xhr, status, error) {

                // console.log(xhr.responseJSON.errors);
                $.each(xhr.responseJSON.errors, function (key, item) {

                    $("#error").html(
                        "<li class='alert alert-danger text-center p-1'>" +
                        item + " </li>");
                })
            }
        })
    }

</script>


$(document).ready(function ()
{
$(document).on("click",".addCart",function(e)
{
e.preventDefault();
//console.log("hi");
var itemsId = $(this).val();
url ="{{ route('cart.store', ':itemsId') }}";
url = url.replace(':itemsId',itemsId);
// alert(itemsId);
$.ajax({
type:"post",
url:url,
data:
{
'_token':"{{ csrf_token() }}",
'itemsId':itemsId,
},
success: function(response){
$('.cart-badge').text(response.cartCount);
$('#offcanvasRight').empty().html(response.cartContentList);
//$('.offcanvasRight').text();
// alert(response)

/* $("#offcanvasRight").html(
"<li class='alert alert-success text-center p-1'> Added Success </li>"
);
$("#cart-list").show();*/

}
});

});
});


</script>
@endsection
