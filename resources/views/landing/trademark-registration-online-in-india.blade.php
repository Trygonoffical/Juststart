@extends('layouts.landing')

@section('content')

<section class="wrapper mt-0 bg-dark-blue topbanner">
  <div class="container py-md-4 ">
    <div class="row ">
        <div class="col-md-7 col-lg-7 first-col">
            <h2 class="mt-2 mb-4 font-bolder text-centerx">Register Your Trademark Today!</h2>

            <!-- <p class="text-center"> -->
            <figure class="text-centerx mb-2">
              <img src="{{asset('')}}images/service-icon/secure.png" class="me-2" style="max-width:40px;" />
              <span class="fs-20" style="color: #255cc1;font-weight: bold;">Secure Your Trademark Now!</span>
            </figure>
            <!-- </p> -->

            <p class="text-centerx mb-6">
              <i class="uil uil-question-circle fs-46 me-1 align-middle"></i>
              <span class="fs-20" style="color: #255cc1;font-weight: bold;">
                Why delay? Protect your trademark today
              </span>
            </p>

            <ul class="row ps-4 icon-list bullet-bg mb-2 topbanner-features">
              <li class="col-md-6 col-12">
                <span><i class="uil uil-check fs-22"></i></span>
                <span>Get it done in just 15 days</span>
              </li>
              <li class="col-md-6 col-12">
                <span><i class="uil uil-check fs-22"></i></span>
                <span>From anywhere</span>
              </li>
              <li class="col-md-6 col-12">
                <span><i class="uil uil-check fs-22"></i></span>
                <span>With just one easy tap</span>
              </li>
              <li class="col-md-6 col-12">
                <span><i class="uil uil-check fs-22"></i></span>
                <span>Efficiency at your fingertips!</span>
              </li>
            </ul>

            <div class="mt-6 landing-banner-rating-left d-none d-lg-block">
              @include('includes.landing-rating')
            </div>

        </div>
        <div class="col-md-5 col-lg-5 mb-4">
            <div class="card bg-white mb-2">
              <div class="card-body py-4 px-4">
                  
                <div class="row landing-form-tel">
                    <div class="col-md-12 mb-3 text-center fs-14">
                        <a href="tel:9315513354" class="ms-2">
                            <i class="uil uil-calling"></i>
                            9315513354
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=919315513354" class="">
                            <i class="uil uil-whatsapp"></i>
                            9315513354
                        </a>
                    </div>
                </div>
                <h4 class="mb-4 font-bolder text-center form-heading">Register Your Trademark Today!</h4>
                @include('forms.landing-form-banner')

              </div>
            <!--/.card-body -->
            </div>

            <div class="mt-6 landing-banner-rating-right d-block d-lg-none">
              @include('includes.landing-rating')
            </div>
            
        </div>
    </div>
  </div>
</section>

<!-- TimeLine -->
<section class="wrapper mt-10 time-line">
  <div class="container">
      <div class="row gx-lg-8 gx-xl-12 gy-6 process-wrapper line text-center">
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary pe-none mb-4"><span class="number">01</span></span>
          <div class="time-line-box">
            <figure>
              <img src="{{asset('')}}/images/time-line-fill-form.webp" />
            </figure>
            <h4 class="mb-1">Fill Up the Form</h4>
          </div>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary pe-none mb-4"><span class="number">02</span></span>
          <div class="time-line-box" >
            <figure>
              <img src="{{asset('')}}/images/timeline-submit-doc.webp" />
            </figure>
            <h4 class="mb-1">Call to Discuss</h4>
          </div>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary pe-none mb-4"><span class="number">03</span></span>
          <div class="time-line-box" >
            <figure>
              <img src="{{asset('')}}/images/timeline-discuss.webp" />
            </figure>
            <h4 class="mb-1">Detailed Consultation</h4>
          </div>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary pe-none mb-4"><span class="number">04</span></span>
          <div class="time-line-box" >
            <figure>
              <img src="{{asset('')}}/images/timeline-get-company.webp" />
            </figure>
            <h4 class="mb-1">Get Trademark Today</h4>
          </div>
        </div>
        <!--/column -->
      </div>
  </div>
</section>

<!-- What is -->
<section class="wrapper mt-12 mt-sm-16 bg-light ">
  <div class="container ">
      <div class="card shadow-lg">
        <div class="row gx-0">
          <div class="col-lg-5 image-wrapper bg-image bg-cover rounded-top rounded-lg-start" data-image-src="{{asset('')}}images/private-limited-company.png" style="background-image: url({{asset('')}}images/private-limited-company.png);">
          </div>
          <!--/column -->
          <div class="col-lg-7 p-sm-10 p-6">
              <h2 class="display-5 font-bolder mb-10 text-center text-sm-start">
                <span class="text-blue">Trademark Registration</span> in India
              </h2>
              
              <p>Trademark registration online in India provides a streamlined process for securing legal rights to your brand's identity and intellectual property assets, offering convenience and efficiency.</p>
              
              <p>In India, a wide array of items can be registered as trademarks, encompassing brand names, logos, words, slogans, sounds, smells, colours, or any distinctive sign. These trademarks serve to differentiate your goods or services from those of others, thereby preserving your business identity and safeguarding it against potential misuse.</p>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
  </div>
  <!-- /.container -->
