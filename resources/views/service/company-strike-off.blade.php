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

            <p>If you have received a strike-off notice from the ROC, there’s no need to worry. <b>JustStart’s</b> legal experts can assist you in quickly drafting a petition for the revival of your striking-off company. Don’t hesitate to seek professional help.</p>

            <h5 class="mt-6">Speak With Our Advisors Today!</h5>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Submit Your Business Details</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Talk To Our Experts</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Start Your Company Revival Process</span></li>
            </ul>

            <h3>Get your struck off company revived through our legal assistance!</h3>

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
            <h3 class="display-4 mb-4 font-bolder">Revival Of A Struck Off Company in India</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>Strike-off refers to either a temporary closure of a company or the removal of its name from the Register of Companies by the Registrar, in accordance with the provisions of the Companies Act, 2013. Under the Companies Act, 2013, a company can be struck off from the Register of Companies for various reasons, such as non-compliance with statutory requirements, failure to file annual returns or financial statements, or the company being defunct. </p>
            
            <p>Unlike winding up, strike off allows a company to be revived for a period of twenty years from the date of strike-off. Any person aggrieved by the Registrar’s order or the company itself, as well as a member, creditor, or workman, can file an appeal or application for revival.</p>

            <p>When it comes to compulsory striking off by the Registrar, it’s crucial to file an appeal within three years of the Registrar’s order. In the case of voluntary striking off, the limitation period is twenty years. However, it’s important to note that the application must be submitted before the expiration of the twenty-year period from the date of publication of the notice regarding the striking off of the company’s name in the Official Gazette.</p>

          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <figure class="rounded">
              <img src="{{asset('images/overview/company-strike-off.jpg')}}" alt="company strike off" >
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
        <h2 class="display-5  font-bolder ">Documents Required For The Revival of A Struck Off Company</h2>
      </div>
    </div>
    <div class="row mt-10">

        <div class="col-md-7 col-lg-4 pt-6">
          <figure class="rounded">
            <img src="{{asset('images/types-of-company-registration.png')}}" alt="types of company registration" >
          </figure>
        </div>
        
        <div class="col-md-5 col-lg-8">
          <p>The following documents are necessary for the revival of strike-off companies:</p>
          
          <ul class="row icon-list bullet-bg bullet-yellow ms-0 gy-2 mt-2 mb-4">
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Company petition</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Form NCLT 9</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Articles of Association (AoA)</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Memorandum of Association (MoA)</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Company registration certificate</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>ROC Notices</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Forms STK -1, STK 5, STK 7</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Demand draft for the payment</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Affidavit to verify the petition</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Form NCLT 6</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Balance sheets and annual returns</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Evidence that the company has been carrying out its business</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Bank statements</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>All information regarding major transactions</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Undertakings (if any) in the form of an affidavit</span>
            </li>
            <li class="col-md-6 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span>Form No 12.</span>
            </li>
          </ul>

          <p>To revive struck-off companies, all of these documents are necessary. It is important to provide complete and accurate information in these documents to ensure a smooth revival process.</p>
          
        </div>
        
      
    </div>

  </div>
  <!-- /.container -->
</section>

<!-- REASONS -->
<section class="wrapper bg-soft-fuchsia">
  <div class="container p-10 mb-10  ">
    <div class="row ">
        <div class="row text-center">
          <div class="col-md-12">
            <h6 class="mb-4 text-yellow">REASONS</h6>
            <h2 class="display-5  font-bolder ">Reasons For Strike Off of A Company</h2>
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

          <h4>A company may be struck off from the Register of Companies due to various reasons, including:</h4>

          <ul class="icon-list bullet-bg bullet-fuchsia ms-0 gy-2 mt-2 mb-4">
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span>Non-filing of Annual Returns and Financial Statements for a continuous period of three years.</span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span>Non-compliance with the regulatory requirements of the Companies Act, 2013.</span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span>Failure to commence business within one year of incorporation.</span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span>Lack of registered office or failure to communicate changes in registered office to the Registrar of Companies.</span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span>Failure to appoint a statutory auditor within thirty days of incorporation or within thirty days of the auditor’s vacancy.</span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span>Failure to hold annual general meetings for a continuous period of three years.</span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span>Voluntary strike off by the company itself due to closure of business or other reasons.</span>
            </li>
          </ul>

          <p>It’s important for companies to ensure compliance with all legal requirements to avoid being struck off from the Register of Companies.</p>
          
        </div>
      
    </div>

  </div>
  <!-- /.container -->
