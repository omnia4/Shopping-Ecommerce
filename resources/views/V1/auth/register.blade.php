@extends('V1.layouts.app')
@section('title','Register')
@section('header')
@include('V1.includes.header')
@endsection
@section('content')
<!--start page content-->
<div class="page-content">
        <!--start breadcrumb-->

            <div class="py-4 border-bottom">
        <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{trans('main_trans.Home')}}</a></li>
            <li class="breadcrumb-item"><a href="javascript:;">{{trans('main_trans.Authentication')}}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{trans('main_trans.Register')}}</li>
            </ol>
        </nav>
        </div>
        </div>
        <!--end breadcrumb-->


        <!--start product details-->
        <section class="section-padding">
        <div class="container">
            @if (Session::has('status'))
            <div class="alert alert-success">{{ Session::get('status') }}</div>
            @endif
            @if (Session::has('error'))
            <div class="alert alert-danger">{{ Session::get('error') }}</div>
            @endif
            <div class="row">
            <div class="col-12 col-lg-6 col-xl-5 col-xxl-5 mx-auto">
                <div class="card rounded-0">
                    <div class="card-body p-4">
                    <h4 class="mb-0 fw-bold text-center">Registration</h4>
                    <hr>
                    <form method="POST" action="{{ route('register.store') }}">
                        @csrf
                        <div class="row g-4">
                        <div class="col-12">
                            <label for="exampleName" class="form-label">{{trans('main_trans.Name')}}</label>
                            <input type="text" id="user_name"  class="form-control rounded-0" name="user_name" value="{{ old('user_name') }}"  autocomplete="user_name" autofocus id="exampleName">
                        </div>
                        @error('user_name')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="col-12">
                            <label for="exampleMobile" class="form-label">{{trans('main_trans.Mobile')}}</label>
                            <input type="text" id="mobile1" name="mobile1" class="form-control rounded-0" value="{{ old('mobile1') }}"  autocomplete="mobile1" autofocus id="exampleMobile">
                        </div>
                        @error('mobile1')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="col-12">
                            <label for="exampleEmail" class="form-label">{{trans('main_trans.Email')}}</label>
                            <input type="email" id="email" name="email"  class="form-control rounded-0" name="email" value="{{ old('email') }}"  autocomplete="email" id="exampleEmail">
                        </div>
                        @error('email')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="col-12">
                            <label for="examplePassword" class="form-label">{{trans('main_trans.Password')}}</label>
                            <input type="password" id="password" name="password" class="form-control rounded-0" name="password"  autocomplete="new-password" id="examplePassword">
                        </div>
                        @error('password')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="agree" value="1" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                            {{trans('main_trans.I agree to the Terms and Conditions')}}
                            </label>
                            </div>
                        </div>
                        @error('agree')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="col-12">
                            <hr class="my-0">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark rounded-0 btn-ecomm w-100">{{trans('main_trans.Register')}}</button>
                        </div>
                        <div class="col-12 text-center">
                            <p class="mb-0 rounded-0 w-100">{{trans('main_trans.Already have an account ?')}} <a href="{{ route('login.show') }}" class="text-danger">{{trans('main_trans.Sign In')}}</a></p>
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
    <!--end page content-->
@endsection
@section('footer')
@include('V1.includes.footer')
@endsection
