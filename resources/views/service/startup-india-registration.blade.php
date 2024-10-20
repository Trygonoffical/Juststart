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

            <p>Reduce the regulatory burden on your business by completing startup India registration with JustStart. We will support your entrepreneurship drive and strength.</p>

            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Low cost compliances </span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Create your own brand</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Hassle-free process </span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>100% Online documentation submission</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Trustworthy legal team </span></li>
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
            <h3 class="display-4 mb-4 font-bolder">What Is Startup Registration In India</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>Registering the type of business entity you will own is crucial to ensure your organization gets a legal status in India. It can run without any hiccups. An startup india registration online is also a way to inform the government of India of your <b>business’s presence in your area</b>. Therefore, getting loans and executing agreements has become much easier.</p>
            <p>Times like <b>COVID-19 teach us valuable lessons</b> about life the hard way. On the one hand, the economy plummeted to its lowest in a decade, and the world was left with no choice but to come back stronger. </p>
            <p>Entrepreneurs across the nation buckled up for a new start. As a result, a record-breaking number of startups were <b>launched in 2020</b>.</p>
            <p>Additionally, the race to get an edge over the corporation grew even stronger the next year, backed by a latent force of legal advisors providing the right counseling on startup registration online.</p>
          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="XsEdfxKO3Pk"></div>
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
            <h2 class="display-4 mb-4 font-bolder">Benefits Of Startup India Registration</h2>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <p>While startup india registration online is a rewarding choice for legal purposes, choosing to complete. startup company registration online is a smart way to take the level of your business one notch up. Let’s see how:</p>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Entrepreneurs Are Not Subject to Bear Personal Liabilities</h4>
                <p>Forming a business and registering it eliminates the risk of having to pay collateral in the form of giving up personal assets in case of financial loss. On the other hand, registering a company allows business partners to decide the extent of liability they will bear.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Business Gets a Separate Legal Stature</h4>
                <p>The business you register will be considered a legal entity, and your company will be able to buy and sell more land on its behalf, conduct operations throughout India, and make calculated decisions to increase profits. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Financing Help by Government Schemes</h4>
                <p>The government of India is determined to provide multiple platforms for young entrepreneurs to grow, explore new opportunities, and expand the economy.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Perpetual Succession</h4>
                <p>When you complete company registration online, your incorporation gets an unlimited life span. For example, if anything happens to one partner of the company, the business’s identity doesn’t end there. A company’s operations will cease completely only if the owner wants to apply for the company’s closure. In that case, the owners will need to complete all the legal formalities of company closure. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Help From Banks</h4>
                <p>Startup India registration also enables you to carry out personal activities like obtaining a loan for business use. If you have a registered address and proof of the company, the banks will easily commission a loan in your favor.</p>
              </div>
            </div>
          </div>
      </div>

      <div class="row">
          <div class="col-md-12 col-lg-12 mt-8">
            <p>As a result, the government of India keeps launching schemes such as Pvt Ltd Company Registration Online, which is an initiative taken to boost India’s startup ecosystem with a new host of startup benefits. </p>
            <p>Such as recognition by DPIIT (Department for Promotion of Industry and Internal Trade), SAMRIDH BHARAT, and many others. Meeting certain standards under such schemes will make you eligible to access tax benefits, complete legal compliance, and track IPR speedily.</p>
            <p>However, a vital point to remember over here is to stay legally compliant—part of which might require you to know the company’s period of existence, type, annual turnover, original entity, and scalable measures taken to improve products.</p>
            <p>More often than not, this is an area most startups feel daunted by. But not anymore. If you don’t know where to start, get a FREE consultation with our legal experts today.</p>
            <p>Now that you know about the benefits of registering a startup online, let’s check out the Startup registration online process.</p>
          </div>
      </div>
  </div>
</section>

