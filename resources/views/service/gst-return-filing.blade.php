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

            <p>GST Return includes the filing of various returns and forms that every taxable person registered under GST is required to file in a financial year.</p>

            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Form simplification</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Save upto 7% in overall tax payment</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>3x faster response than any other legal help</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Easy to connect</span></li>
            </ul>

            <h3>Get professional help in filing GST returns</h3>

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
            <h3 class="display-4 mb-4 font-bolder">Explaining GST Return Filing</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>A GST is an indirect tax imposed by both the central government and state governments depending upon the type of transaction on the consumption and supply of goods and services. Generally, GST is a mandatory amount paid either at the time of receiving payment, upon issuance of an invoice after the purchase of a service or a product, or at the end of supply. GST can also be paid periodically if you are a business owner by following a process for GST return filing.</p>
            
            <p>A <b>GST return filing</b> is a set of documents Containing the details of the sales, purchases, and previous taxes collected by your business on sales and the tax paid on Purchasing of any goods or services within the country. Once you file your GST return, you will need to pay the prescribed amount that you owe to the government. </p>
           
          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="3VrI1s1YOyQ"></div>
          </div>
      </div>
  </div>
</section>

<!-- Advantages -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-fuchsia ">
    <div class="row ">
        
        <div class="col-md-7 col-lg-7">
          <h2 class="display-5 font-bolder mb-6">Benefits of GST Return Filing</h2>

          <p>Since its introduction, GST has been hailed as one of the India’s biggest reforms in taxation services. The tax helped the Indian government simplify various indirect taxes that were imposed by the center and state governments. Here are some of the many benefits that GST has brought:</p>
            
          <ul class="icon-list bullet-bg bullet-fuchsia ms-0 gy-2 mt-2 mb-4">
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Eliminates the cascading effect of tax. </span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Easy compliances</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Harmonization of tax payment and interest rate structure </span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Simple administration </span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Seamless transfer of input tax credit </span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Higher revenue efficiency </span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Decrease the cost of tax collection </span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Improved transparency </span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>100% online process</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Relief in tax burden</span>
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

<!-- Who Should File -->
<section class="wrapper mt-6 mb-10">
  <div class="container">
    <div class="card shadow-lg">
        <div class="row ">
          <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block" data-image-src="{{asset('assets/img/photos/tm1.jpg')}}" style="background-image: url({{asset('assets/img/photos/tm1.jpg')}});">
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <div class="p-6">
              <h2 class="display-5 mb-6">Who Should File GST Returns?</h2>
              <p>
              Ideally, any business owner with an annual turnover of Rs. 40 lakhs or Rs. 20 lakhs (for hilly areas and North-Eastern states) should file a GST return accordingly.
              </p>
              <p>However, there is a classification as to which you should file for your GST return. Let’s see them.</p>

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