</section>

<!-- PROCEDURES --> 
<section class="wrapper ">
  <div class="container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">PROCEDURES</h6>
            <h3 class="display-4 mb-4 font-bolder">Procedure for Revival of A Struck off Company</h3>
          </div>
      </div>
      <div class="row align-items-start">
          <div class="col-md-5 col-lg-5 position-lg-sticky " style="top: 8rem;">
            <p>Now that you know what documents you will require for the revival of a company that has been struck off, let’s go over the procedure that you will have to follow to revive your company. The National Company Law Tribunal (Amendment) Rules’ outlines the procedure for reviving a company after it has been struck off. The entire process for the revival of a struck-off company is explained below:</p>

            <p>By following these steps, a struck-off company can be revived and brought back to active status.</p>
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
                          <span><i class="uil uil-check fs-50"></i></span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Petition Submission</h4>
                        <p class="mb-0">To revive a struck-off company, a draft petition must be submitted to the tribunal. The petition must be submitted using Form No. NCLT-9.</p>
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
                          <span><i class="uil uil-check fs-50"></i></span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Serving Respondents with the Petition</h4>
                        <p class="mb-0">A copy of the draft petition must be served to the Registrar at least 14 days before the scheduled hearing date, depending on the circumstances.</p>
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
                          <span><i class="uil uil-check fs-50"></i></span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Hearing the Petition</h4>
                        <p class="mb-0">The tribunal will hear the appeal, application, or any adjourned hearing thereof and issue appropriate orders.</p>
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
                          <span><i class="uil uil-check fs-50"></i></span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Orders from the Tribunal</h4>
                        <p class="mb-0">To revive a company under the Companies Act, 2013, the company must file e-form INC-28 and provide a certified copy of the order to the Registrar of Companies (ROC) within 30 days of the order’s date.</p>
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
                          <span><i class="uil uil-check fs-50"></i></span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">NCLT Order Filed with ROC</h4>
                        <p class="mb-0">Within the period specified by the Tribunal, the company must file any pending financial statements and annual reports with the Registrar and comply with the provisions of the Companies Act, 2013, and rules promulgated thereunder.</p>
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
<section class="wrapper  ">
  <div class="container mb-10 ">
    <div class="card p-10 shadow-lg">
      <div class="row mb-10">
          <div class="row text-center">
            <div class="col-md-12">
              <h6 class="mb-4 text-yellow">Why JustStart</h6>
              <h2 class="display-5  font-bolder ">Why JustStart For The Revival Of Your Company<i class="uil uil-question-circle fs-52 me-2 align-middle"></i> </h2>
            </div>
          </div>
      </div>
      <div class="row align-items-start ">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <p>At JustStart, we have an exceptional team of legal advisors who are dedicated to helping businesses achieve profound growth. Our legal experts have successfully helped clients overcome numerous legal obstacles, contributing to the success of many businesses. With an impressive track record of leveraging their legal knowledge to assist businesses, our team of advisors possesses a wealth of experience and expertise that can benefit your business greatly.</p>
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon" />
            </figure>
          </div>

          <div class="col-md-6 col-lg-6 pt-2">  
              
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Legal Expertise</h3>
                  <p class="mb-0">With a wealth of experience gained through their legal expertise, our team of legal advisors possesses the valuable knowledge necessary to help your business thrive. Their extensive experience can provide valuable insights and guidance to support the growth and success of your business.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Customer Satisfaction</h3>
                  <p class="mb-0">At JustStart, we are committed to supporting businesses with the assistance of our legal advisors. Our legal guidance is aimed at ensuring uninterrupted growth for your business. By effectively managing your business’s legal affairs, we can help you achieve your business goals and objectives. Let us handle the legal side of things, so you can focus on growing your business with peace of mind.</p>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>Which provision allowed the Registrar of Companies (ROC) to strike off companies?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>In the fiscal year 2017-18, the Registrar of Companies utilized the provisions outlined in Section 248(1) of the Companies Act, 2013 to strike off numerous companies.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>What is meant by "strike off"?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>Strike off refers to the temporary closure of companies, carried out under the provisions of the Companies Act, 2013. This is an alternative to winding up the company, and allows the company to be revived within twenty years from the date of its strike off.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>Is it possible for a company director to appeal for the revival of a struck off company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>If it can be demonstrated that the company’s name was struck off due to incorrect information provided by the company or inadvertently, then the company’s directors are able to file an appeal within a period of three years.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>Is it required to publish the order? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>No it is not required</p>
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