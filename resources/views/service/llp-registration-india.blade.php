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


<section class="wrapper mt-0 bg-soft-sky topbanner" >
  <div class=" container pt-md-10 py-14">
    <div class="row">
        <div class="col-md-7 col-lg-7">
            <h1 class="text-blue mb-4 font-bolder">{{ $name }} </h1>
            <p class="">Online registration of your LLP in India is easy with JustStart. We simplify all the complexities so that you can embark on this prosperous journey with ease. From the registration process to the payment of fees, everything you can do online under the guidance of our experts.</p>

            <h5>Get Your LLP Registration!</h5>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Submit Your Details </span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Talk To Our LLP Registration Experts</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Kickstart your LLP Registration Process </span></li>
            </ul>
            
            <h5><b>Whatever help you seek for LLP registration online, we are there to support you.</b></h5>
            <p class="mt-4 ">
              <a href="tel:+91 9315513354" class="btn btn-sm btn-outline-blue rounded-pill">Talk To Expert</a>
            </p>
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
            <h2 class="display-4 mb-4 font-bolder">What is an LLP Company?</h2>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>An LLP, or Limited Liability Partnership, was introduced in 2008 under the Limited Liability Partnership Act. It is a form of organization where <b>at least two individuals</b> (partners) come together to carry out business operations. Each partner has to follow the rules laid out under the <b>LLP</b> Act to carry out business operations. To ensure a smooth and fair partnership, there is an <b>LLP agreement</b> created by partners.</p>
            
            <p>Similar to a company, an LLP has a separate existence from its members, which means it continues to exist without being impacted by the death, insolvency, or retirement of its partner(s). Partners benefit from limited liability and flexibility in LLP organizations, making it a popular choice for entrepreneurs in various industries.</p>
          </div>
          <div class="col-md-6 col-lg-5 pt-0">
            <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="EgPg7BKPTak"></div>
          </div>
      </div>
  </div>
</section>

<!-- Features -->
<section class="wrapper bg-soft-yellow">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">FEATURES</h6>
            <h2 class="display-4 mb-4 font-bolder">Features of LLP in India</h2>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            
            <p><b>LLPs in India come with noteworthy features that make them stand out. Some key strengths include:</b></p>

            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Separate Legal Entity</h4>
                <p>Like a corporation, an LLP is considered a separate legal entity from its owners. This means it can enter into contracts, own property, and sue or be sued in its own name.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/conference.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Perpetual Succession</h4>
                <p>A Limited Liability Partnership (LLP) operates with perpetual succession, similar to a registered company. This means that it can continue to exist even if one or more partners who originally started it retire, pass away, face financial difficulties, or become unable to make sound decisions due to mental health issues.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/share.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Common Seal</h4>
                <p>An LLP in India may have a common seal on an agreement between all the partners. It isn't a necessity, but still, partners can opt for it. However, to affix the common seal, there is a condition: it must be in the presence of at least two designated partners of the LLP.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-navy me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/secure.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Partnership Agreement</h4>
                <p> Just like in a partnership, partners in an LLP operate through a partnership agreement. It’s the document that outlines the rights, responsibilities, and profit-sharing arrangements among the partners.</p>
              </div>
            </div>
          </div>
      </div>
  </div>
</section>

<!-- Benefits --> 
<section class="wrapper">
  <div class=" container p-10">

      <div class="row">
        <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">BENEFITS</h6>
            <h2 class="display-4 mb-4 font-bolder">Benefits of LLP Registration</h2>
            <p>An LLP is a popular choice for businesses in India because of its valuable features, including:</p>
        </div>
      </div>
      
      <div class="row align-items-start">
          <div class="col-md-5 col-lg-5 position-lg-sticky " style="top: 8rem;">
            <figure class="">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-lg-6 ms-auto">
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/clipboard.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Limited Liability</h4>
                <p>Limited liability stands out as a crucial advantage when opting for LLP company registration in India. This feature guarantees that the personal assets of partners are safeguarded, preventing them from being used to settle the debts and obligations of the LLP.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/feather.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Credible Image</h4>
                <p>Because the details and documents of an LLP are officially registered with the government authorities upon incorporation, it makes them a reliable organization. While seeking credit, investment, or entering into contracts with clients, the LLP registration factor creates a positive impact. It helps in building trust easily.</p>
                <p><b>Digital signature</b> can be obtained with the help of Authorised Certifying Authority by JustStart. </p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/server.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Easy Registration</h4>
                <p>The registration of Limited Liability Partnerships in India is extremely simple and quick. Especially if you choose JustStart to help your organisation register as an LLP in India, the process gets super convenient. You can file applications and documents online quite easily with our experts and streamline the LLP registration process.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/server.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Ultimate Flexibility</h4>
                <p>One of the remarkable benefits of LLP registration in India is the flexibility it offers in managing the business internally. LLP allows the partners to define their own rules of management in the LLP agreement. Unlike the Companies Act, there are minimal provisions governing LLPs, making them a less complex form of business organization.</p>
              </div>
            </div>
          </div>
      </div>
  </div>
