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

            <p>Get One-Person Company (OPC) Registration in India with the help of JustStart professionals. Additionally, avail a 360° expert solution and acquire the hassle-free online Single Person Company Registration process.</p>
           
            <p class="mb-2">Simple, & Quick OPC Registration Just One Click Away! </p>
            <p>Our expert & professional OPC Registration starts from <span class="text-blue fs-18" style="font-weight:600;">Rs. 7,999 only.</span></p>

            <h5>Get Your OPC Registered!</h5>
            <ul class="row ps-4 icon-list bullet-bg bullet-soft-blue mb-8">
              <li class="col-md-6 col-12 mb-2" ><span><i class="uil uil-check fs-22"></i></span><span>Faster Service </span></li>
              <li class="col-md-6 col-12 mb-2"><span><i class="uil uil-check fs-22"></i></span><span>Transparent Process</span></li>
              <li class="col-md-6 col-12 mb-2" ><span><i class="uil uil-check fs-22"></i></span><span>Affordable Price</span></li>
              <li class="col-md-6 col-12 mb-2" ><span><i class="uil uil-check fs-22"></i></span><span>Free Expert Assistance </span></li>
              <li class="col-md-6 col-12 mb-2" ><span><i class="uil uil-check fs-22"></i></span><span>Satisfaction Guaranteed</span></li>
            </ul>

            <h3>Get professional help in One Person Company Registration</h3>
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
            <h2 class="display-4 mb-4 font-bolder">What is One Person Company?</h2>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>A One Person Company (OPC) is a kind of privately owned company incorporated under the Companies Act 2013. It can be established by a single individual who can play the role of a director as well as a shareholder of the company.</p>
            <p>The concept of OPC was introduced to enable a single individual to incorporate a company. Enjoy OPC registration benefits, such as perpetual succession, a separate legal entity, and limited liability. The core objective behind introducing OPC was to encourage entrepreneurship and uplift the formalization of Micro, Small, and Medium Enterprises (MSMEs).</p>
          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="enmW-8uYhtQ"></div>
          </div>
      </div>
  </div>
</section>

<!-- PROCESS --> 
<section class="wrapper">
  <div class="container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">PROCESS</h6>
            <h2 class="display-4 mb-4 font-bolder">Process To Register A One Person</h2>
            <p>Below, we have outlined the detailed process for registering a One Person Company (OPC) to provide clarity: </p>
          </div>
      </div>
      <div class="row align-items-start">
          <div class="col-md-5 col-lg-5 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}images/types-of-company-registration.png" alt="types of company registration" >
            </figure>
          </div>
          <div class="col-lg-7 position-relative">
            <div class="position-absolute d-none d-md-block" style="top: 50%; left: 50%; width: 130%; height: auto; transform: translate(-50%,-50%); z-index:-1">
              <img class="w-100" src="{{asset('')}}assets/img/photos/blurry.png" alt="">
            </div>
            <div class="row gx-md-5 gy-5">
              <div class="col-lg-12 order-lg-2">
                <div class="card me-lg-6">
                  <div class="card-body p-6">
                    <div class="d-flex flex-row">
                      <div>
                        <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4">
                          1
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Get a Digital Signature Certificate (DSC)</h4>
                        <p class="mb-2">A DSC is a digital signature certificate for directors of a company, used for electronically signing crucial documents. Additionally, a DSC is included as a necessary component in the documentary signature process when establishing an OPC company.</p>
                      </div>
                    </div>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
                <div class="card ms-lg-13 mt-6">
                  <div class="card-body p-6">
                    <div class="d-flex flex-row">
                      <div>
                        <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4">
                          2
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Apply for a Director Identification Number (DIN)</h4>
                        <p class="mb-0">DIN stands for Director Identification Number, and it is used to collect the biographical profile of company members who are known as company directors.</p>
                      </div>
                    </div>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
                <div class="card me-lg-6 mt-6">
                  <div class="card-body p-6">
                    <div class="d-flex flex-row">
                      <div>
                        <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4">
                          3
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Name Approval Application</h4>
                        <p class="mb-2">Submit an application for name reservation via the MCA portal using Form SPICe+ (Part A). However, Make sure the selected name for your company is unique and does not bear resemblance to any existing company or trademark.</p>
                      </div>
                    </div>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
                <div class="card ms-lg-13 mt-6">
                  <div class="card-body p-6">
                    <div class="d-flex flex-row">
                      <div>
                        <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4">
                          4
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Prepare Required Documents</h4>
                        <p class="mb-0">As a one person Entrepreneurship and the sole owner of a company, you are responsible for preparing the necessary company documents. Once these documents are prepared, you can obtain a company name, like <b>"ABC (OPC) Private Limited Company."</b></p>
                      </div>
                    </div>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
                <div class="card me-lg-6 mt-6">
                  <div class="card-body p-6">
                    <div class="d-flex flex-row">
                      <div>
                        <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4">
                          5
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Receive Certificate of Incorporation</h4>
                        <p class="mb-2">After following all these steps, you can legally receive the Certificate of Incorporation for your one person private limited company's name.</p>
                      </div>
                    </div>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
              </div>
            <!--/.row -->
          </div>
      </div>
  </div>
