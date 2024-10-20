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

            <p>If you are providing a service or selling something on your own, you will need to get your business registered as a Proprietorship Firm. </p>

            <h5>Get Your Proprietorship Firm Registered!</h5>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Submit Your Details </span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Talk To Our Proprietorship Registration Experts</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span> Kickstart your Proprietor Company Registration Process </span></li>
            </ul>

            <h3>Get professional help in Sole Proprietorship Registration</h3>

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
            <h3 class="display-4 mb-4 font-bolder">What Is Sole Proprietorship?</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>In India, a sole proprietorship company is a type of business entity where a single individual owns, manages, and controls the entire business. This individual is personally liable for all the debts and obligations of the business, and there is no legal distinction between the owner and the business.</p>
            <p>A sole proprietorship is the simplest and most common form of business structure in India. It is particularly popular among small business owners and entrepreneurs who want to start a business with minimum formalities and expenses. To start a sole proprietorship company in India, you will need the guidance and assistance of experienced legal consultants. </p>
          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="WUAQB6_6xtE"></div>
          </div>
      </div>
  </div>
</section>


<!-- BENEFITS -->
<section class="wrapper bg-soft-yellow">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">ADVANTAGES</h6>
            <h2 class="display-4 mb-4 font-bolder">Advantages Of Sole Proprietorship Firm</h2>
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
                <h4 class="fs-20">Easy to Start</h4>
                <p>A sole proprietorship is the simplest form of business entity to set up, as there are no complicated formalities or legal procedures required. This means that it is easy to get started and get your business up and running quickly.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Complete Control</h4>
                <p>As the sole owner of the business, you have complete control over all aspects of the operation, including management, decision-making, and financial matters. This can especially appeal to entrepreneurs who want to be their boss and make all the decisions.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Flexibility</h4>
                <p>A sole proprietorship is a flexible business structure that allows you to make changes to your business as needed without having to consult with anyone else. This means you can adjust your business strategy, products or services, pricing, or marketing without needing approval from anyone else.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">No Sharing of Profits</h4>
                <p>Unlike other business structures such as partnerships, you do not have to share the profits of your business with anyone else. All profits belong to the owner, which can be an attractive incentive for entrepreneurs.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Tax Benefits</h4>
                <p>A sole proprietorship can offer certain tax benefits, as the business income is reported on the owner’s personal income tax return. This means that the owner can take advantage of certain deductions and credits that are not available to other types of businesses.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
                <p>Overall, a sole proprietorship can be a great option for entrepreneurs who are just starting or who want to maintain complete control over their business.</p>
          </div>
      </div>
  </div>
</section>

<!-- How To Start -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-green ">
    <div class="row ">
        
        <div class="col-md-5 col-lg-8" >
          <h2 class="display-5 font-bolder mb-6">How To Start A Sole Proprietorship Company?</h2>

          <p>Proprietorship Firm Registration Online, follow these steps:</p>

          <ul class="icon-list bullet-bg bullet-green ms-0 gy-2 mt-6 mb-8">
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Choose a name for your business.</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Verify that the selected business name is unique.</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>File an online application for GST registration.</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Upload the necessary documents.</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Within a few days of applying, obtain GST registration certification.</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Open a bank account in the name of your Sole Proprietorship.</span>
            </li>
          </ul>

          <p>It’s essential to adhere to all legal requirements and seek professional advice to ensure your <b>Online Sole Proprietorship registration process</b> is smooth and efficient.</p>
          
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