</section>

<!-- Eligibility -->
<section class="wrapper">
    <div class="container card p-10 mb-10">
      <div class="row mb-10">
          <div class="col-md-12 col-lg-12 text-center">
            <h6 class="mb-4 text-yellow">ELIGIBILITY</h6>
            <h2 class="display-4 mb-4 font-bolder">Who Is Eligible For LLP Registration In India?</h2>
          </div>
      </div>
      <div class="row ">
          <div class="col-md-5 col-lg-12" >
            <p class="">The eligibility conditions for registering an LLP in India are outlined in the LLP Act of 2008 and the LLP (Incorporation) Rules of 2009. Here is a concise overview:</p>

            <p class="">Under these regulations, specific criteria must be met for LLP registration. These conditions, as established by the aforementioned acts and rules, serve as the foundational requirements for individuals or entities seeking to form an LLP in India.</p>
          </div>
      </div>

      <div class="row ">
        <div class="col-md-5 col-lg-6" >
          <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
              <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Minimum 2 number of partners</b></span>
              </li>
              <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Minimum 2 designated partners</b></span>
              </li>
              <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>At least one designated partners must be an Indian resident</b></span>
              </li>
          </ul>
        </div>
        <div class="col-md-5 col-lg-6" >
            <ul class="icon-list bullet-bg bullet-soft-primary mb-0">
              <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>A valid and unique organization name</b></span>
              </li>
              <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Registered office address</b></span>
              </li>
              <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Clearly defined business objectives</b></span>
              </li>
          </ul>
        </div>
      </div>

    </div>
    <!-- /.container -->
</section>

<!-- Document Required -->
<section class="wrapper document-required">
    <div class="container p-10 mb-10">
      <div class="grid">
      <div class="row mb-10">
          <div class="col-md-12 col-lg-12 text-center">
            <h6 class="mb-4 text-yellow">DOCUMENTS REQUIRED</h6>
            <h2 class="display-4 mb-4 font-bolder">Documents Required For LLP Online Registration</h2>
            <p class="">To register an organization as an LLP in India, partners must produce the following documents:</p>
          </div>
      </div> 

      <div class="row isotope gy-6" style="position: relative; height: 847px;">
            <div class="item col-md-6 col-xl-4 " style="position: absolute; left: 0%; top: 0px;">
                <div class="card shadow-lg bg-pale-yellow">
                  <div class="card-body">
                      <h5 class="mb-1">Identity Proof</h5>
                      <ul>
                        <li>Passport (for foreign nationals)</li>
                        <li>Voter ID</li>
                        <li>Aadhar Card</li>
                        <li>Driver's License</li>
                      </ul>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item col-md-6 col-xl-4" style="position: absolute; left: 33.3333%; top: 0px;">
                <div class="card shadow-lg bg-pale-red">
                  <div class="card-body">
                      <h5 class="mb-1">Address Proof</h5>
                      <ul>
                        <li>Passport (for foreign nationals)</li>
                        <li>Voter ID</li>
                        <li>Aadhar Card</li>
                        <li>Recent utility bills (electricity, water, gas) or rental agreement</li>
                      </ul>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item col-md-6 col-xl-4" style="position: absolute; left: 0%; top: 392.9px;">
                <div class="card shadow-lg bg-pale-sky">
                  <div class="card-body">
                      <h5 class="mb-1">Partnership Deed</h5>
                      <ul>
                        <li>This document outlines the rights, duties, and responsibilities of partners and includes details such as the name of the LLP, its objective, and the contribution of each partner.</li>
                      </ul>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item col-md-6 col-xl-4" style="position: absolute; left: 66.6667%; top: 0px;">
                <div class="card shadow-lg bg-pale-primary">
                  <div class="card-body">
                      <h5 class="mb-1">Registered Office Proof</h5>
                      <ul>
                        <li>Sale deed or property deed (if the property is owned)</li>
                        <li>Rent agreement along with a recent utility bill (if the property is rented)</li>
                      </ul>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!--/column -->
            
            <div class="item col-md-6 col-xl-4" style="position: absolute; left: 33.3333%; top: 454.1px;">
                <div class="card shadow-lg bg-pale-leaf">
                  <div class="card-body">
                      <h5 class="mb-1">Consent of Partners</h5>
                      <ul>
                        <li>Signed consent of all partners for LLP registration.</li>
                      </ul>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!--/column -->
            <div class="item col-md-6 col-xl-4" style="position: absolute; left: 66.6667%; top: 423.5px;">
                <div class="card shadow-lg bg-pale-red">
                  <div class="card-body">
                      <h5 class="mb-1">Digital Signature Certificate (DSC)</h5>
                      <ul>
                        <li>All designated partners must obtain a DSC to sign documents digitally. </li>
                      </ul>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!--/column -->
            
          </div>
          <!-- /.row -->
      </div>
    </div>
    <!-- /.container -->
