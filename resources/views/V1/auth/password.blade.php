@extends('V1.layouts.app')
@section('title','Change Password')
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
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:;">Authentication</a></li>
            <li class="breadcrumb-item active" aria-current="page">Reset Password</li>
            </ol>
        </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <!--start product details-->
    <section class="py-5">
        <div class="container">

            <div class="row">
            <div class="col-12 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
                <div class="card rounded-0">
                    <div class="card-body p-4">
                    <h4 class="mb-4 fw-bold text-center">Reset Password</h4>
                    <form action="{{ route('password.check') }}" method="POST">
                        @csrf
                        <div class="row g-4">
                        <div class="col-12">
                            <label for="exampleName" class="form-label">Email</label>
                            <input type="email" id="email"  class="form-control rounded-0" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus id="exampleName">
                        </div>
                        @error('email')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="col-12">
                            <label for="examplePassword" class="form-label">New Password</label>
                            <input type="password" id="password" name="password" class="form-control rounded-0" name="password"  autocomplete="new-password" id="examplePassword">
                        </div>
                        @error('password')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="col-12">
                            <label for="examplePassword" class="form-label">Confirm Password</label>
                            <input type="password" id="password" name="password_confirmation" class="form-control rounded-0" name="password"  autocomplete="new-password" id="examplePassword">
                        </div>
                        @error('password_confirmation')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark rounded-0 btn-ecomm w-100">Change Password</button>
                        </div>
                        <div class="col-12 text-center">
                            <a href="{{ route('login.show') }}" class="mb-0 rounded-0 w-100 btn  btn-ecomm border border-dark"><i class="bi bi-arrow-left me-2"></i>Return to Login</></a>
                        </div>
                        </div><!---end row-->
                    </form>
                    </div>
                </div>
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
