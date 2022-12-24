@extends('V1.layouts.app')
@section('title', 'Shoping -Categories')
@section('header')
    @include('V1.includes.header')
@endsection
@section('content')
    <div class="page-content">
        <!--start breadcrumb-->
        <div class="py-4 border-bottom">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop With Grid</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <!--start product grid-->
        <section class="py-4">
            <h5 class="mb-0 fw-bold d-none">Product Grid</h5>
            <div class="container">
                <div class="btn btn-dark btn-ecomm d-xl-none position-fixed top-50 start-0 translate-middle-y"
                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarFilter"><span><i
                            class="bi bi-funnel me-1"></i> Filters</span></div>
                <div class="row">
                    <div class="col-12 col-xl-3 filter-column">
                        <nav class="navbar navbar-expand-xl flex-wrap p-0">
                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbarFilter"
                                aria-labelledby="offcanvasNavbarFilterLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title mb-0 fw-bold text-uppercase" id="offcanvasNavbarFilterLabel">
                                        Filters</h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <form>
                                    <div class="offcanvas-body">
                                        <div class="filter-sidebar">
                                            <div class="card rounded-0">
                                                <div class="card-header d-none d-xl-block bg-transparent">
                                                    <h5 class="mb-0 fw-bold">Filters</h5>
                                                </div>
                                                <div class="card-body">
                                                    <h6 class="p-1 fw-bold bg-light">Categories</h6>
                                                    <div class="categories">
                                                        <div class="categories-wrapper height-1 p-1">
                                                            <?php $itemTypes = DB::table('items_type')
                                                                ->where('shop_id', '21036')
                                                                ->orderBy('name', 'ASC')
                                                                ->get(); ?>
                                                            @if (count($itemTypes) > 0)
                                                                @foreach ($itemTypes as $itemType)
                                                                    <div class="form-check">
                                                                        <input type="checkbox" value="{{ $itemType->id }}"
                                                                            id="catId" class="try" name="categories[]"  @if (request('categories')&& in_array($itemType->id, request('categories'))) checked @endif />
                                                                        <label class="form-check-label" for="chekCate1">
                                                                            <span>{{ $itemType->name }}</span><span
                                                                                class="product-number">({{ App\Models\Item::where('sale_unit', $itemType->id)->count() }})</span>
                                                                        </label>
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <hr>
                                                    <div class="Price">
                                                        <h6 class="p-1 fw-bold bg-light">Price</h6>
                                                        <div class="Price-wrapper p-1">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control rounded-0"
                                                                    id="input_left" placeholder="EGP 10" name="input_left" value="{{ request('input_left') }}">
                                                                <span
                                                                    class="input-group-text bg-section-1 border-0">-</span>
                                                                <input type="text" class="form-control rounded-0"
                                                                    id="input_right" placeholder="EGP 10000" name="input_right" value="{{ request('input_right') }}">

                                                                <button type="submit" id="btn_price"
                                                                    class="btn btn-outline-dark rounded-0 ms-2"><i
                                                                        class="bi bi-chevron-right"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="container">
                                                        <div class="d-flex align-items-center">
                                                            <div class="">
                                                                <h6 class="mb-0 fw-bold">Search Products</h6>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <button type="button" class="btn-close" onclick="history.back()" aria-label="Close"></button>
                                                            </div>
                                                        </div>
                                                            <div class="search-box position-relative mt-4">
                                                            <div class="position-absolute position-absolute top-50 start-0 translate-middle ms-4 fs-5"><i class="bi bi-search"></i></div>
                                                            <input class="form-control form-control-sm ps-5 rounded-0" type="text" id="search-category" placeholder="Type here to search">
                                                            </div>
                                                    </div>
                                                    <hr>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </nav>
                    </div>
                    <div class="col-12 col-xl-9">
                        <div class="shop-right-sidebar">
                            <div class="card rounded-0">
                                <div class="card-body p-2">
                                    <div class="d-flex align-items-center justify-content-between bg-light p-2">
                                        <div class="product-count">{{ App\Models\Item::where('shop_id', '21036')->count() }}
                                            Items Found</div>
                                        <div class="view-type hstack gap-2 d-none d-xl-flex">
                                            <p class="mb-0">Grid</p>
                                            <div>
                                                <a href="{{ route('category.show', 3) }}" class="grid-type-3 d-flex gap-1">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="{{ route('category.show', 5) }}"
                                                    class="grid-type-3 d-flex gap-1 active">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </a>
                                            </div>
                                        </div>
                                        <form>

                                            <div class="input-group">
                                                <span class="input-group-text bg-transparent rounded-0 border-0">Sort
                                                    By</span>
                                                <select id="sort_by" class="form-select rounded-0">
                                                    <option value="WhatsNew">Whats'New</option>
                                                    <option value="popularty">Popularity</option>
                                                    <option value="better_dics">Better Discount</option>
                                                    <option value="highest_price">Price : Hight to Low</option>
                                                    <option value="lowest_price">Price : Low to Hight</option>
                                                    <option value="rate">Custom Rating</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="product-grid mt-4">
                                <div class="row row-cols-1 row-cols-md-2 @if ($grid == 1) row-cols-lg-3 g-4 @elseif($grid == 3)  row-cols-lg-4 g-4 @else  row-cols-lg-5 g-4 @endif"
                                    id="updateDiv">
                                    @if (count($allItems) >= 1)

                                        @foreach ($allItems as $item)
                                            @include('V1.productDivWishlist')
                                        @endforeach
                                    @else
                                        <div class="col-md-12 my-5 text-center">
                                            <h2 id="h2Style">Nothing Found</h2>
                                        </div>

                                    @endif
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="ajax-load text-center" style="display: none">
                                <p><img src="{{ asset('V1/assets/images/loading-gif.gif') }}" style="width: 100px">Loading
                                    More Products.......</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </section>
        <!--start product details-->
    </div>
@endsection
@section('footer')
    @include('V1.includes.footer')
@endsection
@section('scripts')
    <script type="text/javascript">


        function loadMoreDate(page) {
            $.ajax({
                    url: '?page=' + page,
                    type: 'GET',
                    beforeSend: function() {
                        $('.ajax-load').show();
                    }
                })
                .done(function(ajax_product) {
                    if (ajax_product.html == "") {
                        $('.ajax-load').html("No More Records Found");
                        return;
                    }
                    $('.ajax-load').hide();
                    $('#updateDiv').append(ajax_product.html);
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    alert("Server Not Responding");
                })
        }
        var page = 1;
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                page++;
                loadMoreDate(page);
            }
        })
    </script>
    <script type="text/javascript">
        $('body').on('keyup','#search-category',function()
        {
            var searchRequest=$(this).val();
            $.ajax({
                method:'POST',
                url:'{{ route("search.Item") }}',
                dataType:'json',
                data:{
                    '_token': '{{ csrf_token() }}',
                    searchRequest :searchRequest,
                },
                success :function(res){
                    var tableRow='';
                    $('#dynamic-search').html('');

                    $.each(res, function(index ,value){
                        tableRow =
                            '<div class="list-group list-group-flush search-categories"><a href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>'+value.name+'</a></div>';
                    $('#dynamic-search').append(tableRow);
                    });
                    console.log(res)
                }
            })
        })
    </script>


@endsection
