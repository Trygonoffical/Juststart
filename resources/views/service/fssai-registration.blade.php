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
            <p>Our expert consultation service can assist you in obtaining a government food license.</p>
            <p class="fs-20">Get your food license hassle-free with JustStart's specialized services</p>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li class="mb-2" ><span><i class="uil uil-check fs-22"></i></span><span>Tailored to simplify the entire licensing process </span></li>
              <li class="mb-2"><span><i class="uil uil-check fs-22"></i></span><span>No hidden Charges and reasonable professional fees</span></li>
              <li class="mb-2"><span><i class="uil uil-check fs-22"></i></span><span>We provide support for all states </span></li>
              <li class="mb-2"><span><i class="uil uil-check fs-22"></i></span><span>Dedicated team of professionals</span></li>
            </ul>

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
          </div>
          <div class="col-md-6 col-lg-7">
            <h2 class="display-5 mb-4 font-bolder">What is a FOSCOS or FSSAI Food license?</h2>
            <p><b>FoSCoS,</b> which stands for Food Safety Compliance System, is an online tool created by the FSSAI (Food Safety and Standards Authority of India) offering a single solution for food businesses across the country to improve their compliance with regulations in the constantly changing food industry landscape.</p>
          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="EOZsWeEO5ew"></div>
          </div>
          <div class="col-md-12 col-lg-12 mt-6 mb-8">
            <h2 class=" mb-4 font-bolder">What is an FSSAI or FSSAI registration?</h2>
            <p>FSSAI stands for the Food Safety and Standards Authority of India. It is like the guardian of food safety in India.</p>
            <p>It is an autonomous body established under the Ministry of Health & Family Welfare, Government of India. FSSAI is responsible for regulating and supervising the safety and standards of food products in India to ensure they meet the prescribed quality benchmarks and are safe for consumption.</p>
            <p>They set rules and guidelines for how food should be produced, processed, and sold to keep us healthy and prevent food-related illnesses.</p>
          </div>
      </div>
  </div>
</section>

<!-- TYPES OF LICENSE -->
<section class="wrapper bg-soft-orange">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">TYPES OF LICENSE</h6>
            <h2 class="display-4 mb-4 font-bolder">What are the different types of licenses?</h2>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <p>In India, the FSSAI (Food Safety and Standards Authority of India) issues different types of licenses for food businesses based on their scale of operation and nature. Here are the main types of licenses:</p>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">1. FSSAI Registration</h4>
                <p>This is required for small food businesses whose annual turnover is less than ₹12 lakh. It's a basic registration process that ensures compliance with food safety standards.</p>
                <p>This is for food businesses like petty retailers, small-scale manufacturers, and hawkers. It's suitable for businesses with limited operations and turnover.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">2. State FSSAI License Online</h4>
                <p>Food businesses with an annual turnover between ₹12 lakh and ₹20 crore need to obtain a state-level FSSAI license. This license is issued by the state government.</p>
                <p>Suitable for mid-sized food businesses operating within one state.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">3. Central FSSAI License</h4>
                <p>Food businesses with an annual turnover exceeding ₹20 crore require a central-level FSSAI license. This license is issued by the Central Government.</p>
                <p>Mandatory for large-scale food businesses operating across multiple states or having an annual turnover exceeding ₹20 crore.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <p>These licenses ensure that food businesses comply with food safety standards and regulations set by the FSSAI, thereby ensuring the safety and quality of food products available on the market.</p>
            </div>
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
            <h2 class="display-4 mb-4 font-bolder">Benefits of FSSAI registration</h2>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <p>Here are the benefits of getting an FSSAI registration, in simple terms:</p>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-yellow me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Following the Law</h4>
                <p>Getting a food license means you're following the rules set by the government for selling safe food. It keeps you from getting into trouble for not following these rules.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-yellow me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">People Trust You</h4>
                <p>When customers see your food license, they feel confident that your food is safe to eat. It helps them trust your business more.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-yellow me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">More Places to Sell</h4>
                <p>Many stores and shops will only sell your products if you have a food license. So, having one means you can sell your food in more places.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-yellow me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Your Business Looks Good</h4>
                <p>Having a food license makes your business look professional and responsible. It shows that you care about making safe and quality food.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-yellow me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Grow Your Business</h4>
                <p>With a food license, it's easier to expand your business to new areas or make more of your products because you're already following the rules.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-yellow me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Good Reputation</h4>
                <p>Following food safety rules and having a license makes people think highly of your business. It helps build a good reputation.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-yellow me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Government Help</h4>
                <p>Once you're registered, the government might help you with things like training and making sure you're following the rules.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-yellow me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Safety First</h4>
                <p>Following food safety rules means you're less likely to make people sick or have to recall your products, which could hurt your business.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <p>So, getting a food license isn't just about following rules; it's about building trust, growing your business, and keeping your customers safe and happy.</p>
            </div>
          </div>
      </div>
  </div>
