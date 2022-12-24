@extends('V1.layouts.app')
@section('title','Shoping - seacrh')
@section('content')
<section class="section-padding bg-section-2">
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="">
                <h3 class="mb-0 fw-bold">Search Products</h3>
            </div>
            <div class="ms-auto">
                <button type="button" class="btn-close" onclick="history.back()" aria-label="Close"></button>
            </div>
        </div>
            <div class="search-box position-relative mt-4">
            <div class="position-absolute position-absolute top-50 start-0 translate-middle ms-4 fs-5"><i class="bi bi-search"></i></div>
            <input class="form-control form-control-lg ps-5 rounded-0" type="text" id="search-category" placeholder="Type here to search">
            </div>
    </div>
</section>
<section class="section-padding">
    <div class="container">
        <h5 class="mb-0 fw-bold">Explore by categories</h5>
        <div class="search-categories mt-4">
            <div class="row row-cols-1 row-cols-lg-3 row-cols-xl-5 g-4">

                @for($i=0;$i < 5;$i++)
                <div class="col">
                    <div  style="background-color: {{ $split[$i]  }}">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-0 fw-bold text-white">{{ $types[$i]->name }}</h5>
                            </div>
                            <div class="ms-auto fs-1 text-white">
                                <i class="bi bi-{{ $icons[$i] }}"></i>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor

            </div><!--end row-->

            <h5 class="fw-bold mb-3 mt-5">Categories Searches</h5>
            <div id="dynamic-search" class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                @foreach ($types as $type )
                <div  class="col">
                    <div class="list-group list-group-flush search-categories">
                        <a  href="javascript:;" class="list-group-item list-group-item-action py-3"><i class="bi bi-arrow-up-right me-2"></i>{{ $type->name }}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
            <!--end row-->
        </div>
    </div>
</section>
@endsection
@section('scripts')
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

