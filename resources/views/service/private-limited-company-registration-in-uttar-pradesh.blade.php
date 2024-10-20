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
            <p>Get your Company Registration in Uttar Pradesh with Juststart economical prices. Set up your Pvt Ltd Company Registration in Uttar Pradesh with the team of highly professional experts who will guide you in incorporating your business with us.</p>

            <p>We are committed to ensuring transparency and accuracy in all the company registration processes.</p>
            
            <h5>Start Your Business In The IT Capital Today!</h5>

            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Submit Your Details</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Discuss Your Plans With Us</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Get Your Business Registered</span></li>
            </ul>
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
            <h3 class="display-4 mb-4 font-bolder">Pvt Ltd (Private Limited) Company Registration in Uttar Pradesh</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>Welcome to JustStart, your trusted partner to make private limited company registration in Uttar Pradesh effortless. We help you escape that hefty paperwork and entangling rules and regulations. Our teams of experts assist you at each and every step to ease your burden of registration of Pvt Ltd Company in Uttar Pradesh. Get the necessary guidance and support from JustStart’s experts in every small and significant matter of online company registration in Uttar Pradesh. We are not just any random agency, but your reliable source who always has your back throughout the whole process of applying for online company registration in Uttar Pradesh.</p>

            <h3 class="mt-6">About PVT LTD. Registration in Uttar Pradesh</h3>
            <p>Pvt Ltd (Private Limited) Company Registration in UP is a necessary step that you must take to give your business a separate and legal identity of its own. Beyond giving a legal identity, registration of your private limited company in Uttar Pradesh lets you enjoy limited liability as a business owner. Registration of Pvt Ltd company in Uttar Pradesh is vital for long-term success and growth. With our assistance, you can have it done easily and smoothly.</p>

          </div>
          <div class="col-md-6 col-lg-5 pt-6">
            <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="wXR0rbBqqW8"></div>
          </div>
      </div>
  </div>
</section>

