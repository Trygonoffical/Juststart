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

            <p>Being a business owner is not easy since there are many underlying difficulties. A stretch of unsuccessful years seldom forces enterprises to shut down and choose to close a private limited company.</p>

            <p class="fs-20"><b>Get Expert Advice Right Away!</b> </p>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Real Time Assistance</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Hassle Free Online Document Submission</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Experts Make The Closure Of Company Easy For You</span></li>
            </ul>

            <h3>Close Private Limited Company at Just <span class="text-blue">Rs. 15,899/-</span></h3>

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
            <h3 class="display-4 mb-4 font-bolder">Close a Private Limited Company in India</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>The process of closing a private limited company is known as strike off or company closure. Company closure is done under the newly notified companies (Removal of Names of Companies) rules, 2016 which are governed by section 248 of the Companies Act, 2013. If you are not running your company, we recommend you close your Private Limited Company (PLC).</p>
            <p>The company is a perpetual entity and cannot be dissolved by any outside force. It is created by law and in order to close it down, one must follow the given process laid out by law. Closing a private limited company in India can be done in numerous ways, but out of all of them, applying for striking off is the least time-consuming. </p>
            <p>After all the compliance measures have been met, it is possible to remove the company’s name. The registrar eliminates the company’s name from the register of companies after receiving consent to strike out the name, at which point the company ends.</p>
           
          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <figure class="rounded">
              <img src="{{asset('images/overview/closure-of-private-limited-company.jpg')}}" alt="closure of private limited company" >
            </figure>
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
            <h3 class="display-4 mb-4 font-bolder">Pvt Ltd Company Closure Process</h3>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <p>There are different viable ways of closing a Pvt Ltd company such as compulsory winding up and voluntary winding up. Our professionals carry years of experience and have aided numerous clients in closing a pvt ltd company. For better understanding, checkout the quick and easy pvt ltd company closure process outlined below.</p>
            
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
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
                <h4 class="fs-20">Step 1</h4>
                <p>The initial step is to fill in the required details asked in the pvt ltd company closure form and submit the documents.</b></p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Step 2</h4>
                <p>The affidavit for company closure and other relevant documents will be drafted by our professionals and submitted for your signature.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Step 3</h4>
                <p>We’ll submit your most recent statement of accounts certified by a CA along with the closure application to the MCA.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-navy me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Step 4</h4>
                <p>Once ROC approves the application, The Pvt. Ltd. business can be closed lawfully.</p>
              </div>
            </div>

          </div>
      </div>
  </div>
</section>

<!-- Learn more -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-fuchsia ">
    <div class="row ">
        
        <div class="col-md-5 col-lg-8">
        <h2 class="display-5 font-bolder mb-6">Learn more about the closure of a private limited company</h2>
          
          <p>Not every business idea is implemented in the same manner it was thought of, due to some reasons as things don’t work out the way you wanted and that’s why you might think to close a private limited company. </p>
          
          <p>Closing a private limited company isn’t an easy thing, and it’s important to adhere to all laws and regulations when doing so. One of the ways to voluntarily cease business is by liquidating your investment, but there are other legal methods as well. In this, we’ll go over how one might voluntarily close their private limited company. </p>

          <p>The process of closing a private limited company is not straightforward. You have to abide by governmental laws and regulations including filing your final accounts, paying your outstanding taxes and submitting documents.</p>
          
        </div>
        <div class="col-md-7 col-lg-4">
          <figure class="rounded">
            <img src="{{asset('images/service-icon/file.png')}}" alt="service icon" >
          </figure>
        </div>
      
    </div>

  </div>
  <!-- /.container -->
</section>

