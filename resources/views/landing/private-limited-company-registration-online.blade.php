@extends('layouts.landing')

@section('content')

<section class="wrapper mt-0 bg-dark-blue topbanner">
  <div class="container py-md-4 ">
    <div class="row ">
        <div class="col-md-7 col-lg-7 first-col">
            <h2 class="mt-2 mb-4 font-bolder text-center">
              Private Limited Company Registration <br>Online in India
            </h2>

            <h4 class="text-center mb-10">
              Register Today @ <span class="fs-22 text-blue">Rs. 8,899 <span class="fs-16">(All Incl.)</span></span> in Just 15 days
            </h4>

            <ul class="row ps-4 icon-list bullet-bg mb-2 topbanner-features">
              <li class="col-md-6 col-12">
                <span><i class="uil uil-check fs-22"></i></span>
                <span>Get it done in just 15 days</span>
              </li>
              <li class="col-md-6 col-12">
                <span><i class="uil uil-check fs-22"></i></span>
                <span>From anywhere</span>
              </li>
              <li class="col-md-6 col-12">
                <span><i class="uil uil-check fs-22"></i></span>
                <span>With just one easy tap</span>
              </li>
              <li class="col-md-6 col-12">
                <span><i class="uil uil-check fs-22"></i></span>
                <span>Efficiency at your fingertips!</span>
              </li>
            </ul>

            <div class="mt-6 landing-banner-rating-left d-none d-lg-block">
              @include('includes.landing-rating')
            </div>

        </div>
        <div class="col-md-5 col-lg-5 mb-4">
            <div class="card bg-white mb-2">
              <div class="card-body py-4 px-4">
                  <div class="row landing-form-tel">
                      <div class="col-md-12 mb-3 text-center fs-14">
                          <a href="tel:9315513354" class="ms-2">
                              <i class="uil uil-calling"></i>
                              9315513354
                          </a>
                          <a href="https://api.whatsapp.com/send?phone=919315513354" class="">
                              <i class="uil uil-whatsapp"></i>
                              9315513354
                          </a>
                      </div>
                  </div>
                  <h4 class="mb-4 font-bolder text-center form-heading">Register Your Company Today!</h4>
                  @include('forms.landing-form-banner')
              </div>
            <!--/.card-body -->
            </div>
            
            <div class="mt-6 landing-banner-rating-right d-block d-lg-none">
              @include('includes.landing-rating')
            </div>

        </div>
    </div>
  </div>
</section>

<!-- TimeLine -->
<section class="wrapper mt-10 time-line">
  <div class="container">
      <div class="row gx-lg-8 gx-xl-12 gy-6 process-wrapper line text-center">
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary pe-none mb-4"><span class="number">01</span></span>
          <div class="time-line-box">
            <figure>
              <img src="{{asset('')}}/images/time-line-fill-form.webp" />
            </figure>
            <h4 class="mb-1">Fill Up the Form</h4>
          </div>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary pe-none mb-4"><span class="number">02</span></span>
          <div class="time-line-box" >
            <figure>
              <img src="{{asset('')}}/images/timeline-submit-doc.webp" />
            </figure>
            <h4 class="mb-1">Call to Discuss</h4>
          </div>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary pe-none mb-4"><span class="number">03</span></span>
          <div class="time-line-box" >
            <figure>
              <img src="{{asset('')}}/images/timeline-discuss.webp" />
            </figure>
            <h4 class="mb-1">Detailed Consultation</h4>
          </div>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary pe-none mb-4"><span class="number">04</span></span>
          <div class="time-line-box" >
            <figure>
              <img src="{{asset('')}}/images/timeline-get-company.webp" />
            </figure>
            <h4 class="mb-1">Get Incorporated Company</h4>
          </div>
        </div>
        <!--/column -->
      </div>
  </div>
</section>

<!-- What is -->
<section class="wrapper mt-12 mt-sm-16 bg-light ">
  <div class="container ">
      <div class="card shadow-lg">
        <div class="row gx-0">
          <div class="col-lg-5 image-wrapper bg-image bg-cover rounded-top rounded-lg-start" data-image-src="{{asset('')}}images/pvt-ltd-companies.jpg" style="background-image: url({{asset('')}}images/pvt-ltd-companies.jpg);">
          </div>
          <!--/column -->
          <div class="col-lg-7 p-sm-10 p-6">
              <h2 class="display-5 font-bolder mb-10 text-center text-sm-start">What is a <span class="text-blue">Private Limited Company</span></h2>
              
              <p>Pvt Ltd Company is a privately held corporation with limited shareholders, marked by the suffix Private Limited' in its name. </p>
              
              <p>It mandates a minimum of 2 Directors and 2 shareholders, with at least one director being an Indian resident and citizen. </p>
              
              <p>The registered office must be in India, and directors can also be its shareholders.</p>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
  </div>
  <!-- /.container -->
</section>

