<!--start footer-->
<section class="footer-section bg-section-2 section-padding">
    <div class="container">
       <div class="row row-cols-1 row-cols-lg-4 g-4">
        <div class="col">
          <div class="footer-widget-6">
            <img src="{{ asset('v1/assets/images/logo.webp')}}" class="logo-img mb-3" alt="">
            <h5 class="mb-3 fw-bold">{{trans('main_trans.About Us')}}</h5>
            <p class="mb-2">{{app('contacts')->about}}</p>

             <a class="link-dark" href="{{route('aboutus.show')}}">{{trans('main_trans.Read More')}}</a>
          </div>
        </div>
        <div class="col">
          <div class="footer-widget-7">
            <h5 class="mb-3 fw-bold">{{trans('main_trans.Explore')}}</h5>
             <ul class="widget-link list-unstyled">
                @foreach (app('categories') as $category)
                <div class="col-12 col-xl-4">
                   <a href="{{ route('category.show', [1, $category->id]) }}">
                       <h6 class="large-menu-title" style="color: blue">{{ $category->name }}</h6>
                    </a>
                    <ul class="list-unstyled">
                        @if ($category->subCategories)
                            @foreach ($category->subCategories as $subCategory)
                                <li><a  href="javascript:;">{{ $subCategory->name }}</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                @endforeach
             </ul>
          </div>
        </div>
        <div class="col">
          <div class="footer-widget-8">
            <h5 class="mb-3 fw-bold">{{trans('main_trans.Company')}}</h5>
             <ul class="widget-link list-unstyled">
               <li><a href="{{route('aboutus.show')}}">{{trans('main_trans.About Us')}}</a></li>
               <li><a href="{{route('contact.show')}}">{{trans('main_trans.Contact Us')}}</a></li>
               <li><a href="{{route('term')}}">{{trans('main_trans.Terms')}}</a></li>
             </ul>
          </div>
        </div>
        <div class="col">
          <div class="footer-widget-9">
            <h5 class="mb-3 fw-bold">{{trans('main_trans.Follow Us')}}</h5>
             <div class="social-link d-flex align-items-center gap-2">
               <a href="{{app('contacts')->facebook}}"><i class="bi bi-facebook"></i></a>
               <a href="{{app('contacts')->twitter}}"><i class="bi bi-twitter"></i></a>
               <a href="{{app('contacts')->youtube}}"><i class="bi bi-youtube"></i></a>
               <a href="{{app('contacts')->instagram}}"><i class="bi bi-instagram"></i></a>
             </div>
             <div class="mb-3 mt-3">
                <h5 class="mb-0 fw-bold">{{trans('main_trans.Support Us')}}</h5>
                <a href="mailto:elbadrshop@gmail.com" class="mb-0 text-muted">{{app('contacts')->email}}</a>
               </div>
               <div class="">
                <h5 class="mb-0 fw-bold">{{trans('main_trans.Toll Free')}}</h5>
                <p class="mb-0 text-muted">{{app('contacts')->telephone}}</p>
               </div>
          </div>
        </div>
    </div>
  </section>
  <!--end footer-->

