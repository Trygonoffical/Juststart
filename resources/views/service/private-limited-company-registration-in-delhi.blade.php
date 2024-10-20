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
            <p>Are you in search of the best Company Registration In Delhi, service-providing firm? A firm with expertise in Company Registration can get the job done for you. JustStart has got you covered by simplifying the comprehensive Private Limited Company Registration in Delhi.</p>
            
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
            <h3 class="display-4 mb-4 font-bolder">Pvt Ltd (Private Limited) Company Registration in Delhi</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>Welcome to JustStart, your go-to destination for hassle-free Pvt Ltd Company Registration in Delhi  NCR. Let us help you escape those entangling paperwork and procedures. We’re here to make the process of registering your private company in Delhi a breeze, so you can embark on your entrepreneurial journey with confidence and ease. </p>

            <p>Our experts are always there to guide you in every significant and minor step to register a private limited company in Delhi with simplicity and clarity. Whatever you need for your private company’s registration, consider it done with our assistance.</p>

            <h3 class="mt-6">About PVT LTD. Registration in Delhi</h3>
            <p>Pvt Ltd (Private Limited) Company Registration in Delhi is a crucial step to giving your business a legal identity of its own. It’s more than just a legal step; it’s your ticket to making your business official and gaining credibility. Plus, when you Register a Company in India, it limits your liability as a business owner. If you’re dreaming of taking your business to new heights, registering it as a private limited company in Delhi with our assistance is the way to go.</p>

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
              <h2 class="display-5  font-bolder ">Exploring Diverse PVT LTD Company Types in Delhi</h2>
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
            <p>Now, let’s talk about the different types of Pvt. Ltd. companies. The Companies Act of 2013 lays down the rules for all types of companies in India. When incorporating a private limited company, it falls under this act.There are two main types:</p>  

            <ul class="icon-list bullet-bg bullet-blue ms-0 gy-2 mt-2 mb-4">
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span><b>Limited By Shares: </b> In this setup, you, being the owner, enjoy limited liability, meaning your responsibility is limited to the amount of paid-up share capital, including any unpaid amounts. If the company faces losses, you and your partners are only liable for the amount due on your respective shares.</span>
              </li>
              <li class="mb-4">
                  <span><i class="uil uil-check"></i></span>
                  <span><b>Limited By Guarantee: </b> This type is perfect for organizations like sports clubs and cooperatives that operate on a ‘not-for-profit’ or ‘charitable‘ basis. In this case, profits are reinvested for the greater good. Your maximum liability as a member is determined at the time of private limited company incorporation and will not exceed that amount.</span>
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
            <h3 class="display-4 mb-4 font-bolder">Process for Pvt Ltd(Private Limited) Company Registration in Delhi</h3>
            <h5>To embark on the journey to get PVT LTD registration in Delhi, here are the five steps you must follow: </h5>
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
                        <p class="mb-2">The first step is to obtain a DSC (Digital Signature Certificate) for the incorporation of a private limited company in Delhi. To obtain a DSC form, you may reach out to government-recognized certifying authorities or get it online in just two days.</p>
                        <p class="mb-0">The process of obtaining a DSC for private limited company registration online in Delhi, requires you to go through three types of verifications: document, video, and phone verification. The charges for obtaining a DSC may vary, depending on the certifying authority.</p>
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
                        <p class="mb-0">Apply for a unique name on the Ministry of Corporate Affairs’ RUN portal, which is a part of SPICe+Form. Try different tools to search for unique names that are not in existence for Pvt Ltd(Private Limited) Company Registration Process in Delhi. Also, remember to define the company’s object clause and industrial activity code when submitting an application for a name.</p>
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
                        <p class="mb-2">After you get approval on your private company’s name, begin with filing the company registration details in the SPICe+ Form. It requires you to</p>
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
                        <p class="mb-0">SPICe e-MoA and e-AoA are essential forms that you must draft while applying for private company registration in Delhi. These documents define the internal workings and management of the company. MoA is defined under section 2(56) and AoA under section 2(5) of the Companies Act, 2013. </p>
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
            <h2 class="display-4 mb-4 font-bolder">Essential Documents for Pvt Ltd Company Registration in Delhi</h2>
            <h5>For PVT LTD Registration in Delhi, one requires the following documents: </h5>
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

                <p class="mt-6"><b>Note –</b> If the company does not own a commercial space, then a residential address is acceptable for PVT LTD Company Registration in Delhi.</p>

                <h3 class="mt-6">Documents Issued After Company Registration in Delhi</h3>
                <p>Upon completion of the registration of your private limited company in Delhi, you will receive the following documents:</p>

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
            <h3 class="display-4 mb-4 font-bolder">Benefits of PVT LTD Company Registration in Delhi</h3>
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
                <p>Private limited corporations exist independently of their owners; therefore, they continue indefinitely without being impacted by an impact on ownership or owners. It helps in building trustable relationships and grabbing contracts.</p>
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
                <p>Registering your business as a private limited company in Delhi gives you the advantage of lower tax rates, deductions, and exemptions sanctioned to private limited companies. This reduces the tax burden for shareholders significantly.</p>
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
                <p>There is a clear distinction between private limited companies and their owners. This separate legal entity feature ensures that no matter what happens to the company’s ownership structure or owners, the company will go forever, unaffected by any changes.</p>
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
                <p>With PVT LTD Company Registration in Delhi, you enjoy a limited liability, which helps you prevent your assets from being used to pay off company liabilities during financial challenges or legal disputes.</p>
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
                <p>With a registered company, it gets easy to attract funding because investors always seek to invest in a company structure that features limited liability characteristics and a clear ownership framework.</p>
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
            <p>JustStart guarantees seamless PVT LTD company registration in <b>Delhi</b>, ensuring an effortless process for entrepreneurs. Check out the key features of our registration services that make us the best partners for private company registration in Delhi:</p>
            
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>How does JustStart simplify private limited company registration in Delhi? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>JustStart streamlines the process for hassle-free registration, offering expert guidance, cost-effective solutions, and a transparent, time-efficient approach. Reach out to us to know everything about how to register a company in Delhi.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>Why is name approval crucial in private limited company registration? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>Name approval is pivotal, as it guarantees a unique and legal identity for the company. This process ensures that the chosen name is not already in use, preventing potential conflicts and establishing a distinctive brand identity that aligns with the business’s nature and goals.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>What documents are needed for private limited company incorporation? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>To register a private limited company smoothly, you need valid IDs for directors and shareholders, proof of address, recent utility bills, and either rent/lease papers or a no objection certificate for the office. These documents are crucial for a smooth and successful registration.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>Can a private limited company use a residential address for the registered office? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>Yes, a residential address is acceptable for the registered office of a private limited company registered in India. This flexibility allows entrepreneurs who do not own commercial spaces to use their residential addresses, ensuring accessibility and convenience while adhering to the legal requirements of the registration process.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>What if I do not register as a private limited company in Delhi? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>If you choose not to register as a private limited company in Delhi, you won’t enjoy certain benefits, such as limited liability, perpetual existence, and specific tax advantages. It may also impact your ability to attract funding and establish a distinct legal identity for your business. </p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true" aria-controls="faq-collapse-5"><h2>What is the limited liability concept in a private limited company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                  <div class="card-body">
                    <p>Limited liability in a private limited company means that the personal assets of shareholders are protected from the company’s liabilities. Shareholders are only liable for the amount invested in the company, reducing personal risk. This legal safeguard encourages investment, fosters entrepreneurship, and shields individual assets from business-related financial obligations.</p>
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