<!-- Classification -->
<section class="wrapper bg-dark text-inverse document-required">
    <div class="container px-10 py-12">
      <div class="row ">
        <div class="col-lg-12 mx-auto">
          <h3 class="display-4 text-center text-white mb-8">Classification of GST Returns</h3>
          <p class="text-white mb-10">A GST return is typically filed depending on the type of tax structure you fall under. For example, there are 7 categories of taxpayers as mentioned in the Income Tax Act 1961, such as regular taxpayers, composition taxpayers, E-Commerce operators, TDS deductors, non-resident taxpayers, Input Service Distributor (ISD) and casual taxable persons.</p>
          <p class="text-white mb-10">Based on the type of taxpayer you are, you need to file the GST return, which is as follows:</p>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->

      <div class="row ">
          <div class="col-lg-8 mx-auto">
            <table class="table table-dark table-bordered">
              <tr>
                  <td class="fs-20">Type of GST return </td>
                  <td class="fs-20">Taxpayer category </td>
              </tr>
              <tr>
                  <td>GSTR-1</td>
                  <td>
                    <ul>
                      <li>Every registered person</li>
                      <li>Input service distributor </li>
                      <li>Composition taxpayer </li>
                      <li>Those who want to deduct tax under Section 51 </li>
                      <li>Those who wish to collect tax under Section 52</li>
                    </ul>
                  </td>
              </tr>
              <tr>
                  <td>GSTR-2</td>
                  <td>Suspended </td>
              </tr>
              <tr>
                  <td>GSTR-3 </td>
                  <td>Suspended </td>
              </tr>
              <tr>
                  <td>GSTR-3B</td>
                  <td>
                    <ul>
                      <li>Input service distributor</li>
                      <li>Normal taxpayers </li>
                      <li>Composition taxpayer </li>
                      <li>Online information and database access or retrieval service (OIDAR) provider </li>
                      <li>Non-resident taxable person </li>
                    </ul>
                  </td>
              </tr>
              <tr>
                  <td>CMP-08 (earlier known as GSTR-4)</td>
                  <td>Composition taxpayer with composition scheme </td>
              </tr>
              <tr>
                  <td>GSTR-5</td>
                  <td>Non-resident foreign taxpayers (with business in India)</td>
              </tr>
              <tr>
                  <td>GSTR-5A</td>
                  <td>Online information and database access or retrieval service (OIDAR) provider </td>
              </tr>
              <tr>
                  <td>GSTR-6</td>
                  <td>Input service distributor (ISD) </td>
              </tr>
              <tr>
                  <td>GSTR-7</td>
                  <td>TDS deductors under Section 51 of CGST Act</td>
              </tr>
              <tr>
                  <td>GSTR-8</td>
                  <td>Registered E-commerce operator who collects TCS </td>
              </tr>
              <tr>
                  <td>GSTR-9</td>
                  <td>Annual return to be filed by the taxpayers registered under GST </td>
              </tr>
              <tr>
                  <td>GSTR-9A</td>
                  <td>By Composition taxpayer. Currently suspended </td>
              </tr>
              <tr>
                  <td>GSTR-10</td>
                  <td>Taxpayers whose GST registration got surrendered or canceled </td>
              </tr>
              <tr>
                  <td>GSTR-11</td>
                  <td>Taxpayers with Unique Identification Number </td>
              </tr>
            </table>
          </div>
      </div>
      <!-- /.row -->
      
    </div>
    <!-- /.container -->
</section>