<!-- Benefits -->
<section class="wrapper mt-12 mt-sm-16 ">
  <div class="container ">
    <div class="card p-sm-10 p-4 shadow-lg">
      <div class="row align-items-start ">
          <div class="col-md-5 col-lg-5 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon">
            </figure>
          </div>
          <div class="col-md-7 col-lg-7">
            <h2 class="mb-10 display-6 font-bolder text-center text-sm-start">
                <span class="text-blue">Benefits </span>of Pvt Ltd Company Registration
            </h2>
      
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Limited Liability</h3>
                  <p class="mb-0">Shareholders are not personally liable for the company's debts beyond the amount invested, protecting personal assets.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Separate Legal Entity</h3>
                  <p class="mb-0">The company has its own legal identity, enabling it to own assets, enter contracts, and sue or be sued independently.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Perpetual Succession</h3>
                  <p class="mb-0">The company continues to exist even if shareholders change, providing continuity and stability.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>

            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Credibility</h3>
                  <p class="mb-0">Registration enhances trust and credibility with customers, suppliers, and investors, boosting business opportunities.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Access to Funding</h3>
                  <p class="mb-0">Easier access to capital through avenues like equity investment, loans, and grants, facilitating business growth.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Tax Advantages</h3>
                  <p class="mb-0">Eligibility for tax benefits, exemptions, and deductions, reducing the tax burden and improving profitability.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Transferability of Shares</h3>
                  <p class="mb-0">Shares can be transferred among shareholders, facilitating investment and ownership changes.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
              
          </div>
      </div>
    </div>
  </div>
</section>

<!-- Ad Image  -->
<section class="wrapper mt-12 mt-sm-10 bg-light ">
  <div class="container ">
      <div class="row gx-0">
        <div class="col-lg-12 ">
            <figure class="rounded">
              <img src="{{asset('')}}images/launch-business.JPG">
            </figure>
        </div>
      </div>
  </div>
</section>

<!-- Minimum Requirement -->
<section class="wrapper mt-12 mt-sm-16 image-wrapper bg-full bg-image bg-overlay bg-overlay-300" style="background-image:url('{{asset('')}}assets/img/photos/bg2.jpg')" >
    <div class=" container pt-10 p-6" >
      <div class="row align-items-center">
          <div class="col-md-12 col-lg-12 mb-8">
            <h2 class="display-5 font-bolder text-center text-white">
              <span class="text-yellow">Minimum Requirements</span> for Pvt Ltd Company
            </h2>
          </div>     
      </div>

      <div class="card-body p-4 p-xl-4">
        <!-- <div class="row align-items-center gy-4 text-start text-sm-center text-white"> -->
        <div class="row align-items-center gy-4 text-left text-left text-white">
          <div class="col-12 col-lg-6">
            <p class="fs-18">
              <span class="custom-list-circle"><i class="uil uil-check"></i></span>
              Minimum number of 2 Shareholders
            </p>
          </div>
          <!--/column -->
          <div class="col-12 col-lg-6">
            <p class="fs-18">
              <span class="custom-list-circle"><i class="uil uil-check"></i></span>
              Minimum number of 2 Directors
            </p>
          </div>
          <!--/column -->
          <div class="col-12 col-lg-6">
            <p class="fs-18">
              <span class="custom-list-circle"><i class="uil uil-check"></i></span>
              One of the Director must be Indian Resident
            </p>
          </div>
          <!--/column -->
          <div class="col-12 col-lg-6">
            <p class="fs-18">
              <span class="custom-list-circle"><i class="uil uil-check"></i></span>
              Registered Office must be of Indian address
            </p>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
    </div>
</section>


<!-- Required Documents -->
<section class="wrapper mt-12 mt-sm-16 ">
  <div class=" container card p-6 p-sm-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h2 class="display-5 font-bolder text-center text-sm-start">
              <span class="text-blue">Documents Required</span> for Company Registration
            </h2>
          </div>

          <div class="row">
            <div class="col-md-6 col-lg-6 col-12 mb-4">
              <h4 class="mb-6" ><i class="uil uil-file-alt"></i> Identity and Address Proof</h4>
              <div class="row ps-4">
                <ul class="col-md-12">
                  <li class="col-lg-12 col-12 mb-2">
                    Photographs of the proposed directors
                  </li>
                  <li class="col-lg-12 col-12 mb-2">
                    PAN card of all directors
                  </li>
                  <li class="col-lg-12 col-12 mb-2">
                    Identity proof like Aadhar card/Voter ID Card/Driving licence/Passport of all directors
                  </li>
                  <li class="col-lg-12 col-12 mb-2">
                    Address proof like Bank statement/utility bill/telephone bill/Gas bill for the proposed directors
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-12">
              <h4 class="mb-6"><i class="uil uil-file-alt"></i> Registered Office Proof</h4>

              <div class="row ps-4">
                <ul class="col-md-12">
                  <li class="col-lg-12 col-12 mb-2">
                    <b>Utility Bill: </b>Such as electricity bill, water bill, or gas bill, which shows the address of the registered office.
                  </li>
                  <li class="col-lg-12 col-12 mb-2">
                    <b>Rent Agreement: </b>If the premises are rented, a rent agreement along with a no-objection certificate (NOC) from the landlord.
                  </li>
                  <li class="col-lg-12 col-12 mb-2">
                    <b>Property Ownership Proof: </b>If the premises are owned, documents such as property tax receipt, title deed, or sale deed.
                  </li>
                  <li class="col-lg-12 col-12 mb-2">
                    <b>NOC from Landlord: </b>If the premises are rented, a no-objection certificate from the landlord allowing the company to use the premises as its registered office.
                  </li>
                </ul>
              </div>

            </div>
          </div>
          
      </div>
  </div>
