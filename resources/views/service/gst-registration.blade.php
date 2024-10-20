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

            <p>Online GST Registration in India is a very simple, seamless, cheapest, and quickest process with us. For easier and hassle free <b>GST Registration online</b>, opt for our GST registration services. Get started today and enjoy the tax benefits. We can help you register your GST number online. </p>
            <p>A GST number, or GSTIN number, is a unique identification number required by each taxpayer in order to collect and pay the tax on the sale of each product or service.</p>

            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Get expert help in GST registration and management</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>View and track application status</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Save time</span></li>
            </ul>

            <h3>GST registration in 3 business days for <span class="text-blue">Rs. 1,999</span></h3>
            <h3>(inclusive of all taxes)</h3>

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
            <h3 class="display-4 mb-4 font-bolder">GST in India</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>The foundation of GST was laid down in the Budget Speech of February 2006. However, after the government of India worked tirelessly, GST went into effect on July 1, 2017. GST’s full form is Goods and Service Tax. In India, GST is divided into four slabs of 5%, 12%, 18%, and 28%. Payment of GST varies from industry to industry and is decided by the GST Council. </p>
            
            <p>In India, the central government used to levy manufacturing taxes in the form of CST, VAT, entry tax, luxury tax, and purchase tax. This resulted in multiplicities of taxes at various stages in the same supply chain. After careful analysis, the government proposed GST as a single tax to eliminate cascading effects in the taxation system.</p>
           
          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="3VrI1s1YOyQ"></div>
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
            <h3 class="display-4 mb-4 font-bolder">Advantages of GST</h3>
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
                <h4 class="fs-20">Uniform Tax Rate</h4>
                <p>GST contributes to the unification of tax rates in the national market, boosting both domestic and foreign investment. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Mitigates Multiple Payments</h4>
                <p>GST mitigates the cascading effect by allowing taxpayers to have one unified tax payment service. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Harmonizes Law</h4>
                <p>GST is applicable to all businesses and individuals alike. In addition, the online procedure and a uniform charge for all taxpayers make it convenient to comply with center and state laws.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-navy me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Encourages Transparency</h4>
                <p>By following online processes and necessary compliance digitally, users can be ensured of a direct transaction process. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Reduces Third-Party Mediators</h4>
                <p>Since GST tax payment is a completely digital process, taxpayers end up reducing any third-party invasion by mediators or arbitrators. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-blue me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Encourages Paperless economy</h4>
                <p>GST has boosted the use of Internet-related services and promotes a paperless economy.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-orange me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Ease of Doing Business</h4>
                <p>Reducing the number of tax systems simplifies governance, resulting in a smoother flow and simpler payments.</p>
              </div>
            </div>

          </div>
      </div>
  </div>
</section>

<!-- Types of GST -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-fuchsia ">
    <div class="row ">

        <div class="col-md-7 col-lg-4 pt-6">
          <figure class="rounded">
            <img src="{{asset('images/types-of-company-registration.png')}}" alt="types of company registration" >
          </figure>
        </div>
        
        <div class="col-md-5 col-lg-8">
          <h2 class="display-5 font-bolder mb-6">Types of GST Registration in India</h2>
          
          <ul class="icon-list bullet-bg bullet-fuchsia ms-0 gy-2 mt-2 mb-4">
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Normal Tax Payer: </b>Applicable for taxpayers who do business in India. These taxpayers register themselves as regular taxpayers and do not need to make a deposit to enjoy unlimited validity</span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Composition Taxpayer: </b>This GST type requires applicants to enroll in the GST Composition Scheme. Then, the scheme participants can pay the tax at a flat GST rate. The taxpayer, however, would be unable to claim the input tax credit.</span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Casual Taxable Person: </b>This GST type is applicable for those taxpayers who have a small business like a stall or seasonal shop. Taxpayers of this type need to pay a deposit equal to the amount of GST liability to become eligible as a Casual Taxable Person. The liability must correspond to the active registration periods i.e., 3 months.</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span><b>Non-Resident Taxable Person: </b>As the name suggests, this GST type is applicable to individuals residing outside of India. Taxpayers provide goods or services to Indian residents. In the case of NRI Taxable persons, the applicant must pay a deposit equal to the amount of GST liability.</span>
            </li>
          </ul>
          
        </div>
        
      
    </div>

  </div>
  <!-- /.container -->
</section>

