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
            <p>Know the easy process to get <b>private company registration online in India</b> at Rs. <b>8899</b>. Grab the big opportunity to register a pvt ltd company at minimum fees + government taxes with a free consultation. Filling the appropriate forms with the proper Indian authorities with quick & easy steps with JustStart.</p>
            <p><b>Get your online private limited company registration for just <span class="text-blue">Rs. 8,899</span></b></p>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Submit Details</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Schedule A Complimentary Call</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Get Your Quote</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Start Registering</span></li>
            </ul>
            <p><b>Don’t waste another minute, get your online company registration in India</b></p>
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
            <h3 class="display-4 mb-4 font-bolder">Company Registration Services in India</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p><b>As per Section 2 (68) under the <span class="text-blue">Companies Act 2013</span></b>, a pvt ltd company registration is a small firm or corporation that is privately held by a limited number of investors, owners, or shareholders. These companies are easily identifiable as the firms are required to use. </p>
            <p>A “Private Limited” as an affix after the corporation’s <b>name & require a minimum of 2 Directors and 2 shareholders</b> with one of the directors must be of an Indian resident and Indian citizen. The registered office must be in India. Directors can also be the shareholders.</p>
            <ul class="icon-list bullet-bg bullet-soft-blue">
              <li><span><i class="uil uil-check"></i></span><span>Submit Details</span></li>
              <li><span><i class="uil uil-check"></i></span><span>Schedule A Complimentary Call</span></li>
              <li><span><i class="uil uil-check"></i></span><span>Get Your Quote</span></li>
              <li><span><i class="uil uil-check"></i></span><span>Start Registering</span></li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-5 pt-8">
            <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="wXR0rbBqqW8"></div>
          </div>
      </div>
  </div>
</section>

<!-- Features -->
<section class="wrapper bg-soft-yellow">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">FEATURES</h6>
            <h3 class="display-4 mb-4 font-bolder">Features Of A Private Limited Company</h3>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <p>Register pvt ltd company is the most basic and often used form of business entity. <b>As of January 2022, there were over 1.43 million companies registered</b> in India.</p>
            
            <p>One of the reasons behind this boom is the ease of raising equity financing in online company registration in india. If you have an expansion plan & aim to have higher growth with high investment, then the Pvt Ltd company is the best option for you.</p>
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            
            <p><b>After getting Other features of private limited companies are as given below. So you need to check out to know how to register a company in India :</b></p>

            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Members</h4>
                <p>A private limited registration can be formed with as few as two shareholders or as many as 200.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/conference.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Each shareholder has limited liabilities</h4>
                <p>It means if a corporation suffers any financial loss, the shareholders are required to pay back only the amount that they invested in the company.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/share.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Share transferability</h4>
                <p>Private limited companies allow easy and free transfer of shares between shareholders.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-navy me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/secure.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Business Continuity</h4>
                <p>In private limited companies, corporations continue to exist in the eyes of the law even if one of their members dies, becomes insolvent, or files for bankruptcy. As a result, the company will continue to exist in perpetuity.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-sky me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">FDI</h4>
                <p>Private Limited companies are allowed to raise foreign direct investment.</p>
              </div>
            </div>
            
          </div>
      </div>
  </div>
</section>

<!-- Checklist -->
<section class="wrapper">
    <div class="container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center">
            <h6 class="mb-4 text-yellow">CHECKLIST</h6>
            <h3 class="display-4 mb-4 font-bolder">Checklist For Incorporation Of Private Limited Company Registration</h3>
          </div>
      </div>
    </div>
    <div class="container card p-10 mb-10">
      <div class="row ">
       
          <div class="col-md-5 col-lg-6" >
            <p class="">As per the Companies Act, 2013, one who wants to register with a Private Limited Company must have the following checklist:</p>

            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
              <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Two Directors:</b> A pvt ltd Company must have two directors with a maximum of fifteen directors. One of the directors must be a resident of India.</span>
              </li>
              <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Registered office address:</b> The registered office address must be India’s address. It is not required r to have a commercial space for an office address. They can also operate with a home or any rented property. If rented property, NOC from the landlord will be required.</span>
              </li>
              <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Capital Amount:</b> There is no minimum capital amount fixed for a Private Limited Company. Any amount of capital can be contributed to the company. Many people don’t know the concept of Capital in the Company so below are the concepts to be kept in mind before incorporating a private limited Company.</span>
              </li>
            </ul>
          </div>
          <div class="col-md-7 col-lg-6" >
              <h2 class="font-bolder mb-6">There are some types of Capital in the Company: </h2>

              <div class="card bg-pale-leaf mb-6">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0 ">
                        <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Authorized Capital 
                    </h3>
                    <p class="mb-0">It is the total value of shares and securitya company can issue to the shareholders. If higher is the authorized capital, then the MCA fees will be increased. You can also increase the authorized capital of the company if required.</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="card bg-pale-leaf mb-6">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Paid-up Capital
                    </h3>
                    <p class="mb-0">It is the amount of capital that is subscribed by the shareholders and which can be deposited in the current account of the company. Paid-up capital can not be more than the authorized capital of the company.</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
          </div>
        
      </div>

    </div>
    <!-- /.container -->