</section>

<!-- Documents Required -->
<section class="wrapper mt-12 mt-sm-16 ">
  <div class="container ">
    <div class="card p-sm-10 p-4 shadow-lg">
      <div class="row align-items-start ">
          <div class="col-md-5 col-lg-5 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/checklist.gif">
            </figure>
          </div>
          <div class="col-md-7 col-lg-7">
            <h2 class="mb-10 display-6 font-bolder text-center text-sm-start">
              <span class="text-blue">Documents Required</span> for Trademark Registry
            </h2>
      
            <div class="card bg-pale-purple mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">
                    <i class="uil uil-file-alt me-1"></i> Applicant's Details
                  </h3>
                  <p class="mb-0">Information about the applicant(s) such as name, address, and nationality.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-purple mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">
                    <i class="uil uil-file-alt me-1"></i> Power of Attorney
                  </h3>
                  <p class="mb-0">A Power of Attorney authorising attorney to act on behalf of the applicant is needed.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-purple mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">
                    <i class="uil uil-file-alt me-1"></i>Trademark Details
                  </h3>
                  <p class="mb-0">Clear representation of the trademark</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>

            <div class="card bg-pale-purple mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">
                    <i class="uil uil-file-alt me-1"></i> Goods or Services Description
                  </h3>
                  <p class="mb-0">A list of goods or services associated with the trademark. These should be categorised according to the Nice Classification.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-purple mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">
                    <i class="uil uil-file-alt me-1"></i> Identity Proof
                  </h3>
                  <p class="mb-0">Identity proof of the applicant(s) such as Aadhar card, passport, or driver's license.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-purple mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">
                    <i class="uil uil-file-alt me-1"></i> MSME Certificate (optional)
                  </h3>
                  <p class="mb-0">If the applicant is a Micro, Small, or Medium Enterprise (MSME), they may opt for benefits available under the MSME Act.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
              
          </div>
      </div>
    </div>
  </div>
</section>

<!-- Benefits -->
<section class="wrapper mt-12 mt-sm-16 ">
  <div class="container ">
    <div class="card p-sm-10 p-4 shadow-lg">
      <div class="row align-items-start ">
          <div class="col-md-5 col-lg-5 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon" >
            </figure>
          </div>
          <div class="col-md-7 col-lg-7">
            <h2 class="mb-10 display-6 font-bolder text-center text-sm-start">
                <span class="text-blue">Benefits</span> of Trademark Registration
            </h2>
      
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h4 class="fs-18 mb-0">Exclusive rights for brand use</h4>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h4 class="fs-18 mb-0">Legal protection against infringement</h4>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h4 class="fs-18 mb-0">Enhanced brand recognition and consumer trust</h4>
                </div>
              </div>
              <!-- /.card-body -->
            </div>

            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h4 class="fs-18 mb-0">Opportunities for market expansion and licensing</h4>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h4 class="fs-18 mb-0">Added asset value and credibility</h4>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h4 class="fs-18 mb-0">Global protection and anti-counterfeiting measures</h4>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h4 class="fs-18 mb-0">Long-term investment potential with indefinite validity through renewal</h4>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
              
          </div>
      </div>
    </div>
  </div>
</section>

<!-- Why Us -->
<section class="wrapper mt-12 mt-sm-12 bg-light mb-10">
  <div class="container ">
      <div class="card shadow-lg">
        <div class="row gx-0">
          <div class="col-lg-5 image-wrapper bg-image bg-cover rounded-top rounded-lg-start" data-image-src="{{asset('')}}images/private-limited-company.png" style="background-image: url({{asset('')}}images/why-choose-us.webp);">
          </div>
          <!--/column -->
          <div class="col-lg-7 p-sm-8 p-4 ">
              <h2 class="display-5 font-bolder mb-4 text-center text-sm-start">
                Why <span class="text-blue">JustStart</span> for Registering your Trademark?
              </h2>
              <p>By choosing Juststart, you can have peace of mind knowing that your trademark registration is in good hands, allowing you to focus on growing your business without worrying about intellectual property issues.</p>

              <p>The platform simplifies the trademark registration process, making it easier and faster for businesses to protect their intellectual property.</p>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
  </div>
  <!-- /.container -->
</section>

@include('component.client-logo-grid')

@include('component.trustpilot-reviews')


@endsection