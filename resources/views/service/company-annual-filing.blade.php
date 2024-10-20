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

            <h5 class="mt-6">File Annual Return of Your Private Limited Company Through Our Assistance!</h5>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Research-oriented Team</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Expert Assistance</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>99% Quicker Response Time</span></li>
            </ul>

            <h3>Quick ROC Return Filing for Pvt. Ltd. Company for Just <span class="text-blue">INR 3899/-</span> Through Our Credible Assistance.</h3>

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
            <h3 class="display-4 mb-4 font-bolder">What is Private Limited Company Annual Filing?</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>Let us begin with firstly understanding what ROC return filing is. Every registered company, including <b>section 8 company</b>, private limited company, one-person company, and a limited company is required by The ROC to file their annual returns every year. The process requires the company officials to conduct an Annual General Meeting and file annual accounts with the Registrar of Companies.</p>
            
            <p>The AGM must be organized every year within 6 months from the end of the financial year. If the company has been established recently, the first AGM should be held within 18 months from the date of incorporation or 9 months before the end of the financial year. </p>
          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <figure class="rounded">
              <img src="{{asset('images/overview/company-annual-filing.jpg')}}" alt="company annual filing" >
            </figure>
          </div>
      </div>
  </div>
</section>  

<!-- Docs Required -->
<section class="wrapper mt-10  bg-soft-yellow">
  <div class="container p-10 mb-10 ">
    <div class="row text-center">
      <div class="col-md-12">
        <h6 class="mb-4 text-yellow">DOCUMENTS</h6>
        <h2 class="display-5  font-bolder ">What Documents Are Required While Filing Annual Returns?</h2>
      </div>
    </div>
    <div class="row mt-10">

        <div class="col-md-7 col-lg-4 pt-6">
          <figure class="rounded">
            <img src="{{asset('images/types-of-company-registration.png')}}" alt="types of company registration" >
          </figure>
        </div>
        
        <div class="col-md-5 col-lg-8">
          <p>Annual return filing can get hectic without the help of experienced professionals. That is why JustStart takes the stress of filing annual returns away from your shoulder and does it with ease in an extremely professional manner. One of the main steps while filing your company’s annual return is to find the documents required to file the return with the ROC. The documents required to file the annual return are as follows:</p>
          
          <ul class="row icon-list bullet-bg bullet-yellow ms-0 gy-2 mt-2 mb-4">
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Profit & Loss Account</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Compliance Certificate</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Registered Office Address</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Register of Member</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Debt Details</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Balance Sheet</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Shares and Debentures Details</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Information About The Company’s Management</span>
            </li>
          </ul>

          <p>Once you share these crucial documents with our team of experts, we will commence the process of filing your company’s annual return with the ROC. </p>
          
        </div>
        
      
    </div>

  </div>
  <!-- /.container -->
</section>

<!-- Forms Required -->
<section class="wrapper bg-soft-fuchsia">
  <div class="container p-10 mb-10  ">
    <div class="row ">
        <div class="row text-center">
          <div class="col-md-12">
            <h6 class="mb-4 text-yellow">REQUIRED FORMS</h6>
            <h2 class="display-5  font-bolder ">Form Requirements for ROC Return Filing for Pvt. Ltd. Company</h2>
          </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-7 col-lg-4 pt-6">
          <figure class="rounded">
            <img src="{{asset('images/types-of-company-registration.png')}}" alt="types of company registration" >
          </figure>
        </div>
        <div class="col-md-5 col-lg-8 pt-10">

          <p>Once our team of experts goes through your documents and scrutinizes them thoroughly, we will be filling out three important forms that are part of the annual return filing process. Following are the three forms that a company is required to file:</p>

          <ul class="icon-list bullet-bg bullet-fuchsia ms-0 gy-2 mt-2 mb-4">
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>ROC Form MGT 7:</b> This form contains the important details of the shareholding structure, details of the transfer of shares during the year, and the details of any change in directorship. </span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>ROC Form AOC 4:</b> AOC 4 is another crucial form you are required to fill that contains the detail and annexure relating to the balance sheet of the company, profit & loss account, registered office address, register of members, compliance certificate, shares and debentures details, Debt details and information about the management of the company.</span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>ROC Form ADT 1:</b> This form is filled for the appointment of the auditor. As per section 139(1)  of the Companies Act, it is compulsory for every company to fill out the ADT 1 form to inform the ROC about the appointment of its auditor.</span>
            </li>
          </ul>
          
        </div>
        
      
    </div>

  </div>
  <!-- /.container -->
</section>

<!-- WHY US -->
<section class="wrapper  ">
  <div class="container mb-10 ">
    <div class="card p-10 shadow-lg">
      <div class="row mb-10">
          <div class="row text-center">
            <div class="col-md-12">
              <h6 class="mb-4 text-yellow">Why JustStart</h6>
              <h2 class="display-5  font-bolder ">Why JustStart for Private Limited Company Annual Filing <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> </h2>
            </div>
          </div>
      </div>
      <div class="row align-items-start ">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <p>JustStart is one the most credible business management companies offering a wide array of legal solutions to help your business thrive. Our team of exceptional legal experts help you file your company’s annual returns before the due date. Through our legal expertise, we have elevated many businesses across India. Our legal experts have profound experience in the industry and greatly assist our clients. </p>
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon" />
            </figure>
          </div>

          <div class="col-md-6 col-lg-6 pt-2">  
              
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Dynamic Legal Solutions</h3>
                  <p class="mb-0">We offer a wide array of dynamic legal solutions to businesses and startups. Our solutions are focused on enhancing your business and letting it thrive smoothly without any form of legal issues in between. </p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Expert Consultants</h3>
                  <p class="mb-0">Our team of expert consultants offer you credible and constructive advice to help you take the best decisions for the best interest of your company.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Maintenance Services</h3>
                  <p class="mb-0">We strive to help your business grow with our exceptional and quick maintenance services. Our maintenance services focus on ensuring that your company always meet the legal requirements.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Client Satisfaction</h3>
                  <p class="mb-0">With an unparalleled experience in legal consultancy, we provide you with the best legal solutions. Our services focus on making our clients attain the maximum satisfaction.</p>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>Do all companies have to file accounts?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>A company is required to file accounts every year . It does not matter whether your company has been successful or dormant throughout the year, all limited companies must prepare company accounts at the end of a financial year to depict the performance of the company throughout the year.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>What will happen if ROC Returns are not filed?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>Not filing the ROC returns is not something a company should ever practice. If the company has failed to file the ROC return, the company and its directors will be liable to pay the penalties for non-filing. If the company fails to file the returns for 2 financial years, then it will obtain the status of a dormant company and the Registrar may issue notice to the company and its officials.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>What is the penalty for late filing of ROC return?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>If the company has not filed ROC returns, the company and its directors will be liable to pay fine of Rs.50,000.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>How long will it take you to file my annual returns?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>Our team of experienced legal consultants have filed ROC returns for a great number of companies. If the documents are compiled already, our team will process and complete your company’s ROC return filings in 2 or 3 days.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>Is MGT 7 and AOC 4 mandatory for all companies? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>Yes, both MGT 7 and AOC 4 forms must be filed by the company under the Companies Act, 2013. MGT 7 form must be filed every year by registered companies during filing the annual return. When it comes to AOC 4, if a company has failed to file AOC 4 form, penalties will be imposed.</p>
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