
@extends('V1.layouts.app')
@section('title', 'Shopingo - eCommerce HTML Template')
@section('content')


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
          <li class="breadcrumb-item"><a href="javascript:;">Account</a></li>
          <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
      </nav>
    </div>
   </div>
   <!--end breadcrumb-->


   <!--start product details-->
   <section class="section-padding">
    <div class="container">
      <div class="d-flex align-items-center px-3 py-2 border mb-4">
        <div class="text-start">
          <h4 class="mb-0 h4 fw-bold">Account - Edit Profile</h4>
       </div>
      </div>
      <div class="btn btn-dark btn-ecomm d-xl-none position-fixed top-50 start-0 translate-middle-y"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarFilter"><span><i class="bi bi-person me-2"></i>Account</span></div>
       <div class="row">
          <div class="col-12 col-xl-3 filter-column">
              <nav class="navbar navbar-expand-xl flex-wrap p-0">
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbarFilter" aria-labelledby="offcanvasNavbarFilterLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title mb-0 fw-bold text-uppercase" id="offcanvasNavbarFilterLabel">Account</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body account-menu">
                    <div class="list-group w-100 rounded-0">
                      <a href="account-dashboard.html" class="list-group-item"><i class="bi bi-house-door me-2"></i>Dashboard</a>
                      <a href="account-orders.html" class="list-group-item"><i class="bi bi-basket3 me-2"></i>Orders</a>
                      <a href="account-profile.html" class="list-group-item"><i class="bi bi-person me-2"></i>Profile</a>
                      <a href="account-edit-profile.html" class="list-group-item active"><i class="bi bi-pencil me-2"></i>Edit Profile</a>
                      <a href="account-saved-address.html" class="list-group-item"><i class="bi bi-pin-map me-2"></i>Saved Address</a>
                      <a href="wishlist.html" class="list-group-item"><i class="bi bi-suit-heart me-2"></i>Wishlist</a>
                      <a href="authentication-login.html" class="list-group-item"><i class="bi bi-power me-2"></i>Logout</a>
                    </div>
                  </div>
                </div>
            </nav>
          </div>
          <div class="col-12 col-xl-7">
            <div class="card rounded-0">
              <div class="card-body p-lg-5">
                  <h5 class="mb-0 fw-bold">Edit Details</h5>
                  <hr>
                   <form method="POST" action="{{ route('Update.Profile')}}">
                    @csrf
                    @method('put')
                     <div class="row row-cols-1 g-3">
                        <div class="col">
                          <div class="form-floating">
                            <input type="text" class="form-control rounded-0"  id="floatingInputNumber"   value=" @if(!is_null($user_name)){{$user_name}} @else{{ old('user_name') }} @endif" name="user_name">
                            <label for="floatingInputName">Name</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-floating">
                            <input type="text" class="form-control rounded-0" id="floatingInputNumber"  value=" @if(!is_null($user_Tel)){{$user_Tel }} @else{{ old('mobile1') }} @endif" name="mobile1">
                            <label for="floatingInputNumber">Mobile Number</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-floating">
                            <input type="email" class="form-control rounded-0" id="floatingInputEmail" value=" @if(!is_null($user_email)){{$user_email}} @else{{ old('email') }} @endif" name="email">
                            <label for="floatingInputEmail">Email</label>
                          </div>
                        </div>
                        {{-- <div class="form-floating mb-3">
                          <input type="text" class="form-control rounded-0" id="floatingInputNewPass"  value=" @if(!is_null($user_Password)){{$user_Password}} @else{{ old('password') }} @endif" name="password">
                          <label for="floatingInputNewPass">New Password</label>
                        </div> --}}


                        <div class="col">
                          <button type="submit" class="btn btn-dark py-3 btn-ecomm w-100">Save Details</button>
                        </div>

                     </div>
                   </form>
              </div>
            </div>
          </div>
       </div><!--end row-->
    </div>
  </section>
   <!--start product details-->


   <!-- Change Password Modal -->



 </div>
  <!--end page content-->


  <!--start footer-->

  <!--end footer-->




<!--start cart-->

<!--end cat-->



<!--Start Back To Top Button-->
<!--End Back To Top Button-->


   <!-- JavaScript files -->


@endsection
