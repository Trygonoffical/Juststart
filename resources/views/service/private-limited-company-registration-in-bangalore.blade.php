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
            <p>Complete your Pvt  Ltd company registration in bangalore online in just a single click at Juststart. We can help you in the process till you get your company registration in Bangalore. All the process are online and hassle free with us. </p>
            
            <p>At JustStart, our team of experienced professionals will take care of your documents and guide in you registering your company with us. Provide all your documents and leave us everything with us.</p>
            
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
            <h3 class="display-4 mb-4 font-bolder">Easy Registration of Private Company Bangalore: JustStart</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>Welcome to JustStart, your partner in streamlining PVT LTD (Private Limited) Company Registration in Bangalore. Our expert guidance ensures you swipe away your worries and concerns about private company registration tasks. We are here to help you start your entrepreneurial journey with confidence and ease. Learn from our experts on company registration in Bangalore in easy and simple steps. Get our help in everything and anything you need in your private company’s registration process.</p>
            
            <h5>About PVT LTD Company Registration in Bangalore</h5>

            <p>PVT LTD (private limited) Company Registration in Bangalore is a step taken to establish a business as a distinct legal entity. This not only enhances the credibility of the business but also limits the liability of its owners. Business owners who want to scale and thrive their business should register it as a private limited company in Bangalore</p>
          </div>
          <div class="col-md-6 col-lg-5 pt-8">
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
              <h2 class="display-5  font-bolder ">PVT LTD Company Types in Bangalore </h2>
            </div>
          </div>
      </div>
      <div class="row align-items-start ">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}images/types-of-company.png" alt="types of company" />
            </figure>
          </div>

          <div class="col-md-6 col-lg-6 pt-2">  
            <p>The Companies Act of 2013 put forth a set of rules that apply to all kinds of companies in India. Whenever incorporation of any company takes place, it is under this act.</p>  
            
            <p>Generally, the Private Limited Company incorporation in India is either limited by shares or by Guarantee:</p>

            <ul class="icon-list bullet-bg bullet-blue ms-0 gy-2 mt-2 mb-4">
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span><b>Limited By Shares: </b> A Private Company limited by shares means that owners have limited liability, which is up to the amount of their paid-up share capital, including any unpaid amount. That means, in case the company makes a loss, the shareholders are liable only up to the amount due on their shares.</span>
              </li>
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span><b>Limited By Guarantee: </b> private company limited by Guarantee is ideal for organizations like sports clubs and co-operatives. These are ‘not-for-profit’ or ‘charitable organizations,’ meaning they retain the profits made by the business and put them to better use. The amount of liability you assumed at the time of private limited company incorporation will be the maximum liability you have in this company as a member.</span>
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
            <h3 class="display-4 mb-4 font-bolder">Process for Private Limited Company Registration in Bangalore</h3>
            <p>To register a PVT LTD(Private Limited) company in Bangalore, you must follow the following steps: </p>
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
                        <h4 class="mb-1">Obtain DSC (Digital Signature Certificate)</h4>
                        <p class="mb-2">A digital signature is mandatory to file the forms for Pvt Ltd Company formation. You may obtain a DSC from government-recognized certifying authorities or online in just two days.</p>
                        <p class="mb-0">To obtain your DSC, you are required to do three types of verifications: documents, video, and phone verification. The cost of obtaining a DSC may vary as it depends upon the certifying authority.</p>
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
                        <h4 class="mb-1">Get Name Approval</h4>
                        <p class="mb-0">Go to the RUN portal of the Ministry of Corporate Affairs, which is part of SPICe+Form, and there, apply for a unique name. You may use tools to search for such names that do not exist anywhere. While applying for the name, define the industrial activity code and object clause of the company. </p>
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
                        <h4 class="mb-1">Fill out the SPICe Form (INC-32)</h4>
                        <p class="mb-2">Once the company name gets approved, start filing the company registration details in the SPICe+ Form. It requires you to</p>
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
                        <p class="mb-0">SPICe e-MoA and e-AoA are essential forms that you must draft while applying for private company registration in Bangalore. These documents define the internal workings and management of the company. MoA is defined under section 2(56) and AoA under section 2(5) of the Companies Act, 2013. </p>
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
                        <p class="mb-2">The Ministry of Corporate Affairs (MCA) will authorize the registration and issue a Certificate of Incorporation if the form is accurately completed and submitted with the necessary paperwork. You will receive a CIN (Corporate Identity Number) upon approval, which you can monitor via the MCA portal.</p>
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
            <h2 class="display-4 mb-4 font-bolder">Essential Documents for Pvt Ltd Company Registration in Bangalore</h2>
            <h5>For PVT LTD Registration in Bangalore, one requires the following documents: </h5>
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
                          <li>Rent or Lease papers</li>
                          <li>No objection Certificate (NOC) </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->

                <p class="mt-6"><b>Note –</b> If the company does not own a commercial space, then a residential address is acceptable for PVT LTD Company Registration in Bangalore.</p>

                <h3 class="mt-6">Documents Issued After Company Registration in Bangalore</h3>
                <p>Upon completion of the registration of your private limited company in Bangalore, you will receive the following documents:</p>

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
            <h3 class="display-4 mb-4 font-bolder">Benefits of PVT LTD Company Registration in Bangalore</h3>
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
                <p>Enjoy continuous existence, unaffected by changes in ownership, ensuring stability and longevity. It helps in building relationships and securing contracts.</p>
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
                <p>Benefit from lower tax rates, deductions, and exemptions available to private limited companies, minimizing the overall tax burden for shareholders.</p>
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
                <p>Private limited companies are distinct from their owners, which means the company goes on forever – it remains unaffected by the change in ownership or lifespan of its owners. </p>
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
                <p>PVT LTD Company Registration in Bangalore offers limited liability, safeguarding your assets from company liabilities during financial challenges or legal disputes.</p>
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
                <p>Having a registered company attracts funding more easily because investors prefer to invest in a company structure where there is limited liability protection available and a clear framework of ownership exists.</p>
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
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon" />
            </figure>
          </div>

          <div class="col-md-6 col-lg-6 pt-2">  
            <p>JustStart offers seamless PVT LTD Company Registration in Bangalore, ensuring a hassle-free process for entrepreneurs. Here are the key features of our services that make us your best assistant for private company registration in Bangalore: </p>
            
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>How quickly can a Digital Signature Certificate be obtained for private company registration in Bangalore? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>Typically, it takes around two days to obtain a DSC. You get it once you complete your document, video, and phone verification process.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>Why are MoA and AoA essential in the PVT LTD Company Registration in Bangalore? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>The MOA and AOA are necessary for the registration of a private limited company because they define the company’s internal workings and management structure. MoA specifies the company’s objectives, while AoA outlines the rules for its internal governance.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>Can a Bangalore-based private limited company use a residential address? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>Yes, if the company does not own a commercial space, it can use a residential address to complete the registration process. However, certain documents, such as rent or lease papers and a No Objection Certificate (NOC), may be required.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>What is the Corporate Identity Number (CIN), and how to get it? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>The Corporate Identity Number (CIN) is assigned by the Ministry of Corporate Affairs (MCA) upon approval of the PVT LTD Company Registration in Bangalore. It serves as a unique identification for the company and can be monitored through the MCA portal.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>What are the benefits of registering a company as a Pvt Ltd in Bangalore? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>Some key benefits of PVT LTD (private limited) Company Registration in Bangalore include perpetual existence, tax advantages, separate legal entity status, limited liability protection, and easier access to funding. These advantages contribute to the stability, longevity, and growth potential of the business.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true" aria-controls="faq-collapse-5"><h2>How much does it cost to register a Private Limited Company in Bangalore? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                  <div class="card-body">
                    <p>The total registration cost for a PVT LTD (private limited) Company Registration in Bangalore is ₹8,899, covering government and professional fees. This includes Digital Signature Certificate fees, government stamp duty, and professional fees for the registration process.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-6">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="true" aria-controls="faq-collapse-6"><h2>Can a private limited company be registered online in Bangalore? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-6">
                  <div class="card-body">
                    <p>Yes, a private limited company can be registered online in Bangalore. For that, you must obtain Digital Signature Certificates (DSC) for directors, apply for Director Identification Number (DIN), file for name approval, draft and file incorporation documents, and obtain the Certificate of Incorporation from the Ministry of Corporate Affairs.</p>
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