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

            <p>Register your public limited company online in India with JustStart an excellent option for entrepreneurs and startup founders who require hassle-free assistance with documentation, paperwork filing, and subsequent updates.</p>

            <h5>Get FREE Expert Consultation Today!</h5>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Submit Your Details </span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>99.9% quicker response time</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Kickstart your Public Limited Company Registration </span></li>
            </ul>

            <h3>Get professional help in Public Limited Company Registration</h3>

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
            <h3 class="display-4 mb-4 font-bolder">What is Public Limited Company Registration?</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>Abbreviated as PLC, a public limited company is a type of business structure in which a corporation offers its shares (units of ownership in the company) to the general audience. Upon successful purchase, share buyers become shareholders-who are entitled to enjoy profit margins and bear losses in a company to a limit. Thus, the name Public Limited Company.</p>
            <ul>
              <li><b>Liability of Partnership:</b> Shareholders bear limited liabilities for the loss suffered by the corporation. </li>
              <li><b>Joint Liability:</b> Shareholders do not share joint liability. </li>
              <li><b>Compliances:</b> Number of compliances to be fulfilled by business owners such as ROC, Tax payment, and audit have medium difficulty.</li>
              <li><b>Governing Documents:</b> The governing operations are based on an agreement. Limited number of document preparation required.</li>
              <li><b>Ownership & Management:</b> The shareholders own the public limited companies and are managed by directors.</li>
              <li><b>Members required:</b> Minimum 7 members and Minimum 3 directors</li>
              <li><b>Capital:</b> Unlimited Fundraising</li>
              <li><b>Business scope:</b> Unlimited growth and expansion opportunities</li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <figure class="rounded">
              <img src="{{asset('images/overview/public-limited-company-registration.jpg')}}" alt="public limited company registration" >
            </figure>
          </div>
      </div>
  </div>
</section>

<!-- Why Register -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-orange ">
    <div class="row ">
        
        <div class="col-md-5 col-lg-8" >
          <h2 class="display-6 font-bolder mb-6">Why Register a Public Limited Company in India?</h2>

          <ul>
              <li class="mb-2">Gives ability to raise capital</li>
              <li class="mb-2">Brand awareness</li>
              <li class="mb-2">Gains customer trust</li>
              <li class="mb-2">Lends Legitimacy to business</li>
              <li class="mb-2">Protects business name/ trademark registration</li>
              <li class="mb-2">Tax efficiency</li>
              <li class="mb-2">Potential to be listed as IPO</li>
              <li class="mb-2">Limited liability protection</li>
              <li class="mb-2">Separate legal entity</li>
          </ul>
        </div>
        <div class="col-md-7 col-lg-4" >
          <figure class="rounded">
            <img src="{{asset('')}}images/service-icon/trademark.png" alt="Trademark" />
          </figure>
        </div>
      
    </div>

  </div>
  <!-- /.container -->
</section>

<!-- How To Register -->
<section class="wrapper bg-soft-yellow">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">REGISTER</h6>
            <h2 class="display-4 mb-4 font-bolder">How to Register a Public Limited Company</h2>
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
                <h4 class="fs-20">Document Presentation</h4>
                <p>Minimum 7 members, and min. 3 directors/ DIN number/ PAN/ Identity proof etc.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Apply for DSC (Digital Signature Certificate)</h4>
                <p>Because a public limited company’s registration can be done online, a digital signature is typically required when submitting forms to the portal of the Ministry of Corporate Affairs. A DSC is required for all proposed directors and subscribers to the memorandum and articles of association.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Name Approval</h4>
                <p>The directors and promoters of the company send the proposed name for the business and it is approved by the Ministry of Corporate Affairs (MCA) after careful consideration.</p>
              </div>
            </div>

            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Filling up relevant forms</h4>
                <p>Attach the following forms:</p>
                <ul>
                  <li>SPICe Part b</li>
                  <li>SPICe MOA</li>
                  <li>SPICe AOA</li>
                  <li>SPICe INC 9 Agile Pro</li>
                </ul>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Uploading of forms on MCA</h4>
                <p>Scan and upload the documents.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Get Incorporation certificate</h4>
                <p>The MCA inspects the application based on the document submission and issues a Certificate of Incorporation of the public company.</p>
              </div>
            </div>
          
          </div>
      </div>
  </div>
</section>

