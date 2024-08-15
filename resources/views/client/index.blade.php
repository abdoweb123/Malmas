@extends('client.layout.layout')

@section('styles')
  <style>
    .carousel-caption h5 p{
      font-size: 40px !important;
      line-height: 55px;
      font-weight: 700;
    }
    .about h5 p, .in_website h5 p{
      font-size: 24px !important;
      font-weight: 700;
    }

    .address_footer p{
      display: inline-block !important;
    }

    .packages{
      min-height: 400px;
    }

  </style>
@stop

@section('content')
  <div class="container-fluid  section-top">

  <div class="row">
  <div id="carouselExampleDark" class="carousel carousel-dark slide p-0">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
        aria-label="Slide 2"></button>

    </div>

    <!-- Sliders -->
    <div class="carousel-inner position-relative">
      <div class="layer position-absolute top-0 end-0 bottom-0 start-0">
        <!-- Optional overlay content -->
      </div>

      @foreach($sliders as $index => $slider)
        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}" data-bs-interval="10000">
          <div class="img-slider d-flex align-items-center justify-content-center">
            <img src="{{ asset($slider->file) }}" class="d-block w-100" alt="Slider Image">
          </div>
          <div class="carousel-caption text-white d-md-block" data-aos="fade-up" data-aos-duration="1500">
            <h6>{{ $slider->title() }}</h6>
            <h5 class="py-md-3 py-1 mb-md-5 mb-3">
              {!! $slider['desc_'.lang()] !!}
            </h5>
            <a class="btn bg-primary-color text-decoration-none text-white fw-semibold rounded-1 button-height explore px-5 my-5"
               href="tel:{{ setting('phone') }}">
              @lang('trans.contact_us')
            </a>
          </div>
        </div>
      @endforeach
    </div>

    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> -->
  </div>
  </div>
  </div>

  <!-- Partners -->
  <div class="bg-primary-color position-relative py-lg-4 py-md-3 py-2">
    <div class="container">
      <div class="row slider1 regular">
      <div class="p-2">
        <div class=" d-flex align-items-center justify-content-center">
          <img src="{{ asset('assets_website/imgs/home/logo/Logo.svg') }}">
        </div>
      </div>
      <div class="p-2">
        <div class=" d-flex align-items-center justify-content-center">
          <img src="{{ asset('assets_website/imgs/home/logo/Logo (1).svg') }}">
        </div>
      </div>
      <div class="p-2">
        <div class=" d-flex align-items-center justify-content-center">
          <img src="{{ asset('assets_website/imgs/home/logo/Vector.svg') }}">
        </div>
      </div>
      <div class="p-2">
        <div class=" d-flex align-items-center justify-content-center">
          <img src="{{ asset('assets_website/imgs/home/logo/Logo (2).svg') }}">
        </div>
      </div>
      <div class="p-2">
        <div class=" d-flex align-items-center justify-content-center">
          <img src="{{ asset('assets_website/imgs/home/logo/Logo (3).svg') }}">
        </div>
      </div>


    </div>
    </div>
  </div>

  <!-- About -->
  <div class="bg-mainColor1 " id="about">
      <div class="container pt-lg-3 pt-2 mb-5 " >
        <div class="row about   justify-content-lg-between  justify-content-center align-items-center">
          <div class="col-lg-6 col-md-6 col-12 ">
            <h3> <span>@lang('trans.abouts')</span> <span>{{ setting('title_'.lang()) }}</span> </h3>
            <h5>
              {!! setting('about_'.lang()) !!}
            </h5>
          </div>
          <!-- <div class="col-lg-5 col-md-8">
              <div class="img-container position-relative w-100 h-100 d-flex justify-content-center align-items-center doctor-img overflow-hidden" >
                <img class=""  src="assets_website/imgs/home/person.svg">
                </div>
            </div> -->

          <div class="col-lg-5 col-md-6 col-12 position-relative img-height overflow-hidden">
              <div class="img-container position-relative doctor-img w-100 h-100" >
                </div>
                <div class="position-absolute top-0 bottom-0 start-0 end-0 d-flex  align-items-end"  >
                  <img class="w-100"  src="{{ setting('about_image') }}">
              </div>
          </div>
        </div>
      </div>
  </div>

  <!-- Services -->
  <div class="container  section-top-service py-lg-5 py-md-4 py-3" id="services">
  <div class="row py-2">
    <h3 class="">@lang('trans.services')</h3>
    <p class="">
      @lang('trans.services_desc')
    </p>
  </div>
  <div class="row">
    <div class=" tabslider2 slider-title regular slider2 py-4">
      @forelse($services as $service)
      <div class=" p-2 ">
        <div class="card border-0 rounded-3 py-2 bg-mainColor1">
          <div class="card-body ">
            <div class="img-card d-flex align-items-center rounded-2 position-relative text-white">
              <img src="{{ asset($service->file) }}" width="60" height="60" alt="{{ $service->title() }}">
            </div>
            <h2>{{ $service->title() }}</h2>
            <p class="text-secondary">
              {{ $service['desc_' . lang()] }}
            </p>
          </div>
        </div>
      </div>
      @empty
      @endforelse
    </div>
  </div>
