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
               <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
             <h3 class="mb-0 h3 fw-bold">Find Us Map</h3>
             <div class="line"></div>
           </div>

           <div class="border p-3">
             <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6320105711!2d144.49269039866502!3d-37.971237001538135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sin!4v1654250375825!5m2!1sen!2sin" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>

            <div class="separator my-3">
             <div class="line"></div>
             <h3 class="mb-0 h3 fw-bold">Why Choose Us</h3>
             <div class="line"></div>
           </div>
           @if (Session::has('status'))
           <div class="alert alert-success">{{ Session::get('status') }}</div>
       @endif
       @if (Session::has('error'))
           <div class="alert alert-danger">{{ Session::get('error') }}</div>
       @endif
           <div class="row g-4">
             <div class="col-xl-8">
               <div class="p-4 border">
                 <form method="post" action="{{ route('contact.store') }}">
                    @csrf
                   <div class="form-body">
                     <h4 class="mb-0 fw-bold">Drop Us a Line</h4>
                     <div class="my-3 border-bottom"></div>
                        <div class="mb-3">
                            <label for="exampleName"
                                class="form-label">{{ trans('main_trans.Name') }}</label>
                            <input type="text" id="user_name" class="form-control rounded-0"
                                name="user_name" value="{{ old('user_name') }}" autocomplete="user_name"
                                autofocus id="exampleName">
                        </div>
                        @error('user_name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                     <div class="mb-3">
                       <label for="exampleEmail"class="form-label">{{ trans('main_trans.Email') }}</label>
                       <input type="email" id="email"  class="form-control rounded-0"
                        name="email" value="{{ old('email') }}"  autocomplete="email" id="exampleEmail">
                     </div>
                     @error('email')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     <div class="mb-3">
                       <label for="exampleMessage" class="form-label">Your Message</label>
                       <textarea class="form-control rounded-0" rows="4" cols="4" value="{{old('text')}}"></textarea>
                     </div>
                     @error('agree')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     <div class="mb-0">
                        <button type="submit" class="btn btn-dark rounded-0 btn-ecomm w-100">Send Message</button>
                     </div>
                   </div>
                 </form>
               </div>
             </div>
             <div class="col-xl-4">
               <div class="p-3 border">
                 <div class="address mb-3">
                   <h5 class="mb-0 fw-bold">Address</h5>
                   <p class="mb-0 font-12">123 Street Name, City, Australia</p>
                 </div>
                 <hr>
                 <div class="phone mb-3">
                   <h5 class="mb-0 fw-bold">Phone</h5>
                   <p class="mb-0 font-13">Toll Free (123) 472-796</p>
                   <p class="mb-0 font-13">Mobile : +91-9910XXXX</p>
                 </div>
                 <hr>
                 <div class="email mb-3">
                   <h5 class="mb-0 fw-bold">Email</h5>
                   <p class="mb-0 font-13">mail@example.com</p>
                 </div>
                 <hr>
                 <div class="working-days mb-0">
                   <h5 class="mb-0 fw-bold">Working Days</h5>
                   <p class="mb-0 font-13">Mon - FRI / 9:30 AM - 6:30 PM</p>
                 </div>
               </div>
             </div>
           </div>

         </div>
       </section>
        <!--start product details-->

      </div>

@endsection
@section('footer')
@include('V1.includes.footer')
@endsection