</section>

<!-- PROCESS -->
<section class="wrapper bg-soft-orange">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">PROCESS</h6>
            <h2 class="display-4 mb-4 font-bolder">FSSAI Registration Online process</h2>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <p>The <b>FSSAI registration process online</b> involves several steps:</p>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Preparation</h4>
                <p>Before starting the registration process, ensure you have all the necessary documents ready, such as identity proof, address proof, and details about your food business.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Visit the FSSAI website</h4>
                <p>Go to the official website of the Food Safety and Standards Authority of India (FSSAI).</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Create an Account</h4>
                <p>If you haven't already, create an account on the FSSAI website.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Choose Registration Type</h4>
                <p>Determine the type of registration you need based on the scale and nature of your food business (Basic, State, or Central).</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Fill out the Application Form</h4>
                <p>Fill out the online application form with accurate details about your business, including contact information, food category, and production capacity.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Upload Documents</h4>
                <p>Upload scanned copies of the required documents, such as identity proof, address proof, and supporting documents related to your food business.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Payment of Fees</h4>
                <p>Pay the applicable registration fees online using the available payment methods.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Submission</h4>
                <p>Review all the information provided and apply.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Application Processing</h4>
                <p>After submission, the FSSAI authorities will process your application. This may involve verification of documents and inspections if required.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Issuance of Registration Certificate</h4>
                <p>Once your application is approved, you will receive the FSSAI certificate via email or downloadable from the website.</p>
              </div>
            </div>
            
          </div>
      </div>
  </div>
</section>

