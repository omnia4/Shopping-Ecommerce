@extends('V1.layouts.app')
  <!--page loader-->
  @section('header')
  @include('V1.includes.header')
  @endsection
 @section('content')
 <div class="loader-wrapper">
    @include('V1.includes.loading')
</div>
<div class="page-content">


    <!--start breadcrumb-->
    <div class="py-4 border-bottom">
     <div class="container">
       <nav aria-label="breadcrumb">
         <ol class="breadcrumb mb-0">
           <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
           <li class="breadcrumb-item"><a href="javascript:;">Pages</a></li>
           <li class="breadcrumb-item active" aria-current="page">About Us</li>
         </ol>
       </nav>
     </div>
    </div>
    <!--end breadcrumb-->


    <!--start product details-->
    <section class="section-padding">
     <div class="container">
        <div class="row g-4">
           <div class="col-12 col-xl-6">
             <h3 class="fw-bold">{{ trans('main_trans.About Us') }}y</h3>

{!! $about !!}
            </div>
           <div class="col-12 col-xl-6">
              <img src="https://images.pexels.com/photos/7679877/pexels-photo-7679877.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1260&amp;h=750&amp;dpr=1" class="img-fluid" alt="">
           </div>
        </div><!--end row-->

       



     </div>
   </section>
    <!--start product details-->

  </div>
@endsection
@section('footer')
@include('V1.includes.footer')
@endsection