</section>

<!-- BENEFITS -->
<section class="wrapper bg-soft-yellow">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">BENEFITS</h6>
            <h2 class="display-4 mb-4 font-bolder">Benefits of One Person Company Registration</h2>
            <h6>Registering a one-person company provides an opportunity to obtain the significant benefits of a private limited company by being a solo founder.</h6>
          </div>
      </div>
      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
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
                <h4 class="fs-20">Continuous Existence</h4>
                <p>One Person Company exists continuously regardless of any change in the lifespan of the director. The nominee appointed while doing OPC</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Registration Online</h4>
                <p>Registration online will take over the operations if the death or incapability of the member takes place. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Fewer Compliances</h4>
                <p>According to the Companies Act 2013, OPC registration needs fewer compliances than a private limited company. Cash Flow Statement & sign of Company Secretary on Accounts books and annual returns are not required. Only the director's signature is required.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Easy Access to Loans</h4>
                <p>Since OPC is a form of private company, it is easy to obtain funds from banks and financial institutions.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Easy Incorporation</h4>
                <p>The whole OPC Registration process is online, making it simple, and quicker. It requires only one member and one nominee; the member can also act as director of the company. No minimum paid-up capital is required eliminating individuals’ barriers to starting his/her own company.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Sole Control</h4>
                <p>The owner of an OPC has full control over the company’s operations and management, which makes decision-making faster and more efficient.</p>
              </div>
            </div>
          
          </div>
      </div>
  </div>
</section>

<!-- Eligibility --> 
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-blue ">

    <div class="row mb-10">
      <div class="col-lg  -12" >
        <h2 class="display-4 mb-4 font-bolder text-center">Eligibility For OPC registration in India</h2>
      </div>
    </div>
    <div class="row ">
        <div class="col-lg-8" >
          <p>Before you proceed to form a One person Company, certain eligibility criteria must be met. Here are the key requirements to know the eligibility with a glance.</p>

          <p>Following are the eligibility criteria for OPC registration In India:</p>

          <ul class="icon-list bullet-bg bullet-blue ms-0 gy-2 mt-6 mb-8">
            <li class="mt-2">
                <span><i class="uil uil-check"></i></span>
                <span>A natural person who is an Indian citizen or an NRI  can form an OPC, not a legal entity or a company.</span>
            </li>
            <li class="mt-4">
                <span><i class="uil uil-check"></i></span>
                <span>Indian Citizens who reside in India for at least 182 days during the previous calendar year can register an OPC.</span>
            </li>
            <li class="mt-4">
                <span><i class="uil uil-check"></i></span>
                <span>No minimum capital requirement for One person Company.</span>
            </li>
            <li class="mt-4">
                <span><i class="uil uil-check"></i></span>
                <span>The promoter must appoint the Nominee.</span>
            </li>
            <li class="mt-4">
                <span><i class="uil uil-check"></i></span>
                <span>The person must have attained the age of 18 years old.</span>
            </li>
            <li class="mt-4">
                <span><i class="uil uil-check"></i></span>
                <span>The person must be not disqualified under the Companies Act,2013</span>
            </li>
            <li class="mt-4">
                <span><i class="uil uil-check"></i></span>
                <span>Businesses involved with insurance, banking, or investments cannot establish an OPC.</span>
            </li>
          </ul>          
        </div>
        <div class="col-md-7 col-lg-4 pt-6" >
          <figure class="rounded">
            <img src="{{asset('')}}images/service-icon/file.png" alt="service icon" />
          </figure>
        </div>
      
    </div>

  </div>
  <!-- /.container -->