<!-- Registration Process -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-orange ">
    <div class="row mb-10">
      <div class="col-lg-12" >
        <h2 class="display-4 mb-4 font-bolder text-center">Online Startup Registration Process in India</h2>
      </div>
    </div>
    <div class="row align-items-start" >
        <div class="col-lg-8" >
          <div class="flex-row mb-8">
            <h5>Step 1: Incorporate Your Business:</h5>
            <p>Incorporating a business means bringing your organization into existence through formal and official means in the eyes of the government. </p>
            <p>Typically, there is a lot of proforma filling such as SPICe-INC-32, eMOA (INC-33), and eAOA (INC-34). In India, companies can be incorporated only through the SPICe form. You may also need to complete other formalities like:</p>
            <ul class="row">
              <li class="col-lg-6">Obtaining a DSC</li>
              <li class="col-lg-6">Checking the company name</li>
              <li class="col-lg-6">Finding CIN</li>
              <li class="col-lg-6">Completing Compliance Filings</li>
              <li class="col-lg-6">Getting Name Approval</li>
              <li class="col-lg-6">Obtaining a Bank Account</li>
            </ul>
          </div>

          <div class="flex-row mb-8">
            <h5>Step 2: Register with Startup India</h5>
            <p>Registering a startup in india is an initiative by the Government of India for entrepreneurs to connect with a network of startups, access free tools and resources, and participate in programs and challenges. Get expert advice to startup and online startup registration. </p>
          </div>

          <div class="flex-row mb-8">
            <h5>Step 3: Recognition Application </h5>
            <p>Filing the application form is the first step towards obtaining the DPIIT recognition certificate. Certain specified information about the startup needs to be disclosed here.</p>
          </div>  

          <div class="flex-row mb-8">
            <h5>Step 4: Documentation for Registration: </h5>
            <p>Our team of legal experts at JustStart will ensure that we follow each and every step of your company’s DPIIT recognition with diligent care. To further the process, we may ask you to provide a few details.</p>
          </div>  

          <div class="flex-row mb-8">
            <h5>Step 5: Get DPIIT Recognition </h5>
            <p>Once you provide all the details, DPIIT will issue your startup a recognition number if it is satisfied that your business fulfills the criteria for being a startup. You can use this ID or recognition number to avail benefits from several government schemes.</p>
          </div>  
        </div>
        <div class="col-md-7 col-lg-4 pt-6 position-lg-sticky" style="top: 8rem;" >
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
            <h2 class="display-6 mt-6 mb-4 font-bolder">Why Choose JustStart For Sole Proprietorship Company Registration
              <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> 
            </h2>
              
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <p class="mb-4">Startup registration India your own business takes great courage, especially if you are in India, where <b>giving up your 9 to 5 safe job</b> is considered a huge risk. </p>

                  <p class="mb-4">But today’s entrepreneurs know that without risk, there is no success. That is why JustStart is pushing the dreams of these visionaries one step closer to reality by becoming their legal advisors. </p>

                  <p class="mb-2"><b>We Promise To Be Your Lawfully Startup Registration Partner: For Better.</b> Whatever it takes to launch your startup, we will help you stay within legal bounds. We are the sign that you have been looking for.</p>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>Who can register for startup India? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>A private limited company, one-person company, registered partnership firm, or limited liability partnership (LLP) can register for a startup in India. Those businesses are less than 10 years old, and have an annual turnover of under 100 crore, & working towards innovation, development of products or services.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>What is the benefit of startup India registration? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>Startup India offers numerous benefits, including tax exemptions, easier compliance, access to funding, and intellectual property support. It also provides advantages for participating in government tenders.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>Is there any fee for startup India registration? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>There are no government fees for Startup India registration, but seeking professional assistance may incur some costs.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>What is startup India certificate? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>A Startup India certificate is an official recognition granted by the Indian government to eligible startups. It offers benefits like tax exemptions and access to funding and resources to foster growth and innovation.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>Is it necessary to register a startup in India? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>Registering a startup in India is not mandatory, but it offers benefits such as legal recognition, access to government incentives, and enhanced credibility. Those seeking these advantages should consider registration.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true" aria-controls="faq-collapse-5"><h2>What are the benefits of startup India in income tax? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                  <div class="card-body">
                    <p>Startup India offers tax breaks like a 100% exemption on profits for three years out of the first ten years. This helps startups save on taxes and reinvest in their growth.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-6">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="true" aria-controls="faq-collapse-6"><h2>What is the process of getting registration under startup India? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-6">
                  <div class="card-body">
                    <p>To register under Startup India, you first need to apply online for recognition through the Startup India website. After that, complete the registration process on the same site, and you'll get access to various benefits and support.</p>
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