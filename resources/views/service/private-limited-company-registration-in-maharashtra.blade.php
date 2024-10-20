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
            <p>Register a Private Limited Company in Maharashtra with JustStart expert assistance in company registration. Get hassle free experience in company registration in Maharashtra with the team of qualified professionals who will handle all your paperwork and ensure a smooth process in registration. </p>

            <p>Let’s get started with the experienced team who ensures timely registration and start your entrepreneurial journey with assurance.</p>
            
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
            <h3 class="display-4 mb-4 font-bolder">Pvt Ltd (Private Limited) Company Registration in Maharashtra</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>Welcome to JustStart, where we provide you with expert assistance in making your private limited company registration in Maharashtra super easy. We assist you in avoiding complicated paperwork and confusing rules. Our team of experts guides you in the best way possible for the registration of Pvt Ltd company in Maharashtra. No matter whether it’s a big or small aspect of online company registration in Maharashtra, we are always there to help you. We are not just any agency; we are your trusted companion, supporting you throughout the entire process of applying for online company registration in Maharashtra.</p>

            <h3 class="mt-6">About PVT LTD. Registration in Maharashtra</h3>
            <p>The Pvt Ltd (Private Limited) company registration process in Maharashtra is a crucial step to giving your business a distinct and legal identity. Apart from just giving a legal identity, registration of your private limited company in Maharashtra enables you to take advantage of limited liability as a business owner. Registration of Pvt Ltd company in Maharashtra is key to the long-term success and growth of your business. By enlisting our services, consider it done easily and smoothly.</p>

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
              <h2 class="display-5  font-bolder ">Exploring Diverse PVT LTD Company Types in Maharashtra</h2>
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
            <p>When it comes to types of private limited companies in Maharashtra, there are two main categories: limited by shares or by guarantee. Both types adhere to the rules outlined in the Companies Act 2013, governing regulations for all companies in India.</p> 
            
            <h4>There are two main types: </h4>

            <ul class="icon-list bullet-bg bullet-blue ms-0 gy-2 mt-4 mb-4">
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span><b>Limited By Shares: </b> In this private limited company type, you, as the owner, have limited liability, meaning your responsibility is capped at the amount of paid-up share capital, including any unpaid amounts. This safeguards you and your partners in case of losses, as you are accountable only for the unpaid portions of your respective shares. </span>
              </li>
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span><b>Limited By Guarantee: </b> This setup best suits organizations like sports clubs and cooperative societies operating on a ‘not-for-profit’ or ‘charity’ basis. And the profits generated by these organizations are again invested for the greater good. Your liability in this type of company is predetermined at incorporation and never exceeds that limit.</span>
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
            <h3 class="display-4 mb-4 font-bolder">Process for Pvt Ltd(Private Limited) Company Registration in Maharashtra</h3>
            <h5>For private limited company registration in Maharashtra, you must follow the below-mentioned process:</h5>
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
                        <p class="mb-2">Start by obtaining a Digital Signature Certificate (DSC), a fundamental necessity for private limited company incorporation online in Maharashtra. You can easily get a DSC form from government-recognized certifying authorities or online, which usually takes only two days.</p>
                        <p class="mb-0">To get your DSC for registering your private limited company in Maharashtra, you’ll need to go through three verification steps: document, video, and phone verification. The charges for obtaining a DSC may vary, and it depends on the certifying authority. </p>
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
                        <p class="mb-0">SPICe e-MoA and e-AoA are two important forms that you need to draft while applying for registration of your private limited company in Maharashtra. These documents provide clarification on how the company operates internally and its management structure. The Memorandum of Association (MoA) is defined under Section 2(56) and the Articles of Association (AoA) under Section 2(5) of the Companies Act, 2013.</p>
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
                        <p class="mb-2">The Ministry of Corporate Affairs (MCA) plays a vital role in approving the registration of private limited companies in Maharashtra. Upon accurately completing the required forms and submitting all necessary paperwork, the MCA issues a Certificate of Incorporation. Once approved, you will receive a corporate identity number (CIN), which is possible to track through the MCA portal.</p>
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
            <h2 class="display-4 mb-4 font-bolder">Essential Documents for Pvt Ltd Company Registration in Maharashtra</h2>
            <h5>For PVT LTD Registration in Maharashtra, one requires the following documents: </h5>
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

                <p class="mt-6"><b>Note –</b> If the company does not own a commercial space, then a residential address is acceptable for PVT LTD Company Registration in Maharashtra.</p>

                <h3 class="mt-6">Documents Issued After Company Registration in Maharashtra</h3>
                <p>Upon completion of the registration of your private limited company in Maharashtra, you will receive the following documents:</p>

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
            <h3 class="display-4 mb-4 font-bolder">Benefits of PVT LTD Company Registration in Maharashtra</h3>
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
                <p>Private companies have their own independent identity, allowing them to continue indefinitely without being affected by changes in ownership. This stability benefits attracting clients, securing contracts, and building trustworthy & prolonged relationships.</p>
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
                <p>Once you register your business as a private limited company in Maharashtra, you enjoy reduced tax rates, deductions, and valuable exemptions. These tax advantages significantly lessen the tax burden on your company.</p>
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
                <p>Because private limited businesses and their owners are clearly distinguished from one another, the company survives changes to its ownership structure or owners and continues to operate indefinitely.</p>
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
                <p>With PVT LTD Company Registration in Maharashtra, you benefit from limited liability. This protects your assets from being used to settle the company’s debts in financial challenges or legal disputes.</p>
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
                <p>By choosing to Register a Company in India, you secure the opportunity to attract funding more easily. Financial investors are often interested in investing their money in companies with limited liability features and a clear ownership structure.</p>
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
            <p>JustStart simplifies the process of <b>PVT LTD company registration in Maharashtra</b>, making your journey as an entrepreneur a bit smoother. Here are some key features that make us the best choice for private company registration in Maharashtra:</p>
            
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>What is the process for private limited company registration in Maharashtra?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>The registration process involves obtaining a Digital Signature Certificate (DSC), choosing a unique company name, filing the SPICe+ Form, and obtaining the Certificate of Incorporation from the Ministry of Corporate Affairs.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>What documents are needed for private limited company registration in Maharashtra?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>Documents include a Digital Signature Certificate (DSC), Memorandum of Association (MoA), Articles of Association (AoA), residential proof, identity proof, and PAN card of directors. The exact list may vary based on specific requirements.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>What is the significance of SPICe e-MoA and e-AoA forms in company registration? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>These forms are crucial for private limited company registration in Maharashtra as they clarify the internal workings and management of the company, providing legal documentation in the form of a Memorandum of Association (MoA) and Articles of Association (AoA).</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>How lengthy is the process of private limited company registration in Maharashtra? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>The rules, regulations, and procedures for private limited company registration in Maharashtra can be challenging to manage on your own. You must seek the guidance of experts who have long experience in this field. That’s why you should prefer to register your private limited company online with JustStart – a renowned agency for private company registration online in Maharashtra.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>Why is DSC necessary for the registration of a private company in Maharashtra? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>For the registration of a private limited company in Maharashtra, having a Digital Signature Certificate (DSC) is essential. It acts as a secure electronic key that verifies the identity of the person submitting documents online. This is a mandatory step to guarantee the authenticity and security of the information provided during the registration process.</p>
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