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

            <p class="mb-4">The primary office of a company, where all correspondence from governmental agencies about the firm is sent, is known as its registered office. The registered office of a business or LLP must be declared by the promoters at incorporation, and specific papers must be kept there.</p>

            <p class="fs-20"><b>Easy & Convenient Closing OPC Company</b></p>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Complete One Person Company Closure online easily with JustStart and shake your liabilities off without worrying about the age-long paper filling process. </span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>100% Online process </span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Documentation as per Companies Act 2013</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Secured payment gateway </span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Great After Sale Service </span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>FREE expert consultation</span></li>
            </ul>

            <h3>Get Started by paying just <span class="text-blue">Rs. 15,899</span> inclusive of all taxes</h3>

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
            <h2 class="display-4 mb-4 font-bolder">Everything About Closure of OPC company</h2>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>Closing an OPC simply means an act of ceasing the operations of a business by it. There may be various reasons leading to one person company closure, all of which must be mentioned to the government of India while filling the application under the 248 section of the Companies Act 2013 governed by the Ministry of Corporate Affairs (MCA).</p>
          </div>
          <div class="col-md-6 col-lg-5">
            <figure class="rounded">
              <img src="{{asset('images/overview/closure-of-opc-company.jpg')}}" alt="closure of opc company" >
            </figure>
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
            <h2 class="display-4 mb-4 font-bolder">Process of Closing OPC Company in India</h2>
          </div>
      </div>
      <div class="row align-items-start">
          <div class="col-md-5 col-lg-5 position-lg-sticky " style="top: 8rem;">
            <p>Although OPC has just one director/founder/owner performing the operations, the business entity is legally required to complete all the compliance just like a Private Limited Company. By the book of rules, this also means completing all the paperwork on time. </p>

            <p>If you are not familiar, the closure of OPC is a fairly lengthy process , but it is relatively easy as well. Additionally, hiring a professional to help work things out for you makes the online filing easier. But let’s check out the process of closing an OPC step by step. </p>
            
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
                        <h4 class="mb-1">Drafting Documents</h4>
                        <p class="mb-2">Our extraordinary team of lawyers, CAs, and CS will draft the necessary paperwork for you. We will compile all your sensitive details into a collective document, giving due care to your right to privacy, and safely register your signature to complete the DSC (Digital Signature) process.</p>

                        <p><b>We will assist you in:</b></p>
                        <ul>
                          <li><b>Gathering the information: </b>Gathering the information- Name, business details, official address, reason of closing, filling the application, etc. </li>
                          <li><b>Create the draft: </b>We will prepare a digital file with all the important details that you provide and fill the information. </li>
                          <li><b>Review the draft: </b>We will carefully take a look at all the digital copies of  DSC, NOC, STK-2 form filled, and other documents, and coordinate with you for more information.</li>
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
                          <span>2</span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Getting NOC</h4>
                        <p class="mb-0">The individual seeking to file for the closure of a one person company online is required to ensure that he/she has repaid the debts of all creditors, disposed of all the assets, and closed company bank accounts (whatsoever). </p>
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
                        <h4 class="mb-1">Notice by ROC</h4>
                        <p class="mb-0">Once we are done filing the DSC form, we will proceed to file for the closure of a one person company. At this stage, the Registrar of Companies will evaluate all the paperwork for any mistakes and, if perfect, will approve the closure of OPC online. You will receive the status of the approval via email. </p>
                        <p class="mb-0">Please note that the ROC may disapprove of the closure of OPC in case that he/she finds any paperwork not duly completed. To avoid such delays, it is recommended to hire professional help like JustStart. </p>
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
                        <h4 class="mb-1">Closure of One Person Company Online</h4>
                        <p class="mb-0">After the successful completion of all stages like DSC filing, document submission, getting approval by ROC, your closure of OPC company is finally done</p>
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

<!-- Required Documents -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-fuchsia ">
    <div class="row ">
        
        <div class="col-md-5 col-lg-8" >
          <h2 class="display-6 font-bolder">Documents Required for OPC Company Closure</h2>

          <ul class="icon-list bullet-bg bullet-fuchsia ms-0 gy-2 mt-8 mb-8">
            <li class="">
                <span><i class="uil uil-check"></i></span>
                <span>An indemnity bond issued by Directors.</span>
            </li>
            <li class="">
                <span><i class="uil uil-check"></i></span>
                <span>Company’s latest bank statements</span>
            </li>
            <li class="">
                <span><i class="uil uil-check"></i></span>
                <span>Account statements detailing the assets and liabilities of the Company properly audited by a CA</span>
            </li>
            <li class="">
                <span><i class="uil uil-check"></i></span>
                <span>An affidavit (STK 4) provided by sole director</span>
            </li>
            <li class="">
                <span><i class="uil uil-check"></i></span>
                <span>Resolution signed by a solitary member</span>
            </li>
          </ul>

          <p><b>Optional Documents (As required)</b></p>

          <ul class="icon-list bullet-bg bullet-fuchsia ms-0 gy-2 mt-2 mb-4">
            <li class="">
                <span><i class="uil uil-check"></i></span>
                <span>Bank account closure certificates</span>
            </li>
            <li class="">
                <span><i class="uil uil-check"></i></span>
                <span>Company PAN card</span>
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

