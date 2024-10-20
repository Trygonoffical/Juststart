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
            <h3 class="font-bolder mb-4">Get FREE Expert Consultation Today!</h3>  

            <p class="mb-4">Filing your One Person Company’s annual returns with ROC every year before the due date, can get quite hectic. This is why JustStart is a one-stop solution for your OPC’s every legal affair. Our experienced legal consultants can file <b>annual returns of OPC</b> with ease through our hassle-free process. With our assistance by your side, your company will work smoothly as we file annual returns for OPC Company efficiently.</p>

            <p class="fs-20"><b>File Annual Returns For OPC Today!</b></p>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Hassle-Free Process</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Quick Return Filing</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Experienced Legal Experts</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Only for INR 3,899/-</span></li>
            </ul>
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
            <h2 class="display-4 mb-4 font-bolder">ROC Compliance for OPC Company</h2>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>In the last decade, entrepreneurs and startups have drastically transformed the business world. To empower entrepreneurs who are willing to start and handle a full-fledged business on their own, the concept of One Person Company (OPC) was introduced by the Companies Act, 2013. An OPC is also a separate legal entity as a company, and provides limited liability protection to its shareholders, and is easy to establish. Just as a normal company, a One Person Company (OPC) is also required to file the annual returns at the end of the financial year with the ROC. If your OPC is new, the annual return must be filed within 18 months from the date of incorporation to fulfill the <b>ROC compliance for OPC Company in India.</b></p>
          </div>
          <div class="col-md-6 col-lg-5">
            <figure class="rounded">
              <img src="{{asset('images/overview/opc-annual-filing.jpg')}}" alt="opc annual filing" >
            </figure>
          </div>
      </div>
  </div>
</section>

<!-- Forms Required -->
<section class="wrapper bg-soft-yellow">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">FORMS REQUIRED</h6>
            <h2 class="display-4 mb-4 font-bolder">Forms Required for OPC Annual Return Filing</h2>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <p>To efficiently carry out OPC annual return filing, you are required to fill a few necessary forms. JustStart offers OPC annual filing service to help you tick all the right boxes and successfully <b>file annual returns for OPC companies.</b> Our expert legal consultants will assist you in filing all the required forms for OPC annual return filing:</p>
            
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/3d4.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">

            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/clipboard.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">ROC Form AOC 4</h4>
                <p>This is probably the most crucial form that you will be required to file for the <b>annual filings for One Person Company.</b> AOC 4 contains details and annexures related to the profit & loss account, balance sheet, compliance certificate, registered office address, debt details, share and debentures details, and management’s details. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/clipboard.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">ROC Form MGT 7</h4>
                <p>In Form MGT 7 you will be required to fill your One Person Company’s shareholding structure’s details, change in directorship, details of transfer of shares throughout the year.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/clipboard.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">ROC Form ADT 1</h4>
                <p>This form is filed for the appointment of an Auditor. The due date of filing this form would be 14th October. </p>
              </div>
            </div>

          </div>
      </div>
  </div>
</section>

<!-- Why Us -->
<section class="wrapper mt-14">
    <div class="container card p-10 mb-10">
      <div class="row ">
          
          <div class="col-md-5 col-lg-5" >
            <h2 class="display-6 font-bolder">Why JustStart for One Person Company’s Annual Returns Filing?</h2>
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon" />
            </figure>
            
          </div>
          <div class="col-md-7 col-lg-7" >
              <p class="">JustStart is the most credible organization empowering startups and businesses to grow through effective legal solutions. JustStart’s expert legal consultants can assist you in ROC Compliance for your OPC Company in India. Our team is full of adept legal experts that can help your business thrive with valuable legal guidance.</p>

              <div class="card bg-pale-leaf mb-6">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0 ">
                        <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Experienced Consultants 
                    </h3>
                    <p class="mb-0">JustStart offers you a team full of refined legal experts with remarkable industry experience. Our experienced legal consultants consistently assist you with the utmost respect and ensure that your returns are filed on time.</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="card bg-pale-leaf mb-6">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Hassle-Free Return Filing
                    </h3>
                    <p class="mb-0">One of the many reasons why our client retention rates have gone through the roof, is our hassle-free return filing process. We value your time and try to get your OPC’s annual return filed as quickly as possible.</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
          </div>
        
      </div>

    </div>
    <!-- /.container -->
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2> Do all OPC's have to file accounts? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>Yes, every One Person Company is required by the government to file the annual returns every year. </p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>What will happen if my One Person Company’s Returns are not filed? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>If you take the ROC compliance lightly and fail to file your OPC’s annual returns with ROC,  you will be liable to pay heavy fines or may face other grave legal consequences .</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>What is the penalty for late filing of OPC's annual returns? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>As mentioned above, if you surpass the due date of the annual return filing, you’ll be liable to pay a fine of Rs. 100 each day past the due date.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>How long will it take you to file my One Person Company’s annual returns? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>Our team of OPC annual return filing experts will collect the crucial information and details about your company from you and will file the annual return in 2-3 days.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>Is AOC 4 and MGT 7 mandatory for all companies? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>Yes, filing AOC 4 and MGT 7 is mandatory for completing the process of annual return filing for One Person Company.</p>
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