</section>


<!-- PROCEDURE / PROCESS --> 
<section class="wrapper">
  <div class=" container p-10">

      <div class="row">
        <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">PROCEDURE</h6>
            <h2 class="display-4 mb-4 font-bolder">LLP Registration Process In India</h2>
            <p>To register an LLP online in India, you need to navigate through the following key steps:</p>
        </div>
      </div>
      
      <div class="row align-items-start">
          <div class="col-md-5 col-lg-5 position-lg-sticky " style="top: 8rem;">
            <figure class="">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-lg-6 ms-auto">
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/clipboard.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Get a Digital Signature Certificate</h4>
                <p>Every designated partner of the LLP must apply for and obtain a Digital Signature Certificate (DSC) because it is mandatory for all kinds of government filings.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/feather.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Obtain the Designated partner Identification Number</h4>
                <p>All the partners need to apply for Designated <b>partner Identification Number</b> (DPIN). It is a <b>unique identification number</b> provided to individuals longing to become designated partnersof LLPs.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/server.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Select a Name for the LLP</h4>
                <p>Partners need to pick a unique name for the LLP. The name should not be copied and adhere to the guidelines of the Ministry of Corporate Affairs.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-sky me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/server.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Fill out the Incorporation Form (FiLLiP)</h4>
                <p><b>FiLLiP</b> is the form to collect the necessary information for the registration of the proposed LLP and its partners. It also requires partners to sign a declaration indicating they will comply with LLP regulations.</p>
              </div>
            </div>

            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-yellow me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/server.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Create an LLP Agreement</h4>
                <p>Partners must create an LLP agreement that mentions their duties, rights, and obligations. This agreement needs to be notarized and submitted to the Ministry of Corporate Affairs within 30 days of LLP incorporation.</p>
              </div>
            </div>

            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-red me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/server.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Obtain a Certificate of Incorporation</h4>
                <p>On the completion of filing and verification of documents, the Registrar of Corporations (RoC) issues the Certificate of Incorporation. It officially acknowledges that the LLP exists. PAN and TAN will also be there on the COI.</p>
              </div>
            </div>

          </div>
      </div>
  </div>
</section>

<section class="wrapper bg-dark text-inverse document-required">
    <div class="container px-10 py-12">
      <div class="row ">
        <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto">
          <h2 class="display-4 text-center text-white mb-8">How much will it cost for LLP registration?</h2>
          <p class="text-white  text-center mb-10">The LLP registration fee is Rs 7499, including all the government and professional fees. Kindly have a look at the breakdown of this fee in the below structure:</p>
        </div>
        <!-- /column -->
      </div>
      <!-- /.row -->

      <div class="row ">
          <div class="col-lg-6 mx-auto">
            <table class="table table-dark table-bordered">
              <tr>
                  <td class="fs-20">Steps</td>
                  <td class="fs-20">Cost (Rs)</td>
              </tr>
              <tr>
                  <td>2 Digital Signature Certificates </td>
                  <td>Rs 3,000</td>
              </tr>
              <tr>
                  <td>Government Fee </td>
                  <td>Rs 843</td>
              </tr>
              <tr>
                  <td>Professional Fee </td>
                  <td>Rs 3656</td>
              </tr>
              <tr>
                  <td>Total Fee </td>
                  <td>Rs 7,499</td>
              </tr>
            </table>
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
      <!-- /.row -->
      
    </div>
    <!-- /.container -->
