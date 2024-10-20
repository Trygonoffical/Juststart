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

            <p>NGOs established under Section 8 are independent non-profit Organization that are typically set up to promote art, science, culture, education, research, religion, and raise concerns about socio-environmental issues.</p>

            <h5>Get FREE Expert Consultation Today!</h5>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Simplified NGO Registration Online </span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>100% Digital</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Get FREE Expert Consultation</span></li>
            </ul>

            <h3>Complete your NGO Registration under Section 8 Company at just <span class="text-blue">Rs. 14,999/-</span></h3>

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
      <div class="row align-items-start">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">OVERVIEW</h6>
            <h3 class="display-4 mb-4 font-bolder">NGOs In India</h3>
          </div>
          <div class="col-md-6 col-lg-7" >
            <div class="flex-row mb-8">
              <p>NGOs are non-governmental Organizations independently led by groups, individuals, or communities at national or international level who work for the improvement of society. These entities usually work with a humanitarian goal. In India, you can register your NGO under three structures, which are as follows: </p>
              <ul>
                <li>Trust Registration (The Indian Trust Act, 1882) </li>
                <li>Society Registration (Societies Registration Act, 1860)</li>
                <li>Section 8: Company Registration (The Companies Act, 2013)</li>
              </ul>
            </div>
            <div class="flex-row mb-8">
              <h6>Section 8 NGO Company</h6>
              <p>Companies established under Section 8 (1) (a), (b), and (c) of the Indian Companies Act, 2013 typically work for the promotion of art, science, sports, religion, social welfare, the environment, education, research, charity, and the objectives of the benefits of the environment. The Section 8 company was the immediate result of this need that was felt to have more transparency in the formation of NGOs. The Ministry of Corporate Affairs decided to allow the formation of Section 8 companies via the Registrar of Companies. </p>
            </div>
            <div class="flex-row mb-8">
              <h6>Roles and Functions of NGOs In India</h6>
              <p>Non-governmental Organizations, first recognized with the establishment of Servants of India, which was a secular NGO set up in 1905, have no single formal definition. They are generally addressed as non-profit entities that act as a mediator between the government and civilians. </p>
              <p>They operate outside the government’s influence and carry out activities like social rights work, addressing political changes on a broader scale, society’s development, advocating human rights, etc.</p>
            </div>
            <div class="flex-row mb-8">
              <h6>Minimum Eligibility to set up an NGO under Section 8 Company</h6>
              <p>The interested Organizations or corporations ought to be authorized by the applicable laws or regulations and must fulfill the following requirements: </p>
              <ul>
                <li>There should be at least 2 members/shareholders in a company. However, the number of shareholders should not exceed 200. </li>
                <li>There should also be at least two directors and out of which one director should be the resident in India.</li>
                <li>A Section-8 co can only have its main objects relating to any social cause only.</li>
                <li>Payment of dividends/distribution of profits is restricted in case of a section-8 company. Further the company’s profit can only be applied for the furtherance of its main objects.</li>
              </ul>
            </div>
            <div class="flex-row mb-8">
              <h6>Advantages of Setting Up an NGO Under Section 8 Company in India</h6>
              <ul>
                <li>Distinct legal identity.</li>
                <li>It allows more tax savings.</li>
                <li>Much easier compliance.</li>
                <li>Easy to formulate.</li>
                <li>Ease of establishing international collaborations</li>
                <li>No minimum capital is required.</li>
                <li>Transfer of ownership and title.</li>
                <li>Easy government funding is available.</li>
                <li>Protection from personal liability.</li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-5 pt-4 position-lg-sticky " style="top: 8rem;" >
            <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="6Eq9HsDsLUk"></div>
          </div>
      </div>
  </div>
</section>

<!-- Documents Required -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-orange ">
    <div class="row mb-10">
      <div class="col-lg-12" >
        <h2 class="display-4 mb-4 font-bolder text-center">Documents Required for Registering an NGO in India</h2>
      </div>
    </div>
    <div class="row ">
        
        <div class="col-lg-8" >
          <ul class="icon-list bullet-bg bullet-orange ms-0 gy-2 mt-6 mb-8">
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>PAN Card </span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Identity proof of the applicant/directors/members</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Proof of registered office address.</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Electricity bill (no more than 2 months old)</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Aadhar Card </span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Voter ID </span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Passport-size photographs </span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>DIR-2 (Director’s consent) along with address proof</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>NOC</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>INC-14 Declaration by professionals </span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>INC-15 Declaration by promoters (on stamp paper which is duly notarized)</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Affidavit regarding deposits </span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Annual income estimate</span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Memorandum of Association and Articles of Association </span>
            </li>
            <li>
                <span><i class="uil uil-check"></i></span>
                <span>Personal details of the promoters and the directors</span>
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