<!-- PROCESS --> 
<section class="wrapper">
  <div class="container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">PROCESS</h6>
            <h3 class="display-4 mb-4 font-bolder">Step by Step GST Return Online Filing Process</h3>
          </div>
      </div>
      <div class="row align-items-start">
          <div class="col-md-5 col-lg-5 position-lg-sticky " style="top: 8rem;">
            <p>It is not a difficult task if you are wondering how to file your GST return. The Indian government has made the process very easy for online applicants.</p>
            
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
                        <h4 class="mb-1">Get the GSTIN</h4>
                        <p class="mb-0">Once you have decided you want to file your GST return, you can either get help from a professional return filing service provider like JustStart or just get counseling. The service provider will get you your GSTIN based on your choice. This process includes completing the forms and uploading them to the portal within a specific period.</p>
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
                        <h4 class="mb-1">Uploading Invoices</h4>
                        <p class="mb-2">After you get your 15-digit GSTIN, it’s time to scan and upload the invoices on the GST portal. You will receive a reference number for each invoice you upload.</p>
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
                        <h4 class="mb-1">Filing outward, inward, and cumulative returns</h4>
                        <p class="mb-2">This step involves filing an outward return, an inward return, and cumulative monthly returns.</p>
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
                        <h4 class="mb-1">Filing Outward supply return</h4>
                        <p class="mb-0">Once you have uploaded the scanned outward returns, invoices, inward returns, or cumulative returns, you need to file the Outward supply return of GSTR-1. The information provided is editable. Therefore, you can check the information filled in and make sure to make edits before final submission. (Please note that after final submission, no changes will be allowed.</p>
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
                          <span>5</span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">GSTR-2 form</h4>
                        <p class="mb-2">Once you have filed the outward supplies form, all the details will be available on GSTR-2A of the form.</p>
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
                          <span>6</span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Verifying the details</h4>
                        <p class="mb-0">This stage asks the applicants to ensure all the details are correct.</p>
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
                          <span>7</span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Filing inward supplies information</h4>
                        <p class="mb-2">On the GSTR-2 form, provide the details of the inward supplies of taxable goods and services.</p>
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
            
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <h2 class="display-4 mt-6 mb-4 font-bolder ">Why Hire JustStart for GST Return Filing
              <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> 
            </h2>
              <ul class="icon-list bullet-bg bullet-blue ms-0 gy-2 mt-2 mb-4">
                <li>
                    <span><i class="uil uil-check"></i></span>
                    <span>JustStart consists of qualified CS, CA, lawyers, and business administrators.</span>
                </li>
                <li>
                    <span><i class="uil uil-check"></i></span>
                    <span>360° Corporate Legal Support</span>
                </li>
                <li>
                    <span><i class="uil uil-check"></i></span>
                    <span>JustStart would be a one-stop-place for incorporation, GST return filing online, and other professional services.</span>
                </li>
                <li>
                    <span><i class="uil uil-check"></i></span>
                    <span>On-Time Service</span>
                </li>
                <li>
                    <span><i class="uil uil-check"></i></span>
                    <span>Super Support and Fast Service (Call, Email, Chat Support)</span>
                </li>
                <li>
                    <span><i class="uil uil-check"></i></span>
                    <span>less expensive than other professionals and service providers</span>
                </li>
                <li>
                    <span><i class="uil uil-check"></i></span>
                    <span>Point-to-Point update and dedicated relationship manager for guidance on upcoming compliance and further Requirements</span>
                </li>
              </ul>
              
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>Who files for GSTR-1? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>Form GSTR-1 is to be furnished by all normal and casual taxpayers, every registered taxable person other than ISD, composition taxpayers, and persons liable to collect tax under Section 52 and A person liable to deduct tax under Section 51.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>Is there a penalty for filing late GST returns? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>Yes. The applicants may be penalized for late GST return filing There are different kinds of penalties prescribed for each kind of delayed return filing.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>Can I check the status of my GST return file? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>Yes. Since GST return filing is an online process, the portal also gives you the opportunity to know your GST return’s status via three modes: </p>
                    <ul>
                      <li>Application Reference Number (ARN)</li>
                      <li>Return Filing Period </li>
                      <li>Status </li>
                    </ul>
                    <p>To do that, you can simply</p>
                    <ul>
                      <li>Step 1: Navigate to gst.gov.in.</li>
                      <li>Step 2: Enter your login information.</li>
                      <li>Step 3: Choose a mode from the drop-down list.</li>
                      <li>Step 4: Click “search”</li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>What are the different GST Return statuses I may encounter? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>After successful submission of the application, you may see either of the following 4 status reflected on the screen: </p>
                    <ul>
                      <li>To be filed </li>
                      <li>Submitted but not filed</li>
                      <li>Filed-Valid: Return Filed </li>
                      <li>Filed-Invalid: Return Filed but tax not paid or short paid</li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>Does someone need to file a GST return even if there is no business activity in a particular year?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>Typically, yes. GSTR-1 and GSTR-3B should be filled in by all registered GST applicants even when there is no business activity. Here, you can mention that there were NIL Sales.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true" aria-controls="faq-collapse-5"><h2>Who is exempted from filing GSTR-1 returns? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                  <div class="card-body">
                    <p>Taxpayers under a composition scheme, NRI taxpayers, input service distributors, and e-commerce operators deducting TCS are exempted from filing GSTR-1.</p>
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