</section>

<!-- Documents Required -->
<section class="wrapper bg-dark text-inverse document-required">
    <div class="container px-10 py-12">
      <div class="row text-center">
        <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto">
          <h2 class="fs-16 text-uppercase text-white mb-3">DOCUMENTS REQUIRED</h2>
          <h3 class="display-4 text-white mb-14">Documents Required for Private Limited Company Registration Online</h3>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->
      <div class="row gx-lg-8 gx-xl-12 gy-9 doc-list">
        <div class="col-md-6 col-lg-6 doc-item">
          <h3 class="mb-2 text-white">For All Directors</h3>
          <ul class="ps-4">
            <li class="mb-2"><b>PAN Card: </b>A copy of the PAN Card is required.</li>
            <li class="mb-2"><b>Passport Size Photo: </b>One passport-sized photograph is mandatory.</li>
            <li class="mb-2">
              <b>Identity Proof</b>
              <ul>
                <li class="mb-2"><b>Indian Promoters: </b> Submit a copy of Driving License, Voter ID, or Passport.</li>
                <li class="mb-2"><b>Foreign Promoters: </b> A copy of the Passport is required.</li>
              </ul>
            </li>
            <li class="mb-2"><b>Residential Proof: </b>Recent utility bill/ bank statement/ telephone bill needed.</li>
          </ul>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-6 doc-item">
          <h3 class="mb-2 text-white">For Company</h3>
          <ul class="ps-4">
            <li class="mb-2"><b>Utility Bill: </b> A recent utility bill ( within 2 months ) is required for the premises address proof.</li>
            <li class="mb-2"><b>Rent Agreement: </b> A copy of the rent agreement is required if the company operates from a rented premises. </li>
            <li class="mb-2"><b>Owner's NOC: </b> A No Objection Certificate from the owner is required if the company operates from a rented premises. </li>
          </ul>
        </div>
        <!--/column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
</section>

<!-- PROCEDURE --> 
<section class="wrapper">
  <div class=" container p-10">

      <div class="row">
        <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">PROCEDURE</h6>
            <h3 class="display-4 mb-4 font-bolder">Procedure For Incorporation Of Company</h3>
            <p>The procedure of forming a private limited company consists of a few easy steps. It means which the applicant simply requires the most basic paperwork. The following are five simple steps to forming and then you can know how to register a company in india online</p>
        </div>
      </div>
      
      <div class="row align-items-start">
          <div class="col-md-5 col-lg-5 position-lg-sticky " style="top: 8rem;">
            <figure class="">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-lg-6 ms-auto">
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/clipboard.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">1. Apply in form Spice+ for the Name Application</h4>
                <p>Name approval through Spice+ form if name approval letter is desired. Otherwise, we can also go through the direct route by submitting all the required documents & details to the MCA by filling all the required forms.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/feather.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">2. Digital signatures of the directors</h4>
                <p>All the forms/applicationsin for the MCA will be incomplete without a digital signature. All the forms should be digitally signed. For a digital signature, the directors will have to submit a copy of their identity proof, photograph and contact details. </p>
                <p><b>Digital signature</b> can be obtained with the help of Authorised Certifying Authority by JustStart. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/server.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">3. Submitting  all the Necessary forms</h4>
                <p>Once obtained all the information, and documents then the next process is to submit all the necessary <b>forms Spice+, Spice moa, Spice Aoa, Agile pro, and Inc-9 for the declaration</b>. If the MCA finds all the information complete and legible, then they will issue a Certificate of Incorporation, PAN, TAN of the Company</p>
                <p>All the process can be done tentatively <b>within 7-10 working days</b>, if all the required documents are provided on time.</p>
              </div>
            </div>
          </div>
      </div>
  </div>
</section>