<!-- Documents Required -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-orange ">

    <div class="row mb-10">
      <div class="col-lg  -12" >
        <h2 class="display-4 mb-4 font-bolder text-center">Documents Required for Proprietorship Firm?</h2>
      </div>
    </div>
    <div class="row ">
        <div class="col-lg-8" >
          <p>To register as a Sole Proprietorship firm in India, you will need the following documents:</p>

          <ul class="icon-list bullet-bg bullet-orange ms-0 gy-2 mt-6 mb-8">
            <li class="mb-2">
                <span><i class="uil uil-check"></i></span>
                <span><b>PAN Card:</b> A copy of the PAN (Permanent Account Number) card of the proprietor is required.</span>
            </li>
            <li class="mb-2">
                <span><i class="uil uil-check"></i></span>
                <span><b>Address Proof:</b> Any valid government-issued address proof document, such as an Aadhaar card, Voter ID, Passport, Driving License, or utility bill, should be submitted.</span>
            </li>
            <li class="mb-2">
                <span><i class="uil uil-check"></i></span>
                <span><b>Identity Proof:</b> Any valid government-issued identity proof document, such as an Aadhaar card, Voter ID, Passport, or Driving License, should be submitted.</span>
            </li>
            <li class="mb-2">
                <span><i class="uil uil-check"></i></span>
                <span><b>Passport Size Photograph:</b> Recent passport-size photograph of the proprietor must be provided.</span>
            </li>
            <li class="mb-2">
                <span><i class="uil uil-check"></i></span>
                <span><b>Business Address Proof:</b> Any valid address proof of the place of business, such as utility bills, lease agreements, or property documents, must be provided.</span>
            </li>
            <li class="mb-2">
                <span><i class="uil uil-check"></i></span>
                <span><b>Bank Account Details:</b> Bank account details of the proprietor or the business must be provided.</span>
            </li>
          </ul>
          
          <p>It’s important to note that additional documents may be required depending on the nature of the business and the state in which it is being registered. Therefore, it’s advisable to check with the relevant authorities or seek professional advice to ensure all necessary documents are in order.</p>
          
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
            <h2 class="display-6 mt-6 mb-4 font-bolder">Why Choose JustStart For Sole Proprietorship Company Registration
              <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> 
            </h2>
            <p>If you are looking to establish a <b>proprietorship company registration in India</b>, you must connect with a team of legal consultants. JustStart is one of the best legal firms in India, with a great number of clients who are highly dependent on our legal expertise. From private limited companies to proprietor companies, our legal assistance is beneficial for all. </p>
              
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-0 ">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Effective Legal Solutions
                  </h3>
                  <p class="mb-0">Through our effective legal solutions, your sole proprietorship company will thrive. With the help of our expertise, we ensure that your company’s growth isn’t hindered by any legal trouble.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-0 ">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Expert Consultants
                  </h3>
                  <p class="mb-0">Our highly experienced team of legal consultants provides credible and valuable advice aimed at helping you make informed decisions that serve the best interests of your proprietor company.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-0 ">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Maintenance Services
                  </h3>
                  <p class="mb-0">We strive to help your business grow with our exceptional and quick maintenance services. Our maintenance solutions ensure that your Proprietorship company always meets the legal requirements. </p>
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
                  <p class="mb-0">With an unparalleled experience in legal consultancy, we provide you with the best legal solutions. Our expertise focuses on making our clients attain their goals. This is why we are one of the best legal experts in India.</p>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>What is meant by a proprietorship firm? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>A proprietorship is a business structure where a single individual owns and manages the entire business. The proprietor is personally liable for all the debts and obligations of the firm. Proprietorship firms are easy to set up and operate, making them a popular choice for small businesses and startups in India.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>What are the compliances for a proprietorship company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>A proprietorship company is a type of business structure where a single individual owns and runs the business. As a sole proprietorship, certain compliances need to be followed to ensure legal and financial compliance. Some of these compliances include:</p>
                    <ul>
                      <li><b>Business registration:</b> The proprietorship must be registered with the local authorities.</li>
                      <li><b>Business licences and permits:</b>Depending on the nature of the business, various licences and permits may be required, such as a shop and establishment licence, a trade licence, a professional tax registration, etc.</li>
                      <li><b>PAN and GST registration:</b> The proprietorship must obtain a PAN (Permanent Account Number) and register for GST (Goods and Services Tax) if the annual turnover exceeds the prescribed limit.</li>
                      <li><b>Income tax returns:</b> The proprietor must file income tax returns every year, depending on the income earned during the financial year.</li>
                      <li><b>TDS compliance:</b> If the proprietorship makes payments to vendors or contractors, TDS (Tax Deducted at Source) may need to be deducted and deposited with the government.</li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>Minimum funds requirement for starting a proprietor company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>There is no specific minimum funds requirement for starting a proprietor company, as it depends on the nature and scale of the business. However, the proprietor should have sufficient funds to cover the initial expenses of setting up the business and operating it until it starts generating revenue.</p>

                    <p>It is advisable to create a detailed business plan that outlines all the expenses involved in starting and running the business and to ensure that there is adequate funding to cover these expenses. The proprietor can also explore various sources of funding, such as personal savings, bank loans, or investments from friends and family, to cover the initial expenses.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>How long does the sole proprietorship exist? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>The existence of a sole proprietorship is not fixed or predetermined, and it can exist as long as the proprietor desires. In a sole proprietorship, the business and the proprietor are considered the same, and there is no legal distinction between them.</p>
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