<!-- REGISTER  -->
<section class="wrapper bg-soft-yellow">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">REGISTER</h6>
            <h3 class="display-4 mb-4 font-bolder">How to Register as an NGO-Section 8 Company in India?</h3>
          </div>
      </div>
      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}images/types-of-company-registration.png" alt="types of company registration" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <p>For the convenience of applicants, NGO registration under Section 8 company can be done online by following the steps mentioned below: </p>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Step 1: Applying for DSC (Digital Signature Certificate) & DIN (Director Identification Number) </h4>
                <p>The directors must initially apply for a digital signature and a DIN. A digital signature is an electronic signature that is used for filing, and by “DIN” we mean the Directors’ identification no. that the MCA has granted. The directors can skip this stage if they already have DSC and DIN.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Step 2: Apply for a company name reservation </h4>
                <p>For Section 8 NGO company registration, MCA will demand unique names. Ideally, The name should fulfill the following:</p>
                <ul>
                  <li>The name should be meaningful.</li>
                  <li>The name of your proposed company should be unique.</li>
                  <li>The company name should reflect the activity your NGO will be taking up.</li>
                  <li>The name of the company should be legal and should not be offensive in any manner.</li>
                </ul>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Step 3: Filling SPICe+ form </h4>
                <p>Our team of experts will fill out a new application for Section 8 NGO company registration. </p>
                <p><b>SPICe+ Part A:</b> At this stage, we will make sure to mention the type of company you want to create, its classification, company category, the main division you will be operating from, and the company’s description, among other information.</p>
                <p><b>SPICe+ Part B:</b> Here our experts will complete the second stage of the SPICe+ form in which we will complete structural information about your company, such as the number of shares, total subscribed shares, total authorized shares capital, etc. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-blue me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-red" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Step 4: Receiving NGO Section 8 Company Incorporation Certificate and Licence  </h4>
                <p>It may take around 7-10 days to obtain the CIN (company incorporation certificate). This certificate is proof that your NGO now exists legally.  PAN and TAN will be issued along with the incorporation certificate only.</p>
                <p>Section 8 Company Registration of NGOs is completely online in India.</p>
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
            <h2 class="display-4 mt-6 mb-4 font-bolder">Why Choose JustStart For Register Section 8 Company
              <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> 
            </h2>  
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-0 ">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Our Strategies Work
                  </h3>
                  <p class="mb-0">From paper planning to idea execution, we actively achieve benchmark guidelines to ensure each step of the plan is not just carefully laid but successfully converted into reality.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-0 ">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Our Ideology is Our Soul
                  </h3>
                  <p class="mb-0">JustStart is a platform for those who have the willpower to dream and the drive to achieve. We promise you our commitment, trust, and expertise to generate a hassle-free experience.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-0 ">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Meet Deadlines
                  </h3>
                  <p class="mb-0">Time is of the essence. Every single day lost is an opportunity lost. Therefore, we take precautionary measures to ensure your business meets all the deadlines you have set.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-0 ">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Guaranteed Satisfaction
                  </h3>
                  <p class="mb-0">We know quality has no replacement. Thus, we systemize each level of our work to minimize the chances of mistakes before each project passes through our client’s hands.</p>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>What is a Section 8 NGO (Non-governmental Organisation)? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>A non-governmental organisation, commonly known as an NGO, is a company that operates independently of governmental control with the aim of addressing social or political issues.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>How many types of NGOs are there? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>In India, there are several types of NGOs. The names of the few are as follows:</p>
                    <ul>
                      <li>National NGOs</li>
                      <li>International NGOs </li>
                      <li>Community-based NGOs (CBOs)</li>
                      <li>Citywide NGOs</li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>How to register an NGO in India? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>Well, the process of NGO registration involves applicants completing a few steps, starting from deciding the cause to register an NGO, to setting up the board of directors for it, and finally deciding the name of the NGO itself. And of course, there are other stages like incorporation and getting an NGO registered on MCA’s (Ministry of Corporate Affairs) portal.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>What is the process of registering an NGO in India? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>As previously stated, the process of registering an NGO in India is entirely ONLINE. applicants may need to present some necessary paperwork for this.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>Is Online NGO registration tricky? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>Not necessarily. If you hire the right help like JUSTSTART, We are the experts that know the ins and outs of NGO registration services in India. So, if you are worried that your papers might not be as good as you want them to be, you can always hire us for good NGO registration services in India.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true" aria-controls="faq-collapse-5"><h2>Can a single person open a section-8 NGO? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                  <div class="card-body">
                    <p>According to industry experts, a single person cannot establish an NGO alone. There must be at least two members.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-6">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="true" aria-controls="faq-collapse-6"><h2>Is an NGO under section 8 company incorporation different from setting up another type of NGO? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-6">
                  <div class="card-body">
                    <p>No. NGO registration under Section 8 companies is no different than wanting to register another type of NGO such as social, international, or national. However, there might be a few more additions in the paperwork that applicants need to fulfill in the case of setting up an NGO at the international level.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-7">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-7" aria-expanded="true" aria-controls="faq-collapse-7"><h2>How are Section 8 NGOs different from other NGOs? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-7">
                  <div class="card-body">
                    <p>By nature, the purpose of setting up these Organizations under the Companies Act is to help society. However, NGOs registered under Section 8 companies are companies that work as per well-defined constitutions and follow specific criteria and do not run for individual profits. In the case of company liabilities, the shareholders of these companies are bound to pay the debts up to a fixed amount. </p>
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