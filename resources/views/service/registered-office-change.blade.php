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

            <p class="mb-4">The primary office of a company, where all correspondence from governmental agencies about the firm is sent, is known as its registered office. The registered office of a business or LLP must be declared by the promoters at incorporation, and specific papers must be kept there.</p>

            <p class="fs-20"><b>Hire Our Experts to Get the Finest-Quality Service!</b></p>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Flexible services</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Affordable packages</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Expert guidance</span></li>
            </ul>

            <h3>Change of Registered Office for just  <span class="text-blue">Rs. 2,999</span></h3>
            <h3>The Offer is Valid for a Limited Time</h3>

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
            <h3 class="display-4 mb-4 font-bolder">How to Change the Address of a Registered Office?</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>According to the Companies Act of 2013 (the “Act”), every company must have a registered office within thirty days of its establishment. While it is in existence, a business must always have a registered office. The Memorandum of Association (MOA) and Articles of Association both refer to the registered office (AOA).</p>

            <p>A change in registered office address of a company happens occasionally for every business. A company must follow a specific approach to change the registered office of the company since it is a different legal entity from its owners, directors, and shareholders. In other words, shifting the registered office is another term for changing the company’s registration office.</p>

            <p>The registered office must still register with the Ministry of Corporate Affairs. The location and place of the registered office are determined by the company’s promoters. Any changes to the company’s registered office after it has been declared by filing INC 22 must be reported to the ROC.</p>
          </div>
          <div class="col-md-6 col-lg-5">
            <figure class="rounded">
              <img src="{{asset('images/overview/registered-office-change.jpg')}}" alt="registered office change" >
            </figure>
          </div>
      </div>
  </div>
</section>

<!-- Types of registered office -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-fuchsia ">
    <div class="row ">
        
        <div class="col-md-5 col-lg-8">
        <h2 class="display-5 font-bolder mb-6">Different types of registered office address change</h2>
          
          <p class="">Due to some issues, a company might seek to relocate after a while. Therefore, any changes to a company’s registered office must be notified in advance. The corporation must abide by the rules laid forth by MCA in order to change its address.</p>
          <p>Mentioned below are the various types of a registered office address change. For any query related to change registered office online, feel free to connect with our well-experienced experts.</p>

          <ul class="icon-list bullet-bg bullet-fuchsia ms-0 gy-2 mt-8 mb-8">
            <li class="">
                <span><i class="uil uil-check"></i></span>
                <span>Change in the registered office of a company within the same state but outside the present city, village, or town that lies within the boundary of the same Registrar of Companies (ROC)</span>
            </li>
            <li class="">
                <span><i class="uil uil-check"></i></span>
                <span>Within a state, a change in registered office address.</span>
            </li>
            <li class="">
                <span><i class="uil uil-check"></i></span>
                <span>Change of registered office address of a company from one ROC (Registrar of Companies) to another ROC within the same state.</span>
            </li>
            <li class="">
                <span><i class="uil uil-check"></i></span>
                <span>Change of registered office address of a company from one jurisdiction to another or from one ROC to another.</span>
            </li>
          </ul>
          
        </div>
        <div class="col-md-7 col-lg-4">
          <figure class="rounded">
            <img src="{{asset('images/service-icon/file.png')}}" alt="service icon" >
          </figure>
        </div>
      
    </div>

  </div>
  <!-- /.container -->
</section>


<!-- Reason for Change -->
<section class="wrapper  mb-10">
  <div class="container card shadow-lg p-5">
    <div class="">
        <div class="row gx-0">
          <div class="col-lg-4 ">
            <figure class="rounded p-5">
              <img src="{{asset('images/service-icon/file.png')}}" alt="service icon" >
            </figure>
          </div>
          <!--/column -->
          <div class="col-lg-8 p-5">
            <h2 class="display-5 font-bolder mb-3">Reason for Change in Registered Office Address</h2>
             
             <p>Any registered company is capable of changing its registration address whenever it wants. There are several factors that might affect a company’s potential to change its registered office address. For you to comprehend, we’ve highlighted a couple of these reasons:</p>

             <ul>
                <li>When a company is expanding quickly and its existing office location and facilities do not suit its needs, the registered office address must be changed.</li>
                <li>If your company is nearing the end of its contract and you’re considering acquiring another office space.</li>
                <li>If a company intends to expand into new categories, it may move its registered office to an area that will allow them to take advantage of more excellent and profitable business.</li>
                <li>The registered office’s lease agreement is coming to an end, and you want to lease somewhere else in its place.</li>
                <li>An increase in personnel.</li>
                <li>Business acquisition by any third party.</li>
             </ul>
            
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>

  </div>
  <!-- /.container -->