<!-- Documents Required -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-orange ">

    <div class="row mb-10">
      <div class="col-lg  -12" >
        <h2 class="display-4 mb-4 font-bolder text-center">Documents Required To Register a Public Limited Company!</h2>
      </div>
    </div>
    <div class="row ">
        <div class="col-lg-8" >
          <ul class="icon-list bullet-bg bullet-orange ms-0 gy-2 mt-6 mb-8">
            <li class="mb-2">
                <span><i class="uil uil-check"></i></span>
                <b>PAN Card:</b>
                <span>A power of attorney for representation purpose</span>
            </li>
            <li class="mb-2">
                <span><i class="uil uil-check"></i></span>
                <b>Identity Proof:</b>
                <span>For Directors/Shareholders Identity Proof-aadhar card/voter id/passport/Driving Licence</span>
            </li>
            <li class="mb-2">
                <span><i class="uil uil-check"></i></span>
                <b>Passport Size Photos:</b>
                <span>(Latest photos of the Directors/Shareholders)</span>
            </li>
            <li class="mb-2">
                <span><i class="uil uil-check"></i></span>
                <b>Business Address Proof:</b>
                <span>(Latest electricity bill or telephone bill of the registered office)</span>
            </li>
            <li class="mb-2">
                <span><i class="uil uil-check"></i></span>
                <b>Rent Contract:</b>
                <span>(If Rented)</span>
            </li>
            <li class="mb-2">
                <span><i class="uil uil-check"></i></span>
                <b>Residential Proof:</b>
                <span>For Directors/Shareholders Resident Proof-Latest Bank Statement/Telephone or Mobile Bill/Electricity or Gas Bill</span>
            </li>
            <li class="mb-2">
                <span><i class="uil uil-check"></i></span>
                <b>NOC:</b>
                <span>(From the Owner)</span>
            </li>
          </ul>
        </div>
        <div class="col-md-7 col-lg-4 pt-6" >
          <figure class="rounded">
            <img src="{{asset('')}}images/service-icon/file.png" alt="service icon" />
          </figure>
        </div>
    </div>
  </div>
  <!-- /.container -->
</section>

<!-- Help  -->
<section class="wrapper bg-soft-yellow">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h3 class="display-4 mb-4 font-bolder">What makes us stand out from the crowd?</h3>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}images/types-of-company-registration.png" alt="types of company registration" />
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
                <h4 class="fs-20">Our work strategies </h4>
                <p>From paper planning to idea execution, we actively achieve benchmark guidelines to ensure each step of the plan is not just carefully laid but successfully converted into reality.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Our ideology is our soul</h4>
                <p>JustStart is a platform for those who have the willpower to dream and the drive to achieve. We promise you our commitment, trust, and expertise to generate a hassle-free experience.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Meet Deadliness</h4>
                <p>Time is of the essence. Every single day lost is an opportunity lost. Therefore, we take precautionary measures to ensure your business meets all the deadlines you have set.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Guaranteed Satisfaction</h4>
                <p>We know quality has no replacement. Thus, we systemise each level of our work to minimise the chances of mistakes before each project passes through our client’s hands.</p>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>Do I have to visit ROC Office for Registering a Private Limited Company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>No there is no need to visit ROC Office. We provide fully automated and hassle free online Company Incorporation Process.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>Who is Registrar of Companies (ROC)? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
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
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>What are the eligible criteria to form a private limited company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>Minimum of two directors</p>
                    <p>Two members, (two shareholders)</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>How much capital is required for private limited company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>No minimum capital is required.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>What are the Advantages of a private limited company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>The trademark renewal process is completely online. There are multiple reasons to get your trademark registrations renewed: </p>
                    <ol>
                      <li>No Minimum Capital</li>
                      <li>Limited Liability</li>
                      <li>Tax Advantages</li>
                      <li>Business Continuity</li>
                      <li>Free & Easy Transfer of Shares</li>
                      <li>FDI Allowed</li>
                      <li>Builds Credibility</li>
                    </ol>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true" aria-controls="faq-collapse-5"><h2>What is MOA & AOA of company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                  <div class="card-body">
                    <p>MOA means Memorandum of Association and AOA means Articles of Association. These are the byelaws or rules based on which important matters like main business of the company or meetings is decided.</p>
                    <p>These are the standard legal documents prepared by Company Secretaries or other professionals during registration of the Company.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-6">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="true" aria-controls="faq-collapse-6"><h2>Is audit compulsory for private limited companies? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-6">
                  <div class="card-body">
                    <p>Yes, Audit is mandatory for every Private Limited Company. Every company must get it audited every year.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-7">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-7" aria-expanded="true" aria-controls="faq-collapse-7"><h2>Is it necessary to have an office to start private limited company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-7">
                  <div class="card-body">
                    <p>Address of the registered office of the private limited company will be required, as the premises will receive the communication from MCA</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-8">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-8" aria-expanded="true" aria-controls="faq-collapse-8"><h2>What is DIN? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-8">
                  <div class="card-body">
                    <p>DIN is a unique Identification Number. Allotted to an individual who is appointed as a director of a company</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-9">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-9" aria-expanded="true" aria-controls="faq-collapse-9"><h2>Can a person become director without DIN? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-9" class="accordion-collapse collapse" aria-labelledby="faq-9">
                  <div class="card-body">
                    <p>No person shall be appointed as a Director of a Company unless he has DIN.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-10">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-10" aria-expanded="true" aria-controls="faq-collapse-10"><h2>Can two companies have same registered office? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-10" class="accordion-collapse collapse" aria-labelledby="faq-10">
                  <div class="card-body">
                    <p>Yes, 2 or more than two companies can be incorporated with the same address. As per companies act, there is no such restriction.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-11">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-11" aria-expanded="true" aria-controls="faq-collapse-11"><h2>What is DSC? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-11" class="accordion-collapse collapse" aria-labelledby="faq-11">
                  <div class="card-body">
                    <p>No person shall be appointed as a Director of a Company unless he has DIN.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-12">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-12" aria-expanded="true" aria-controls="faq-collapse-12"><h2>Does PF, GST is automatically applicable to private Limited? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-12" class="accordion-collapse collapse" aria-labelledby="faq-12">
                  <div class="card-body">
                    <p>No Provident Fund (PF), GST is not automatic applicable. These laws are applicable only after crossing certain threshold limits.</p>
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