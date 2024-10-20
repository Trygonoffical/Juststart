@extends('layouts.app')

@section('content')

<style>
.form-control{
  border-color: #ccc !important;
}
.topbanner .logo-img {
    max-height: 40px;
    width: auto;
}
.text-yellow{
  color: #eb8d15 !important;
}
.document-required .doc-list .doc-item{
  padding:10px;
}
.document-required .doc-list .doc-item>div{
  border:1px solid #4d525a;
  border-radius: 20px;
  padding: 20px;
}

.accordion-collapse .card-body {
  text-align:left !important;
}
</style>


<section class="wrapper mt-0 bg-soft-sky topbanner">
  <div class=" container pt-md-10 py-14">
    <div class="row">
        <div class="col-md-7 col-lg-7">
            <h1 class="text-blue mb-4 font-bolder">{{ $name }}</h1>

            <p class="mb-4">If you have the vision to start a small-scale business and take it to the next level, now is the best time to do it. Small-scale businesses and startups have risen to the top in the last few years and your business can be next. Kickstart your small business by getting it registered through JustStart’s team of expert legal experts. </p>

            <p class="fs-20"><b>Start Your Small Business Today!</b></p>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Submit Your Details</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Talk To JustStart’s Experts</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Get Your Business Registered</span></li>
            </ul>

            <p><a href="tel:+91 9315513354" class="btn btn-sm btn-outline-primary rounded-pill">Talk To Expert</a></p>
        </div>
        <div class="col-md-5 col-lg-5">
            <div class="card bg-white">
                <div class="card-body p-6">
                  @include('forms.service-form-banner') 
              </div>
            <!--/.card-body -->
            </div>

            @include('component.rating')

        </div>
    </div>
    

  </div>
</section>


<!-- Overview -->
<section class="wrapper">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">OVERVIEW</h6>
            <h2 class="display-4 mb-4 font-bolder">Kickstart Your Small Business Registration Online</h2>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>A small-scale business is a form of business with a comparatively small number of employees and low investment. If you have a business idea that can grow tremendously, you can start working on it and get it registered. We are living in the era of startups and small-scale businesses, where entrepreneurs like you are turning their dreams into reality. Through JustStart’s legal expertise, you can get your business registered in no time. Whether it is a cloud kitchen or a small real estate business, you can run your operations smoothly after getting it registered. JustStart’s team of legal experts can help you get your business up & running by handling all the legal affairs of your business professionally.</p>
          </div>
          <div class="col-md-6 col-lg-5">
            <figure class="rounded">
              <img src="{{asset('images/overview/small-business-registration.jpg')}}" alt="small business registration online" >
            </figure>
          </div>
      </div>
  </div>
</section>

<!-- Advantages -->
<section class="wrapper bg-soft-yellow">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">ADVANTAGES</h6>
            <h2 class="display-4 mb-4 font-bolder">Advantages Of A Small Business in India</h2>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <p>The concept of a small-scale business has given wings to the dreams and ideas of many entrepreneurs and common individuals looking to succeed through their own businesses. If you get your small-scale business registered in India, you will get a great number of advantages that are going to empower your business profoundly. Here are a few advantages of a small business in India.</p>
            
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/3d4.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6 pt-2">

            <div class="d-flex flex-row mb-8 ">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Less Capital</h4>
                <p>One of the most significant advantages of owning a small-scale business is that you are not required to put a hefty amount of funds into it. Small-scale businesses can be set up and run by investing less capital. If you are looking to start a business without investing a lot, a small-scale business is for you. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Local Resources</h4>
                <p>Local resources are often overlooked by huge corporations, but for a small-scale business they are a godsend. Utilizing your local resources can help you save a great number of funds while giving back to the local community by availing of their services.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Independence</h4>
                <p>Having a small-scale business as compared to a huge company with many partners gives a great amount of independence. It allows you to work according to yourself and helps you give time to your family as well.</p>
              </div>
            </div>

            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-sky me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Financial Benefits</h4>
                <p>Running a small-scale business has great financial benefits as compared with other forms of businesses. A small business does not require a great amount of capital to be invested and does not have many members to share the profit with. Whatever your business makes, it goes straight into your bank, after cutting the expenses.</p>
              </div>
            </div>

            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-purple me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Creative Freedom</h4>
                <p>Creative freedom is a privilege for business owners. A small business gives you a great amount of creative freedom while running it. It helps you run the business according to your plans.</p>
              </div>
            </div>

          </div>
      </div>
  </div>
</section>

<!-- Why Us -->
<section class="wrapper mt-14">
    <div class="container card p-10 mb-10">
      <div class="row ">
          
          <div class="col-md-5 col-lg-5" >
            <h2 class="font-bolder fs-30">Why JustStart for Small Business Registration?</h2>
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon" />
            </figure>
            
          </div>
          <div class="col-md-7 col-lg-7" >
              <p class="">JustStart offers you credible legal assistance to help you get your small business registered in India. We help you carry out your <b>small business registration</b> process through our company registration expertise. Through JustStart you can quickly initiate your <b>small business registration online.</b> We have helped countless small businesses run their operations flawlessly through our legal expertise. </p>

              <div class="card bg-pale-leaf mb-6">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0 ">
                        <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Client Satisfaction 
                    </h3>
                    <p class="mb-0">Through our services, we ensure that your business runs effectively. Our team of legal experts have a remarkable track record of assisting businesses by giving them fruitful legal advice.</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="card bg-pale-leaf mb-6">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Legal Experts
                    </h3>
                    <p class="mb-0">We have a remarkable team of experts with profound experience in elevating businesses. Our legal experts have helped many businesses through their legal intellect. We strive to empower our clients by guiding them through every legal obstacle.</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
          </div>
        
      </div>

    </div>
    <!-- /.container -->
</section>


<!-- FAQ --> 
<section class="wrapper bg-soft-sky">
  <div class="container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">FAQ</h6>
            <h3 class="display-4 mb-4 font-bolder">LET'S CLEAR ALL THE DOUBTS!</h3>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
          <div class="accordion accordion-wrapper mt-10 faq-accordion" id="accordion">
              <div class="card accordion-item">
                <div class="card-header" id="faq-0">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>How long will it take your experts to get my small business registered? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>Once you share your business details with our experts, it will take our team approximately 2-3 days to file your application.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>Will your legal experts guide me after my business’s registration? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>Absolutely! We will be on stand-by to assist you through our legal expertise even after your company’s registration is done.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>Will my business details be shared with anyone else? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>No! We will not be sharing your business details with anyone outside the team. Your business details and data will be safe with us.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>

            </div>
            <!--/.accordion -->
          </div>
      </div>
  </div>
</section>



@endsection