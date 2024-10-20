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

            <p>Doing <b>partnership firm registration online</b> in India is easy under the guidance of experts. At JustStart, we have a highly qualified team to deal with your matter of partnership firm registration. From application submission to fee payment, everything can be managed smoothly by having our experts by your side, guaranteeing consistent support.</p>

            <p class="fs-20">Let us help you with whatever doubts you have regarding your <b>partnership firm registration</b>.</p>
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
            <h2 class="display-4 mb-4 font-bolder">What is a Partnership Firm</h2>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>A partnership firm is a business form that involves two or more people who come together to set up and operate a business while sharing profits and losses in a predetermined ratio. The business can be involved in producing goods, rendering services, or doing trade. In India, all partnership firms are regulated by the Indian Partnership Act, 1932.</p>
            <p>To ensure smooth operations of a partnership firm, a partnership deed is formed. It is a legal document that contains all the rules and regulations that every partner has to follow. Basically, it is drafted to govern the relationship between partners and avoid any kind of conflict.</p>
          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <figure class="rounded">
              <img src="{{asset('images/overview/partnership-firm-registration.jpg')}}" alt="partnership firm registration" >
            </figure>
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
            <h2 class="display-4 mb-4 font-bolder">Features of Partnership Firm in India</h2>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <p>Here are the key features of a partnership firm in India:</p>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Formation</h4>
                <p>A partnership firm can be formed by an agreement between two or more persons to carry on a business with the aim of making profits. This agreement can be oral or written, although a written agreement is always recommended to avoid disputes.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Profit Motive</h4>
                <p>The profits of the partnership firm are distributed among the partners as per the terms agreed upon in the partnership deed. By default, profits are shared equally unless stated otherwise.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Number of Partners</h4>
                <p>The minimum number of partners required to form a partnership firm is two, while the maximum number can vary depending on the type of business. However, in most cases, the maximum limit is set to 50.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Legal Status</h4>
                <p>A partnership firm does not have a separate legal identity from its partners. It is not considered a separate legal entity, unlike a company. Partners are jointly and severally liable for the debts and obligations of the firm.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Registration of Partnerships</h4>
                <p>While registration of a partnership firm is not compulsory, it is advisable for certain benefits such as maintaining a legal record, enforcing rights, and claiming set-offs. Registration involves submitting an application along with prescribed fees to the Registrar of Firms.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Taxation</h4>
                <p>A partnership firm is taxed at a flat rate of 30% on the profits generated. Further a surcharge of 12% is levied if the income exceeds one crore rupees.Set up a free chat with our experts today. They'll walk you through how to register a partnership firm in simple terms.</p>
              </div>
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
            <h2 class="display-4 mb-4 font-bolder">Benefits of Partnership firm Registration</h2>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <p>The perks of registering your business with a partnership firm are numerous, and a few are mentioned below:</p>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Legal Recognition</h4>
                <p>Registration provides legal recognition to the partnership firm, making it an officially recognized entity in the eyes of the law.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-green me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Evidence of Partnership</h4>
                <p>Registration serves as evidence of the partnership agreement and its terms, reducing the likelihood of disputes among partners regarding the business operations and profit sharing.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Business Credibility</h4>
                <p>Registration enhances the credibility and reputation of the partnership firm in the eyes of customers, suppliers, and other stakeholders, thereby facilitating business dealings and partnerships.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Easy Expansion</h4>
                <p>A registered partnership firm can easily expand its operations, enter into new markets.</p>
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
        <h2 class="display-4 mb-4 font-bolder text-center">Who Is Eligible For Partnership Firm Registration?</h2>
      </div>
    </div>
    <div class="row align-items-start" >
        <div class="col-lg-8" >
          <div class="flex-row mb-8">
            
            <h5>In India, any two or more individuals or entities can form a partnership firm, provided they meet certain criteria:</h5>
            
            <ol>
              <li class="mt-2"><b>Capacity to Contract:</b> All partners must have the legal capacity to enter into a contract. This means they must be of sound mind, not minors, and not disqualified by law from entering into a partnership.</li>
              <li class="mt-2"><b>Consent of Partners:</b> All partners must agree to form the partnership and be willing to enter into a partnership agreement outlining the terms and conditions of their partnerships.</li>
              <li class="mt-2"><b>Objective of Profit:</b> The primary objective of forming a partnership firm should be to carry on a business with the intention of making profits.</li>
              <li class="mt-2"><b>Number of Partners:</b> A partnership firm can have a minimum of two partners and a maximum of 50 partners.</li>
              <li class="mt-2"><b>Mutual Agency:</b> Partners must agree to act on behalf of each other and the firm in carrying out the business activities of the partnership. This principle of mutual agency is fundamental to the partnership structure.</li>
              <li class="mt-2"><b>No Prohibited Activities:</b> The proposed partnership firm should not engage in activities prohibited by law or against public policy. Certain activities may require special licenses or permissions from regulatory authorities.</li>
            </ol>

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
        <h2 class="display-4 mb-4 font-bolder text-center">Documents Required For Partnership Firm Registration</h2>
      </div>
    </div>
    <div class="row align-items-start" >
        <div class="col-lg-8" >
          <div class="flex-row mb-8">
            <h5>For partnership firm registration online in India, the following documents are necessary to gather:</h5>
            <ul class="mt-4">
              <li class="mb-2"><b>Partnership Deed:</b> This is the most crucial document, outlining the terms and conditions agreed upon by the partners regarding the operation of the partnership firm. It includes details such as the name of the firm, its address, the names and addresses of partners, their contribution, profit-sharing ratio, and other relevant clauses.</li>
              <li class="mb-2"><b>Proof of Address:</b> Documents establishing the address of the partnership firm, such as the rental agreement or utility bills for the registered office address.</li>
              <li class="mb-2"><b>Identity Proof of Partners:</b> Copies of identity proofs of all partners, such as PAN card, Aadhaar card, passport, or voter ID card.</li>
              <li class="mb-2"><b>Proof of Address of Partners:</b> Copies of address proofs of all partners, such as Aadhaar card, passport, utility bills, or voter ID card.</li>
              <li class="mb-2"><b>Additional Documents (if applicable):</b> Depending on the nature of the business, additional documents such as NOC (No Objection Certificate) from the landlord, affidavit stating the ownership of the premises, or partnership registration affidavit may be required.</li>
            </ul>

            <p>It's advisable to consult with a Juststart legal advisor  to ensure all necessary documents are in order and comply with the relevant laws and regulations.</p>
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
            <h2 class="display-4 mb-4 font-bolder">Process for Partnership Firm Registration</h2>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/i9.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6">
            <p>To register a partnership firm online, here are the key steps to follow:</p>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Choose a Name</h4>
                <p>Pick a unique name for your partnership firm</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Form a Partnership Deed</h4>
                <p>To bring a partnership into existence, a partnership deed is a vital document. The document includes information such as the name and business location of the firm, business operations to be carried out, the investment and profit sharing ratio of all the respective partners, or any other specific conditions.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Gather Documents</h4>
                <p>Collect required documents like ID proofs, address proofs, and the stamped partnership deed.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Apply for PAN</h4>
                <p>Apply for PAN by filing relevant documents with NSDL (National Securities Depository Limited).</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Complete Formalities</h4>
                <p>Get PAN and TAN for your firm, Get the GST Registration, open a bank account, and handle any other post-registration tasks.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/team.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Start Business</h4>
                <p>With your partnership firm officially registered, you're ready to start doing business!</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <p>Remember, it's wise to consult with a legal expert at JustStart to ensure you're following all the necessary steps and requirements for partnership registration.</p>
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
            <h2 class="display-6 mt-6 mb-4 font-bolder">Why JustStart To Register Partnership Firm
              <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> 
            </h2>
              
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <p class="mb-4">JustStart is your reliable partner for partnership firm registration online. Throughout the process, we guide you through every doubt you have and keep everything transparent to ensure you feel comfortable trusting us. In our team, we have experts who have many years of experience in handling the task of partnership firm registration online in India. Here are some good reasons to choose our services:</p>

                  <ul class="mt-4">
                    <li>Competitive Pricing</li>
                    <li>Tailored Guidance</li>
                    <li>Efficient documentation handling</li>
                    <li>Google-verified Business</li>
                    <li>Stress-free Experience</li>
                    <li>Quick Services</li>
                  </ul>

                  <p>Overall, JustStart provides a convenient and efficient solution for registering your partnership firm, allowing you to launch your business with confidence.</p>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>How much time does it take to register a partnership firm in India? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>Registering a partnership firm in India usually takes 7-10 working days,depending on document readiness and Registrar’s office efficiency.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>Can all the partners mutually decide to end the partnership firm? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>Yes, all partners can mutually decide to end the partnership firm. It should be documented in a dissolution deed by following the terms outlined in the partnership agreement.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>What is the scope of liability of partners in a partnership firm? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>The liability of partners in a partnership firm is joint and several, meaning they are collectively and individually responsible for the firm's debts & obligations.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>How much capital is required to start a Partnership? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>There is no specific capital requirement to start a partnership, the amount needed depends on the nature & scale of the business.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>Is a partnership firm a separate legal entity? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>No, a partnership firm is not a separate legal entity. This means the business and the partners are legally the same, so the partners are personally responsible for the business's debts and actions.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true" aria-controls="faq-collapse-5"><h2>Is it compulsory for partnership firms to file income tax returns? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                  <div class="card-body">
                    <p>Yes, partnership firms are required to file income tax returns annually, regardless of their income or profit levels.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-6">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="true" aria-controls="faq-collapse-6"><h2>What is a Partnership deed? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-6">
                  <div class="card-body">
                    <p>A partnership deed is a legal document that outlines each partner's rights, responsibilities, and obligations. It includes profit-sharing ratios, decision-making processes and procedures for resolving disputes.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-7">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-7" aria-expanded="true" aria-controls="faq-collapse-7"><h2>What are the essential details mentioned in a partnership deed? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-7">
                  <div class="card-body">
                    <p>A partnership deed includes details such as the names and addresses of the partners, the capital contribution, profit and loss of each partner., partner admissions and dispute resolution.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-8">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-8" aria-expanded="true" aria-controls="faq-collapse-8"><h2>Can I convert a Partnership Firm into a Private Limited Company or LLP? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-8">
                  <div class="card-body">
                    <p>Yes, you can convert a partnership firm into a private limited company or an LLP. It involves drafting new agreements and registering with relevant authorities.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-9">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-9" aria-expanded="true" aria-controls="faq-collapse-9"><h2>Is filing ITR returns and tax audits mandatory for Partnership firms? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-9" class="accordion-collapse collapse" aria-labelledby="faq-9">
                  <div class="card-body">
                    <p>Yes, partnership firms must file Income Tax Returns (ITR) annually. However tax audits are required after crossing certain threshold limits of turnover.</p>
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