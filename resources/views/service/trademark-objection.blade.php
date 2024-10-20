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

            <p>If your Trademark has been objected by the trademark examiner, there’s no need to panic as JustStart’s expert legal consultants assist you to reply to the objection with the best and most effective legal practices.  </p>
            
            <p>A <b>Trademark</b> objection must be handled with great care and our team does just that to help you tackle the situation.</p>

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
            <h3 class="display-4 mb-4 font-bolder">What is A Trademark Objection?</h3>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>When you try to get your Trademark registered, it goes through a meticulous examination process where the examiner checks whether your Trademark is authentic or not. </p>
            
            <p>Trademark objection does not mean that your Trademark has been rejected, it simply means that the examiner/registrar has objected the application filed on certain grounds as mentioned in the examination report. Even if your Trademark has received an objection, your reply to the objection can greatly increase the chances of getting it successfully registered. </p>

          </div>
          <div class="col-md-6 col-lg-5 pt-2">
            <figure class="rounded">
              <img src="{{asset('images/overview/what-is-a-trademark-objection.jpg')}}" alt="trademark objection" >
            </figure>
          </div>
      </div>
  </div>
</section>  

<!-- REASONS -->
<section class="wrapper mt-10  bg-soft-yellow">
  <div class="container p-10 mb-10 ">
    <div class="row ">
      <div class="col-md-12">
        <h6 class="mb-4 text-yellow text-center">REASONS</h6>
        <h2 class="display-5  font-bolder text-center mb-10">Reasons for Trademark Objection?</h2>
        <p>Once your Trademark goes into the registration process, it can be objected by the public, any third party, or the examiner during the examination process. The reasons for Trademark objection are divided into two parts. Understanding them can greatly help you understand how the Trademark objection reply in India can be filed. The grounds on which your Trademark can receive objection are:</p>

          <ul class="row icon-list bullet-bg bullet-yellow ms-0 gy-2 mt-2 mb-4">
            <li class="col-md-6 col-lg-4 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span><b>Absolute Grounds Of Refusal</b></span>
            </li>
            <li class="col-md-6 col-lg-4 mb-2">
                <span><i class="uil uil-check"></i></span>
                <span><b>Relative Grounds Of Refusal</b></span>
            </li>
          </ul>
      </div>
    </div>
    <div class="row mt-6">  
        <div class="col-md-5 col-lg-8">
          <p>The reasons for the Trademark objection are as follows:</p>
          
          <ul class=" icon-list bullet-bg bullet-yellow ms-0 gy-2 mt-2 mb-4">
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Lacks Authenticity: </b>A Trademark is highly crucial for any business because it helps your brand stand out from the competition. It should be unique in nature and should not have any features or characteristics that match with any other business’s Trademark. If the examiner spots any feature of your Trademark to be similar to a third party’s Trademark, it gets refused. </span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Deceptive Marks:</b> If your Trademark carries any confusing elements that can perplex the public, it gets refused. Trademarks are required to be self-explanatory in nature and if the examiner finds your Trademark to be confusing, it may receive an objection. </span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Incorrect Details:</b> If the examiner finds the name of the applicant, address associated with your business, and Trademark form to be incorrect or inaccurate, your registration application gets refused. It is absolutely necessary to fill all the details properly during the Trademark registration process. </span>
            </li>
          </ul>

          <p>To revive struck-off companies, all of these documents are necessary. It is important to provide complete and accurate information in these documents to ensure a smooth revival process.</p>
          
        </div>

        <div class="col-md-7 col-lg-4 pt-6">
          <figure class="rounded">
            <img src="{{asset('images/types-of-company-registration.png')}}" alt="types of company registration" >
          </figure>
        </div>
    </div>

    <div class="row mt-6">  
        <div class="col-lg-12">
          <p>JustStart’s exceptional team of consultants can help you File Trademark Objection Reply in India to resolve the errors and successfully get your Trademark registered. Our legal solutions have helped many startups and businesses in getting their Trademarks registered with ease. Even if any business’s Trademark receives objection, our team helps them through our expertise in filing a Trademark Objection Reply Online in India.</p>
        </div>
    </div>



  </div>
  <!-- /.container -->
</section>