</div>

  <!-- In malams -->
  <div class="bg-img position-relative overflow-hidden justify-content-center align-items-center in_website">
  <img class="w-100" src="{{ asset('assets_website/imgs/home/Frame 180.png') }}"/>

  <div class="layer d-flex align-items-center justify-content-center position-absolute top-0 bottom-0 start-0 end-0">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10 ">
          <div class="text-center text-white">
            <h1 class="h6 py-2">
              @lang('trans.in') <span> {{ setting('title_'.lang()) }} </span>
            </h1>
            <h5 data-aos="fade-up" data-aos-duration="1500">
              {!! setting('inOurWebsite_'.lang()) !!}
            </h5>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

  <!-- Packages -->
  <div class="container  section-top-service py-5 " id="packages">
  <div class="row py-2">
    <h3 class="">@lang('trans.packages') </h3>
    <p class="">
      @lang('trans.view_available_packages')
    </p>
  </div>
  <div class="row">
    <div class=" tabslider2 slider-title regular slider-package py-4">
      @forelse($packages as $package)
      <div class=" p-2 ">
        <div class="card border-0 rounded-3 py-2 bg-mainColor1 text-center packages">
        <div class="card-body ">
        <div class="img-card d-flex align-items-center rounded-2 justify-content-center position-relative text-white py-2"> 
          <svg width="27" height="34" viewBox="0 0 27 34" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.5 20.3333H8.49999C8.05796 20.3333 7.63404 20.5088 7.32148 20.8214C7.00892 21.134 6.83332 21.5579 6.83332 21.9999C6.83332 22.4419 7.00892 22.8659 7.32148 23.1784C7.63404 23.491 8.05796 23.6666 8.49999 23.6666H18.5C18.942 23.6666 19.3659 23.491 19.6785 23.1784C19.9911 22.8659 20.1667 22.4419 20.1667 21.9999C20.1667 21.5579 19.9911 21.134 19.6785 20.8214C19.3659 20.5088 18.942 20.3333 18.5 20.3333ZM18.5 13.6666H11.8333C11.3913 13.6666 10.9674 13.8422 10.6548 14.1547C10.3423 14.4673 10.1667 14.8912 10.1667 15.3333C10.1667 15.7753 10.3423 16.1992 10.6548 16.5118C10.9674 16.8243 11.3913 16.9999 11.8333 16.9999H18.5C18.942 16.9999 19.3659 16.8243 19.6785 16.5118C19.9911 16.1992 20.1667 15.7753 20.1667 15.3333C20.1667 14.8912 19.9911 14.4673 19.6785 14.1547C19.3659 13.8422 18.942 13.6666 18.5 13.6666ZM21.8333 3.66659H19.8667C19.5228 2.694 18.8865 1.85158 18.0451 1.25482C17.2037 0.65805 16.1982 0.336151 15.1667 0.333252H11.8333C10.8017 0.336151 9.79632 0.65805 8.95488 1.25482C8.11344 1.85158 7.47718 2.694 7.13332 3.66659H5.16666C3.84057 3.66659 2.5688 4.19337 1.63112 5.13105C0.693441 6.06873 0.166656 7.3405 0.166656 8.66659V28.6666C0.166656 29.9927 0.693441 31.2644 1.63112 32.2021C2.5688 33.1398 3.84057 33.6666 5.16666 33.6666H21.8333C23.1594 33.6666 24.4312 33.1398 25.3689 32.2021C26.3065 31.2644 26.8333 29.9927 26.8333 28.6666V8.66659C26.8333 7.3405 26.3065 6.06873 25.3689 5.13105C24.4312 4.19337 23.1594 3.66659 21.8333 3.66659ZM10.1667 5.33325C10.1667 4.89122 10.3423 4.4673 10.6548 4.15474C10.9674 3.84218 11.3913 3.66659 11.8333 3.66659H15.1667C15.6087 3.66659 16.0326 3.84218 16.3452 4.15474C16.6577 4.4673 16.8333 4.89122 16.8333 5.33325V6.99992H10.1667V5.33325ZM23.5 28.6666C23.5 29.1086 23.3244 29.5325 23.0118 29.8451C22.6993 30.1577 22.2754 30.3333 21.8333 30.3333H5.16666C4.72463 30.3333 4.30071 30.1577 3.98815 29.8451C3.67558 29.5325 3.49999 29.1086 3.49999 28.6666V8.66659C3.49999 8.22456 3.67558 7.80064 3.98815 7.48807C4.30071 7.17551 4.72463 6.99992 5.16666 6.99992H6.83332V8.66659C6.83332 9.10861 7.00892 9.53254 7.32148 9.8451C7.63404 10.1577 8.05796 10.3333 8.49999 10.3333H18.5C18.942 10.3333 19.3659 10.1577 19.6785 9.8451C19.9911 9.53254 20.1667 9.10861 20.1667 8.66659V6.99992H21.8333C22.2754 6.99992 22.6993 7.17551 23.0118 7.48807C23.3244 7.80064 23.5 8.22456 23.5 8.66659V28.6666Z" fill="#23418C"/>
            </svg>
            
        </div>
      <h4 class="text-secondary p">{{ $package->title() }}</h4>
      <h5>{{ $package->price * Country()->currancy_value }} <span> {{ Country()['currancy_code_'.lang()] }}</span></h5>
      <h5 class="h6 text-decoration-line-through">{{ $package->old_price * Country()->currancy_value }} <span> {{ Country()['currancy_code_'.lang()] }}</span></h5>
      <ul class="package">

        @foreach($package->items as $item)
        <li class="py-1"><span><svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M14.21 1.2101C14.117 1.11638 14.0064 1.04198 13.8846 0.991213C13.7627 0.940445 13.632 0.914307 13.5 0.914307C13.368 0.914307 13.2373 0.940445 13.1154 0.991213C12.9936 1.04198 12.883 1.11638 12.79 1.2101L5.34001 8.6701L2.21001 5.5301C2.11349 5.43687 1.99955 5.36355 1.87469 5.31435C1.74984 5.26514 1.61651 5.24101 1.48233 5.24334C1.34815 5.24566 1.21574 5.27438 1.09266 5.32788C0.969586 5.38137 0.858249 5.45858 0.765011 5.55511C0.671772 5.65163 0.598458 5.76557 0.549254 5.89042C0.50005 6.01528 0.47592 6.1486 0.478241 6.28278C0.480563 6.41696 0.509291 6.54937 0.562784 6.67245C0.616278 6.79553 0.693489 6.90687 0.790011 7.0001L4.63001 10.8401C4.72297 10.9338 4.83358 11.0082 4.95543 11.059C5.07729 11.1098 5.208 11.1359 5.34001 11.1359C5.47202 11.1359 5.60273 11.1098 5.72459 11.059C5.84645 11.0082 5.95705 10.9338 6.05001 10.8401L14.21 2.68011C14.3115 2.58646 14.3925 2.47281 14.4479 2.34631C14.5033 2.21981 14.5319 2.08321 14.5319 1.94511C14.5319 1.807 14.5033 1.6704 14.4479 1.5439C14.3925 1.4174 14.3115 1.30375 14.21 1.2101Z" fill="#1E1E1E"/>
          </svg>
          </span>
          <span>{{ $item->title() }}</span>
        </li>
        @endforeach

      </ul>
      </div></div>
      </div>
      @empty
      @endforelse
    </div>
  </div>