<!-- Documents -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-yellow ">
    <div class="row mb-10">
      <div class="col-lg-12" >
        <h2 class="display-4 mb-4 font-bolder text-center">Documents Required For FSSAI License Online</h2>
      </div>
    </div>
    <div class="row align-items-start" >
        <div class="col-lg-8" >
          <ul class="nav nav-tabs nav-tabs-basic">
            <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tab3-1">FOR BASIC REGISTRATION</a> </li>
            <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab3-2">FOR STATE LICENSE</a> </li>
            <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab3-3">FOR CENTRAL LICENSE</a> </li>
          </ul>
          <!-- /.nav-tabs -->
          <div class="tab-content mt-0 mt-md-5">
            <div class="tab-pane fade show active" id="tab3-1">
              <ol class="mt-4">
                <li class="mb-2">Declaration through Form A</li>
                <li class="mb-2"><b>ID Proof:</b> A document that shows who you are, like your Aadhar card, PAN card, or passport.</li>
                <li class="mb-2"><b>Address Proof:</b> Something that proves where your business is located, like a utility bill or rental agreement.</li>
                <li class="mb-2">Details of the <b>Kind of Business</b> (KoB)</li>
                <li class="mb-2"><b>Form IX</b> in case of nomination of a person by a company along with a board (not required in case of proprietor)</li>
                <li class="mb-2">A photograph of the applicant, in the case of an individual.</li>
                <li class="mb-2">A list of proprietors along with their nominee details.</li>
              </ol>
            </div>
            <!--/.tab-pane -->
            <div class="tab-pane fade" id="tab3-2">
              <ol class="mt-4">
                <li class="mb-2"><b>FORM B</b> application for a license</li>
                <li class="mb-2"><b>ID Proof:</b> A document that shows who you are, like your Aadhar card, PAN card, or passport.</li>
                <li class="mb-2"><b>Address Proof:</b> Something that proves where your business is located, like a utility bill or rental agreement.</li>
                <li class="mb-2">Details of the <b>Kind of Business</b> (KoB): A list of all the food products you make or handle.</li>
                <li class="mb-2"><b>Form IX</b> in case of nomination of a person by a company along with a board</li>
                <li class="mb-2">A photograph of the applicant, in the case of an individual.</li>
                <li class="mb-2">Photographs of the premises inside and outside</li>
                <li class="mb-2"><b>Recall Plan:</b> Details about how you make sure your food is safe to eat</li>
                <li class="mb-2"><b>Layout Plan:</b> A drawing of your business place showing where everything is.</li>
                <li class="mb-2"><b>Manufacturer's Approval:</b> If you're not the original maker of the food, you'll need a certificate from the manufacturer saying it's okay for you to sell it.</li>
                <li class="mb-2"><b>Water Test Results:</b> If you use water in your business, you'll need to show it's clean with a test report.</li>
                <li class="mb-2"><b>Source of Meat or Milk:</b> If you deal with meat or milk products, you'll need a certificate showing where you get them from</li>
                <li class="mb-2"><b>Partnership Paperwork:</b> If you're in a partnership, you'll need documents showing your agreement.</li>
                <li class="mb-2"><b>Authorized signatory letter</b> for filling out the FSSAI application.</li>
                <li class="mb-2">In the case of a <b>company</b>, required COI, MOA, AOA, and PAN of the company.</li>
                <li class="mb-2">Name & list of equipment and machines, along with the numbers.</li>
                <li class="mb-2">List of directors with full details in the case of the company.</li>
              </ol>
            </div>
            <!--/.tab-pane -->
            <div class="tab-pane fade" id="tab3-3">
              <ol class="mt-4">
                <li class="mb-2">Self-Declaration Form through Form B</li>
                <li class="mb-2"><b>ID Proof:</b> A document that shows who you are, like your Aadhar card, PAN card, or passport.</li>
                <li class="mb-2"><b>Address Proof:</b> Something that proves where your business is located, like a utility bill or rental agreement.</li>
                <li class="mb-2">Details of the <b>Kind of Business</b> (KoB): A list of all the food products you make or handle.</li>
                <li class="mb-2"><b>Form IX</b> in case of nomination of a person by a company along with a board</li>
                <li class="mb-2">Certificate of incorporation of the company</li>
                <li class="mb-2">PAN card of a company</li>
                <li class="mb-2">If the applicant is a private limited company MOA & AOA</li>
                <li class="mb-2">An authority letter from the company letterhead to the concerned person stating that he is authorized to file an FSSAI application.</li>
                <li class="mb-2">Importer-exporter code issued by the DGFT in case of import/export.</li>
                <li class="mb-2">E-commerce business: A mandatory live website will be required in the case of e-commerce business.</li>
                <li class="mb-2">Photographs of the premises inside and outside</li>
                <li class="mb-2"><b>Recall Plan:</b> Details about how you make sure your food is safe to eat</li>
                <li class="mb-2"><b>Layout Plan:</b> A drawing of your business place showing where everything is.</li>
                <li class="mb-2"><b>Manufacturer's Approval:</b> If you're not the original maker of the food, you'll need a certificate from the manufacturer saying it's okay for you to sell it.</li>
                <li class="mb-2"><b>Water Test Results:</b> If you use water in your business, you'll need to show it's clean with a test report.</li>
              </ol>
            </div>
            <!--/.tab-pane -->
          </div>
          <!-- /.tab-content -->

          <h6>Having these documents ready will make it easier to apply for your food license.</h6>
        </div>
        <div class="col-md-7 col-lg-4 pt-6 position-lg-sticky" style="top: 8rem;" >
          <figure class="rounded">
            <img src="{{asset('')}}images/service-icon/trademark.png" alt="service icon" />
          </figure>
        </div>
      
    </div>

  </div>
  <!-- /.container -->
</section>

<!-- NEEDS -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-pink ">
    <div class="row mb-10">
      <div class="col-lg-12" >
        <h2 class="display-4 mb-4 font-bolder text-center">Who needs a food license?</h2>
      </div>
    </div>
    <div class="row align-items-start" >
        <div class="col-lg-8" >
          <div class="flex-row mb-8">
            <h6>Anyone who makes, sells, stores, transports, or distributes food in India needs a food license. This includes:</h6>
            
            <ol class="mt-4">
              <li class="mb-2"><b>Food manufacturers:</b> People or companies that make food products, like snacks, drinks, or packaged foods.</li>
              <li class="mb-2"><b>Food Processors:</b> Those who process raw food materials to make finished products.</li>
              <li class="mb-2"><b>Storage Places:</b> Warehouses or cold storage places where food is kept before it's sold.</li>
              <li class="mb-2"><b>Wholesalers:</b> People or companies who sell food products in bulk to retailers.</li>
              <li class="mb-2"><b>Retailers:</b> Shops, supermarkets, restaurants, and any place where food is directly sold to customers.</li>
              <li class="mb-2"><b>Transporters:</b> People or companies that move food from one place to another.</li>
              <li class="mb-2"><b>Importers and Exporters:</b> People or companies that bring food into India or send it out of India.</li>
            </ol>
            <p>No matter the size of your business, whether big or small, if you're involved in any part of the food supply chain, you need to get a food license. It's a way to make sure that the food people eat is safe and healthy.</p>
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