<!-- WHY US --> 
<section class="wrapper">
  <div class="container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">WHY JustStart</h6>
            <h3 class="display-4 mb-4 font-bolder">Why JustStart For Private Limited Company Registration?</h3>
          </div>
      </div>
      <div class="row align-items-start">
          <div class="col-md-5 col-lg-5 position-lg-sticky " style="top: 8rem;">
            <p>The concept of a Pvt Ltd Company structure and know advantages and disadvantage of registering a company with popularity.</p>
            <p>If you have made up your mind on getting your Pvt ltd company registered, you must hire a team of legal experts. A team of legal experts will get your company registered quickly through their expertise. </p>
            <p>JustStart has one of the best legal consultants to help your company get registered. Once you let our legal experts help you with your private limited company’s registration, you won’t have to worry about it ever again.</p>
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
                          <span><i class="uil uil-check fs-50"></i></span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Online Process</h4>
                        <p class="mb-0">To get your private limited company registered, you won’t have to leave your office. With JustStart, know how to apply private limited company online. Also,  you can get your company registered from the comfort of your office or home. Our hassle-free online process has proven to be quite effective for our client. </p>
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
                          <span><i class="uil uil-check fs-50"></i></span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Experienced Experts</h4>
                        <p class="mb-0">Our team is full of experienced MBAs, CAs, CS, Lawyers, and Accountants with a great amount of skills and talent. You can trust our experts for the registration of your private limited company. </p>
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
                          <span><i class="uil uil-check fs-50"></i></span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Client Satisfaction</h4>
                        <p class="mb-0">We aim to help our clients’ businesses grow through our consistent legal support. Through our legal advice, you will be able to tackle all the legal obstacles that may come in the way of your business easily. </p>
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
                          <span><i class="uil uil-check fs-50"></i></span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Refined Strategies</h4>
                        <p class="mb-0">Besides having a team of remarkable experts, our refined legal strategies contribute greatly to our success. With the help of our legal strategies, you will be able to run and grow your business smoothly. </p>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2> What is the minimum capital requirement to start a company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>There is no minimum capital requirement to start a private limited company as specified in the Companies Act.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>What are Authorized Capital and Paid-up Capital? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>Authorized Capital is the highest amount of money a company can collect by selling shares, according to its rules and the Paid-up Capital is the actual money that shareholders have given to the company for those shares.
                    </p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>What is the Director Identification Number (DIN)? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>The Director Identification Number (DIN) is a unique number given to anyone who wants to be a director of a company in India. It helps keep track of all directors.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>What is a Digital Signature Certificate (DSC)? Who needs to obtain a DSC? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>A Digital Signature Certificate (DSC) is an electronic form of a signature used to verify the identity of the person signing digital documents. Anyone who needs to sign digital documents, such as company directors, business owners, or professionals filing government forms online, should obtain a DSC.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>Can I use my residential address as Company’s Registered Office Address? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>Yes, you can use your home address as your company’s official address, as long as it’s okay with the rules and can handle any mail or notices the company gets.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true" aria-controls="faq-collapse-5"><h2>Can a Private Company carry multiple businesses? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                  <div class="card-body">
                    <p>Yes, a private company can handle different businesses or activities. It can have several types of businesses under one company name, as long as it follows the rules and regulations for each type of business.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-6">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="true" aria-controls="faq-collapse-6"><h2>What are the mandatory compliances of a Private Limited Company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-6">
                  <div class="card-body">
                    <p>The Mandatory compliances for a private limited company include filing annual returns, maintaining statutory registers, holding annual general meetings (AGMs), filing income tax returns, and following Company Law requirements.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-7">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-7" aria-expanded="true" aria-controls="faq-collapse-7"><h2>Who is the Registrar of Companies (ROC)? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-7">
                  <div class="card-body">
                    <p>The Registrar of Companies (ROC) is a government official responsible for overseeing and regulating the registration, compliance, and legal matters of companies and limited liability partnerships in a specific region or state.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-8">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-8" aria-expanded="true" aria-controls="faq-collapse-8"><h2>What are the benefits of a Private Limited Company Registration in India? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-8">
                  <div class="card-body">
                    <p>Registering a Private Limited Company in India gives you limited liability, so you’re only responsible for what you invest. It also makes your company look more trustworthy, helps you raise money more easily, and provides tax benefits.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-9">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-9" aria-expanded="true" aria-controls="faq-collapse-9"><h2>Does a Private Limited Company in India require physical address or premise? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-9" class="accordion-collapse collapse" aria-labelledby="faq-9">
                  <div class="card-body">
                    <p>Yes, a Private Limited Company in India needs a real physical address where it can receive mail and official documents. This address can be a business or home address.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-10">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-10" aria-expanded="true" aria-controls="faq-collapse-10"><h2>Can NRIs or Foreign Nationals become Directors in a Private Limited Company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-10" class="accordion-collapse collapse" aria-labelledby="faq-10">
                  <div class="card-body">
                    <p>Yes, NRIs (Non-Resident Indians) and foreign nationals can become directors of a Private Limited Company in India. However, at least one director must be a resident of India.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-11">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-11" aria-expanded="true" aria-controls="faq-collapse-11"><h2>What is DSC? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-11" class="accordion-collapse collapse" aria-labelledby="faq-11">
                  <div class="card-body">
                    <p>A Digital Signature Certificate (DSC) is an electronic way of signing documents to verify your identity online.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-12">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-12" aria-expanded="true" aria-controls="faq-collapse-12"><h2>What is the difference between Director and Shareholder? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-12" class="accordion-collapse collapse" aria-labelledby="faq-12">
                  <div class="card-body">
                    <p>A director is responsible for managing and making decisions for the company, while a shareholder owns shares in the company and has a stake in its profits.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-13">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-13" aria-expanded="true" aria-controls="faq-collapse-13"><h2>Is GST required for Private Limited Company in India? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-13" class="accordion-collapse collapse" aria-labelledby="faq-13">
                  <div class="card-body">
                    <p>A Private Limited Company in India needs GST registration if its turnover exceeds the threshold limit or if it sells taxable goods or services.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-14">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-14" aria-expanded="true" aria-controls="faq-collapse-14"><h2>How many Directors are required for Private Limited Company Registration? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-14" class="accordion-collapse collapse" aria-labelledby="faq-14">
                  <div class="card-body">
                    <p>A Private Limited Company in India needs at least two directors for registration.</p>
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