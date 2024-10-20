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

            <p>Getting online trademark registration in India with JustStart’s team of legal experts will make the trademark registration process much easier.</p>

            <p>Having a trademark is crucial for any business as it differentiates them from their competitors and facilitates easy identification by customers. Referred to as a <b><i>“Logo,” a brand is a symbol</i></b> that is mandatory for every business.</p>

            <h5>Apply for Trademark Today!</h5>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Submit Your Details </span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Talk To Our Trademark Experts</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Kickstart your Trademark Registration </span></li>
            </ul>

            <h3>Get professional help in Trademark Registration</h3>

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
            <h3 class="display-4 mb-4 font-bolder">What Is Trademark Registration Online?</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>Suppose you have created a product that greatly benefits people, and as a result, your business is thriving by selling it.</p>
            <p>However, while you were focused on making profits, someone with ill intentions stole your product idea and began selling it under their own branding.</p>
            <p>If you have a registered trademark for your product and company, you will be protected, and the imitator will be held responsible for their actions. </p>
            <p>The process of <b>online trademark registration India</b> is very complicated, and this is where our expertise comes to play. <b>JustStart’s</b> team of <b>trademark registration</b> can help you Apply for Trademark easily and effectively. </p>
          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="uf7JoWudxy8"></div>
          </div>
      </div>
  </div>
</section>

<!-- Plans -->
<section class="wrapper bg-light">
  <div class=" container p-10">
      <div class="row">
        <div class="col-md-12 col-lg-12 text-center mb-8">
          <h3 class="display-4 mb-4 font-bolder">Trademark Registration Packages</h3>
          <h6 class="mb-4 text-yellow">Protect your brand with our Trademark Registration Packages. <br>Affordable options with expert guidance for a smooth registration process. Secure your brand today.</h6>
        </div>
      </div>
      <div class="row pricing-wrapper">
          <div class="col-md-4">
            <div class="pricing card shadow-lg">
              <div class="card-body pb-12">
                <div class="prices text-dark">
                  <h2>Basic Plan</h2>
                </div>
                <!--/.prices -->
                <h6 class="card-title mt-2">Rs. 1,999 (<del>2,499</del>) + Govt Fees</h6>
                <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-0">
                  <li><i class="uil uil-check"></i>Free trademark search</li>
                  <li><i class="uil uil-check"></i>Attorney Consultation</li>
                  <li><i class="uil uil-check"></i>Trademark Application filing</li>
                  <li><i class="uil uil-times bullet-soft-red"></i>Professional logo Design Making (Up to three revisions)</li>
                  <li><i class="uil uil-times bullet-soft-red"></i>Trademark Objection Reply Filing</li>
                  <li><i class="uil uil-times bullet-soft-red"></i>Trademark Hearing</li>
                </ul>
                <a href="#" class="btn btn-primary rounded d-none">Get Started</a>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.pricing -->
          </div>
          <div class="col-md-4">
            <div class="pricing card shadow-lg">
              <div class="card-body pb-12">
                <div class="prices text-dark">
                  <h2>Standard Plan</h2>
                </div>
                <!--/.prices -->
                <h6 class="card-title mt-2">Rs. 4,499 (<del>4,999</del>) + Govt Fees</h6>
                <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-0">
                  <li><i class="uil uil-check"></i>Free trademark Search</li>
                  <li><i class="uil uil-check"></i>Attorney Consultation</li>
                  <li><i class="uil uil-check"></i>Trademark Application filing</li>
                  <li><i class="uil uil-check"></i>Professional logo Design Making (Up to three revisions)</li>
                  <li><i class="uil uil-times bullet-soft-red"></i>Trademark Objection Reply Filing</li>
                  <li><i class="uil uil-times bullet-soft-red"></i>Trademark Hearing</li>
                </ul>
                <a href="#" class="btn btn-primary rounded d-none">Get Started</a>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.pricing -->
          </div>
          <div class="col-md-4">
            <div class="pricing card shadow-lg">
              <div class="card-body pb-12">
                <div class="prices text-dark">
                  <h2 class="text-blue">Premium Plan</h2>
                </div>
                <!--/.prices -->
                <h6 class="card-title mt-2">Rs. 12,999 (<del>14,848</del>) + Govt Fees</h6>
                <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-0">
                  <li><i class="uil uil-check"></i>Free trademark Search</li>
                  <li><i class="uil uil-check"></i>Attorney Consultation</li>
                  <li><i class="uil uil-check"></i>Trademark Application filing</li>
                  <li><i class="uil uil-check"></i>Professional logo Design Making (Up to three revisions)</li>
                  <li><i class="uil uil-check"></i>Trademark Objection Reply Filing</li>
                  <li><i class="uil uil-check"></i>Trademark Hearing</li>
                </ul>
                <a href="#" class="btn btn-primary rounded d-none">Get Started</a>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.pricing -->
          </div>
      </div>
  </div>
