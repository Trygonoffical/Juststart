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

            <p>Trademark Renewal allows a trademark to remain permanent and perpetual by simply completing an application and paying the required fee. Applicants can submit the <b>trademark renewal application</b> within six months before the expiration date.</p>

            <h5>Get FREE Expert Consultation Today!</h5>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Renew your trademark with Juststart </span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Protect your brand’s legal identity</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Get expert assistance today </span></li>
            </ul>

            <h3>Get professional help in Trademark Renewal</h3>

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
            <h3 class="display-4 mb-4 font-bolder">What Is Trademark Renewal Online?</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>A <b>trademark registration protects</b> a company or an organisation’s intellectual property by securing a term or a visual sign that a company uses to distinguish its goods or services. Because <b>trademark renewal is required every 10 years</b>, the sector will experience an even greater increase in the overall number of trademarks registered in the coming years.</p>
            <p>The application for renewal must be submitted to the Trademark Office within at least six months before the <b>trademark’s expiration</b> date. This will not only ensure that their trademark is protected indefinitely, but it will also eliminate the possibility of litigation.</p>
            <p>Businesses can prolong their security for another decade thanks to this timely renewal. To apply for renewal, businesses must complete and submit a list of forms, including <b>TM-R12</b>. If a person or company fails to renew their TM, the mark is held liable to be removed. Therefore, the holders must restore their TM for a longer company existence.</p>
          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <figure class="rounded">
              <img src="{{asset('images/overview/trademark-renewal.jpg')}}" alt="trademark renewal" >
            </figure>
          </div>
      </div>
  </div>
</section>

<!-- Trademark Renewal -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-orange ">
    <div class="row ">
        
        <div class="col-md-5 col-lg-8" >
          <h2 class="display-6 font-bolder mb-6">Trademark Renewal Online Process</h2>

          <p>For the ease of businesses, the government has provided the facility to get trademark renewal online. This process can be completed within minutes. If you are a registered business as trademark renew online, you may be required to fill out the TM-R form. However, know how to apply for trademark registration online for renewal. </p>

          <p>The applicants can complete the process by either hiring an online trademark renewal service or by filing the forms themselves. </p>

          <p>Depending on the type of trademark and the class, official charges for a trademark renewal may differ.</p>
          
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

<!-- BENEFITS -->
<section class="wrapper bg-soft-yellow">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">BENEFITS</h6>
            <h2 class="display-4 mb-4 font-bolder">Benefits Of Trademark Renewal</h2>
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
                <h4 class="fs-20">Trademark renewal</h4>
                <p>It is safeguards a company’s unique identity by preventing any duplication or repetition of its products and services.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Protects investments</h4>
                <p>Businesses invest a significant amount in ensuring their <b>organisation’s goodwill, name, resources, ownership, economic value</b>, etc. Trademark renewal allows protection from infringement or duplication of these assets by other companies.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Extend a company’s life</h4>
                <p>Trademark renewal allows an applicant to continue operating for the next 10 years with the same TM symbol.  Also, know that about how you can you file a trademark as a sole proprietor for renwal. </p>
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
        <h2 class="display-4 mb-4 font-bolder text-center">What Are The Documents Requires For Trademark Renewal?</h2>
      </div>
    </div>
    <div class="row ">
        
        <div class="col-lg-8" >
          <h3>Application Preparation: Documents Required for Trademark Renewal </h3>
          <p>The applicants should prepare a set of copies of the following documents to be submitted along with the trademark renewal application:</p>

          <ul class="icon-list bullet-bg bullet-orange ms-0 gy-2 mt-6 mb-8">
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>A power of attorney for representation purpose</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>PAN card and proof of registered office address of the applicant</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Copy of application (TM-A)</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Trademark registration certificate (issued previously)</span>
            </li>
          </ul>

          <h3>Trademark Renwal Filling in the forms: </h3>
          <p>The applicants must fill out the following list of forms for trademark renewal along with the prescribed fee: </p>

          <ul class="icon-list bullet-bg bullet-orange ms-0 gy-2 mt-6 mb-8">
            <li>
                <span><i class="uil uil-check"></i></span>
                <span><b>TM-R:</b> Filling the TM-R form is mandatory to fill under the Trade Marks Act, 1999 for the application for renewal/restoration of registration of a trademark.</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span><b>TM-18:</b> This form is filed for affidavit in support of the statement of the case. </span>
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
            <h6 class="mb-4 text-yellow">HELP</h6>
            <h3 class="display-4 mb-4 font-bolder">How We Help You With Trademark Renewal Service In India?</h3>
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
                <h4 class="fs-20">Requirement </h4>
                <p>As soon as you submit your information, a representative will contact you to learn more about your needs and to explain the process and fees. The cost will vary depending on whether the trademark needs to be renewed or restored.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Application for Renewal</h4>
                <p>Our specialists will get to work on your Trademark Renewal application and gather the necessary documentation, including completing TM-R/TM-18 forms and filing the forms with the trademark registry offices closest to your designated office.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Confirmation</h4>
                <p>We will update you on the latest status of your trademark renewal application in progress. You may also contact us at frequent intervals to learn about the status of whether your trademark has been renewed for another ten years or not. </p>
              </div>
            </div>
            
          </div>
      </div>
  </div>