<!-- Information -->
<section class="wrapper  mb-10">
  <div class="container">
    <div class="card shadow-lg">
        <div class="row ">
          <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block" data-image-src="{{asset('assets/img/photos/tm1.jpg')}}" style="background-image: url({{asset('assets/img/photos/tm1.jpg')}});">
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <div class="p-6">
              <h2 class="display-5 mb-6">Information You Need for New GST Registration</h2>
              <ul class="icon-list bullet-bg bullet-blue ms-0 gy-2 mt-2 mb-4">
                <li>
                    <span><i class="uil uil-check"></i></span>
                    <span>Legal Business Name</span>
                </li>
                <li>
                    <span><i class="uil uil-check"></i></span>
                    <span>Permanent Account Number (PAN) </span>
                </li>
                <li>
                    <span><i class="uil uil-check"></i></span>
                    <span>Email Address </span>
                </li>
                <li>
                    <span><i class="uil uil-check"></i></span>
                    <span>Mobile Number </span>
                </li>
                <li>
                    <span><i class="uil uil-check"></i></span>
                    <span>Aadhar Card</span>
                </li>
              </ul>

            </div>
            <!--/div -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>

  </div>
  <!-- /.container -->
</section>


<!-- Documents -->
<section class="wrapper  mb-10">
  <div class="container">
    <div class="card shadow-lg">
        <div class="row ">
          
          <div class="col-lg-6">
            <div class="p-6">
              <h2 class="display-5 mb-6">Documents Needed to Complete Registration of GST</h2>
              <p>Depending upon the category of the taxpayer, keep all the documents and types of information mentioned below ready: </p>
              <ul class="icon-list bullet-bg bullet-blue ms-0 gy-2 mt-2 mb-4">
                <li>
                    <span><i class="uil uil-check"></i></span>
                    <span>PAN Card</span>
                </li>
                <li>
                    <span><i class="uil uil-check"></i></span>
                    <span>Identity proof </span>
                </li>
                <li>
                    <span><i class="uil uil-check"></i></span>
                    <span>Photographs </span>
                </li>
                <li>
                    <span><i class="uil uil-check"></i></span>
                    <span>Address proof  </span>
                </li>
                <li>
                    <span><i class="uil uil-check"></i></span>
                    <span>Business address proof </span>
                </li>
                <li>
                    <span><i class="uil uil-check"></i></span>
                    <span>Bank account statements </span>
                </li>
              </ul>

            </div>
            <!--/div -->
          </div>
          <!--/column -->

          <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-bottom rounded-lg-end d-none d-md-block" data-image-src="{{asset('assets/img/photos/tm1.jpg')}}" style="background-image: url({{asset('assets/img/photos/tm1.jpg')}});">
          </div>
          <!--/column -->

        </div>
        <!--/.row -->
      </div>

  </div>
  <!-- /.container -->
</section>

<!-- PROCESS --> 
<section class="wrapper">
  <div class="container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">PROCESS</h6>
            <h3 class="display-4 mb-4 font-bolder">Online GST Registration Process</h3>
          </div>
      </div>
      <div class="row align-items-start">
          <div class="col-md-5 col-lg-5 position-lg-sticky " style="top: 8rem;">
            <p>The steps to apply for GST registration are typically common if you are a normal taxpayer, a composition taxable person, a casual taxable person, an SEZ unit, or an input service distributor. However, the steps may differ depending on whether you are an NRI taxable person, a UN body, a TDS deductor, or a TDS collector.</p>

            <p>GST registration in India through JustStart broadly comprises the following major steps, which are as follows:</p>
            
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
                          <span>1</span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Submitting Query Form</h4>
                        <p class="mb-0">If you are a GST registration aspirant, you can reach out to us via the JustStart query form where our legal team of experts will respond to your query as soon as possible and guide you through the step by step GST application.</p>
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
                          <span>2</span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Part A Form to Get TRN</h4>
                        <p class="mb-2">As mandatory, our experts will handle the application process and help you organize the documents. After this stage, we will prepare to fill out Part-A of the GST registration to get you a TRN (Temporary Reference Number). Here is essential information that we may ask you for filling Part-A form: </p>
                        <ul>
                            <li>Legal Business Name </li>
                            <li>PAN</li>
                            <li>Email address </li>
                            <li>Mobile number </li>
                        </ul>
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
                          <span>3</span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Part B Form to Get ARN</h4>
                        <p class="mb-2">Our experts will proceed to furnish further details to get you an ARN (Application Reference Number). This number will be generated by the GST portal upon successful submission of the Part A form. Information needed to complete Part B of the GST form:</p>
                        <ul>
                            <li>Identity information: Designation, DIN, PAN, Passport, Aadhar, etc.</li>
                            <li>Residential address: building name, street name, premise name, country, state district, pin code, city, etc. </li>
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
                          <span>4</span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Application Status</h4>
                        <p class="mb-0">Once all the documentation has been completed, we will update you on the status of your application to obtain GSTIN.</p>
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


