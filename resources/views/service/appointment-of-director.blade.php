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

            <p class="mb-4">Connect with our legal advisors to meet the requirements for appointing a director for your company. We offer a top-notch director appointment service making it easy for our clients to appoint a suitable director for their company.</p>

            <p class="fs-20"><b>Hire Our Experts to Get the Finest-Quality Service!</b></p>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Top-notch service for the appointment of director</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Professional paperwork and documentation</span></li>
            </ul>

            <h3>Appoint a director for your company at just <span class="text-blue">Rs. 1799</span></h3>

            <p>Our legal experts are actively working to assist you throughout the procedure of an appointment of director. Get an instant solution to all your queries.</p>
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
            <h3 class="display-4 mb-4 font-bolder">What is the Appointment of a Director?</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>A director must be appointed following the 2013 Companies Act’s provisions. The Companies Act of 2013 mandates that every organization have a specific number of directors. A public company must have at least three directors, a private company at least two, and a one-person company at least one. The requisite number of directors is examined by the type of company. The upper maximum is set at 15. However, if a company wants to have more than 15 directors, it must obtain a Special Resolution under Section 149(1)</p>
          </div>
          <div class="col-md-6 col-lg-5">
            <figure class="rounded">
              <img src="{{asset('images/overview/what-is-the-appointment-of-a-director.jpg')}}" alt="appointment of a director" >
            </figure>
          </div>
      </div>
  </div>
</section>


<!-- Importance -->
<section class="wrapper mb-10 bg-soft-yellow">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">DIRECTORS IN A COMPANY</h6>
            <h3 class="display-4 mb-4 font-bolder">Types of Directors in a Company</h3>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <p>Directors are the members of a company’s Board of Directors who control, manage and direct the business operations of that company. The directors act as trustees for the company’s assets and money. The following discussed below are different types of directors in a company.</p>
            
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/3d4.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6 pt-2">

            <div class="d-flex flex-row mb-8 ">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/conference.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Managing Director</h4>
                <p>A managing director is a person who oversees the day-to-day operations of a business, group, or corporate division. It is the board of directors who is responsible for managing the company on behalf of the shareholders.</p>
              </div>
            </div>
           
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/conference.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Whole-time Director or Executive Director</h4>
                <p>A whole time director or executive director is someone who works full-time for the company.</p>
              </div>
            </div>

            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-sky me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/conference.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Non executive Director</h4>
                <p>A non-executive director is a member of a company’s board of director who attends meetings and participates in Board discussions. In addition, these Directors do not have full-time duties or are not Managing Directors.</p>
              </div>
            </div>

            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-purple me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/conference.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Independent Director</h4>
                <p>An Independent director is one who has professional credentials and has no financial involvement with the company except sitting fees. These experienced directors are occasionally nominated on board to use their skills in the administration of the business.</p>
              </div>
            </div>
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-purple me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/conference.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Nominee Director</h4>
                <p>A nominee director is a person nominated by financial institutions or some private equity/strategic investors on their behalf.</p>
              </div>
            </div>

          </div>
      </div>
  </div>
</section>


<!-- Who is a Director -->
<section class="wrapper  mb-10">
  <div class="container">
    <div class="card shadow-lg">
        <div class="row gx-0">
          <div class="col-lg-6 image-wrapper bg-image bg-cover rounded-top rounded-lg-start d-none d-md-block" data-image-src="{{asset('assets/img/photos/tm1.jpg')}}" style="background-image: url({{asset('assets/img/photos/tm1.jpg')}});">
          </div>
          <!--/column -->
          <div class="col-lg-6">
            <div class="p-10 p-md-11 p-lg-13">
              <h2 class="display-4 mb-3">Who is a Director in a Company?</h2>
             
              <p>The director of a company is elected by its shareholders to direct the affairs of the company according to its Memorandum of Association and Articles of Association. The company, although it is an artificial person, cannot act without the assistance of a natural person. Due to this, directors must be living persons, and the Board of Directors is responsible for the management of the company. As it is determined by the shareholders, a company may need to appoint directors from time to time.</p>
            </div>
            <!--/div -->
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>

  </div>
  <!-- /.container -->
</section>