</section>

<!-- Final Deliverables -->
<section class="wrapper mt-12 mt-sm-12 bg-light mb-10">
  <div class="container ">
      <div class="card ">
        <div class="row">
          <div class="col-lg-6 p-sm-8 p-4 capsule-section">
              <h2 class="display-5 font-bolder mb-8 text-center text-sm-start">
                <span class="text-blue">Final</span> Deliverables
              </h2>
              <div class="row mb-6">
                <div class="col-lg-12">
                    <span class="btn btn-sm btn-primary rounded-pill ">
                    Digital signature for 2 directors
                    </span>
                    <span class="btn btn-sm btn-primary rounded-pill ">
                    DIN for 2 directors
                    </span>
                </div>
              </div>
              <div class="row mb-6">
                <div class="col-lg-12 ">
                    <span class="btn btn-sm btn-primary rounded-pill ">
                    Incorporation certificate of the company
                    </span>
                    <span class="btn btn-sm btn-primary rounded-pill">
                    Company PAN & TAN card
                    </span>
                </div>
              </div>
              <div class="row mb-6">
                <div class="col-lg-12 ">
                    <span class="btn btn-sm btn-primary rounded-pill ">
                    Memorandum of Association
                    </span>
                    <span class="btn btn-sm btn-primary rounded-pill">
                    ESIC & EPF number
                    </span>
                </div>
              </div>
              <div class="row mb-4">
                <div class="col-lg-12 ">
                    <span class="btn btn-sm btn-primary rounded-pill ">
                    Articles of Association
                    </span>
                    <span class="btn btn-sm btn-primary rounded-pill">
                    Bank account opening support
                    </span>
                </div>
              </div>
              
          </div>
          <!--/column -->
          <div class="col-lg-6 p-10 pt-0" >
            <figure>
                <img src="{{asset('')}}images/Final-Deliverables.jpg" />
            </figure>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
  </div>
  <!-- /.container -->
</section>

@include('component.client-logo-grid')


@include('component.trustpilot-reviews')

<!-- FAQ --> 
<section class="wrapper bg-soft-sky">
  <div class="container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-2 mb-sm-4">
            <h6 class="mb-4 text-yellow">FAQ</h6>
            <h3 class="display-4 font-bolder">LET'S CLEAR ALL THE DOUBTS!</h3>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
          <div class="accordion accordion-wrapper mt-10" id="accordion">
              <div class="card accordion-item">
                <div class="card-header" id="faq-0">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0">What is a private limited company?</button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>A private limited company is a business entity privately owned by shareholders and its shares cannot be traded on a stock exchange.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1">What is the minimum requirement for establishing a private limited company in India? </button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>Under the Companies Act 2013, a few minimum requirements to establish a private limited company are as follows:</p>
                    <ul>
                      <li><b>Shareholders can range from two to 200.</b></li>
                      <li>One of the director must be a citizen of India with permanent residency.</li>
                      <li>Address proof, identity proof, PAN card, DIN, DSC of all directors</li>
                      <li><b>Company name: </b>It is mandatory to have a company name that is unique, indicates the activity that will be carried out by the company, and mentions “private limited” at the end.</li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2">What is the process of online private limited registration services?</button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>Private limited registration consultants layout a clear plan on the applicants’ behalf so the process is not delayed and you can focus on growing your business instead of wasting time on preparing piles of paperwork.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3">Can my private limited company name get rejected?</button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>Yes. A company’s name can get rejected if it already exists or matches another registered trademark or another pvt ltd name. Ensure that all these names do not have any close resemblance to other registered pvt ltd business entities.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4">Can I submit my documents for private limited company registration online?</button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>Yes. MCA offers the facility for electronic submission of documents for the ease of applicants and to obtain the certificate. However, the certificate issuance may take up to a week to process. </p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true" aria-controls="faq-collapse-5">Is there any disadvantage to setting up a private limited company? </button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                  <div class="card-body">
                    <p>Like any other risk involved in business, private limited companies do have certain restrictions. For example, private limited companies do not allow share transferability freely on a stock exchange. Also, the registration is a tedious process that can take a long time if not done by experienced and reliable online consultancy service </p>
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