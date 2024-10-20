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

            <p>An individual responsible for the administration of a company can resign from the position by submitting a resignation letter in writing and serving the notice period. The procedure can be done online within 30 days of submitting the notice.</p>

            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Get quote in minutes </span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Single click query submission</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Instant help from legal experts</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Complete online process from anywhere</span></li>
            </ul>

            <h3>Handle the director resignation process timely and accurately at just <span class="text-blue">Rs. 1,799</span></h3>

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
            <h2 class="display-4 mb-4 font-bolder">Resignation of Director</h2>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>Generally, <b>appointment of directors</b> ensures that a company has a leading face. They are responsible for the successful functioning of a company and suffer a loss when the company faces a financial crisis. However, there may be unavoidable circumstances due to which someone may want to resign from their designation.</p>
            <p>A director resignation letter is a form of statement that shows the individual’s intent to step down from the position as the director of a company. This letter indicates the reason for leaving the position and mentions the final day. The concerned person usually needs to serve a notice period in order to allow the company to find a replacement.</p>
            <p>The director of the company also needs to send the resignation letter to the company’s board of directors and the Registrar of Companies, RoC.</p>
          </div>
          <div class="col-md-6 col-lg-5 pt-4">
            <figure class="rounded">
              <img src="{{asset('images/overview/resignation-of-director.jpg')}}" alt="resignation of director" >
            </figure>
          </div>
      </div>
  </div>
</section>  