</section>

<!-- BENEFITS -->
<section class="wrapper bg-soft-yellow">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">BENEFITS</h6>
            <h2 class="display-4 mb-4 font-bolder">Benefits Of Trademark Registration Online</h2>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <p>Trademark registration is important for a company’s reputation. If you’re still unsure about whether or not, we have outlined several benefits of trademark registration below to assist you in gaining a better comprehension of the subject. </p>
            <p>Also, after trademark registration,  you can protect the business in India. So, its necssary thing to do. Know in detail with this list as we given below about online trademark registration in India.</p>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Exclusive Ownership</h4>
                <p>Registering a trademark gives the owner exclusive rights to use the mark in connection with the goods or services listed in the application. It prevents others from using the same or similar mark for similar goods or services, thus protecting the owner’s brand identity.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Legal Protection</h4>
                <p>Trademark registration provides legal protection to the owner in case of any infringement or unauthorised use of the mark. The owner can take legal action against any party that infringes on their trademark, which can result in compensation for damages and legal costs.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Brand Recognition</h4>
                <p>A register trademark India helps build brand and establishes a unique identity in the market. It also creates goodwill among customers and enhances the company’s reputation.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-blue me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Business Expansion</h4>
                <p>A registered trademark can be used as an asset to expand the business by franchising or licensing it to others. It also helps to establish the company’s credibility, making it easier to attract investors, partners, and customers.</p>
              </div>
            </div>
          
          </div>
      </div>
  </div>
</section>

