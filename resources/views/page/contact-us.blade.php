@extends('layouts.app')

@section('content')

<section class="wrapper image-wrapper bg-image text-white mb-10" data-image-src="{{asset('')}}images/background/gradient1.jpg" style="background-image: url({{asset('')}}images/background/gradient1.jpg);">
  <div class="container pt-10 pb-10 pt-md-12 pb-md-12 text-center">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h1 class="display-1 text-white">Contact Us</h1>
        <p class="lead fs-lg mb-0">Get in Touch with Us</p>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>

<section class="wrapper bg-light pt-md-2">
  <div class="container pb-10 pb-md-10">
      
    <div class="row offset-lg-1 offset-xl-1">
      <div class="col-md-5 col-lg-5 " >
        <div class="">
          <div class="card-body ">
            <h2 class="display-5 mb-3 font-bolder py-2 mt-4 mb-6">Contact Details</h2>
            <div class="d-flex flex-row mb-4">
              <div>
                <div class="btn btn-circle btn-outline-primary btn-lg me-4 mb-2 "> 
                  <i class="uil uil-envelope fs-28"></i> 
                </div>
              </div>
              <div>
                <h6 class="fs-15 mb-1">Say Hi!</h6>
                <h4><a href="mailto:info@juststart.co.in">info@juststart.co.in</a></h4>
              </div>
            </div>
            <div class="d-flex flex-row mb-4">
              <div>
                <div class="btn btn-circle btn-outline-primary btn-lg me-4 mb-2 "> 
                  <i class="uil uil-phone-volume fs-28"></i> 
                </div>
              </div>
              <div>
                <h6 class="fs-15 mb-1">Let's Talk</h6>
                <h4><a href="tel:9315513354">+91-9315513354</a></h4>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="btn btn-circle btn-outline-primary btn-lg me-4 mb-2 "> 
                  <i class="uil uil-whatsapp fs-28"></i> 
                </div>
              </div>
              <div>
                <h6 class="fs-15 mb-1">Support On Whatsapp</h6>
                <h4><a href="tel:9315513354">+91-9315513354</a></h4> 
              </div>
            </div>

            <h6 class="">Stay In The Loop</h6>
            <nav class="nav social mb-0">
              <a class="me-4" target="_blank" href="https://www.facebook.com/Juststart.co.in/">
                <i class="uil uil-facebook-f fs-28"></i>
              </a>
              <a class="me-4" target="_blank" href="https://x.com/juststartech">
                <i class="uil uil-twitter fs-28"></i>
              </a>
              <a class="me-4" target="_blank" href="https://instagram.com/juststart_tech">
                <i class="uil uil-instagram fs-28"></i>
              </a>
              <a class="me-4" target="_blank" href="https://www.linkedin.com/company/juststarttechnologies">
                <i class="uil uil-linkedin fs-28"></i>
              </a>
              <a class="me-4" target="_blank" href="https://www.youtube.com/@juststart986">
                <i class="uil uil-youtube fs-28"></i>
              </a>
            </nav>
          </div>
        </div>
      </div>
      <div class="col-md-7 col-lg-7" >
        <div class="card bg-soft-primary rounded-4">
          <div class="card-body ">
            <h3 class="display-3 mb-3 text-gradient gradient-7 font-bolder py-2 mb-6">Send A Message</h3>
            <form class="enquiry-form " name="contact-us-form" method="post" action="{{route('service-form-submit')}}" novalidate="">
                @csrf
                <input type="hidden" name="action" value="contact-us-form" />
                <div class="row">
                    <span class="field-error form-success-msg" ></span>
                    <span class="field-error form-error-msg" ></span>
                </div>
                <div class="row gx-4">
                  <div class="col-md-6">
                    <div class="form-floating mb-6">
                      <input type="text" name="name" id="" class="form-control" placeholder="Name" />
                      <span class="form-error"></span>
                      <label for="form_name">Name *</label>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                    <div class="form-floating mb-6">
                      <input type="text" name="email" id="" class="form-control" placeholder="Email" />
                      <span class="form-error"></span>
                      <label for="form_email">Email *</label>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                    <div class="form-floating mb-6">
                      <input type="text" name="phone" id="" class="form-control input-phone-validation" placeholder="Phone Number" />
                      <span class="form-error"></span>
                      <label for="form_phone">Phone *</label>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-md-6">
                    <div class="form-floating mb-6">
                      <input type="text" name="message" id="" class="form-control" placeholder="Message" />
                      <span class="form-error"></span>
                      <label for="form_subject">Message *</label>
                    </div>
                  </div>
                  <!-- /column -->
                  <div class="col-12">
                    <input type="button" class="btn btn-sm btn-outline-primary rounded-pill enquiry-form-submit-button" name="submit" value="Submit">
                  </div>
                  <!-- /column -->
                </div>
                <!-- /.row -->
            </form>
            <!-- /form -->
          </div>  <!-- /.card-body -->
        </div>  <!-- /.card -->
      </div>

    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->


</section>

<section class="wrapper mt-4">
  <div class="row gx-0">
      <div class="col-lg-12 align-self-stretch">
        <div class="map map-full rounded-top rounded-lg-start">
          
            <iframe loading="lazy"
					src="https://maps.google.com/maps?q=juststart%20technologies%20pvt%20ltd&#038;t=m&#038;z=14&#038;output=embed&#038;iwloc=near"
					title="juststart technologies pvt ltd"
					aria-label="juststart technologies pvt ltd" style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
        </div>
        <!-- /.map -->
      </div>
  </div>

</section>


@endsection