</section>

<!-- Eligibility -->
<section class="wrapper mt-10">
    <div class="container card p-10 mb-10 bg-soft-pink">
      <div class="row mb-6">
          <div class="col-md-12 col-lg-12 text-center">
            <h2 class="display-4 font-bolder">Why JustStart For LLP Registration?</h2>
          </div>
      </div>
      <div class="row mb-6">
          <div class="col-md-5 col-lg-12" >
            <p class="">Choosing JustStart for your LLP registration in India means entrusting the process to reliable and experienced hands. Our team comprises experts well-versed in the intricacies of LLP registration in India, providing dedicated guidance from initiation to completion. Here are compelling reasons to opt for our services:</p>
          </div>
      </div>

      <div class="row ">
        <div class="col-md-5 col-lg-6" >
          <ul class="icon-list bullet-bg bullet-soft-pink mb-0">
              <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Seamless Process Handling</b></span>
              </li>
              <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Transparent Communication</b></span>
              </li>
              <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Google-verified Business</b></span>
              </li>
              <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>End-to-End Support</b></span>
              </li>
          </ul>
        </div>
        <div class="col-md-5 col-lg-6" >
            <ul class="icon-list bullet-bg bullet-soft-pink mb-0">
              <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Stress-Free Process</b></span>
              </li>
              <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Regulatory Compliance</b></span>
              </li>
              <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Time-Efficient Services</b></span>
              </li>
          </ul>
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
          <div class="accordion accordion-wrapper mt-10 faq-accordion " id="accordion">
              <div class="card accordion-item">
                <div class="card-header" id="faq-0">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>What is LLP registration? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>LLP registration in India is a legal entity that blends partnership advantages with limited liability similar to corporations. Registration with the Ministry of Corporate Affairs (MCA) is mandatory, ensuring partners are protected from personal liability beyond their investments. </p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>How much will cost for LLP registration? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>Registering an LLP in India typically costs between INR 7,000 to INR 15,000. This covers fees for reserving a name, getting the LLP officially recognized, and getting help with paperwork. Prices can change based on how much money the partners put in and how complicated the process is.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>Can I register LLP myself? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>Yes, you can register an LLP (Limited Liability Partnership) yourself in India. Prefer to use professional services to ensure compliance and smooth process.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>What is the minimum capital for LLP? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>There is no requirement for a minimum capital contribution in an LLP. You can start with an amount that suits your business size and needs.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>What is the tax rate for LLP? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>An LLP should pay a 30% fixed rate tax on its total income.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true" aria-controls="faq-collapse-5"><h2>What are the documents required for LLP? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                  <div class="card-body">
                    <p>To register an LLP in India, you need identity and address proofs (such as PAN card or passport, Aadhaar card), proof of office address, NOC from the landlord, DSC and DIN for partners, LLP agreement, and consent letters from partners.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-6">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="true" aria-controls="faq-collapse-6"><h2>What is the registration process of LLP? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-6">
                  <div class="card-body">
                    <p>The registration process of an LLP in India involves obtaining Digital Signatures Certificates (DSC) and Director Identification Numbers (DIN) for partners, applying for name reservation filing incorporation documents and submit the LLP Agreement with the Ministry of Corporate Affairs (MCA) online.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-7">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-7" aria-expanded="true" aria-controls="faq-collapse-7"><h2>Is GST compulsory for LLP? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-7">
                  <div class="card-body">
                    <p>A LLP in India needs GST registration if its turnover exceeds the threshold limit or if it sells taxable goods or services.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-8">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-8" aria-expanded="true" aria-controls="faq-collapse-8"><h2>What are the benefits of LLP? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-8">
                  <div class="card-body">
                    <p>The benefits of an LLP include protecting personal belongings from business debts through limited liability. It offers the flexibility of a partnership along with the safety of limited liability.</p>
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