<!-- How To Register  -->
<section class="wrapper bg-soft-orange">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">Register</h6>
            <h3 class="display-4 mb-4 font-bolder">How To Register Trademark In India?</h3>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}images/types-of-company-registration.png" alt="types of company registration" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <p>The process of online trademark registration is more complex than it appears. It involves a lengthy and comprehensive procedure.  That can take up to a year to complete due to legal regulations. JustStart simplifies this process by breaking it down into four simple steps before trademark registration apply online.</p>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Trademark Search </h4>
                <p>Our representatives will conduct a through search of the database to determine whether the trademark you want to e register trademark is available for use. This step is essential to ensure that your trademark can be operated freely.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Application Preparation</h4>
                <p>We will guide you through every step of the process to prepare the trademark registration application as per the selected trademark. You can simultaneously upload all the required paperwork on our dashboard.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Application Filing</h4>
                <p>Our team will review all the documents after you have uploaded them. We will then submit the trademark registration application form on your behalf, along with the necessary documents required  by the Registrar of Trademarks.</p>
                <p>You can also sign up to receive our Trademark Registry alerts until the registration is complete.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-blue me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Government Processing</h4>
                <p>At this stage, the trademark registration undergoes crucial scrutiny by the Indian government. The accuracy of document submission and completion is vital for success. </p>
                <p>The examiner may have questions about the submissions and send to trademark objection notices to the applicants. The trademark obtainer must respond to these within a certain period.</p>
                <p>Overall, Just Start simplifies the Trademark Registration Online process by guiding you through each step and ensuring that your application is accurate and error-free.</p>
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
        <h2 class="display-4 mb-4 font-bolder text-center">Documents Required For Registered Trademark</h2>
      </div>
    </div>
    <div class="row ">
        <div class="col-lg-8" >
          <p>Here is a list of documents required for trademark registration in India:</p>
          <ul class="icon-list bullet-bg bullet-orange ms-0 gy-2 mt-4 mb-8">
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Applicant’s name and address.</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Business type (proprietorship, partnership, company, etc.)</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Details of the trademark, including the name, logo, or slogan.</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>A description of goods or services to be covered by the trademark.</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Date of first use of the trademark in India, if any.</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Power of Attorney (if the application is being filed by a trademark agent or attorney)</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>A copy of the trademark or logo (in JPEG format)</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Proof of identity and address of the applicant, such as Aadhar card, passport, driving licence, or voter ID card.</span>
            </li>
          </ul>

          <p>One thing which should be kept in mind is that the required documents may vary depending on your case. This is why you must have JustStart by your side throughout your company trademark registration proces. Also, know how to register a brand name in india online with trademark.</p>
          
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
            <h2 class="display-4 mt-6 mb-4 font-bolder">Why JustStart For Online Trademark Registration
              <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> 
            </h2>

            <p>If you need to protect your business or product/services from being copied, you need to get a trademark registration done through the right team of legal experts. Just Start is the perfect legal firm for your trademark registration online to get advantage of registered trademark. Our team of expert legal consultants have significant experience in handling the most complicated cases, easily.</p>
              
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-0 ">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Best Legal Solutions
                  </h3>
                  <p class="mb-0">With our powerful legal strategies, we guarantee swift trademark registration. By leveraging our comprehensive legal expertise, we safeguard your company and products against unauthorised duplication by competitors. Experience remarkable business growth through our highly effective legal solutions.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-0 ">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Expert Trademark Consultants
                  </h3>
                  <p class="mb-0">Our team of skilled consultants specialises in providing valuable guidance to speed up your trademark registration process. With a proven track record of success, JustStart has facilitated the registration of numerous trademarks, thanks to our team’s unwavering commitment and exceptional expertise.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-0 ">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Constant Support
                  </h3>
                  <p class="mb-0">Our commitment to supporting our clients extends beyond the mere registration process of their trademarks. At JustStart, we provide continuous support throughout and beyond the registration journey. Even after successfully registering your trademark, our dedicated legal team remains readily available, just a phone call away, to assist you whenever needed.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-0 ">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Client Satisfaction
                  </h3>
                  <p class="mb-0">Through our experience in trademark registration, we deliver top-notch legal solutions aimed at ensuring your utmost satisfaction. Our primary focus is to engender the registration of your trademark through our professional assistance. It is this unwavering commitment to excellence that positions us as one of the leading legal experts in India.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
              
          </div>
      </div>
    </div>
  </div>
</section>

<!-- Other Info -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-orange ">
    <div class="row ">
        
        <div class="col-md-5 col-lg-8" >
          <h2 class="font-bolder mb-4">Can I Register a Trademark Online?</h2>
          <p>Yes, you can register a trademark online in India with JustStart. If you thinking to protect your business brand trademark renewal and name logo, etc. </p>
          <p>Then it is essential thing to choose the best or trusted consultant for registering the online trademark. However, JustStart provides free consultants with legal registration experts.</p>

          <h2 class="font-bolder mt-8 mb-4">Who Can Apply for a Trademark?</h2>
          <p>An application for trademark registration can be made by any person who is able to claim the entity as the owner of the trademark. All you have to do is find someone who can register you with legal policies.</p>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>What is the cost of registering a trademark? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>The cost for registering a trademark in India is INR 4,500 for individual/startup/small enterprise applicants filing online. For other entities, the fee is INR 9,000 per class. </p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>What are the documents required for trademark registration? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>The documents required for trademark registration include applicant identity proof, address proof, a description of goods/services, and a Power of Attorney if an agent is involved.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>What is trademark registry? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>The trademark registry is like a government office that keeps track of trademarks. It handles everything from registering new trademarks to making sure they follow the rules.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>How can I check if a trademark is registered? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>You can check if a trademark is registered by conducting a search on the official website of the trademark registry in your country.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>What are the steps in trademark registration? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>To register a trademark in India, you first check if it's unique, then apply to the Registrar with details about your trademark and what it represents. The Registrar reviews it, publishes it for others to object if they think it's similar to theirs, and if all goes well, you get a certificate. Remember, you need to renew it every 10 years to keep the protection.</p>
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