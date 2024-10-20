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

            <p>A <b>trademark opposition reply</b> is a type of proceeding where the applicant or a third party can raise an objection against the trademark obtained by your company before it is granted a legal statute or gets published.</p>

            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Expert assistance</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Complete online process</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Track your application status</span></li>
            </ul>

            <h3>Get professional help in replying to trademark opposition @ <span class="text-blue">Rs. 11,799</span></h3>

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
            <h3 class="display-4 mb-4 font-bolder">What Is Trademark Opposition?</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>As self-explanatory as it is, trademark opposition is the legal act of raising an objection against a company’s published trademark. A trademark is a <b>symbol, image, or words</b> that legally represents a company or firm. </p>
            
            <p>Typically, companies save their business identity in the eyes of the law by completing trademark registration through the Department for Promotion of Industry and Internal <b>Trade portal under</b> the Ministry of Commerce & Industry. </p>

            <p>The process of trademark registration is a bit lengthy and time-consuming. It is usually recommended to hire experts who can aid in the trademark registration process.</p>

            <p>However, there are several grounds on which a business/individual/firm may object to the published trademark. Let’s see a few of those:</p>

          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <figure class="rounded">
              <img src="{{asset('images/overview/what-is-trademark-opposition.jpg')}}" alt="trademark opposition reply" >
            </figure>
          </div>
      </div>
  </div>
</section>  

<!-- TYPE OF OPPOSITIONS -->
<section class="wrapper mt-10  bg-soft-yellow">
  <div class="container p-10 mb-10 ">
    <div class="row text-center">
      <div class="col-md-12">
        <h6 class="mb-4 text-yellow">TYPE OF OPPOSITIONS</h6>
        <h2 class="display-5  font-bolder ">Grounds On Which Opposition Can Be Raised on a Trademark</h2>
      </div>
    </div>
    <div class="row mt-10">

        <div class="col-md-5 col-lg-8">
          <p>In India, any <b>business/person/firm/partnership/trust</b> of legal stature can raise an opposition to the trademark within 4 months of its publication. </p>
          
          <p>In fact, the trademark registry may also raise an objection against the applicant’s company trademark. But they don’t do it unless there is a very good reason.</p>
          
          <p>Here are the grounds under which someone can file an opposition: </p>
          
          <ul class="icon-list bullet-bg bullet-yellow ms-0 gy-2 mt-2 mb-4">
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span>The trademark does not have any meaning or doesn’t clarify what the company is about. The logo should have distinguishing features or contain indications that reflect the quality, quantity, intended purpose, values, geographical origin, or production time.</span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span>The trademark may confuse the public. This includes any mark that can be associated with an already registered trademark online for your brand or that has become common in commercial practice.</span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span>The mark contains material that may offend the religious sentiments of any class or group of people.</span>
            </li>
          </ul>
          
        </div>
        
        <div class="col-md-7 col-lg-4 pt-6">
          <figure class="rounded">
            <img src="{{asset('images/types-of-company-registration.png')}}" alt="types of company registration" >
          </figure>
        </div>
      
    </div>

  </div>
  <!-- /.container -->
</section>

<!-- How Do You Know -->
<section class="wrapper ">
  <div class="container card p-10 mb-10  ">
    <div class="row ">
        <div class="row text-center">
          <div class="col-md-12">
            <h6 class="mb-4 text-yellow">HOW DO YOU KNOW</h6>
            <h2 class="display-5  font-bolder ">How Do You Know If Your Company’s Trademark Has Been Opposed?</h2>
          </div>
        </div>
    </div>
    <div class="row mt-10">
        <div class="col-lg-6 pt-6">
          <figure class="rounded">
            <img src="{{asset('images/Opposition-of-Trademark-in-India-Google-Docs-e1660292073167.webp')}}" alt="Trademark Opposition" >
          </figure>
        </div>
        <div class="col-lg-6 pt-6">

          <p class="mt-6">In India, when applicants register to get their trademarks registered, the application goes to the Trademarks Registry and after getting register you will know that many type of trademark registration you can.</p>

          <p class="mt-6">Applicants can also keep checking the status of their application through the online portal ipindia.gov.in. If the trademark has been challenged, the applicants will see  “Opposed” written in their application’s status.</p>
          
        </div>
      
    </div>

  </div>
  <!-- /.container -->
</section>