<!-- Different ways -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-orange ">
    <div class="row ">
        
        <div class="col-md-12 col-lg-12">
          <h2 class="display-5 font-bolder mb-6">Different ways of closing a private limited company</h2>
          
          <h4>Closure of the company by ROC by declaring it as defunct</h4>
          <p>When a company is inactive for two years or more, it can be easy to forget about it. However, the easiest way to handle this situation is by lodging an application in Form STK-2 if it has been inactive for over two years or if no business has been started since incorporation. These applications are filed with the registrar of the company.</p>
          
          <h4 class="mt-6">Voluntary Wind Up of the Company</h4>
          <p>With the approval of ¾ of shareholders, a company’s board of directors or management can apply to NCLT for the voluntary wind up. This is the process where all financial difficulties and frauds are addressed by an insolvency professional who will recommend an appropriate dissolution strategy and asset liquidation plan that honors all legal claims. All matters considered, on the recommendation of the IRP, NCLT passes the order for winding down operations and dissolves the company.</p>

          <h4 class="mt-6">Compulsory Wind Up of a Company By NCLT</h4>
          <p>According to the law, voluntary or compulsory liquidation of company can be initiated by an application made by creditors, or by a notice for compulsory winding-up given by the central government or ROC. The official liquidator is appointed after passing a resolution for its winding up. After that, the assets and liabilities are valued at the time of winding-up and a report is presented in equal shares monthly. After that, NCLT sanctions the liquidation order.</p>
          
      </div>
      
    </div>

  </div>
  <!-- /.container -->
</section>


<!-- Documents Required -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-fuchsia ">
    <div class="row ">
        
        <div class="col-md-7 col-lg-7">
          <h2 class="display-5 font-bolder mb-6">Documents required for the Closure of a Private Limited Company</h2>
            
          <ul class="icon-list bullet-bg bullet-fuchsia ms-0 gy-2 mt-2 mb-4">
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Every ITR and return submitted to the ROC</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Board decision authorizing the closure</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Statements made by each director</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Bond of Indemnity from each director</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>75% of shareholders must agree</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Statement of closure for a Bank</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Certified accounting statement certified by CA</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Proof of partners’ identities and current addresses</span>
            </li>
          </ul>

        </div>

        <div class="col-md-5 col-lg-5" >
          <figure class="rounded">
            <img src="{{asset('')}}images/service-icon/file.png" alt="service icon" />
          </figure>
        </div>

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
            
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
              <h2 class="display-4 mt-6 mb-4 font-bolder ">Why choose JustStart for Private Limited Company Closure <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> </h2>
              <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0 ">
                        
                    </h3>
                    <p class="mb-0">At JustStart, we pride ourselves on being a fully automated and tech enabled portal for companies incorporation and its compliance management. We have a team of legal professionals with years of experience behind us, and we use our tech capabilities to execute all legal work for our valuable clients.</p>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>What are the benefits of the closure of a private limited company?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>The closure of a company is the best thing to do when a company isn’t running properly or not generating revenue. The closure of a private limited company would be beneficial in the following ways:</p>
                    <ol>
                      <li>Reduces the annual compliance expense.</li>
                      <li>No danger of noncompliance.</li>
                      <li>No possibility of severe sanctions or legal action.</li>
                      <li>There is no chance of foreclosure.</li>
                    </ol>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>What is the time limit to file the closure documents with the Registrar?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>Within 30 days after the day the assets and liabilities statement were signed, the closing paperwork must be submitted.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>What is the time duration expected to close a private limited company?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>It usually takes 90 days after submitting the application to the Ministry of Corporate Affairs for the company to be removed from MCA records.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>What happens to assets when you close a limited company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>You are not permitted to trade or undertake any commercial operations via that limited company once your company has been shut off. Any assets still in the company’s possession when it is struck off become the crown’s property.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>Do I have to pay corporation tax if I close my company?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>Yes, a certain amount of tax may be payable on the surplus of assets available in the company before its distribution with the shareholders.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true" aria-controls="faq-collapse-5"><h2>What happens when a Pvt Ltd company is dissolved?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                  <div class="card-body">
                    <p>The co is no longer included on the register of companies maintained by ROC.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-6">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="true" aria-controls="faq-collapse-6"><h2>Can shareholders close a company?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-6">
                  <div class="card-body">
                    <p>Yes, shareholders can close a company if approved by a 75% majority.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-7">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-7" aria-expanded="true" aria-controls="faq-collapse-7"><h2>What are the factors that contributed to the closure of the business? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-7">
                  <div class="card-body">
                    <p>Common reasons for business failure include poor location, inexperience, poor management, insufficient cash, unplanned expansion, personal use of funds, excessive investment in fixed assets, and unsatisfactory credit arrangements. But not every company fails and closes.</p>
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