<!-- Required of One Person Company Closure -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-fuchsia ">
    <div class="row ">
        
        <div class="col-md-12 col-lg-12" >
          <h2 class="display-6 font-bolder">Requirements of One Person Company Closure</h2>

          <ol class="mt-6 mb-2">
            <li>
              The company must not have changed its name at least or shifted its registered office address three months prior to applying for the closure of a one person company online.
            </li>
            <li>
              The registered OPC shouldn’t have disposed off any property or rights held by it immediately or three months before applying for closure. 
            </li>
            <li>
              The business entity mustn’t have engaged in any illegal activity liable to be condemned by the Indian Government.
            </li>
            <li>
              The registered business should not have made any requests to the Tribunal for sanctioning of a compromise or any agreement prior to three months of applying for closure of OPC.
            </li>
            <li>
              The procedure to strike off the name of OPC should be done by an active company.
            </li>
          </ol>
          
        </div>
      
    </div>

  </div>
  <!-- /.container -->
</section>


<!-- Methods to close one person company -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-fuchsia ">
    <div class="row ">
        <div class="col-md-12 col-lg-12" >
          <h2 class="display-6 font-bolder">Methods to close one person company</h2>

          <p>There are typically two ways to close OPC 1) Striking Off and 2) Winding Up</p>

          <ul class="mt-8 mb-8">
            <li>
                <b>Striking Off: </b>
                Another procedure to close an OPC is by getting the company through a fast track exit scheme. This involves not conducting any business operations for one year and declaring a company defunct. But make sure that the company doesn’t have any assets or liabilities.
            </li>
            <li>
              <b>Winding Up: </b> This process requires obtaining consent from the creditors, participants, and management board. After receiving the consent, the OPC can legally register a request online to close the organization. But know that winding up is a long process and may require elaborate documentation like disclosing company assets and liabilities.
            </li>
            <li>
                <span>Account statements detailing the assets and liabilities of the Company properly audited by a CA</span>
            </li>
            <li>
                <span>An affidavit (STK 4) provided by sole director</span>
            </li>
            <li>
                <span>Resolution signed by a solitary member</span>
            </li>
          </ul>
          
        </div>
    </div>
    <div class="row ">
        <div class="col-md-12 col-lg-12" >
          <h2 class="display-6 font-bolder">Why Choose JustStart?</h2>
        </div>
    </div>
    <ul class=" row icon-list bullet-bg bullet-fuchsia ps-4 mt-2 mb-4">
      <li class="col-lg-6 mb-4">
          <span><i class="uil uil-check"></i></span>
          <span>Unbiased customer support </span>
      </li>
      <li class="col-lg-6 mb-4">
          <span><i class="uil uil-check"></i></span>
          <span>5 Star Customer Satisfaction</span>
      </li>
      <li class="col-lg-6 mb-4">
          <span><i class="uil uil-check"></i></span>
          <span>Transparent Payment</span>
      </li>
      <li class="col-lg-6 mb-4">
          <span><i class="uil uil-check"></i></span>
          <span>Hassle-Free Online Process</span>
      </li>
    </ul>

  </div>
  <!-- /.container -->
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>How long does it take to dissolve a One Person Company online?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>A closure of a one person company means ceasing the operations of a business identity run by a sole owner (can also be a director) such as no sales & purchase, no customer dealing, no online or offline activity in any way that would add to the business’s income. Additionally, anyone looking to close an OPC online must fulfill a few requirements that we already discussed in the above sections.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>How long does it take to dissolve a One Person Company online?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>Well, the procedure (as already mentioned) can be a lengthy one, consuming up to 15 days to 3 months. However, hiring professionals to do the job for you will surely shorten the process by one to two weeks. The quickness of OPC Closure also depends on how well your documents to be submitted to MCA are prepared in advance.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>When can an OPC be called completely dissolved?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>Once the applicant has fulfilled requirements like document submission and obtaining an NOC, the ROC will usually publish a list of companies that have been officially removed from government records. Therefore, the company can be considered closed from the date of the publication of the list in the official Gazette. </p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>Why is it necessary to intimate the ROC for closing the One Person Company?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>It is mandatory to inform the Registrar of Companies about the closure of OPC in order to update the MCA data and relieve the company of any legal complications that may follow due to unawareness.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>Why is it a good idea to close a one person company?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>Well, it is only logical to dissolve the business entity if it is not running as it will relieve you of all the yearly compliance costs that you otherwise need to fulfill, such as ROC Returns, Income tax filings  saving you from high-penalties and prosecutions in case of non-fulfillment of the mentioned.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
               <!--/.accordion-item -->
               <div class="card accordion-item">
                <div class="card-header" id="faq-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true" aria-controls="faq-collapse-5"><h2>Is it necessary to get the approval of the board of directors to close one person's company in India?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                  <div class="card-body">
                    <p>Yes. The OPC must submit a consent letter along with the one-person company closure online application form that clearly declares that the board members have given their approval.</p>
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