<!-- TYPES OF COMPANY -->
<section class="wrapper  ">
  <div class="container mb-10 ">
    <div class="card p-10 shadow-lg">
      <div class="row mb-10">
          <div class="row text-center">
            <div class="col-md-12">
              <h6 class="mb-4 text-yellow">TYPES OF COMPANY</h6>
              <h2 class="display-5  font-bolder ">Exploring Diverse PVT LTD Company Types in Uttar Pradesh</h2>
            </div>
          </div>
      </div>
      <div class="row align-items-start ">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}images/types-of-company.png" />
            </figure>
          </div>

          <div class="col-md-6 col-lg-6 pt-2">  
            <p>Talking about the types of private limited companies, you find two main types: limited by shares or by guarantee. Whichever type it may be, both are registered under the Companies Act 2013, which informs the rules and regulations for all types of companies in India.</p> 
            
            <h4>There are two main types: </h4>

            <ul class="icon-list bullet-bg bullet-blue ms-0 gy-2 mt-4 mb-4">
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span><b>Limited By Shares: </b> In this type, you, being the owner of your company, have a limited liability, which means you are responsible up to the amount of paid-up share capital, also covering any unpaid amounts. This means that in the adverse event of your company facing losses, you and your partners are responsible for only the unpaid amounts on your respective shares.</span>
              </li>
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span><b>Limited By Guarantee: </b> This company setup is for organizations like sports clubs and cooperative societies that operate on the goal of ‘not-for-profit’ or ‘charity’. Whatever profits are made by such organizations are reinvested for the greater good. The liability you have in this company type is determined at the time of incorporation, and it never exceeds that limit.</span>
              </li>
            </ul>
              
          </div>
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
            <h3 class="display-4 mb-4 font-bolder">Process for Pvt Ltd(Private Limited) Company Registration in Uttar Pradesh</h3>
            <h5>For private limited company registration in Uttar Pradesh, you must follow the below-mentioned process:</h5>
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
                        <h4 class="mb-2">Obtain DSC (Digital Signature Certificate)</h4>
                        <p class="mb-2">Start by obtaining a Digital Signature Certificate (DSC), a fundamental necessity for private limited company incorporation online in Uttar Pradesh. You can easily get a DSC form from government-recognized certifying authorities or online, which usually takes only two days.</p>
                        <p class="mb-0">To get your DSC for registering your private limited company in Uttar Pradesh, you’ll need to go through three verification steps: document, video, and phone verification. The charges for obtaining a DSC may vary, and it depends on the certifying authority. </p>
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
                        <h4 class="mb-2">Get Name Approval</h4>
                        <p class="mb-0">After obtaining your DSC (Digital Signature Certificate), the next step is to get approval for your company’s name. Visit the Ministry of Corporate Affairs’ RUN portal, which is part of the SPICe+Form. Try different tools available to search for unique business names that are not yet taken for private limited companies. Moreover, remember to define the company’s object clause and industrial activity code when applying for a name. </p>
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
                        <h4 class="mb-2">Fill out the SPICe Form (INC-32)</h4>
                        <p class="mb-2">On receiving approval for your private company’s name, you may begin by furnishing the details in the SPICe+ Form to register your company. It asks you to do the following:</p>
                        <ul>
                          <li>Complete company details.</li>
                          <li>Provide member and subscriber information.</li>
                          <li>Apply for a Director Identification Number (DIN).</li>
                          <li>Apply for PAN and TAN.</li>
                          <li>Directors and Subscribers Declaration.</li>
                          <li>Professional Declaration and Certification.</li>
                        </ul>
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
                        <h4 class="mb-1">File MOA and AOA</h4>
                        <p class="mb-0">SPICe e-MoA and e-AoA are two important forms that you need to draft while applying for registration of your private limited company in Uttar Pradesh. These documents provide clarification on how the company operates internally and its management structure. The Memorandum of Association (MoA) is defined under Section 2(56) and the Articles of Association (AoA) under Section 2(5) of the Companies Act, 2013.</p>
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
                        <h4 class="mb-1">Issuance of Certificate of Incorporation</h4>
                        <p class="mb-2">The Ministry of Corporate Affairs (MCA) plays a vital role in approving the registration of private limited companies in Uttar Pradesh. Upon accurately completing the required forms and submitting all necessary paperwork, the MCA issues a Certificate of Incorporation. Once approved, you will receive a corporate identity number (CIN), which is possible to track through the MCA portal.</p>
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

<!-- DOC REQUIRED --> 
<section class="wrapper bg-soft-yellow">
  <div class="container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">DOCUMENT REQUIRED</h6>
            <h2 class="display-4 mb-4 font-bolder">Essential Documents for Pvt Ltd Company Registration in Uttar Pradesh</h2>
            <h5>For PVT LTD Registration in Uttar Pradesh, one requires the following documents: </h5>
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
                        <h4 class="mb-2">Documents of All Directors & Shareholders of The Company</h4>
                        <ul>
                          <li>Identity Proof – Aadhar Card/Driving License/Passport</li>
                          <li>PAN Card/ DIN (Directors Identification Numbers)</li>
                          <li>Email Address and Mobile Number</li>
                          <li>Utility bills (may include electricity bill, water bill, broadband bill, etc.)</li>
                          <li>Latest Bank Statements (up to the past two months acceptable)</li>
                        </ul>
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
                        <h4 class="mb-2"> Address Proof of Registered Office</h4>
                        <ul>
                          <li>Latest utility bill (electricity/mobile/broadband bill)</li>
                          <li>Sale deed, Rent or Lease papers</li>
                          <li>No objection Certificate (NOC) from the owner of the property if rented</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->

                <p class="mt-6"><b>Note –</b> If the company does not own a commercial space, then a residential address is acceptable for PVT LTD Company Registration in Uttar Pradesh.</p>

                <h3 class="mt-6">Documents Issued After Company Registration in Uttar Pradesh</h3>
                <p>Upon completion of the registration of your private limited company in Uttar Pradesh, you will receive the following documents:</p>

                <ul>
                  <li>Certificate of Incorporation (COI)</li>
                  <li>Memorandum of Association (MoA)</li>
                  <li>PAN of the Company</li>
                  <li>TAN of the Company</li>
                  <li>Articles of Association (AoA)</li>
                  <li>Digital Signature Certificate (DSC)</li>
                  <li>Company Master Data</li>
                  <li>Director Identification Number (DIN)</li>
                </ul>

              </div>
            <!--/.row -->
          </div>
      </div>
  </div>