<!-- WHY US -->
<section class="wrapper ">
  <div class="container mb-10 ">
    <div class="card p-10 shadow-lg">
      <div class="row align-items-start ">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <h2 class="display-4 mt-6 mb-4 font-bolder text-center ">Why JustStart <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> </h2>
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
              
              
              <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0 ">
                      Our work strategies
                    </h3>
                    <p class="mb-0">From paper planning to idea execution, we actively achieve benchmark guidelines to ensure each step of the plan is not just carefully laid but successfully converted into reality.</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0 ">
                      Our ideology is our soul
                    </h3>
                    <p class="mb-0">JustStart is a platform for those who have the willpower to dream and the drive to achieve. We promise you our commitment, trust, and expertise to generate a hassle-free experience.</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0 ">
                      Meet Deadlines
                    </h3>
                    <p class="mb-0">Time is of the essence. Every single day lost is an opportunity lost. Therefore, we take precautionary measures to ensure your business meets all the deadlines you have set.</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0 ">
                      Guaranteed Satisfaction
                    </h3>
                    <p class="mb-0">We know quality has no replacement. Thus, we systemise each level of our work to minimise the chances of mistakes before each project passes through our client’s hands.</p>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>Who is required to have GST registration? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>According to rules and regulations laid down in the Goods and Services Tax Act, 2017, every commercial firm or business entity with a turnover or annual income of 40 lakh and above fulfills the eligibility to apply for GST registration. However, the amount for North-Eastern states and other hill states is Rs. 20 lakh.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>Who can apply for GST registration? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>Any individual falling under the following category can apply for GST registration: </p>
                    <ul>
                      <li>Taxpayer </li>
                      <li>Tax Deductor </li>
                      <li>Tax Collector (e-Commerce) </li>
                      <li>GST Practitioner </li>
                      <li>United Nation Body </li>
                      <li>Consulate or EMbassy of Foreign Country </li>
                      <li>Non-Resident Online Services Provider </li>
                      <li>Non-Resident Taxable Person </li>
                      <li>Other Notified Person</li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>Is there any special category of GST registration that one needs to know about?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>Yes, there are different types of GST registration in India.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>Can someone obtain more than one GSTIN number on one PAN card?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>Yes. It is possible to have multiple GST registration numbers on one PAN card. However, the state requires the firm to prove that it has multiple business verticals by dealing in different industries. Further, these businesses will be treated as separate businesses even if they are being operated by the same individual.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>What are the benefits of GST registration?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <ul>
                      <li>The GST has brought all taxes under one umbrella.</li>
                      <li>Easy online process </li>
                      <li>Lesser legal compliance</li>
                      <li>Improvement in Logistical Efficiency</li>
                      <li>GST has regulated both organized and unorganized sectors</li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true" aria-controls="faq-collapse-5"><h2>What are some of the disadvantages of GST?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                  <div class="card-body">
                    <ul>
                      <li>Increased cost due to software purchase </li>
                      <li>increases the risk of penalties.</li>
                      <li>increases operational costs.</li>
                      <li>It requires adapting to online taxation procedures.</li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-6">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="true" aria-controls="faq-collapse-6"><h2>Will JustStart help me complete my GST registration online? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-6">
                  <div class="card-body">
                    <p>Yes. JustStart is a 100% digital platform where you get all the help related to the registration of GST online. We create a personalized profile of each client and help you complete each phase of GST registration without having you be physically present. But that doesn’t mean quality gets compromised. We are an authentic platform with a transparent registration process to ensure you can see each update on the same day.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-7">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-7" aria-expanded="true" aria-controls="faq-collapse-7"><h2>Will I need a different set of documents while getting a GSTIN for my private limited company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-7">
                  <div class="card-body">
                    <p>The regular set of documents almost remains the same. However, in the case of a PLC, you may need some additional documents like: </p>
                    <ul>
                      <li>Certificate of Incorporation </li>
                      <li>AOA (Article of Association) </li>
                      <li>MOA (Memorandum of Association) </li>
                      <li>DSC (Digital Signature Certificate)</li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-8">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-8" aria-expanded="true" aria-controls="faq-collapse-8"><h2>How much time does it take to complete an online GST registration? </h2> </button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-8">
                  <div class="card-body">
                    <p>Given the expert help from JustStart, applicants can expect to complete their GST registration within 3 working days. </p>
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