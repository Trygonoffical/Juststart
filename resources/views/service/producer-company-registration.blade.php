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

            <p>Make <b>farmer producer company registration process</b> easier in India with the guidance of right experts. JustStart boast a team of qualified experts with several years of expertise in doing <b>Producer Company Registration</b>. No matter how big or minutest the task is, expect the best possible assistance from our team to make registration easier for you.</p>

            <p class="fs-20">Get answers and assistance from our experts in any kind of doubts you have regarding <b>Producer Company Registration Process</b></p>
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
            <h2 class="display-4 mb-4 font-bolder">What Is Producer Company</h2>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>A Farmer Producer Company is a company formed by farmers or agriculturists and registered as a Producer Company under the Companies Act -2013. The motive behind forming this company is to enable farmers to pool their resources, share knowledge, access markets directly, and negotiate better prices for their produce. There is no limit to the number of members in these Farmer producer Companies and they are regarded as a Pvt. Ltd. Company under the law.</p>
            <p>FPCs receive support and guidance from government agencies, NGOs, and agricultural experts. The big role played by these companies is in rural development as they promote sustainable farming practices, which help raise the income of farmers from agricultural produce.</p>
          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="0yObzAAECfY"></div>
          </div>
      </div>
  </div>
</section>

<!-- Features -->
<section class="wrapper bg-soft-orange">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">FEATURES</h6>
            <h2 class="display-4 mb-4 font-bolder">Features of Farmer Producer Company in India</h2>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <p>Here are the key features of an FPC in India:</p>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Deposit Acceptance</h4>
                <p>Produce companies can accept deposits in the form of a fixed deposit (FD) or a recurring deposit.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Loan against Security</h4>
                <p>Producer companies can also act as lending companies that grant loans while keeping gold, property, FDs, or government securities as collateral.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Members Upliftment</h4>
                <p>The profits and benefits are all for the farmer members of the Farmer Producer Company that help in their livelihood.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">No taxes are imposed</h4>
                <p>Whatever earnings the FPC generates from agricultural activities are exempt from taxes, which means the IT department does not demand any tax that directly benefits the farmers.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <p>To learn about FPC registration, book a free consultation with our experts today.</p>
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
            <h2 class="display-4 mb-4 font-bolder">Benefits of FPO Registration</h2>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <p>There are various advantages of Farmer producer company registration. Check the significant ones below:</p>
            <p>There are many benefits to registering a Farmer Producer Organisation (FPO), including:</p>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Limited Liability</h4>
                <p>The limited liability of FPO members means their personal assets are safe and cannot be used to repay the debts or liabilities of the organisation. Even if the FPO goes bankrupt, the personal assets of members will not be touched.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Government subsidies and grants</h4>
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
                <h4 class="fs-20">Easier credit access</h4>
                <p>For banks and financial institutions, the FPOs are creditworthy as compared to individual farmers. Therefore, they lend credit on easy terms to these organisations and at better interest rates.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Better bargaining power</h4>
                <p>FPOs are more able to negotiate for better prices in deals with buyers. They can sell their produce in bulk for higher profits, which benefits all FPO members.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Boost efficiency and productivity</h4>
                <p>The help from the government via subsidies and easy credit access by banks helps farmers boost their efficiency and productivity by using better inputs, training, and technology.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-blue me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Easy access to markets</h4>
                <p>FPOs can reach markets more easily as compared to individual farmers and sell their agricultural produce at a higher price.</p>
              </div>
            </div>
          </div>
      </div>
  </div>
</section>

<!-- ELIGIBILITY -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-orange ">
    <div class="row mb-10">
      <div class="col-lg-12" >
        <h2 class="display-4 mb-4 font-bolder text-center">Who Is Eligible For The FPO Registration Process?</h2>
      </div>
    </div>
    <div class="row align-items-start" >
        <div class="col-lg-8" >
          <div class="flex-row mb-8">
            
            <p>Here are the eligibility criteria for FPO registration in India:</p>
            <h5>Minimum number of members</h5>
            <p>There must be a minimum 10 individual producers or at least 2 producer institutions.</p>

            <h5>Minimum number of directors</h5>
            <p>At least five directors are compulsory.</p>

            <h5>Minimum capital</h5>
            <p>The minimum capital of Rs. 5 lakhs is required.</p>

            <h5>Name of the company</h5>
            <p>The name of the FPO must end with 'Producer Limited Company' words.</p>

            <h5>Registered office</h5>
            <p>There must be a registered office address for the company in India.</p>

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

<!-- Documents -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-yellow ">
    <div class="row mb-10">
      <div class="col-lg-12" >
        <h2 class="display-4 mb-4 font-bolder text-center">Documents Required For FPO Registration in India</h2>
      </div>
    </div>
    <div class="row align-items-start" >
        <div class="col-lg-8" >
          <div class="flex-row mb-8">
            <h5 >The following documents are necessary to register a producer company in India:</h5>
            <ul class="mt-4">
              <li class="mb-2">PAN cards of all members and directors</li>
              <li class="mb-2">Passport-size photographs of all members and directors</li>
              <li class="mb-2">Aadhaar card of all members and directors</li>
              <li class="mb-2">Proof of registered office address (such as gas bill, electricity bill, or rent agreement)</li>
              <li class="mb-2">Memorandum of Association (MoA) and Articles of Association (AoA)</li>
              <li class="mb-2">Digital Signature Certificates (DSCs) of all directors</li>
              <li class="mb-2">Landlord's NOC of the registered office (only if applicable)</li>
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

<!-- Process -->
<section class="wrapper bg-soft-orange">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">PROCESS</h6>
            <h2 class="display-4 mb-4 font-bolder">Process for Producer Company Registration</h2>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <p>To register a producer company online, here are the key steps to follow:</p>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Name Approval</h4>
                <p>The registration process begins with obtaining name approval for the producer company. The same person must apply for name approval with the Registrar of Companies (RoC).</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">MOA and AOA</h4>
                <p>Just like a company, FPO also has to draft its Memorandum and Articles of Association. The MOA is the document that defines the objectives and scope of the company. The AOA specifies the regulations for carrying out the operations of the company.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Submission of the application</h4>
                <p>Once the name is approved, the MOA and AOA are ready, and then we proceed with collecting all the necessary documents for registration and submitting them to the ROC for approval along with the duly filled-out application form.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Incorporation Certificate</h4>
                <p>Upon approval of the application and documents, the RoC issues the Certificate of Incorporation. This certificate marks the establishment of the producer company.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">PAN and TAN Applications</h4>
                <p>The next step is to apply for the Permanent Account Number (PAN) and Tax Deduction and Collection Account Number (TAN) from the Income Tax Department for your producer company.</p>
              </div>
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
            <h2 class="display-6 mt-6 mb-4 font-bolder">Why JustStart for FPO Registration
              <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> 
            </h2>
              
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <p class="mb-4">For online FPO registration, you must trust JustStart as your partner to assist you in every step of your registration process. We make sure you get answers to all your questions. Trust is without a second thought, as we keep everything clear throughout the process. Our team comprises professionals with numerous years of expertise managing the online registration process for FPOs in India. Here are some solid justifications for selecting our services:</p>

                  <ul class="mt-4">
                    <li>Constant Availability</li>
                    <li>Competitive Costing</li>
                    <li>Customised Advice</li>
                    <li>Effective handling of documentation</li>
                    <li>Google-approved Company</li>
                    <li>Relaxed Experience</li>
                    <li>Fast Services</li>
                  </ul>
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