</section>


<!-- BENEFITS -->
<section class="wrapper">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">BENEFITS</h6>
            <h3 class="display-4 mb-4 font-bolder">Benefits of PVT LTD Company Registration in Uttar Pradesh</h3>
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
                  <img src="{{asset('')}}assets/img/icons/solid/plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Perpetual Existence</h4>
                <p>Private limited companies have their own independent identity, which lets them continue indefinitely without being affected by a change in ownership or owners. It benefits attracting clients, grabbing contracts, and fostering trustable relationships.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Tax Advantages</h4>
                <p>After registering your business as a private limited company in Uttar Pradesh, you get the benefits of reduced tax rates, deductions, and lucrative exemptions provided to private limited organizations. With these tax advantages, the tax burden reduces significantly.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Separate Legal Entity</h4>
                <p>Since there is a clear distinction made between private limited companies and their owners, no matter what happens to the owners or ownership structure, the company goes on forever, unaffected by any alterations.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-navy me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Limited Liability</h4>
                <p>With PVT LTD Company Registration in Uttar Pradesh, you benefit from limited liability. This protects your assets from being used to settle the company’s debts in financial challenges or legal disputes.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-sky me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Access To Funding</h4>
                <p>When you register your private limited company in India, it gets easy to grab funding because financial investors are always interested in putting their money into companies that have a limited liability feature and a clear ownership structure.</p>
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
      <div class="row mb-10">
          <div class="row text-center">
            <div class="col-md-12">
              <h6 class="mb-4 text-yellow">Why JustStart</h6>
              <h2 class="display-5  font-bolder ">Why Choose JustStart <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> </h2>
            </div>
          </div>
      </div>
      <div class="row align-items-start ">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif" />
            </figure>
          </div>

          <div class="col-md-6 col-lg-6 pt-2">  
            <p>JustStart simplifies the process of <b>PVT LTD company registration in Uttar Pradesh</b>, making your journey as an entrepreneur a bit smoother. Here are some key features that make us the best choice for private company registration in Uttar Pradesh:</p>
            
            <ul class="icon-list bullet-bg bullet-blue ms-0 gy-2 mt-2 mb-4">
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span><b>Expert Guidance: </b>Professional assistance at every step.</span>
              </li>
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span><b>Cost-Effective Solutions: </b>Competitive pricing for registration.</span>
              </li>
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span><b>Time Efficiency: </b>Swift and timely registration process.</span>
              </li>
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span><b>Transparent Process: </b>Clear communication and transparency.</span>
              </li>
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span><b>Customer Support: </b>Responsive and helpful customer service.</span>
              </li>
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span><b>Proven Track Record: </b>Trusted by successful businesses.</span>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>Why should I choose JustStart for private limited company registration in UP? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>JustStart assists you the best in the entangling process of private limited company registration in Uttar Pradesh. You get expert guidance at cost-effective prices and a transparent and time-efficient registration process. Get in touch with our experts to learn everything about our working process and subscribe to our private limited company registration service.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>Can I choose not to register as a private limited company in UP? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>Yes, you can choose not to register your business as a private limited company in Uttar Pradesh, as it is completely your choice. However, to relish the perks such as limited liability, tax advantages, perpetual existence, and easy access to funding, you must register your company. It directly and indirectly helps you scale your business operations.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>What are the main documents required for private limited company registration in UP, specifically for directors and shareholders? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>Directors and shareholders need to provide their identity proof (Aadhar Card, Driving License, or Passport), PAN Card or DIN, email address, mobile number, utility bills, and the latest bank statements (up to the past two months).</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>Is the registration of private limited companies in UP a lengthy process? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>No, private limited company registration in Uttar Pradesh is not a lengthy process, especially when you choose to register your private limited company online with JustStart. With our assistance, registration becomes a seamless and efficient experience, taking approximately 7–10 working days.</p>
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