</div>

  <!-- contactUs -->
  <div class=" position-relative overflow-hidden justify-content-center align-items-center" id="contactUs">

  <div class="layer d-flex align-items-center justify-content-center map top-0 bottom-0 start-0 end-0">

    <div class="container">
      <div class="row " >

        <div class="col-lg-4 col-md-6 col-11 bg-white rounded-3 px-4 py-4">
        
          <form class="row" method="post" action="{{  route('client.contactUs')}}" id="contact_form">
            @csrf
              <h3 class="py-2">@lang('trans.contact_with_us')</h3>
            <div class=" col-12">
              <label for="email" class="form-label fw-semibold">@lang('trans.name')* </label>
              <div class="input-group mb-3">
                <input type="text" class="form-control rounded-1 py-2" name="name" id="name" required>
              </div>
            </div>
            <div class=" col-12">
              <label for="email" class="form-label fw-semibold">@lang('trans.email')* </label>
              <div class="input-group mb-3">
                <input type="text" class="form-control rounded-1 py-2" name="email" id="email_contact" required>
              </div>
            </div>
            <div class=" col-12">
              <label for="phonenumber" class="form-label fw-semibold">@lang('trans.phone')* </label>
              <div class="input-group mb-3 w-100">
                <input type="hidden" name="country_code" id="country_code" value="{{ old('country_code',country_code()) }}">
                <input type="hidden" name="phone_code" id="phone_code" value="{{ old('phone_code',phone_code()) }}">
                <input type="tel" name="phone" id="phone" class="form-control rounded-1 py-2 w-100" placeholder="@lang('trans.enter_phone')" required/>
              </div>
            </div>
            <div class="col-12">
              <label for="Notes" class="form-label fw-semibold ">@lang('trans.message')*</label>
            <div class="input-group mb-3">
              <textarea style="resize: none;" class="form-control rounded-1" name="message" id="Notes" rows="5" required></textarea>
            </div>
          </div>
            <div class=" col-12 d-flex justify-content-center align-items-center">
              <button type="submit" class="bg-primary-color btn w-auto px-5 my-3 rounded-1 text-white fw-semibold py-2">@lang('trans.submit')</button>        </div>
          </form>
    
        </div>

      </div>
    </div>

  </div>



  <iframe src="{{ setting('google_map_link') }}" class="w-100"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


@stop