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

            <p>If you are looking to file your Limited Liability Partnership’s annual filing, our expert legal consultants will help you through our lightning fast process. Every Limited Liability Partnership is required to file their annual returns every year before the given deadline. JustStart helps you file your LLP’s annual returns before the deadline to help you run your business smoothly. </p>

            <h5>File Your LLP’s Annual Returns Today!</h5>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Expert Legal Consultants</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Quick Return Filing</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Effective Process</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Only for INR 2,999/-</span></li>
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
            <h3 class="display-4 mb-4 font-bolder">Annual Compliance for LLP Company</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>Limited Liability Partnership (LLP) is a unique form of company which can have minimum 2 partners, and can go on to have unlimited partners as there is no maximum limit for the number of partners. Every LLP is required by the ROC to file the annual returns within 60 days from the end of the financial year. For a Limited Liability Partnership, the financial year begins on the 1st April and ends on the 31st of March. </p>
            
            <p>JustStart’s exceptional team of legal experts offers you a quick and hassle-free annual filing process with a minimal service fee. Through our annual returns filing service, we ensure that your <b>Limited Liability Partnership’s</b> annual returns are filed on time without any scope of errors. </p>
          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <figure class="rounded">
              <img src="{{asset('images/overview/roc-compliance-for-opc.jpg')}}" alt="roc compliance for opc" >
            </figure>
          </div>
      </div>
  </div>
</section>  

<!-- Forms Required -->
<section class="wrapper mt-10">
  <div class="container card p-10 mb-10 bg-soft-fuchsia ">
    <div class="row ">

        <div class="col-md-7 col-lg-4 pt-6">
          <figure class="rounded">
            <img src="{{asset('images/types-of-company-registration.png')}}" alt="types of company registration" >
          </figure>
        </div>
        
        <div class="col-md-5 col-lg-8">
          <h2 class="display-5 font-bolder mb-6">Forms Required To Be filed for LLP Company</h2>

          <p>To carry out Annual filings for Limited Liability Partnership with the ROC, you are required to fill a number of forms. These forms are filled in the beginning of your ROC annual returns filing. Our legal experts will walk you through the process and fill the required forms shared below:</p>
          
          <ul class="icon-list bullet-bg bullet-fuchsia ms-0 gy-2 mt-2 mb-4">
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Form 11: </b>This form contains the details of the capital invested by each partner throughout the year. Our team will help you fill the Form 11 before the deadline which is 30th of May each year.  
                </span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Form 8: </b>This form is also known as Statement of Account & Solvency. You will be required to share your company’s financial transactions details under this form to fill it. JustStart’s team of legal experts help you fill the Form 8 quickly through our hassle-free process before the deadline which is 30th October each year. </span>
            </li>
          </ul>
          
        </div>
        
      
    </div>

  </div>
  <!-- /.container -->
</section>

<!-- Consequences  -->
<section class="wrapper mt-10">
  <div class="container card p-10 mb-10 bg-soft-yellow ">
    <div class="row ">

        <div class="col-md-7 col-lg-4 pt-6">
          <figure class="rounded">
            <img src="{{asset('images/types-of-company-registration.png')}}" alt="types of company registration" >
          </figure>
        </div>
        
        <div class="col-md-5 col-lg-8">
          <h2 class="display-5 font-bolder mb-6">Consequences for Not Filing Annual Returns</h2>

          <p>As mentioned above, filing your Limited Liability Partnership’s annual returns every year is mandatory. Even if your business did not function throughout the year, you will still be required to file the annual returns every year. If you fail to file your annual returns with ROC every year, you may face various fines and penalties as prescribed under the LLP Act.</p>

          <p>Fines and penalties may seem like a minimal amount, but if you delay your annual filings for a long period of time, the fine may burden your finances significantly. JustStart’s legal experts help you avoid paying such fines through their effective and quick assistance in your LLP’s legal affairs. </p>
          
        </div>
        
      
    </div>

  </div>
  <!-- /.container -->
</section>

<!-- WHY US -->
<section class="wrapper  ">
  <div class="container mb-10 ">
    <div class="card p-10 shadow-lg">
      <div class="row align-items-start ">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <h2 class="display-4 mt-6 mb-4 font-bolder">Why JustStart for Limited Liability Partnership Annual Returns Filing
              <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> 
            </h2>
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6 pt-6">
            

            <p>JustStart is one the most credible business management companies offering a wide array of legal solutions to help your business thrive. Our team of exceptional legal experts help you file your company’s annual returns before the due date. Through our legal expertise, we have elevated many businesses across India. Our legal experts have profound experience in the industry and greatly assist our clients. </p>
              
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-0 ">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Expertise
                  </h3>
                  <p class="mb-0">Over the years, we have helped many companies through our constructive solutions. JustStart’s legal expertise can help you carry out your LLP’s Annual Return Filing.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-0 ">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Customer Satisfaction
                  </h3>
                  <p class="mb-0">We strive to deliver effective and functional solutions to help our clients achieve their organizational objectives. Through our solutions, we have helped countless clients attain client satisfaction.</p>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>Do all LLP’s have to file accounts? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>Yes, all Limited Liability Partnerships are required to file annual returns with the ROC. If you would like to know more about LLP, reach out to our experts.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>What will happen if ROC Returns are not filed? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>Failing to file your business’s annual returns will have grave consequences. You must file your LLP’s annual returns every year even if your business was inactive throughout the year.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>What is the penalty for late filing of ROC return? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>The penalty is charged depending upon the delay in filing as prescribed under the act. </p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>How long will it take you to file my annual returns? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>Our team of experienced legal consultants have filed ROC returns for a great number of companies. If the documents are compiled already, our team will process and complete your LLP’s ROC return filings in 2 or 3 days.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>Is Form 8 and Form 11 mandatory for all companies? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>Yes, both Form 8 and Form 11 must be filed by the LLP under the LLP Act 2008. If an LLP fails to fill these two forms, penalties will be imposed.</p>
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