<!-- PROCESS -->
<section class="wrapper bg-soft-fuchsia">
  <div class="container p-10 mb-10  ">
    <div class="row ">
        <div class="row text-center">
          <div class="col-md-12">
            <h6 class="mb-4 text-yellow">PROCESS</h6>
            <h2 class="display-5  font-bolder ">Trademark Objection Reply in India Through JustStart’s Quick Process</h2>
          </div>
        </div>
    </div>
    <div class="row ">
        
        <div class="col-lg-12 pt-10">
          <p>Our quick process helps you file <b>Trademark objection reply</b> without wasting any time. JustStart offers you one of the most credible legal consultants with a great amount of expertise and industry experience. Our team can help you file the <b>Trademark Objection Reply Online in India</b> through our effective process. </p>

          <ul class="icon-list bullet-bg bullet-fuchsia ms-0 gy-2 mt-6 mb-4">
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Objection Receipt:</b> Once you receive an objection, we carefully examine the objection and help you identify the problem in your Trademark.</span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Forming A Trademark Objection Reply:</b> Once we identify the reason for your Trademark’s objection, we prepare a reply with the appropriate documentation to counter it. Following are required in filing Trademark Objection Reply Online:</span>

                <ul class="mt-4">
                  <li>An Ad in the Media.</li>
                  <li>Proof of your Trademark’s availability.</li>
                  <li>Affidavit defining the usage of the Trademark.</li>
                </ul>
            </li>
          </ul>

          <p>We attach requisite documents along with the above replies to counter the Trademark objection.</p>

          <ul class="icon-list bullet-bg bullet-fuchsia ms-0 gy-2 mt-6 mb-4">
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Hearing: </b>Once we file the Trademark objection reply, the concerned authority will either approve or reject .If it gets rejected, the application will be moved for “Show  Cause Hearing”. </span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Trademark Journal: </b>Once the Trademark is approved during the Hearing process, it is published in the Trademark journal. If it gets refused again, the authority will pass an order along with the reason for the refusal. </span>
            </li>
            <li class="mb-4">
                <span><i class="uil uil-check"></i></span>
                <span><b>Review Petition: </b>In case the Trademark is refused, we will be filing a review petition under 30 days of the order’s revelation. We will be mentioning the reasons along with the petition that will substantiate the grounds on which the order must be reviewed. </span>
            </li>
          </ul>

          <p>Our team will consistently communicate with you throughout the process of your Trademark objection reply’s filing. JustStart’s adept legal experts are highly professional and will be assisting you throughout the process to ensure that you follow our lead flawlessly.</p>
          
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
              <h2 class="display-5  font-bolder ">Why JustStart for filing Trademark Objection Reply<i class="uil uil-question-circle fs-52 me-2 align-middle"></i> </h2>
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

            <p>JustStart offers quick and effective legal solutions to help you overcome Trademark objections with ease. Our dynamic team of experts follow the most effective legal practices to help you elevate your business by following the norms laid out by the Government of India. We have contributed to the growth of many businesses through our rapid assistance. If you wish to get your Trademark registered, our hassle-free process will get it done efficiently. </p>
              
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Expertise</h3>
                  <p class="mb-0">Over the years, we have helped many companies through our constructive solutions. JustStart’s legal expertise can help you tackle any form of Trademark objection efficiently.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Customer Satisfaction</h3>
                  <p class="mb-0">One of the many reasons why we are known as the most credible Business management consultant agency is due to our commitment to our clients. Through our effective assistance, we help you achieve your organizational goals successfully.</p>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>What if someone raises an objection to my business’s Trademark? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>If a third party raises an objection on your business or product’s Trademark, you will receive a notice from the concerned department of the Government. You will have 30 days to respond to the objection. If you fail to file a reply within 30 days, the case will be decided by the registrar Ex-parte..</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>What if my Trademark is copied from another business? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>We highly suggest you refrain from copying any existing Trademark without the permission of the Trademark’s owner, as it may result in heavy monetary penalties.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>How long will the Trademark objection reply process take? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>Once we file a Trademark objection reply, it may take up to  4 to 6 weeks.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>How to check if I have received an objection on my Trademark? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>An applicant can track the status of the Trademark registration application online to check whether the Trademark has received any objection or not. You can track the status of your Trademark here <a href="https://tmrsearch.ipindia.gov.in/eregister/eregister.aspx">https://tmrsearch.ipindia.gov.in/eregister/eregister.aspx</a></p>
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