<!-- PROCESS --> 
<section class="wrapper">
  <div class="container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">ROLE OF A DIRECTOR</h6>
            <h3 class="display-4 mb-4 font-bolder">Role of a director in a company</h3>
          </div>
      </div>
      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <p>Company directors have several legal responsibilities       defined by the company’s association and outlined in the Companies Act 2013. A board of directors is appointed by shareholders to manage day-to-day business activities, company assets, and administrative duties.</p>

            <h4 class="mt-6 mb-6">Maximum and minimum number of directors in a company</h4>
            <p class="mb-0">
              <table  class="table table-bordered fw-bold">
                  <tr>
                    <td>Type of company</td>
                    <td>Number of directors (Minimum)	</td>
                    <td>Number of directors (Maximum)</td>
                  </tr>
                  <tr>
                    <td>Public Company	</td>
                    <td>3</td>
                    <td>15</td>
                  </tr>
                  <tr>
                    <td>Private Company	</td>
                    <td>2</td>
                    <td>15</td>
                  </tr>
                  <tr>
                    <td>One-Person Company	</td>
                    <td>1	</td>
                    <td>1</td>
                  </tr>
              </table>
            </p>
            
          </div>
          <div class="col-lg-6 position-relative">
            <p>A company director is responsible for a variety of tasks and duties under the Companies Act 2013, which are governed by common law rules and equitable principles. The following are prime roles of a director in a company:</p>

            <div class="position-absolute d-none d-md-block" style="top: 50%; left: 50%; width: 130%; height: auto; transform: translate(-50%,-50%); z-index:-1">
              <img class="w-100" src="{{asset('')}}assets/img/photos/blurry.png" alt="">
            </div>
            
            <div class="row gx-md-5 gy-5">  
              <div class="col-lg-12 order-lg-2">
                <div class="card ">
                  <div class="card-body p-6">
                    <div class="d-flex flex-row">
                      <div>
                        <h4 class="mb-1">Acting within the realm of power</h4>
                        <p class="mb-0">A director’s primary responsibility is to make decisions that fall in line with the company’s articles of association, which is a document that contains all of the rules and regulations for running the company.</p>
                        <p class="mb-0">If the company adopts Model articles of association or modified or bespoke articles, the duties and powers of directors can vary significantly from business to business.</p>
                      </div>
                    </div>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
                <div class="card  mt-6">
                  <div class="card-body p-6">
                    <div class="d-flex flex-row">
                      <div>
                        <h4 class="mb-1">Independent judgment</h4>
                        <p class="mb-0">Company directors must exercise independent judgment rather than simply enacting the demands of major shareholders or other beneficial parties by developing an informed perspective on the business activities.</p>
                      </div>
                    </div>
                  </div>
                  <!--/.card-body -->
                </div>        
                <!--/.card -->
  
              </div>
            <!--/.row -->
          </div>
      </div>
     
  </div>
</section>