<!-- REPLY --> 
<section class="wrapper ">
  <div class="container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">REPLY</h6>
            <h3 class="display-4 mb-4 font-bolder">Replying to Trademark Opposition</h3>
          </div>
      </div>
      <div class="row align-items-start">
          <div class="col-md-5 col-lg-5 position-lg-sticky " style="top: 8rem;">
            <p>The business can file the application with the trademark registry headquartered in Mumbai. The trademark registry also operates at pen india. There can be two cases where you need to respond to a trademark opposition.</p>

            <ol>
              <li>The trademark registry has published the trademark and there are errors that you are looking to rectify.</li>
              <li>When someone else has an objection against the published trademark of your company,</li>
            </ol>

            <p>In both cases, you will need to respond to the notice in a timely manner. This is a crucial step.</p>
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
                          1
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Notice of trademark opposition</h4>
                        <p class="mb-0">When someone opposes a trademark registration, the Trademarks Registry sends a notice of opposition to the concerned parties containing the following details:</p>
                        <ul class="mt-4">
                          <li class="mb-2"><b>Opposer Information: </b>Name, given date, address, and correspondence data</li>
                          <li class="mb-2"><b>Application Information: </b>Application number, publication date, opposition filing date, opposition period ending date, applicant’s name</li>
                          <li class="mb-2"><b>Goods/Services affected by opposition: </b>This section typically contains the class of products.</li>
                          <li class="mb-2"><b>Grounds for opposition: </b>The concerning opposition and the Trademark Act Section under which it falls. </li>
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
                          2
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Filling TM-O Form</h4>
                        <p class="mb-0">The applicant who receives the notice of opposition must respond to the same by filing a TM-O form. Check out the following file to see what the form looks like. After going through it, you will know about to apply for the trademark renewal online , why necessary.</p>
                        <p>
                          <a target="_blank" href="{{asset('')}}images/FORM-TM-O.pdf"> <img style="max-width:200px" class="w-100" src="{{asset('')}}images/download-file-pdf.webp" alt=""></a>
                        </p>
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
                          3
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Drafting a statement of response</h4>
                        <p class="mb-2">We will help you analyze the opposition report and determine the possible reason for the opposition. The next step after this will be to help you prepare a proper response against the opposition along with supporting documents like a registration application.</p>
                        <p class="mb-0">Note: Please remember that it is mandatory to respond to the opposition within a certain period of time.</p>
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
                          4
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Application submission</h4>
                        <p class="mb-0">Once you have completed the online formalities, the registrar will carefully consider your responses. Your application will be processed if found acceptable. If not, the registrar will schedule a date for the hearing. Also, it canhelp you to protect the business India by regiter trademark opposition in India.</p>
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
              <h2 class="display-5  font-bolder ">Why Hire Juststart As Trademark Registration Consultant Services<i class="uil uil-question-circle fs-52 me-2 align-middle"></i> </h2>
            </div>
          </div>
      </div>
      <div class="row align-items-start ">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon" />
            </figure>
          </div>

          <div class="col-md-6 col-lg-6 pt-2">  
              
            <ul>
                <li class="mb-2">JustStart consists of qualified CS, CA, lawyers, and business administrators.</li>
                <li class="mb-2">360° Corporate Legal Support</li>
                <li class="mb-2">JustStart would be a one-stop-place for incorporation, annual filings, and other professional services.</li>
                <li class="mb-2">On-Time Service</li>
                <li class="mb-2">Super Support and Fast Service (Call, Email, Chat Support)</li>
                <li class="mb-2">Less expensive than other professionals and service providers</li>
                <li class="mb-2">Point-to-Point update and dedicated relationship manager for guidance on upcoming compliance and further Requirements</li>
            </ul>
              
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>What is trademark opposition? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p><b>Trademark Opposition under Trademark Law in India</b> is the act of raising objections against a company’s published trademark. This trademark is typically designed as a logo, a symbol, or image and represents a company’s values, beliefs, or core principles.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>What is the difference between trademark opposition and trademark objection? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>A trademark objection is a concern raised by the examiner or registrar, whereas trademark opposition in India is the concern initiated by the applicant or a third party.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>Why is showing an objection to other people’s trademarks legal? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>Technically, when someone else uses the same trademark as your company, the other company is, in a sense, trying to steal away your goodwill,  audience, and loyal customers.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>Can someone stop me from using the same trademark as another company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>Yes. Copying someone else’s copyrighted or registered trademark is an offensive crime.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>What is the punishment for copying someone’s trademark? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>If you copy someone’s trademark or design without the owner’s permission, it can cost you a case of intentional infringement of a registered trademark. As per criminal sanctions, the crime can attract a prison sentence which cannot be less than six months and can be extended up to 3 years.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true" aria-controls="faq-collapse-5"><h2>How to register my company’s trademark? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                  <div class="card-body">
                    <p>Luckily, we have a dedicated section for how to register a trademark online with expert help. Now you can experience hassle-free trademark registration in a few simple steps under the guidance of legal professionals.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-6">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="true" aria-controls="faq-collapse-6"><h2>What if I have issues with my registered trademark? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-6">
                  <div class="card-body">
                    <p>As already mentioned, any applicant can point out the errors in the published trademark by filling out an application online to the trademark registry. The government body also facilitates an online service to ease the process. However, some applicants may find the digital process complex, for which they can hire a professional consultancy for guidance.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-7">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-7" aria-expanded="true" aria-controls="faq-collapse-7"><h2>Will I need to present any documents? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-7">
                  <div class="card-body">
                    <p>As a matter of fact, yes. You may need to submit a list of documents to the Trademark Opposition Process in India. You can formally challenge the issues in published trademarks.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-8">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-8" aria-expanded="true" aria-controls="faq-collapse-8"><h2>How long does an opposition to a trademark take to get rectified? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-8">
                  <div class="card-body">
                    <p>The process of trademark rectification may take up to 4–6 weeks to receive approval.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-9">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-9" aria-expanded="true" aria-controls="faq-collapse-9"><h2>What happens if someone else raises an objection against my trademark?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-9" class="accordion-collapse collapse" aria-labelledby="faq-9">
                  <div class="card-body">
                    <p>Typically, the government will send a notice of opposition to the applicant and the opposer. The trademark registry will give time to the applicant to respond to the case (30 days). If the applicant fails to respond, the opponent may win the case.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-10">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-10" aria-expanded="true" aria-controls="faq-collapse-10"><h2>What happens after I register my trademark successfully? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-10" class="accordion-collapse collapse" aria-labelledby="faq-10">
                  <div class="card-body">
                    <p>In India, trademarks are protected for a period of 10 years after a successful registration. Once the validity expires, companies usually need to re-apply to get their trademarks registered once again.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-11">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-11" aria-expanded="true" aria-controls="faq-collapse-11"><h2>What if I don’t respond to the objection raised against the trademark? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-11" class="accordion-collapse collapse" aria-labelledby="faq-11">
                  <div class="card-body">
                    <p>In case you don’t respond to the opposition raised against the published trademark, the application is marked as abandoned.</p>
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