</section>


<!-- Documents Required -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-orange ">

    <div class="row mb-6">
      <div class="col-lg  -12" >
        <h2 class="display-4 mb-4 font-bolder text-center">Required Documents For One Person Company Registration</h2>
      </div>
    </div>
    <div class="row ">        
        <div class="col-lg-8" >
          <h3>Identity Proof:</h3>
          <ul class="icon-list bullet-bg bullet-orange ms-0 gy-2 mt-2 mb-8">
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>PAN (Permanent Account Number) Card</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Voter's Identity Card/Passport/Aadhar Card of the Shareholder, Nominee & Director</span>
            </li>
          </ul>

          <h3>Address Proof of Director: </h3>
          <ul class="icon-list bullet-bg bullet-orange ms-0 gy-2 mt-2 mb-8">
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Any latest Utility Bill i.e. Electricity/Telephone Bill/Bank Account Statement of Shareholder, Nominee & Director</span>
            </li>
          </ul>

          <h3>Company Address Proof:</h3>
          <ul class="icon-list bullet-bg bullet-orange ms-0 gy-2 mt-2 mb-8">
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Any Latest Utility bill including Electricity Bill, Telephone/Mobile Bill or Gas Bill</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>No Objection Certificate (NOC) from owner of the property</span>
            </li>
          </ul>

          <h3>Photograph:</h3>
          <ul class="icon-list bullet-bg bullet-orange ms-0 gy-2 mt-2">
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Latest Passport-size photographs of Shareholder, Nominees & Directors</span>
            </li>
          </ul>

          <p>If you meet above eligibility conditions and can arrange the requisite documents, you are all set to kickstart your entrepreneurial journey.</p>
          
        </div>
        <div class="col-md-7 col-lg-4 pt-6" >
          <figure class="rounded">
            <img src="{{asset('')}}images/service-icon/file.png" alt="service icon" />
          </figure>
        </div>
      
    </div>

  </div>
  <!-- /.container -->
</section>

<!-- How Much Cost -->
<section class="wrapper bg-dark text-inverse document-required">
    <div class="container px-10 py-12">
      <div class="row ">
        <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto">
          <h2 class="display-4 text-center text-white mb-8">How much will it cost for OPC registration?</h2>
          <p class="text-white  text-center mb-10">Getting One Person Company (OPC) registration in India with JustStart begins at <span class="text-yellow">Rs. 7,999,</span>. Additionally process typically takes around <span class="text-yellow">7-10 working days</span>. If you're running a business and wish to operate it as a single person, OPC registration is essential to get the associated benefits, mainly of a private limited company.</p>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->

      <div class="row ">
          <div class="col-lg-6 mx-auto">
            <table class="table table-dark table-bordered">
              <tr>
                  <td class="fs-20">Steps</td>
                  <td class="fs-20">Cost (Rs)</td>
              </tr>
              <tr>
                  <td>2 Digital Signature Certificates </td>
                  <td>Rs 3,000</td>
              </tr>
              <tr>
                  <td>Government Fee </td>
                  <td>Rs 2,000</td>
              </tr>
              <tr>
                  <td>Professional Fee </td>
                  <td>Rs 2,999</td>
              </tr>
              <tr>
                  <td>Total Fee </td>
                  <td>Rs 7,999</td>
              </tr>
            </table>
          </div>
          <div class="col-lg-6 mx-auto">
            <div class="card bg-white">
              <div class="card-body p-6">
                @include('forms.service-form-speak') 
              </div>
            <!--/.card-body -->
            </div>
          </div>
      </div>
      <!-- /.row -->
      
    </div>
    <!-- /.container -->
