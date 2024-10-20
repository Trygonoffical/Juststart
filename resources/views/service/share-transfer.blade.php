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

            <h5>Get FREE Expert Consultation Today!</h5>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Submit Details</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>99.9% quicker response time</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Start Registration</span></li>
            </ul>

            <h3>Get your Transfer of shares for just <span class="text-blue">Rs. 1,999</span></h3>

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
            <h3 class="display-4 mb-4 font-bolder">Transfer of Shares</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <ul class="icon-list bullet-bg bullet-yellow ms-0 gy-2 mt-2 mb-4">
              <li class="mb-2">
                <span><i class="uil uil-check"></i></span>
                A share transferis the process of transferring existing shares from one person to another; either by sale or gift.</li>
              <li class="mb-2">
                <span><i class="uil uil-check"></i></span>
                Share transfer can be affected subject to relevant provisions in the companies act 2013 as well as Articles of Association of the Company.</li>
              <li class="mb-2">
                <span><i class="uil uil-check"></i></span>
                It is important to review the Articles of Association of the Company prior to affecting a share transfer.</li>
              <li class="mb-2">
                <span><i class="uil uil-check"></i></span>
                Transfer of shares has the effect of a change in ownership.</li>
              <li class="mb-2">
                <span><i class="uil uil-check"></i></span>
                Share transfer in a private limited company is usually restricted.</li>
            </ul>

          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <figure class="rounded">
              <img src="{{asset('images/overview/transfer-of-shares.jpg')}}" alt="transfer of shares" >
            </figure>
          </div>
      </div>
  </div>
</section>  

<!-- APPLY -->
<section class="wrapper mt-10  ">
  <div class="container card bg-soft-yellow p-10 mb-10 ">
    <div class="row">

        <div class="col-lg-7">
          <h2 class="display-5 font-bolder mb-10">How To Apply?</h2>
          <ul class="icon-list bullet-bg bullet-yellow ms-0 gy-2 mt-2 mb-4">
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Step 1: </b>Fill up the query sheet available on our website</span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Step 2: </b>Our expert will call you for Necessary documents</span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Step 3: </b>Our team wills prepare documents and forms as required</span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Step 4: </b>Our team will prepare necessary form</span>
            </li>
          </ul>
          
        </div>
        
        <div class="col-lg-5 pt-0">
          <figure class="rounded">
            <img src="{{asset('images/types-of-company-registration.png')}}" alt="types of company registration" >
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
      <div class="row mb-10">
          <div class="row text-center">
            <div class="col-md-12">
              <h6 class="mb-4 text-yellow">Why JustStart</h6>
              <h2 class="display-5  font-bolder ">Why Hire Juststart <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> </h2>
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
              
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Our work strategies</h3>
                  <p class="mb-0">From paper planning to idea execution, we actively achieve benchmark guidelines to ensure each step of the plan is not just carefully laid but successfully converted into reality.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Our ideology is our soul</h3>
                  <p class="mb-0">JustStart is a platform for those who have the willpower to dream and the drive to achieve. We promise you our commitment, trust, and expertise to generate a hassle-free experience.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Meet Deadlines</h3>
                  <p class="mb-0">Time is of the essence. Every single day lost is an opportunity lost. Therefore, we take precautionary measures to ensure your business meets all the deadlines you have set.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Guaranteed Satisfaction</h3>
                  <p class="mb-0">We know quality has no replacement. Thus, we systemise each level of our work to minimise the chances of mistakes before each project passes through our client’s hands.</p>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>What is a transfer of shares? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>Means the transfer of ownership of shares from one person to other person.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>Can we transfer shares without consideration? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>No, share Transfer without consideration is Void</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>Which form is required for transfer of shares of company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>Form SH-4 for transfer of share needs to be duly stamped, with adequate value, dated and executed by or on behalf of the transferor and the transferee.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>Who pays the stamp duty on transfer of shares? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>Stamp duty is payable by the person who receiving or acquiring the shares.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>Is private company shares are freely transferable? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>No, private company’s shares are not freely transferable.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true" aria-controls="faq-collapse-5"><h2>Who are transferor and transferee? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                  <div class="card-body">
                    <p>A person who transfers his shares in exchange of considerations is known as a</p>
                    <p>A person who receives the shares and give consideration is known as a</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-6">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="true" aria-controls="faq-collapse-6"><h2>What is share transfer deed? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-6">
                  <div class="card-body">
                    <p>A document which contains the information of the transfer of ownership of shares from a seller to a buyer.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-7">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-7" aria-expanded="true" aria-controls="faq-collapse-7"><h2>Can I transfer my Share without Share Certificate? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-7">
                  <div class="card-body">
                    <p>No, Share certificate is mandatory for transfer of shares.</p>
                    <p>Share Certificate is an important document for share transfer process</p>
                    <p>Share certificate is required for verification and making note of share transfer entries.</p>
                    <p>If you don’t have share certificate our expert will assist you for this process</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-8">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-8" aria-expanded="true" aria-controls="faq-collapse-8"><h2>I don’t have Digital signature can I transfer shares? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-8">
                  <div class="card-body">
                    <p>Yes, there is no need of Digital signature</p>
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