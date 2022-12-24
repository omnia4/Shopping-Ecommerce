<section class="slider-section">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></button>
      </div>
      <div class="carousel-inner">
        @foreach ($sliders as $slider)

        <div class="carousel-item active bg-primary">
          <div class="row d-flex align-items-center">
            <div class="col d-none d-lg-flex justify-content-center">
              <div class="">
                {{-- <h3 class="h3 fw-light text-white fw-bold">{{ $loop->index+1 }}</h3> --}}
                <h1 class="h1 text-white fw-bold">{{ $slider->title}}</h1>
                {{-- <p class="text-white fw-bold"><i>{{ $slider->image_link}}</i></p> --}}
                <div class=""><a class="btn btn-dark btn-ecomm" href="{{ route('category.show', 1) }}">buy now</a>
                </div>
              </div>
            </div>
            <div class="col">
              <img src="{{ asset($slider->src) }}" class="img-fluid" alt="...">
            </div>
          </div>
        </div>

        @endforeach
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
</div>
</section>