</section>

<!-- WHY US -->
<section class="wrapper  mt-14">
  <div class="container mb-10 ">
    <div class="card p-10 shadow-lg">
      <div class="row align-items-start ">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <h2 class="display-4 mt-6 mb-4 font-bolder">Why JustStart For OPC Registration
              <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> 
            </h2>

            <p>JustStart offers easy OPC registration with a friendly process at affordable prices compared to other registration providers. Additionally, They provide free consultations with Single Person Company Registration experts. Apart from this, below you will see the reasons why you should chooseJustStart for your OPC registration. Let's check the points below to know more.</p>
              
            <ul class=" ps-4 row icon-list bullet-bg bullet-soft-blue mb-8">
              <li class="col-md-6 col-12 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Seamless Process Handling</span>
              </li>
              <li class="col-md-6 col-12 mb-2">
                <span><i class="uil uil-check"></i></span><span>Transparent Communication</span>
              </li>
              <li class="col-md-6 col-12 mb-2">
                <span><i class="uil uil-check"></i></span><span>Google-verified Business</span>
              </li>
              <li class="col-md-6 col-12 mb-2">
                <span><i class="uil uil-check"></i></span><span>End-to-End Support </span>
              </li>
              <li class="col-md-6 col-12 mb-2">
                <span><i class="uil uil-check"></i></span><span>Stress-Free Process</span>
              </li>
              <li class="col-md-6 col-12 mb-2">
                <span><i class="uil uil-check"></i></span><span>Regulatory Compliance</span>
              </li>
              <li class="col-md-6 col-12 mb-2">
                <span><i class="uil uil-check"></i></span><span>Time-Efficient Services</span>
              </li>
            </ul>
              
          </div>
      </div>
    </div>
  </div>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>How can I inform RoC about the change in my membership of OPC? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>If there is a change in the membership of an OPC, the following steps should be taken to inform the Registrar of Companies (RoC):</p>
                    <ul>
                      <li>Call Board Meeting: The first step is to call a board meeting of the OPC and pass a resolution for the resignation or removal of the existing member and the appointment of a new member.</li>
                      <li>Prepare and File Forms: The OPC should then prepare and file the following forms with the RoC within 30 days of the change:</li>
                      <li>Form INC-4: This form should be filed to inform the RoC about the change in membership of the OPC.</li>
                      <li>Form DIR-12: This form should be filed to intimate the RoC about the appointment of the new member.</li>
                      <li>Update MOA and AOA: If necessary, the MOA and AOA of the OPC should be updated to reflect the change in membership.</li>
                      <li>Update Bank Account and Other Registrations: The OPC should also update its bank account and other registrations, such as GST, Income Tax, and others, to reflect the change in membership.</li>
                      <li>It is important to note that the OPC should maintain proper records of the board meeting and the resolutions passed, as well as copies of the forms filed with the RoC. Failure to inform the RoC about the change in membership of the OPC can result in penalties and legal consequences.</li>
                    <ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>Can a person be part of two OPC? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>No, as per the Companies Act, 2013, a person cannot be a member in more than one OPC at the same time. Section 2(62) of the Companies Act defines an OPC as a company that has only one person as a member. Therefore, an individual can form or become a member of only one OPC at a time.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>Can OPC be registered online? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>Yes, the process of registering an OPC in India can be completed online through the Ministry of Corporate Affairs (MCA) website or through a team of legal advisors authorised by the government. If you need to get your One Person Company registered online, JustStart might be the best option for you. </p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>Who can be the nominee in a one person company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>As per the provisions of the Companies Act, 2013, a person who is an Indian citizen and a resident of India or a NRI can be appointed as the nominee of the member of a One Person Company (OPC). It is important to note that a nominee can be appointed only at the time of incorporation of the OPC, and the same person cannot be the nominee for more than one OPC.</p>
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