<!-- Why Us -->
<section class="wrapper mt-14">
    <div class="container  card p-10 mb-10">
      <div class="row ">
        <div class="col-md-12 col-lg-12" >
          <h2 class="display-4 font-bolder text-center mb-10">Why choose JustStart to Appoint a Director?</h2>

          <p >JustStart is the perfect online platform for appointing a director for your company. The entire team of Juststart consists of highly qualified CA, CS, lawyers, and business administrators. Appointment of Director is easy, seamless, cheapest, and quickest with JustStart.co.in! We also help our clients with private limited company registration, public limited company registration, LLP registration, one-person company, and all other compliance easily.</p>

          <h3 class="mt-6">Approach to making director appointment service</h3>
          <p class="mb-0">At JustStart, our well-versed professionals ensure to make the appointment of director procedure easy for you. We provide all the necessary resources and assistance required to add a director to the company quickly and efficiently. Our team will guide you at every step throughout the process of director appointment service. Adhere below are the steps followed by our professionals:</p>

        </div>
      </div>
      <div class="row mt-6">
          
          <div class="col-md-5 col-lg-5" >
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon" />
            </figure>
          </div>
          <div class="col-md-7 col-lg-7" >

              <div class="card bg-pale-leaf mt-6 mb-6">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0 ">
                        <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Step 1
                    </h3>
                    <p class="mb-0">For an appointment with the director, get in touch with our professionals. They will collect all the mandatory documents and fill out the appointment of director form on behalf of you to ensure that the procedure for appointment of director is carried out in an appropriate manner.</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="card bg-pale-leaf mb-6">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Step 2
                    </h3>
                    <p class="mb-0">Our professionals have a great understanding of the company laws, hence they take complete care of all the legal formalities while performing the director appointment service.</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>

              <div class="card bg-pale-leaf mb-6">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Step 3
                    </h3>
                    <p class="mb-0">All paperwork will be completed by our team and all legal requirements will be followed. Additionally, our experts provide support throughout the appointment of directors under companies act 2013 procedure.</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>

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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>Who can be appointed as a director in a company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>Any one above the age of 21 can be appointed as a director in a company.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>How many directors can a company have?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>According to the legislation, public limited companies need a minimum of three directors, private limited companies need a minimum of two directors, and one-person businesses need a minimum of one director. A company can have a maximum of up to 15 directors.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>Is there an eligibility criteria to be followed for the appointment of director?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>Yes, there are certain procedures, including the ones listed below: The potential candidate must be a major (He or she) and must meet the requirements outlined in the Companies Act of 2013. The new director should be appointed with the approval of the board of directors. One must meet the requirements listed below in order to become the director of the company.</p>
                    <ul>
                      <li><b>Nationality –</b> There is no nationality specified for the director in the act. This means that anyone from any country can become the director of a company in India.</li>
                      <li><b>Age Limit -</b> A person must be 21 years of age or older to serve as the company’s director. Therefore, a person who is under the age of 21 is not permitted to serve as a company director.</li>
                    </ul>
                    <p>The aforementioned qualifying requirements must be met for someone to hold the position of director of the company. Depending on their roles inside the company, there are many types of directors.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>What is the legal procedure for the appointment of directors under companies Act 2013 in India?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>All legal forms and formalities should be fulfilled for the appointment of directors under companies Act 2013 in India. For better understanding, get in touch with JustStart professionals.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>Is it compulsory to add a director to a company?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>Yes, it is compulsory to add a director to a company. The director of a company supervises, controls, and strategizes the company’s business operations. </p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true" aria-controls="faq-collapse-5"><h2>What kinds of documentation are needed to acquire a DIN?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                  <div class="card-body">
                    <p>It is necessary to provide a digital signature, a signed consent from the prospective director, and details on the director’s name and address.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-6">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="true" aria-controls="faq-collapse-6"><h2>What are the legal responsibilities of a director?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-6">
                  <div class="card-body">
                    <p>In a company, a director directs, conducts, manages, or supervises the company’s affairs. The only person who can become a director is an individual. Neither an association nor a firm can be appointed as a company’s director.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-7">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-7" aria-expanded="true" aria-controls="faq-collapse-7"><h2>Can a director be appointed by the board of directors?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-7">
                  <div class="card-body">
                    <p>No, a director can be appointed by a general meeting only in accordance with section 152(2) of the Act.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-8">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-8" aria-expanded="true" aria-controls="faq-collapse-8"><h2>What is the role of a director?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-8">
                  <div class="card-body">
                    <p>A director is a senior management expert who manages a particular company area. Directors frequently supervise managers and can help them oversee a department, team, or project. </p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-9">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-9" aria-expanded="true" aria-controls="faq-collapse-9"><h2>What documents are required for the appointment of director?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-9" class="accordion-collapse collapse" aria-labelledby="faq-9">
                  <div class="card-body">
                    <p>Proof of identification (PAN card) Proof of residence (electricity bill, rental agreement, Aadhar Card, voter ID, passport, driving license) Passport photograph, Digital signature certificate of the proposed director.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-10">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-10" aria-expanded="true" aria-controls="faq-collapse-10"><h2>Who cannot be a director of a company?</h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-10" class="accordion-collapse collapse" aria-labelledby="faq-10">
                  <div class="card-body">
                    <p>The courts may not allow an undischarged bankrupt (someone under the financial restrictions of the bankruptcy process) and other specified persons to serve as a company director.</p>
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