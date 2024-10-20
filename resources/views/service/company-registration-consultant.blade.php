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
            <p class="mb-6">Take the next step of elevating your business by forming a company with the help of a refined team of <b>Company Registration Consultants in Delhi.</b> Form your company today through JustStart’s effective legal assistance.</p>

            <p class="fs-20"><b>Speak With Our Consultants Today!</b></p>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Submit Your Business Details</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Talk To Our Experts</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Kickstart Your Online Registration Process</span></li>
            </ul>

            <p><b>Get your company registered through our expert legal consultants quickly.</b></p>
            <p><a href="tel:+91 9315513354" class="btn btn-sm btn-outline-primary rounded-pill">Talk To Expert</a></p>
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
            <h3 class="display-4 mb-4 font-bolder">Consultants for Company Registration</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>Starting a company and working passionately to grow it is better than working for someone else without any job security. Over the years, a great number of people have left their jobs to start their own businesses. Running a business allows you freedom and makes you the writer of your destiny. </p>

            <p>Once you leave your mundane job to work on your business idea, you will face a great number of challenges. These challenges can get quite overwhelming, if not dealt with wisely. <b>Company Registration Consultants</b> can help you deal with these challenges quickly without causing any hindrance to your business’s growth.</p>
          </div>
          <div class="col-md-6 col-lg-5 pt-0">
            <figure class="rounded">
              <img src="{{asset('images/overview/company-registration-consultant.jpg')}}" alt="company registration consultant" >
            </figure>
          </div>
      </div>
  </div>
</section>

<!-- TYPES OF COMPANIES -->
<section class="wrapper bg-soft-yellow">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">TYPES OF COMPANIES</h6>
            <h3 class="display-4 mb-4 font-bolder">Types Of Companies Registered in India</h3>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">

            <p>Over the years, the country has seen a great increase in the formation of businesses by entrepreneurs. More and more people are parting ways with their jobs to start their own businesses.  If you are one of them and haven’t picked out what type of company you are going to form, we would highly suggest you have a look at the following list of companies that are registered in India. </p>

            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
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
                <h4 class="fs-20">Private Limited Company</h4>
                <p>A Private Limited Company is one of the most popular concepts of a business. In a Private Limited Company, there can only be 200 shareholders. This business concept has been proven to be highly successful and is one of the most preferred choices for business people. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/conference.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">One-Person Company</h4>
                <p>If you are an entrepreneur and like to call yourself a “one-man army”, forming a One Person Company will be an ideal choice. This business model was introduced in India with the Company’s Act, 2013, and allowed a single person to initiate their own business.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/share.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Limited Liability Partnership</h4>
                <p>If you are ambitious about forming your own company but want limited liability, forming an LLP will be the ideal option. Besides limited liability, there are many other advantages of the LLP business model. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-navy me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/secure.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Proprietorship Firm</h4>
                <p>A Proprietorship Firm is similar to One Person Company as both are owned and run by one individual. Besides this one crucial similarity, there are a great number of differences between the two business models.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-sky me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Public Limited Company</h4>
                <p>Public Limited Company is another popular business model which requires a minimum of 3 directors at the time of its formation.</p>
              </div>
            </div>

          </div>
      </div>
  </div>
</section>

<!-- Why Us -->
<section class="wrapper">
    <div class="container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center">
            <h6 class="mb-4 text-yellow">WHY US</h6>
            <h3 class="display-4 mb-4 font-bolder">Why Register A Company Through JustStart’s Consultants?</h3>
          </div>
      </div>
    </div>
    <div class="container card p-10 mb-10">
      <div class="row ">
       
          <div class="col-md-5 col-lg-6" >
            <p class="">If you are looking to form a company in India to grow your business immensely, let our company <b>registration consultants</b> help you through their legal expertise. Our team of legal consultants has helped many entrepreneurs get their companies registered through our assistance. </p>

            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
            
          </div>
          <div class="col-md-7 col-lg-6" >
            
            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
              <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Growth:</b> Through our assistance, your company will grow extensively. JustStart’s legal consultants make sure that you run your business smoothly while complying with all the relevant laws. We engender your business’s growth by consistently helping you run your business through our legal guidance.</span>
              </li>
              <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Client Satisfaction:</b> We have a tremendous track record of helping individuals form their company and run it successfully. We strive to help our clients attain maximum satisfaction through our legal expertise. </span>
              </li>
              <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Experienced Consultants:</b> Our team is full of adept consultants with immaculate industry backgrounds. Our consultants leverage their tremendous legal experience to help our clients deal with their company’s legal affairs.</span>
              </li>
              <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Hassle-Free Company Registration:</b> We offer our clients a hassle-free company registration process. Once you hire our consultants for the registration of your company, we will walk you through the whole process.</span>
              </li>
            </ul>
          </div>
        
      </div>

    </div>
    <!-- /.container -->
</section>

<!-- Speak With Us -->
<section class="wrapper bg-dark text-inverse document-required">
    <div class="container px-10 py-12">
      <div class="row text-center">
        <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto">
          <h2 class="fs-16 text-uppercase text-white mb-3">SPEAK WITH US</h2>
          <h3 class="display-4 text-white mb-14">Speak With Our business registration Consultants in Delhi</h3>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->

      <div class="row ">
          <div class="col-lg-6 mx-auto">
            <p>If you are looking to start your business and need valuable legal advice from credible legal consultants, JustStart might be the ideal option for you. Our consultants will help you get your company registered quickly through our expertise. </p>
            
            <p>Speak with our team of business registration consultants today and let us help you through our legal guidance.</p>
          </div>

          <div class="col-lg-6 mx-auto">
            <div class="card bg-white">
                <div class="card-body p-6">
                  @include('forms.service-form-speak')
                </div>
                <!--/.card-body -->
            </div>
          </div>
      </div>
      <!--/.row -->

    </div>
    <!-- /.container -->
</section>


<!-- FAQ --> 
<section class="wrapper bg-soft-sky">
  <div class="container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">FAQs</h6>
            <h3 class="display-4 mb-4 font-bolder">LET'S CLEAR ALL THE DOUBTS!</h3>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
          <div class="accordion accordion-wrapper mt-10 faq-accordion" id="accordion">
              <div class="card accordion-item">
                <div class="card-header" id="faq-0">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>How long will it take your team to get my company registered?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>Once you share your details with us, we will quickly begin processing your company’s registration. We will file your company registration application within 2-3 days of receiving your details from you.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>What is a DSC? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>DSC stands for Digital Signature Certificate, which is basically a sign of the director of a company. The director of the company is required to get his or her digital signature registered with the concerned authority.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>Which type of company is the best in India?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>The various types of companies in India are:- </p>
                    <ul>
                      <li>Private Limited Company</li>
                      <li>Public Limited Company</li>
                      <li>One Person Company</li>
                      <li>Proprietorship Firm</li>
                      <li>Limited Liability Partnership</li>
                    </ul>
                    <p>Each type of business model mentioned above has different advantages and disadvantages. It is up to you to decide what’s best for your business according to your requirements.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>

              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>Will my business details be shared with anyone else? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>We will not share your business details with anyone outside our team of legal consultants. The protection of our client’s business details is our priority.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              
            </div>
            <!--/.accordion -->
          </div>
      </div>
  </div>
</section>

@endsection