</section>


<!-- Reason for Change -->
<section class="wrapper  mb-10">
  <div class="container card shadow-lg p-5">
    <div class="row pt-6">
      <div class="col-lg-12 ">
        <h2 class="display-5 font-bolder mb-6">Compliance for Change of Office Within the Same City</h2>
        <p>Within the local jurisdiction of the same city, village, or town, a corporation must comply with the following requirements before changing its registered office:</p>
        <ul>
            <li>For the business to change the registered office, a Board meeting and Board decision are required.</li>
            <li>Within 15 days after the Board decision has been approved, Form INC-22 must be submitted to the ROC.</li>
        </ul>

        <p><b>The following documents must be submitted with Form INC-22:</b></p>
        <ul>
            <li>If the company is located on a leased or rented property, the owner must provide a NOC (No Objection Certificate).</li>
            <li>If the office is located on leased or rented land, a lease or rental agreement.</li>
            <li>Any utility invoices with the office address that are less than two months old might serve as proof.</li>
        </ul>

        <h3 class="mt-10">Compliances for change in registered office from outside the city under the same ROC</h3>
        <p>The following conditions must be satisfied for a business to shift its registered office outside the city or town in which it is located but still fall under the jurisdiction of the same ROC:</p>
        <ul>
            <li>A Board meeting must be held by the company in order to approve a resolution notifying the Extraordinary General Meeting (EGM).</li>
            <li>The corporation must approve a Special Resolution in the EGM to change the registered office.</li>
            <li>Within 30 days of approving the Special Resolution to change the registered office outside the city/town borders but under the same ROC’s jurisdiction, Form INC-22 and MGT-14 must be submitted to the ROC.</li>
        </ul>

        <p><b>The following documentation must be submitted with Forms INC-22 and MGT-14:</b></p>
        <ul>
            <li>A copy of the Special Resolution should be attached. </li>
            <li>If the office is located on leased or rented land, the owner must give their NOC.</li>
            <li>If the office is located on leased or rented land, a rent or lease agreement must be signed.</li>
            <li>Any utility invoices with the office address that are less than two months old might serve as proof.</li>
        </ul>

        <h3 class="mt-10">Compliance for Change of Office Outside the City but Under a Separate ROC</h3>
        <p>The following requirements are needed for a company to change its registered office outside the boundaries of the state or town in which it is located and when migrating from one ROC’s jurisdiction to another ROC’s within a state:</p>
        <ul>
            <li>Calling the EGM requires a board meeting and a resolution. </li>
            <li>For the company to change its registered office, a Special Resolution needs to be passed at the EGM.</li>
            <li>After passing the Special Resolution to modify the registration office, Form MGT-14 must be submitted to the ROC within 30 days.</li>
            <li>To request permission to change its registered office from one ROC’s territory to another ROC’s within the same state, the firm must submit Form INC-23 to the Regional Director.</li>
            <li>Before one month after submitting the application to the Regional Director, the business should:</li>
            <li>Publish a notice of the change of office in a daily english newspaper and the main newspaper published in the region where the registered office of the business is located.</li>
            <li>Each depositor, holder of a debenture, and creditor of the corporation should get a separate notification. The notification shall inform recipients that they can inform the Regional Director of their nature of interest and reasons for the opposition if their interests are likely to be impacted by the proposed modification to the MOA. After the notice is published, however, they have 21 days to notify the Regional Director if they disagree.</li>
            <li>Within thirty days of the Regional Director receiving the application and in the absence of any objections, a confirmation notification will be provided.</li>
            <li>Within sixty days after receiving the Regional Director’s confirmation, the company must submit Form INC-22 to the ROC with the Regional Director’s confirmation.</li>
        </ul>

        <p><b>The following documents must be submitted with the Form INC-23:</b></p>
        <ul>
            <li>A decision by the board to change the registered office.</li>
            <li>The company’s special resolution approves the change of the registered office.</li>
            <li>An affirmation from two directors or the company’s key managers signed by the Board saying that the company has not fallen behind on paying its workers’ wages and has secured their approval for changing the office.</li>
            <li>An acknowledged copy of the notice is sent to the state’s chief secretary informing him or her of the proposed changes in the registered office and stating that the workers’ interests won’t be impacted.</li>
        </ul>

        <h3 class="mt-10">Compliance for Change of Office from One to Another State</h3>
        <p>The following requirements must be fulfilled in order to move your registered office from one state to another:</p>
        <ul>
            <li>The company must hold a board meeting, approve a resolution to call an EGM, and adopt a special resolution to amend the MOA.</li>
            <li>For changing the registered office from one state to another and amending the MOA of the business, the firm must approve a Special Resolution at the EGM.</li>
            <li>In less than thirty days of approving the Special Resolution to move the registered office and amend the MOA, Form MGT-14 must be submitted to the ROC.</li>
            <li>In order to change the MOA and move the registered office from one state to another, the firm must submit Form INC-23 to the Regional Director for its permission.</li>
            <li>The regional director will decide on the request for a change in the registered office within sixty days if there are no objections.</li>
            <li>Within sixty days after the day the Regional Director authorizes the shifting the business must file the approval with the ROC in Form INC-22.</li>
            <li>The ROC of both the states where the old and newly registered offices are located shall receive a Form INC-28 with the regional director’s authorization for a change in office address.</li>
        </ul>

        <p><b>The forms INC-23 and the ones mentioned below are submitted together:</b></p>
        <ul>
            <li>A copy of the MOA along with recommended changes.</li>
            <li>A copy of the minutes of meeting of EGM that approved amending the MOA.</li>
            <li>A copy of the Board resolution, or, if applicable, a completed Vakalatnama or Power of Attorney.</li>
            <li>A list of all the holders of debt securities and the creditors, together with the amount owed to each of them in relation to their claims, obligations, or liabilities.</li>
            <li>Two directors and the company secretary must sign a statement confirming that the list of creditors is comprehensive and that no other amount is owed to them.</li>
            <li>A proclamation that no worker would be laid off due to a change in the registered office.</li>
        </ul>

        <h3 class="mt-10">Compliance After ROC Approval for Change in Registered Office</h3>
        <p>Following ROC clearance and relocating the registration office, a firm must comply with the legal requirements:</p>
        <ul>
            <li>The company may inform all of its members and stakeholders of the change of its registered office by publishing a general notice in a newspaper.</li>
            <li>Printing the new MOA and updating the registered office address outside of each office, structure, etc. where it conducted business in readable letters and a noticeable location.</li>
            <li>Print the new address in place of the previous one on all official documents, including business letters, invoices, billheads, receipt forms, and other publications.</li>
            <li>All banks and other financial institutions where the firm has bank accounts should be updated with the new registered office address.</li>
            <li>For the purpose of amending the firm address in the TAN and PAN, submit an application to the Income Tax Authority.</li>
            <li>Update the company’s new address along with the names of its utility service providers, including those for telephone, power, and internet connections.</li>
            <li>Notify government agencies such as the Service Tax Department, Central Excise Authorities, Sales Tax Authorities, and Customs Authorities about the company’s new address.</li>
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
          <div class="accordion accordion-wrapper mt-10 faq-accordion" id="accordion">
              <div class="card accordion-item">
                <div class="card-header" id="faq-0">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>What is registered office of the company? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>The primary location of the business is the registered office, which will also be the sole beneficiary of all official communications.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>Is It Possible to Change the Address of the Registered Office? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>Yes, a company’s registered office may be changed from one location to another within the same state or to another state. It is a legal process that may be finished online. Getting stuck with how to change a registered office address? Feel free to connect with our experts.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2> If the Registered Office Address Needs to Be Changed, How Long Does It Take? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>The application form will typically be processed in 2-4 working days.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>In Accordance with the 2013 Companies Act, Is It Mandatory to Alter MOAs and AOAs? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>It is not necessary but advisable that whenever a company updates its terms, it ensures that the AOA & MOA that result from the modification follow the format specified by the Companies Act of 2013 (the “2013 Act”).</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>Is the Registered Office Also the Principal Office? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>Each business segment has a primary location of business that symbolizes the essence of the thing and serves as its base of operations. If a company has a head office, it is known as the registered office, and if a partnership or other type of business entity exists, it is known as the head office.</p>
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