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

            <p>Run your business smoothly by complying with the legal procedures and regulations with the help of JustStart’s legal advisors. Our team of expert legal advisors ensures that your business operations never come to a halt through our legal expertise. Get the best team of legal advisors by your side and run your business without worrying about its legal affairs. </p>

            <h4>Get Expert Legal Consultation Today!</h4>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Consistent Support</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Expert Legal Advice</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Quick Response</span></li>
            </ul>

            <h3>Hire our team of legal advisors today and let us handle your business’s legal affairs.</h3>

            <p>Submit your details to talk to our business representatives. We will clear all your doubts</p>
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
            <h3 class="display-4 mb-4 font-bolder">What Are Legal Advisory Services?</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>Over the past few years, the demand for legal advisory services has increased significantly in India. With more and more people starting their businesses, the need for legal advisors has grown greatly. Legal advisory services consist of dynamic legal solutions that help businesses go through complex legal challenges. The rigid rules and regulations of running a business are rapidly changing, which is why it is important to have a team of legal advisors by your side. </p>
            <p>JustStart has a team full of adept legal advisors with profound legal experience. Our team provides assistance to help you with issues related to your business’s taxes, accounting, and legal affairs. </p>
           
          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <figure class="rounded">
              <img src="{{asset('images/overview/legal-advisory-services.jpg')}}" alt="legal advisory services" >
            </figure>
          </div>
      </div>
  </div>
</section>

<!-- IMPORTANCE -->
<section class="wrapper bg-soft-yellow">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">IMPORTANCE</h6>
            <h3 class="display-4 mb-4 font-bolder">Importance of Legal Advisory Services</h3>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <p class="mb-6">To manage your business without worrying about the legal issues that come with it, you will be required to hire experienced legal advisors with excellent track records. Hiring a team of legal advisors is considered to be a better option than hiring an in-house legal advisor. Legal outsourcing helps businesses deal with complex legal issues effortlessly with the help of experienced legal experts. Here’s why legal advisory services are important for your business:</p>
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Cost-Effective</h4>
                <p>Hiring a team of legal advisors from a renowned agency is more cost-efficient than hiring an in-house legal advisor. If you are looking to get expert legal advice without spending a vast amount of funds, legal outsourcing would be the wiser option. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Consistent Support</h4>
                <p>Legal advisory services ensure that your business does not stop growing through constant support. With a team of legal experts in your corner, your business will always be prepared to face any kind of legal issues. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Experienced Advisors</h4>
                <p>Experienced legal advisors can help you greatly through their expertise. Your business can benefit greatly through the experience of legal advisors by evading complicated legal affairs. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-navy me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Better Technology</h4>
                <p>A refined team of legal advisors has access to high-end technology that can help them research and prepare for legal issues better than an in-house legal advisor. </p>
              </div>
            </div>
          
          </div>
      </div>
  </div>
</section>

<!-- ROLES -->
<section class="wrapper ">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">ROLES & RESPONSIBILITIES</h6>
            <h3 class="display-4 mb-4 font-bolder">Roles & Responsibilities of A Legal Advisor</h3>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <p class="mb-6">A legal advisor is responsible for ensuring that a business’s legal affairs are sorted efficiently. Legal advisors focus on empowering businesses with the help of their legal intellect. They also advise businesses through their legal expertise in matters related to financial disputes, workplace conflicts, etc. Following are some of the roles and responsibilities of a legal advisor:</p>
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/briefcase.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Draft Contracts</h4>
                <p>A legal advisor can draft legal agreements such as collaboration agreements, consultant contracts, etc. He/she can also help you by reviewing your old agreements and informing you about any issues found. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/briefcase.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Provide Legal Guidance</h4>
                <p>A legal advisor can provide valuable legal guidance to help you tackle complicated legal issues. With the help of the guidance provided by legal advisors, your business will thrive consistently. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/briefcase.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Ensure Compliance</h4>
                <p>A legal advisor is familiar with the legal rules and regulations of running a business, which helps businesses cooperate with the requirements laid out by the government easily.</p>
              </div>
            </div>
          
          </div>
      </div>
  </div>
</section>

<!-- WHY US -->
<section class="wrapper  ">
  <div class="container mb-10 ">
    <div class="card p-10 shadow-lg">
      <div class="row align-items-start ">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <h2 class="display-4 mt-6 mb-4 font-bolder ">Why JustStart for Legal Advisory Services
              <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> 
            </h2>
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
              <p class="mt-6 mb-6">JustStart offers a team of remarkable legal advisors to help businesses grow profoundly. Through the assistance of our team of legal advisors, we have helped our clients counter many legal obstacles. We have contributed to the success of many businesses through our legal expertise. JustStart’s legal experts have a tremendous track record of assisting businesses through their legal knowledge. </p>
              <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0 ">
                      Legal Expertise
                    </h3>
                    <p class="mb-0">Our team of legal advisors has attained a great amount of experience through their legal expertise. Our valuable legal expertise will help your business thrive.</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0 ">
                      Customer Satisfaction
                    </h3>
                    <p class="mb-0">JustStart strives to help businesses with the help of their legal advisors. With our legal guidance, we ensure that your business grows without a pause. We will help you achieve your business goals by managing your business’s legal affairs.</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              
          </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ --> 
<section class="wrapper bg-soft-sky ">
  <div class="container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-6">
            <h6 class="mb-4 text-yellow">FAQ</h6>
            <h3 class="display-4 mb-4 font-bolder">LET'S CLEAR ALL THE DOUBTS!</h3>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <div class="accordion accordion-wrapper mt-10 faq-accordion" id="accordion">
              <div class="card accordion-item">
                <div class="card-header" id="faq-0">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>What type of legal services JustStart offers?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <ul>
                      <li>Binding documentation, completion & closing</li>
                      <li>First Review</li>
                      <li>Compliance due diligence</li>
                      <li>Legal structuring</li>
                      <li>Capital market compliance</li>
                      <li>Post M&A integration</li>
                      <li>NDA</li>
                      <li>Due diligence</li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>Will my business details be safe with your team? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>Absolutely! We will be keeping your business details safe. We will not be sharing your business data with anyone outside our team of legal experts.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>Will your team help me file my business annual returns? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>Yes! We will help you file your company’s annual returns with the ROC on time. </p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>Will your team consistently help me manage any legal issue related to my employees? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>Yes! As mentioned above, we will assist you through any form of legal issue related to your workforce.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->

            </div>
            <!--/.accordion -->
          </div>
      </div>
  </div>
</section>


@endsection