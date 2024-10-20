
<section class="wrapper bg-light bg-soft-primaryx homebanner">
    <div class="container pt-8 pt-md-10">
      <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-14 align-items-center">
        <div class="col-md-6 col-lg-6 offset-lg-1xxx position-relative order-lg-2" data-cue="zoomIn">
          <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>
          <figure class="rounded">
            <img src="{{asset('')}}uploads/page/home-banner.png" alt="" />
          </figure>
        </div>
        <!--/column -->
        <div class="col-lg-6 text-center text-lg-start position-relative" data-cues="slideInDown" data-group="page-title" data-delay="600">
          
          <h2 class="display-2   mb-5 text-black text-bolder " style="font-weight:700 !important;">Welcome to JustStart, a complete business Solution
          </h2>
          <h2 class="text-bluex mb-4 font-bolder mb-10">Start your company Registration, Tax filing, and IP registration hassle-free with the team of JustStart</h2>
  
          <div class="d-flex justify-content-center justify-content-lg-start"  >
            <span><a href="{{ route('contactUs') }}" class="btn btn-sm btn-black rounded-pill me-2">Get Expert Help</a></span>
            <span><a href="{{ route('aboutUs') }}" class="btn btn-sm btn-soft-ash rounded-pill mb-2">More About Us</a></span>
          </div>
  
          @include('component.rating')
  
        </div>
        <!--/column -->
      </div>
    </div>
  </section>
  <!-- /section -->