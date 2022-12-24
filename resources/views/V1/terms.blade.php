@extends('V1.layouts.app')
@section('title', 'Shopingo - eCommerce HTML Template')
@section('content')
<html lang="en">



<body>

  <!--page loader-->
  <div class="loader-wrapper">
   <div class="d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
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
          <li class="breadcrumb-item"><a href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item active" aria-current="page">Terms </li>
        </ol>
      </nav>
    </div>
   </div>
   <!--end breadcrumb-->


   <!--start product details-->
   <section class="section-padding">
    <div class="container">

      <div class="separator mb-3">
        <div class="line"></div>
        <h3 class="mb-0 h3 fw-bold">Terms Us</h3>
        <div class="line"></div>
      </div>

      <div class="border p-4 text-center w-100">
          <h5 class="fw-bold mb-2"></h5>
          {{-- <p class="mb-0">{{$terms->shop_terms}}</p> --}}



</div>

    </div>
  </section>
   <!--start product details-->

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
