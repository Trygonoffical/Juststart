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

            <p class="fs-20">The <b>MCA</b> recently made amendments to the LLP Rules 2009 according to which filing of LLP Form 24 is mandatory to close an LLP in India.</p>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>FREE Consultation</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Guaranteed Confidentiality</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>The Process is Entirely Digital</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Obtain a Closure Certificate</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>24/7 Dedicated Team Assistance</span></li>
            </ul>

            <h3>Close limited liability partnership @ <span class="text-blue">Rs. 6,399</span></h3>

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
            <h3 class="display-4 mb-4 font-bolder">Understanding the Closure of a Limited Liability Partnership</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>A limited liability partnership (LLP) is one of the most common business structures in India, which holds each partner of the firm liable for suffering financial losses up to a certain sum. </p>
            <p>In fact, forming a Limited Liability Partnership requires minimal legal compliance but offers many advantages, such as flexibility in formation, exemptions from paying taxes, status of a legal entity, different levels of membership, partnership name protection, etc. </p>
            <p>However, there may be various reasons due to why business owners may feel the need to shut down LLP’s operations. </p>
            <p>For example, if the limited liability partnership firm has declared itself bankrupt, or when the business activities are suspended for a long time, or the business has not completed the annual compliance.</p>
          </div>
          <div class="col-md-6 col-lg-5">
            <figure class="rounded">
              <img src="{{asset('images/overview/closure-of-a-limited-liability-partnership-company.jpg')}}" alt="closure of a limited liability partnership company" >
            </figure>
          </div>
      </div>
  </div>
</section>

<!-- Ways to Close --> 
<section class="wrapper">
  <div class="container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">Ways to Close</h6>
            <h2 class="display-4 mb-4 font-bolder">Ways to Close LLP Online</h2>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12 col-lg-12 ">
            <h4>1. By Declaring an LLP as Defunct</h4>
            <p>The LLP may submit an application to the Registrar for the declaration of the LLP as defunct and the removal of the LLP’s name if it wishes to shut down its business operations or if it has failed to conduct any commercial operations for a period of one year or longer.</p>
            <p>In accordance with clause (b) of sub-rule 1 of Rule 37 of the LLP Rules 2009, eForm 24 must be submitted in order to have the name of the LLP struck out. </p>
            <p>Similar to this, the Registrar also has the authority to invalidate any inactive LLP after determining that there are good grounds to do so. But in this instance, the registrar must notify the LLP of his plan and request.</p>
          </div>
          <div class="col-md-12 col-lg-12 ">
            <h4>2. Winding up LLP</h4>
            <p>As per rules laid down in Sections 63, 64, and 65 of the LLP Act 2008, any governing business can shut down its operations under certain specific circumstances. The LLP Act 2008 states that any company can <b>close an LLP</b> online by following either of the described modes: </p>
            
            <ul>
              <li>
                <b>Voluntary Winding Up: </b>Under this, LLP partners may decide to wind up company operations.
              </li>
              <li>
                <b>Compulsory Winding Up: </b>
                <ul>
                  <li>
                    Within six months, the number of LLP partners falls below two.
                  </li>
                  <li>
                    If the LLP is unable to repay its debts
                  </li>
                  <li>
                    If LLP violates India’s integrity or public order
                  </li>
                  <li>
                    If the Tribunal determines that the limited liability partnership firm should be dissolved.
                  </li>
                </ul>
              </li>
            </ul>
          </div>
      </div>

  </div>
</section>


<!-- PROCESS -->
<section class="wrapper bg-soft-yellow">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">PROCESS</h6>
            <h3 class="display-4 mb-4 font-bolder">Process of Limited Liability Partnership Closure</h3>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <p>In the event that the limited liability partnership firm members want to close down all the operations of their business, they would need to send an online application by filling in an e-form 24 to the Registrar of Companies.</p>
            
            <figure class="rounded">
              <img src="{{asset('')}}images/service/Model-LLP-Form-24.webp" alt="Model LLP Form 24" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">

            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Step 1: Getting the Consent of Partners </h4>
                <p>It is important to obtain consent from LLP partners before the <b>closing of LLP.</b></p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Step 2: Ceasing all Business Operations </h4>
                <p>The business entity needs to stop functioning commercially and stop taking any orders from customers. It needs to be ensured that at least two financial years have been passed since the cessation of business operations by an LLP before filing the closure application.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Step 3: Closing Bank Account</h4>
                <p>Applicants can proceed by closing the business bank account with their banks by submitting a written application to the concerned bank addressed to the bank manager. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-navy me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Step 4: Affidavits and Declaration</h4>
                <p>Each designated partner of the LLP should declare that the company ceases to carry forward any operations further or commercial activity. In addition, firm partners also need to declare that the LLP has no dues pending or liabilities after striking the name from the registrar’s office. This can be prepared by a professional legal service provider in case the applicants don’t want to face any obstacles. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-sky me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Step 5: Preparing Documents</h4>
                <p>Along with the affidavits and declarations, the LLP partners would need to gather the ITR statements. However, if the firm has not filed for ITR and has not started business activity, then there may not be any requirement for ITR statements. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-sky me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Step 6: Finalizing All the Books and Accounts of the Limited Liability Partnership </h4>
                <p>The process involves reconciling all the account and bookkeeping records of the LLP and ensuring everything is perfect and accurate. A statement of assets and liabilities that should not be older than 30 days. NIL assets and liabilities certified by a practicing CA will also be required.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-sky me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Step 7: Filing Form 24 </h4>
                <p>This stage requires filing a resolution with the registrar of companies. After the resolution passages, applicants must fill out e-Form 24. This resolution declares that the LLP doesn’t owe any debts to anyone. Applicants may need to enclose an affidavit here as well. Here is what Form 24 looks like:</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-sky me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Step 8: Striking off the LLP </h4>
                <p>If the ROC agrees that all the records presented by the applicant are accurate, then LLP striking off becomes easy.</p>
              </div>
            </div>

            
          </div>
      </div>
  </div>