<!-- Procedure -->
<section class="wrapper ">
  <div class=" container p-10 ">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">PROCEDURE</h6>
            <h2 class="display-4 mb-4 font-bolder">Procedure for Resignation of Director & Related Compliance</h2>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12 mb-8">
            <p>Section 168 (1) of Companies Act states that “a director who wants to resign from his office, shall within a period of thirty days from the date of resignation, shall forward to the Registrar a copy of his resignation along with reasons for the resignation in form DIR-11 and the fee as provided in the Companies (Registration Offices and Fees) Rules, 2014.</p>

            <p>There are a few obligations on the part of the director and obligations on the part of the company that each party must fulfill to complete the resignation and removal of the director process. Let’s look at the resignation of the director-online process in brief: </p>

            <p><b>Step 1: Submitting Notice:</b> The individual must give notice in writing to the company and the Board of directors, after which the board shall take a note of the cause. The director’s resignation shall take effect after the final serving date is mentioned in the notice.</p>

            <p><b>Step 2: Providing Information:</b> As part of the resignation of director-online process, our legal team may require a set of specific information from you. Let’s take a look at each through this tabular form one by one:</p>

            <table class="table table-bordered">
                <tbody><tr>
                    <td class="fs-20"><b>Field Name</b></td>
                    <td class="fs-20"><b>Instruction </b></td>
                </tr>
                <tr>
                    <td>
                      <p><b>CIN</b></p>
                    </td>
                    <td>
                      <p>A valid CIN of the company. If you don’t remember the company’s CIN, we can help you find that too.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                      <p><b>ID Proofs</b></p>
                    </td>
                    <td>
                      <p>We may require your name, registered office address, company’s official email id, notice of declaration etc. </p>
                    </td>
                </tr>
                <tr>
                    <td>
                      <p><b>DIN</b></p>
                    </td>
                    <td>
                      <p>An approved Director Identification Number.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                      <p><b>Date of appointment </b></p>
                    </td>
                    <td>
                      <p>An exact date when you were appointed as the director in the company.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                      <p><b>Resignation filing date </b></p>
                    </td>
                    <td>
                      <p>Mention the date of resignation as it became effective.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                      <p><b>Reason for resigning </b></p>
                    </td>
                    <td>
                      <p>We will also take note of the specific reason for your intent of resigning. </p>
                    </td>
                </tr>
                <tr>
                    <td>
                      <p><b>DSC</b></p>
                    </td>
                    <td>
                      <p>A Digital signature certificate is also required. </p>
                    </td>
                </tr>
              </tbody>
            </table>

            <p><b>Step 3: Sending us the attachments: </b> To further the <b>procedure for resignation of a director & related compliance</b>, you may need to send our team the following particulars as well: </p>
            <ul>
              <li>Notice of resignation filed with the company.</li>
              <li>Proof of dispatch.</li>
              <li>Acknowledgement that the company received the notice.</li>
            </ul>

            <p><b>Step 4: Filing Return of Resignation with RoC: </b> We will forward the voluntary resignation to the RoC to indicate your intent of resigning from the position. </p>

            <p><b>Step 5: Making changes: </b> Luckily, if there are any changes/modifications/you would like to make in the form, you can mention them to us and we will make the changes before making the final submission.</p>

            <p><b>Step 6: Collecting SRN: </b> Once your eForm DIR-11 is submitted successfully, we will send our clients’ <b>Service Request Number</b> (SRN), which can be used to connect with MCA in the future.</p>

            <p><b>Step 7: Saving the receipts: </b> Because the fee for completing the resignation of director form is paid online, we will also ensure to note down your generated certificate containing the details of the paid fee.</p>

            <p><b>Step 8: Acknowledgement: </b> Once the process is done, we will save the email acknowledging the completion of the <b>resignation of the director under the Companies Act 2013</b>.</p>

          </div>
      </div>
      <div class="row">
          <div class="col-md-6 col-lg-12 mx-auto">
            
            
           
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
            <h2 class="display-4 mt-6 mb-4 font-bolder">Why JustStart
              <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> 
            </h2>

            <p>JustStart is India’s largest platform of CAs, professional chartered accountants, Company Secretaries, management pros, and company directors themselves—with years of expertise in the field and experience backing us.</p>
              
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-0 ">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Legal Assistance
                  </h3>
                  <p class="mb-0">Get game-changing legal help from experts who have years of experience in their respective fields. We have served over 10,000+ incorporations with our client-centric approach.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-0 ">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Realistic Expectations
                  </h3>
                  <p class="mb-0">We ensure that all the paperwork is done seamlessly so that you get the clarity you deserve. We set realistic expectations from the start without keeping you in doubt. </p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-0 ">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> 360 degree team support
                  </h3>
                  <p class="mb-0">With dedicated team members experienced in business operations and advisors who have worked with high-profile businesses for years, you will experience the ease you always wanted.</p>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>How can a Director resign from a company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>Any company director looking to step down from their position is required to fill out Form DIR-11 and send it to the Registrar of Companies (RoC) within 30 days of resignation along with a copy of a Board Resolution and a Resignation letter.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>What is a notice of resignation in eForm DIR-11? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>The notice of resignation in eForm DIR-11 of Section 168 (1) of the Companies Act, 2013 is a form of intimation sent to the Registrar stating the intention to resign from the said position.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>Can someone send the resignation of director form anytime? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>Yes. A director can resign at anytime from the office by completing the formalities in writing to the company’s Board of Directors. They can send an email as a valid mode of communication as well.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>Are there any rules of Resignation and removal of Directors? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>Yes. There are rules and regulations consolidated by the Indian government that must be completed by the incumbent of a post and sent to the competent authority.</p>
                    <ul>
                      <li>A resignation has to be free of any conditions.</li>
                      <li>A resignation is accepted if proper arrangements for an alternative to the position of importance have been made.</li>
                    </ul>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>What is the fee applicable to fill the resignation of director form? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>Well, the applicable fee depends on the nominal share capital of a company. For example, any company with a share capital of less than 1 lakh usually pays around Rs. 300 as ROC Fees, whereas the charges increase by Rs. 100 if your company’s share capital lies between Rs. 1 lakh and Rs. 4,99,999. Plus, some companies have to pay additional fees if they are submitting the resignation after a period of 30 days of giving the resignation notice.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-5">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="true" aria-controls="faq-collapse-5"><h2>What are the duties of a company after the director submits a resignation letter? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-5">
                  <div class="card-body">
                    <p>Upon receiving a director’s resignation, the company’s board organizes a meeting where the board members take note of the resignation and files an application to the RoC in form DIR-12 indicating the same. After updating the registrar, the board may select an alternative director.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-6">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-6" aria-expanded="true" aria-controls="faq-collapse-6"><h2>Does the director of a company carry any liabilities after resigning? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-6">
                  <div class="card-body">
                    <p>Although the director is discharged of any liabilities and responsibilities after resigning from a company, as per rules laid down by the MCA, a director may be held responsible for the wrongs done during the tenure of that particular director.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-7">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-7" aria-expanded="true" aria-controls="faq-collapse-7"><h2>What does JustStart package for resignation and removal of directors offer? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-7">
                  <div class="card-body">
                    <p>JustStart guarantees you the best affordable package detailed in the resignation of the director by covering:</p>
                    <ul>
                      <li>Drafting a resolution for the resignation of a director from the company</li>
                      <li>eForm DIR-11 submission</li>
                      <li>Drafting of a resignation letter</li>
                    </ul>
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