</section>

<!-- WHY US -->
<section class="wrapper  ">
  <div class="container mb-10 ">
    <div class="card p-10 shadow-lg">
      <div class="row align-items-start ">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <h2 class="display-4 mt-6 mb-4 font-bolder">Why Choose JustStart For Trademark Renewal
              <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> 
            </h2>

            <p>JustStart is a premium legal tech co that has been helping startups and established businesses maintain a smooth flow of operations.</p>
              
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-0 ">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Expert Consultation
                  </h3>
                  <p class="mb-0">We connect you with reputable professionals who will stay in constant touch with you to understand your business requirements and meet all of your legal obligations. You can also keep track of the progress at any moment using our online platform.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-0 ">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Set Reasonable Expectations
                  </h3>
                  <p class="mb-0">By managing all of the paperwork, we enable smooth interaction with the government. To create reasonable expectations, we provide clarity on the incorporation procedure.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-0 ">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> 360-Degree Assistance Team
                  </h3>
                  <p class="mb-0">You’re only a phone call away from the greatest legal services, thanks to a staff of experienced business consultants and legal professionals.</p>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>What is a trademark? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>A trademark is a graphical representation of a company’s name, logo, and symbol that helps users identify what products and services you manufacture or cater. Trademarks are issued by trademark registry offices under the Trademark Act, 1999.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>What are the types of trademarks that can be registered? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>There are typically four: </p>
                    <p>Standard trademarks, collective marks, certification marks, and series marks are all examples of trademarks.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>What is a trademark renewal? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>In India, an individual or any company (whether it is an LLP, PLC, or private limited company) that wants to protect its identity must apply for trademark registration. After completing the registration process, the trademark registrar issues a certificate of trademark registration. If the applicant wants to continue their operations under the same trademark, they must get their company’s trademark renewed.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>What is the validity of the trademark registration? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>Once received, the trademark registration is valid for a period of 10 years. </p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>What is the process of trademark renewal? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>The trademark renewal process is completely online. There are multiple reasons to get your trademark registrations renewed: </p>
                    <ol>
                      <li>In the event that any sign, name, word, or symbol in the existing trademark changes,</li>
                      <li>In this case, the validity of 10 years is about to expire. </li>
                      <li>In this case, the trademark’s validity has expired. </li>
                    </ol>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true" aria-controls="faq-collapse-5"><h2>How can I renew my trademark? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                  <div class="card-body">
                    <p>There are three ways: </p>
                    <ul>
                      <li>Hiring Trademark Renewal Consultancy Service: Recruiting a trademark renewal consultancy comes with several benefits, like saving time and energy, saving efforts, avoiding delays, and most importantly, guidance to accurate procedure.</li>
                      <li>Filling in the form yourself Individuals can also complete the trademark renewal process themselves.</li>
                      <li>Hiring an agent to do it on your behalf: Typically recognised as agents, business owners can also hire agents who can be authorised to complete the trademark renewal process on the owner’s behalf. </li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-6">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="true" aria-controls="faq-collapse-6"><h2>What is the duration of renewing a trademark registration? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-6">
                  <div class="card-body">
                    <p>You can renew your trademark before its validity expires.</p>
                    <ul>
                      <li>They must renew their trademark within six months of the trademark expiry date (as per rules 63 & 64 of the Trade Mark Rules 2002).</li>
                      <li>Complete the application form within six months after the validity expires. </li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-7">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-7" aria-expanded="true" aria-controls="faq-collapse-7"><h2>What is the fee for the trademark renewal process? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-7">
                  <div class="card-body">
                    <p>Trademark renewal highly depends on the type of renewal you are seeking and the type of service you have hired. However, you can expect to pay somewhere around Rs. 120,000-15000 along with government fees.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-8">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-8" aria-expanded="true" aria-controls="faq-collapse-8"><h2>Is trademark renewal mandatory? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-8">
                  <div class="card-body">
                    <p>It is mandatory to renew your trademark certificate if you want to continue business operations in India</p>
                    <p>What are the benefits of trademark Registration and its further renewal? </p>
                    <ul>
                      <li><b>Legal protection:</b> You can readily establish your rights in court if you believe your registered trademark has been infringed upon. In industries where piracy is prevalent, trademark registration is required.</li>
                      <li><b>Unique brand identity:</b> Customers should be able to identify your products or services as being associated with your brand.The first step in achieving this is to register your trademark. The law would then prevent the registration of any identical terms or slogans.</li>
                      <li><b>Continuous business opportunities:</b> If your brand succeeds, a trademark is an intangible asset that can be extremely valuable. Consider the brands Tide, Nike, and McDonald’s. Through licensing agreements or even the transfer of ownership to interested parties, businesses can make a lot of money in royalties.</li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-9">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-9" aria-expanded="true" aria-controls="faq-collapse-9"><h2>Are trademark registration renewal online services helpful? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-9" class="accordion-collapse collapse" aria-labelledby="faq-9">
                  <div class="card-body">
                    <p>Yes. The Online Trademark Renewal Consultant India will set a roadmap for the applicants so that they do not miss any steps of the process. </p>
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