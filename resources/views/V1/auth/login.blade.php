@extends('V1.layouts.app')
@section('title', 'Login')
@section('content')
    <div class="page-content">
        <!--start breadcrumb-->
        <div class="py-4 border-bottom">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ trans('main_trans.Home') }} /</a></li>
                        <li class="breadcrumb-item"><a href="javascript:;">{{ trans('main_trans.Authentication') }} </a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ trans('main_trans.Login') }}</li>
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
                    <div class="col-12 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
                        <div class="card rounded-0">
                            <div class="card-body p-4">

                                <form method="post" action="{{ route('checkLogin') }}">
                                    @csrf
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <label for="exampleName"
                                                class="form-label">{{ trans('main_trans.User Name') }}</label>
                                            <input type="text" id="user_name" class="form-control rounded-0"
                                                name="user_name" value="{{ old('user_name') }}" autocomplete="user_name"
                                                autofocus id="exampleName">
                                        </div>
                                        @error('user_name')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="col-12">
                                            <label for="examplePassword"
                                                class="form-label">{{ trans('main_trans.Password') }}</label>
                                            <input type="password" id="password" name="password"
                                                class="form-control rounded-0" name="password" autocomplete="new-password"
                                                id="examplePassword">
                                        </div>
                                        @error('password')
                                            <span class="text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <div class="col-12">
                                            <a href="javascript:;" class="text-content btn bg-light rounded-0 w-100"><i
                                                    class="bi bi-lock me-2"></i>{{ trans('main_trans.Forget Password') }}</a>
                                        </div>
                                        <div class="col-12">
                                            <hr class="my-0">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit"
                                                class="btn btn-dark rounded-0 btn-ecomm w-100">{{ trans('main_trans.Login') }}</button>
                                        </div>
                                        <div class="col-12 text-center">
                                            <p class="mb-0 rounded-0 w-100">
                                                {{ trans("main_trans.Don't have an account ?") }} <a
                                                    href="{{ route('register.show') }}"
                                                    class="text-danger">{{ trans('main_trans.Sign Up Now') }}</a></p>
                                        </div>
                                    </div>
                                    <!---end row-->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->

            </div>
        </section>
        <!--start product details-->


    </div>
    @section('js')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
@if (session('success'))
    swal({{ session('success') }});
@endif
@if (session('alert'))
    swal({{ session('alert') }});
@endif
</script>
@endsection
@endsection
@section('footer')
    @include('V1.includes.footer')
@endsection
