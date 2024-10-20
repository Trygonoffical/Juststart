@extends('layouts.app')

@section('content')


<section class="wrapper image-wrapper bg-image text-white mb-10" data-image-src="{{asset('')}}images/background/gradient1.jpg" style="background-image: url({{asset('')}}images/background/gradient1.jpg);">
  <div class="container container pt-14 pb-18  text-center">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h1 class="display-1 text-white">Payment</h1>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>

<section class="wrapper bg-light">
  <div class="container pb-14 pb-md-16">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="blog single mt-n17">
          <div class="card shadow-lg">
            <div class="card-body">

              <h2 class="h1 mb-2 text-center">Make hassle free online payment for</h2>
              <h2 class="h1 mb-8 text-center">Your Startups Business</h2>

              <p class="text-center mb-6"><a href="https://formbuilder.ccavenue.com/live/icici-bank/juststart-technologies-private-limited" class="btn btn-sm btn-outline-primary rounded-pill">Click To Pay Online</a></p>

              <p class="text-center mb-6">
                <img src="{{asset('')}}images/partner/pay_methods_branding.webp" />
              </p>

              <p class="text-center mt-10"><b>Powered By</b></p>

              <p class="text-center mb-6">
                <figure class="text-center"><img src="{{asset('')}}images/partner/cc_avenue_payment.webp" style="max-width:300px;" /></figure>
              </p>

              <!--/.row -->
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.blog -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>






@endsection