</section>

<!-- Documents Required -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-fuchsia ">
    <div class="row ">
        
        <div class="col-md-5 col-lg-8">
        <h2 class="display-5 font-bolder mb-6">Documents Required for Winding Up LLP</h2>
          
          <p>The list of documents required to be prepared by the applicants is as follows:</p>

          <ul class="icon-list bullet-bg bullet-fuchsia ms-0 gy-2 mt-4 mb-8">
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Detailed application for the closure of LLP</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>An affidavit stating that the company has no liabilities</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>All partners’ consent is required</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Statement of assets and liabilities certified by a CA</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Income Tax Return statements </span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>e-Form 24 accompanied by an Indemnity Bond</span>
            </li>
          </ul>
          
        </div>
        <div class="col-md-7 col-lg-4">
          <figure class="rounded">
            <img src="{{asset('images/service-icon/file.png')}}" alt="service icon">
          </figure>
        </div>
      
    </div>

  </div>
  <!-- /.container -->
</section>

<!-- Who is a Director -->
<section class="wrapper  mb-10">
  <div class="container">
    <div class="card shadow-lg">
        <div class="row ">
          <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block" data-image-src="{{asset('assets/img/photos/tm1.jpg')}}" style="background-image: url({{asset('assets/img/photos/tm1.jpg')}});">
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <div class="p-6">
              <h2 class="display-5 mb-6">Simplifying LLP Closing Off With JustStart</h2>
              <ul>
                <li><b>Easy & Hassle Free: </b>If the LLP has been inactive for more than a year since incorporation and no business has been done, it can be easily closed.</li>
                <li><b>Minimal Compliances: </b>LLP must comply with certain minimal compliances, which must be followed even if your firm is inactive. Closing the LLP will relieve you of these obligations.</li>
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


<!-- WHY US -->
<section class="wrapper ">
  <div class="container mb-10 ">
    <div class="card p-10 shadow-lg">
      <div class="row align-items-start ">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <h3 class="display-4 mb-4 font-bolder text-center">Why JustStart?</h3>
            
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
              <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0 ">
                        <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Our work strategies
                    </h3>
                    <p class="mb-0">From paper planning to idea execution, we actively achieve benchmark guidelines to ensure each step of the plan is not just carefully laid but successfully converted into reality.</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Our ideology is our soul
                    </h3>
                    <p class="mb-0">JustStart is a platform for those who have the willpower to dream and the drive to achieve. We promise you our commitment, trust, and expertise to generate a hassle-free experience.</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Meet Deadlines
                    </h3>
                    <p class="mb-0">Time is of the essence. Every single day lost is an opportunity lost. Therefore, we take precautionary measures to ensure your business meets all the deadlines you have set.</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Guaranteed Satisfaction
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>What are the ways of closing a limited liability partnership? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>As per legal experts, a business can shut down its operations in the following two ways: </p>
                    <ol>
                      <li>Declaring a company insolvent</li>
                      <li>Closing down business operations</li>
                    </ol>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>Can someone close an LLP before completing one year from the company’s formation?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>No. One year should have passed where the LLP has not done any business since its formation  before its dissolution.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>Can you close an active limited liability partnership as well?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>No. First, the business operations of the LLP should be ceased and at least a period of two years should have been passed before filing its closure application.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>Can an LLP with liabilities and dues pending be closed? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>No. The law typically requires the firm to first close all the accounts and clear all the liabilities before they can be listed for closure. Only after receiving a final statement, can company partners apply to strike off the LLP’s name from the registrar.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>Who is Registrar of Companies (ROC)?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>ROC is a Government office with whom companies get registered</p>
                    <p>Every State has one ROC office except some states.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true" aria-controls="faq-collapse-5"><h2>Can you close an LLP without filing form 24?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                  <div class="card-body">
                    <p>No. Filing form 24 is mandatory to close a limited liability partnership firm. </p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-6">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="true" aria-controls="faq-collapse-6"><h2>How much does it cost to close an LLP in India?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-6">
                  <div class="card-body">
                    <p>The cost of closing an LLP in India may vary from region to region and depend on the services hired by the applicants. If you hire an expert and professional services, you can easily find their services within an affordable budget of Rs. 6000-10,000. However, it is always suggested to gather complete details to avoid paying any hidden charges. </p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-7">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-7" aria-expanded="true" aria-controls="faq-collapse-7"><h2>How long does it take to close a limited liability partnership firm? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-7">
                  <div class="card-body">
                    <p>Given all the documents are prepared accurately and the applicants have hired professional legal help, you can expect to complete the procedure within 15–30 days. In cases of delay, the process may stretch up to two months or more. Therefore, it is best to opt to hire a dedicated team assistant like JustStart.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-8">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-8" aria-expanded="true" aria-controls="faq-collapse-8"><h2>Is closing up a limited liability company (LLP) complex? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-8">
                  <div class="card-body">
                    <p>Some of the steps, like obtaining affidavits and filing form 24, and require extreme care. Thus, the process can be complex if you have a lack of experience in the legal field.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-9">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-9" aria-expanded="true" aria-controls="faq-collapse-9"><h2>What happens if a LLP that has not had any business activity for a year still doesn’t close its doors? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-9" class="accordion-collapse collapse" aria-labelledby="faq-9">
                  <div class="card-body">
                    <p>If a business chooses not to close an LLP even after one year of business inactivity, the law holds them subject to paying a penalty.</p>
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