<!-- COST -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-blue ">
    <div class="row mb-10">
      <div class="col-lg-12" >
        <h2 class="display-4 mb-4 font-bolder text-center">FSSAI License Government COST</h2>
      </div>
    </div>
    <div class="row align-items-start" >
        <div class="col-lg-8" >
          <div class="flex-row mb-8">
            <h5>The applicant/FBO is required to pay the specified fees upon submission of the FSSAI registration form. The government fee structure for different types of registration is outlined as follows:</h5>
    
            <ul class="mt-4">
              <li class="mb-4"><b>FSSAI Basic Registration:</b> Rs. 100</li>
              <li class="mb-4"><b>FSSAI State License:</b> The fee ranges from Rs. 2,000 to Rs. 5,000, depending on the nature of the business.</li>
              <li><b>FSSAI Central License:</b> Rs. 7,500+ 18% GST annually</li>
            </ul>
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

<!-- Renewal -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-yellow ">
    <div class="row mb-10">
      <div class="col-lg-12" >
        <h2 class="display-4 mb-4 font-bolder text-center">Renewal of FSSAI License</h2>
        <h5 class="text-center mt-8">Getting the FSSAI license is important when starting a food business, and it's also really important to renew it. The license lasts either 1 year or 5 years, so businesses need to apply for renewal 30 days before it runs out.</h5>
      </div>
    </div>
  </div>
  <!-- /.container -->
</section>

<!-- Penalities -->
<section class="wrapper bg-soft-orange">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">PENALTIES</h6>
            <h2 class="display-4 mb-4 font-bolder">Penalties for non-compliance with FSSAI regulations</h2>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <p>Here are the penalties for violations of food safety regulations outlined point by point:</p>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Operating Without License/Registration</h4>
                <p>Fines can range from Rs. 25,000 to Rs. 5,00,000, depending on the severity of the violation.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Substandard or unsafe food</h4>
                <p>Penalties can lead to up to Rs. 5,00,000 and imprisonment for a term not exceeding 6 months.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Misleading advertising or labeling</h4>
                <p>Fines can range from Rs. 10,000 to Rs. 3,00,000</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Non-compliance with Food Safety Standards</h4>
                <p>Penalties can reach up to Rs. 2,00,000 and imprisonment for a term not exceeding 6 months.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Adulteration of Food</h4>
                <p>Penalties can extend up to Rs. 10,00,000 and imprisonment for a term not exceeding 7 years.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Non-compliance with Food Recall Procedures</h4>
                <p>Fines can reach up to Rs. 10,00,000.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Failure to Maintain Hygiene and Sanitation Standards</h4>
                <p>Penalties can range from Rs. 1,00,000 to Rs. 10,00,000, depending on the extent of the violation.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Failure to maintain records and documentation</h4>
                <p>Fines can range from Rs. 2,00,000 to Rs. 10,00,000.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Non-compliance with Packaging and Labeling Regulations</h4>
                <p>Penalties can go up to Rs. 3,00,000.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Failure to provide safe drinking water</h4>
                <p>Penalties can range from Rs. 1,00,000 to Rs. 5,00,000.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
                <p>These penalties are indicative and can vary based on the specific circumstances of each case. It's crucial for food business operators to strictly adhere to food safety regulations to avoid these penalties and ensure the safety of consumers.</p>
            </div>
          </div>
      </div>
  </div>
</section>

<!-- WHY US -->
<section class="wrapper  ">
  <div class="container mb-10 mt-10">
    <div class="card p-10 shadow-lg">
      <div class="row align-items-start ">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <h2 class="display-6 mt-6 mb-4 font-bolder">Why JustStart
              <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> 
            </h2>
              
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <p class="mb-4">At JustStart, we can streamline the FSSAI registration process for businesses, saving them time and effort while ensuring compliance with food safety regulations.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>  

            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <p class="mb-4">Throughout the process, we will provide friendly and helpful assistance to make everything as easy as possible for the business.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>  

            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <p class="mb-4">JustStart offers convenient online services, allowing businesses to complete the registration process from anywhere at their own pace.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>  

          </div>
      </div>
    </div>
  </div>
</section>

@endsection