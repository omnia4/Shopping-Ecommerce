@extends('V1.layouts.app')
@section('title','Shopingo - eCommerce HTML Template')
@section('content')
<div class="page-content">
    @if (Session::has('status'))
    <div class="alert alert-success">{{ Session::get('status') }}</div>
    @endif
    @if (Session::has('error'))
    <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif
    @include('V1.includes.slider')
</div>




    <!--start page content-->
    <div class="page-content">

        <!--start carousel-->
        {{-- @include('V1.home.slider') --}}
        <!--end carousel-->


        <!--start Featured Products slider-->
        @include('V1.home.FeaturedProducts')
        <!--end Featured Products slider-->


        <!--start tabular product-->
        @include('V1.home.LatestProducts')
        <!--end tabular product-->


        <!--start features-->
        @include('V1.home.Offers')
        <!--end features-->


        {{-- <!--start special product-->
        @include('V1.home.TrendingProducts')
        <!--start special product--> --}}


        {{-- <!--start Brands-->
        @include('V1.home.Brands')
        <!--end Brands--> --}}


        <!--start cartegory slider-->
        @include('V1.home.Categories')
        <!--end cartegory slider-->


        <!--subscribe banner-->
        @include('V1.home.SubscribeNewslater')
        <!--subscribe banner-->


        <!--start blog-->
        @include('V1.home.LatestBlog')
        <!--end blog-->


    </div>
    <!--end page content-->
@endsection
