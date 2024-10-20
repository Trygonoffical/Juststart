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
            <h1 class="text-blue mb-4 font-bolder">{{ $name }} </h1>

            <p>Every business requires a strong team to move things around and keep the business running without any interruption. But to run a business smoothly, you would need a significant amount of funds. If you wish to run your business smoothly by increasing your company’s Authorised Share Capital, let JustStart’s expert legal consultants assist you. JustStart offers you credible assistance in increasing your company’s Authorised Share Capital in no time. </p>

            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Hassle-Free Process</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Quick Return Filing</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Experienced Legal Experts</span></li>
            </ul>

            <h3>Get Increase in Authorized Capital for just <span class="text-blue">Rs. 7,099</span></h3>
            <h3>The offer is valid for a limited time.</h3>

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
            <h3 class="display-4 mb-4 font-bolder">What is Authorised Share Capital?</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>According to the section 2 (8) of the Companies Act, 2013, the Authorised Share Capital is the capital that is allowed by the memorandum of the company to be the maximum value of the share capital of the company. In simple terms, the Authorised Share Capital of a business is the maximum amount of funds that shall be considered to be the share capital of the company. </p>
            
            <p>If a company needs to expand its business to elevate its growth, it is required to get its authorised share capital increased first to infuse more funds than ever into the business. If you are looking to grow your business, JustStart’s experts will help you through their quick and effective solutions.</p>
           
          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <figure class="rounded">
              <img src="{{asset('images/overview/increase-authorized-share-capital.jpg')}}" alt="increase authorized share capital" >
            </figure>
          </div>
      </div>
  </div>
</section>

<!-- REASONS -->
<section class="wrapper bg-soft-yellow">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">REASONS</h6>
            <h3 class="display-4 mb-4 font-bolder">Reasons for Increasing Authorised Share Capital?</h3>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <p class="mb-6">Running a business and making it successful are two different things. If you are looking to make your business successful, you must be willing to take big steps and risks. Increasing your company’s Authorised Share Capital is one such crucial step that business owners take. Here are a few reasons for a company to increase its Authorised Capital:</p>
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
                <h4 class="fs-20">Financing New Projects</h4>
                <p>If you wish to expand your business or finance a new project led by your company, you will be required to increase your company’s Authorised Share Capital to finance it. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Need for Funds</h4>
                <p>If your business is in need of funds for expansion or any other objective, you will be requiring a great amount of funds. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Additional Share Capital Issuance</h4>
                <p>If your company is in need of reflecting additional Share Capital in its balance sheet for organizational reasons, you will be required to increase the Share Capital.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-navy me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">To Fulfill The Legal Requirements</h4>
                <p>If there are any legal requirements that your company is bound to fulfill, you will be required to increase the Authorised Share Capital of your company.</p>
              </div>
            </div>
          
          </div>
      </div>
  </div>
</section>

<!-- Required Documents -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-fuchsia ">
    <div class="row ">
        
        <div class="col-md-5 col-lg-8" >
          <h2 class="display-4 font-bolder">Documents Required for Increasing The Authorised Share Capital</h2>
          <h4 class="mt-6">If you are planning to get your company’s Authorised Share Capital increased, here is the list of documents that are required to do it hassle-free. </h4>

          <ul class="icon-list bullet-bg bullet-fuchsia ms-0 gy-2 mt-8 mb-8">
            <li>
                <span><i class="uil uil-check"></i></span>
                <span><b>Company’s PAN Card:</b> A copy of your company’s PAN card.</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span><b>Certificate Of Incorporation:</b> A copy of your company’s Certificate of Incorporation.</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span><b>Articles Of Association:</b> A copy of your company’s latest version of AoA.</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span><b>Memorandum Of Association:</b> A copy of your company’s latest version of MoA.</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span><b>Digital Signature Certificate:</b> A Digital Signature of any Director of your company. </span>
            </li>
          </ul>
          
        </div>
        <div class="col-md-7 col-lg-4" >
          <figure class="rounded">
            <img src="{{asset('')}}images/service-icon/file.png" alt="service icon" />
          </figure>
        </div>
      
    </div>

  </div>
  <!-- /.container -->
</section>


<!-- Increase Authorised Share -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-yellow ">
    <div class="row ">
        
        <div class="col-md-5 col-lg-8" >
          <h2 class="font-bolder">Increase Authorised Share Capital in India Through JustStart’s Quick Process</h2>
          <p class=" mt-6">Get your company’s Authorised Share Capital increased through JustStart’s hassle-free and quick process. Our team of experienced and adept legal consultants can help you run your business smoothly while following all the requisite legal formalities. Let JustStart’s team of legal experts help you increase your business’s Authorised Share Capital through our effective process:</p>

          <ul class="icon-list bullet-bg bullet-yellow ms-0 gy-2 mt-8 mb-8">
            <li>
                <span><i class="uil uil-check"></i></span>
                <span><b>Board Resolution</b></span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span><b>Ordinary Resolution for An Increase In Authorized Capital</b></span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span><b>Submitting The Required Paperwork</b></span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span><b>The ROC Approval</b></span>
            </li>
          </ul>
          
        </div>
        <div class="col-md-7 col-lg-4" >
          <figure class="rounded">
            <img src="{{asset('')}}images/service-icon/rocket.png" alt="Rocket" />
          </figure>
        </div>
      
    </div>

  </div>
  <!-- /.container -->
</section>


<!-- WHY US -->
<section class="wrapper  ">
  <div class="container mb-10 ">
    <div class="card p-10 shadow-lg">
      <div class="row align-items-start ">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <h2 class="display-4 mt-6 mb-4 font-bolder ">Why JustStart for Increasing Authorised Share Capital
              <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> 
            </h2>
            <figure class="rounded"> 
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
              <p class="mt-6 mb-6">JustStart offers you effective legal solutions to help your business function smoothly. Our team of adept legal consultants strive to enhance your business by increasing the Authorised Share Capital of the Company. Since our formation, we have contributed to the growth of many businesses through our legal expertise. Whether it is Company registration or increasing the authorised share capital, JustStart’s experts can do it all.</p>
              <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0 ">
                      Expertise
                    </h3>
                    <p class="mb-0">Through our legal expertise we have helped many businesses grow consistently. JustStart offers a dynamic array of legal solutions to help your company function smoothly. Our expert legal consultants can quickly help you increase your business’s Authorised Share Capital. </p>
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
                    <p class="mb-0">We strive to help you achieve your organizational goals effectively through our legal expertise. Our solutions focus on giving you the utmost client satisfaction by elevating your business extensively.</p>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>Which forms are required for increasing the authorized share capital of the Company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>To increase the Authorised Share Capital of your company, you will be required to fill Form MGT 14 and SH 7 within 30 days of passing the resolution for increasing the share capital of your company.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>When should the authorized share capital increase? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>If you are looking to expand your business, you will be required to increase the Share capital of your company to infuse a heavy amount of funds into its expansion.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>What is the minimum authorized share capital? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>There is no minimum and maximum share capital prescribed under the law.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>Is conducting a board meeting necessary for increasing the authorised share capital? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>Yes it is absolutely necessary to have a board meeting before increasing the authorised share capital.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>Which clause of the MOA has authorised share capital in it? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>Authorised share capital is mentioned in the Clause V of the MOA.</p>
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