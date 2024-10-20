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

            <p class="mb-4">Kickstart your business hassle-free by getting it registered without having to spend a hefty amount of funds for an office space. JustStart’s team will help you get your business GST and Business registration done with a Virtual Office address India.</p>

            <p class="fs-20"><b>Get Your Virtual Office Address Registered Today!</b></p>
            <ul class="icon-list bullet-bg bullet-soft-blue mb-8">
              <li><span><i class="uil uil-check fs-22"></i></span><span>Quick Solutions</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Experienced Consultants</span></li>
              <li><span><i class="uil uil-check fs-22"></i></span><span>Credible Legal Assistance</span></li>
            </ul>

            <p><a href="tel:+91 9315513354" class="btn btn-sm btn-outline-primary rounded-pill">Talk To Expert</a></p>
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
            <h2 class="display-4 mb-4 font-bolder">What is A Virtual Office?</h2>
          </div>
          <div class="col-md-6 col-lg-7">
            <p>We all know that the business and corporate world is significantly inclining towards the online mode of operations since the past few years. This sudden change is a great advantage as acquiring an office space in current times can be really tough due to the rising rental and property rates.</p>
            <p>But at the same time, it is crucial for a business to have an official address to get the business registered. To solve this dilemma, Virtual Offices came into existence. Also, you can get a virtual company registration to grow your business.</p>
            <p>Virtual offices serve the purpose of having an office without actually having one. It usually costs only a fraction of what an actual office cost, which makes it extremely cost-effective. Also, after getting this registration, you can clerify that what are the type of <b>company formation India.</b></p>
          </div>
          <div class="col-md-6 col-lg-5">
            <figure class="rounded">
              <img src="{{asset('images/overview/virtual-office.jpg')}}" alt="virtual office address" >
            </figure>
          </div>
      </div>
  </div>
</section>

<!-- Required Documents -->
<section class="wrapper mt-14">
  <div class="container card p-10 mb-10 bg-soft-fuchsia ">
    <div class="row ">
        
        <div class="col-md-5 col-lg-8" >
          <h2 class="display-5 font-bolder">Documents Required for A Virtual Office?</h2>
          
          <p class="">Now that we know what a Virtual Office is, let’s have a look at the documents required to get your Virtual Office address Delhi to help you get your business registered. To get your Virtual office in India, you will be required to present the following documents:</p>

          <ul class="icon-list bullet-bg bullet-fuchsia ms-0 gy-2 mt-8 mb-8">
            <li class="">
                <span><i class="uil uil-check"></i></span>
                <span>ID proof of the Directors/Partners.</span>
            </li>
            <li class="">
                <span><i class="uil uil-check"></i></span>
                <span>Address proof of the Directors/Partners.</span>
            </li>
            <li class="">
                <span><i class="uil uil-check"></i></span>
                <span>Photographs of the Directors/Partners.</span>
            </li>
            <li class="">
                <span><i class="uil uil-check"></i></span>
                <span>Certificate of Incorporation. </span>
            </li>
          </ul>

          <p>These were the documents and details required from you to initiate the process of acquiring a Virtual Office address in India.</p>
          
        </div>
        <div class="col-md-7 col-lg-4" >
          <figure class="rounded">
            <img src="{{asset('')}}images/service-icon/file.png" alt="service icon" />
          </figure>
        </div>
      
    </div>

  </div>
  <!-- /.container -->
</section>

<!-- Importance -->
<section class="wrapper bg-soft-yellow">
  <div class=" container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">IMPORTANCE</h6>
            <h2 class="display-4 mb-4 font-bolder">Importance Of Virtual Office</h2>
          </div>
      </div>

      <div class="row align-items-start">
          <div class="col-md-6 col-lg-6 position-lg-sticky " style="top: 8rem;">
            <p>Getting a Virtual Office address registered can highly benefit your business and help it grow immensely without any hindrances. This new concept of Virtual Office in India, has highly benefited countless businesses and yours can be the next. Following are the benefits of the virtual office for gst registration.</p>
            
            <figure class="rounded">
              <img src="{{asset('')}}assets/img/illustrations/3d4.png" alt="illustrations" />
            </figure>
          </div>
          <div class="col-md-6 col-lg-6 pt-2">

            <div class="d-flex flex-row mb-8 ">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-grape me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Official Address</h4>
                <p>Virtual Office registration allows your business to have an office address at prime locations. You can use premium locations for your business or GST registration.</p>
              </div>
            </div>
           
            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-pink me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Cost-Effective</h4>
                <p>A Virtual Office is the most cost-effective solution for getting your business registered with an office address while not having to bear the expenses of an office space. You can avail these benefits without having to pay the expenses of a regular office space.</p>
              </div>
            </div>

            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-sky me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Easier Business Registration</h4>
                <p>Having a Virtual office makes it easier for you to get your business and its gives gst registration benefits for small business without any obstructions.</p>
              </div>
            </div>

            <div class="d-flex flex-row mb-8">
              <div>
                <div class="svg-bg svg-bg-lg bg-pale-purple me-5">
                  <img src="{{asset('')}}assets/img/icons/solid/paper-plane.svg" class="icon-svg solid text-navy" alt="">
                </div>
              </div>
              <div>
                <h4 class="fs-20">Increase In Productivity</h4>
                <p>A Virtual Office has proven to be highly beneficial for businesses. No commuting time and a stress free work environment of an employee’s own choice increases their productivity greatly.</p>
              </div>
            </div>

          </div>
      </div>
  </div>
</section>

<!-- PROCESS --> 
<section class="wrapper">
  <div class="container p-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h6 class="mb-4 text-yellow">PROCESS</h6>
            <h2 class="display-4 mb-4 font-bolder">Process for Obtaining A Virtual Office Address in India With JustStart</h2>
          </div>
      </div>
      <div class="row align-items-start">
          <div class="col-md-5 col-lg-5 position-lg-sticky " style="top: 8rem;">
            <p>If you wish to get your business registered, you will have to get a Virtual Office first. JustStart offers Virtual Office Address acquiring services to help your business function smoothly while following all the legal requirements. </p>

            <p>Through our Virtual Office address acquiring process, you will receive your Virtual Office’s address in no time. To let JustStart elevate your business, you must complete the process by following the steps mentioned below:</p>
            
          </div>
          <div class="col-lg-7 position-relative">
            <div class="position-absolute d-none d-md-block" style="top: 50%; left: 50%; width: 130%; height: auto; transform: translate(-50%,-50%); z-index:-1">
              <img class="w-100" src="{{asset('')}}assets/img/photos/blurry.png" alt="">
            </div>
            <div class="row gx-md-5 gy-5">
              <div class="col-lg-12 order-lg-2">
                <div class="card me-lg-6">
                  <div class="card-body p-6">
                    <div class="d-flex flex-row">
                      <div>
                        <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4">
                          <span>1</span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Drop an Inquiry</h4>
                        <p class="mb-0">Drop an inquiry to let our team know that you are interested in acquiring a virtual office for company registration india for your business. Dropping an inquiry helps our team reach out to you easily.</p>
                      </div>
                    </div>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
                <div class="card ms-lg-13 mt-6">
                  <div class="card-body p-6">
                    <div class="d-flex flex-row">
                      <div>
                        <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4">
                          <span>2</span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Fill a Simple Checklist</h4>
                        <p class="mb-0">Fill a series of questions that will help us determine the nature of your business and your specific requirements from our legal experts.</p>
                      </div>
                    </div>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
                <div class="card me-lg-6 mt-6">
                  <div class="card-body p-6">
                    <div class="d-flex flex-row">
                      <div>
                        <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4">
                          <span>3</span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Tell Us Your Requirements</h4>
                        <p class="mb-0">Once you fill the checklist, share your ideas and requirements with us.
Find a Virtual Office:- We will help you find a Virtual Office address that suits your requirements. Once you pick a Virtual Office from the options we provide you, we will help you acquire the address. </p>
                      </div>
                    </div>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.card -->
                <div class="card ms-lg-13 mt-6">
                  <div class="card-body p-6">
                    <div class="d-flex flex-row">
                      <div>
                        <span class="icon btn btn-circle btn-lg btn-soft-primary pe-none me-4">
                          <span>4</span>
                        </span>
                      </div>
                      <div>
                        <h4 class="mb-1">Handover The Documents</h4>
                        <p class="mb-0">To let us help you through our services, you will be required to handover your documents to us.</p>
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
    <div class="container card p-10 mb-10">
      <div class="row ">
          
          <div class="col-md-5 col-lg-5" >
            <h2 class="font-bolder">Why JustStart for Virtual Office Address?</h2>
            
            <p class="">One of the reasons why we have grown incredibly in a very short time is our credible assistance to our clients. We strive to help our clients’ businesses grow immensely through our legal and technical expertise. Our team of expert legal and tax consultants with a great amount of experience helps businesses fulfill the legal and tax requirements required by the government and function smoothly. </p>

            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif" alt="service icon" />
            </figure>
            
          </div>
          <div class="col-md-7 col-lg-7" >
              <div class="card bg-pale-leaf mb-6">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0 ">
                        <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Dynamic Legal Solutions 
                    </h3>
                    <p class="mb-0">JustStart offers over-the-top legal solutions to help your business grow greatly while conforming to all the legal requirements laid out by the government.</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <div class="card bg-pale-leaf mb-6">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Legal Experts
                    </h3>
                    <p class="mb-0">Our team is full of experienced Legal Experts ready to assist our clients consistently. Our experts have helped countless businesses function smoothly with the help of their legal guidance. </p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>

              <div class="card bg-pale-leaf mb-6">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Maintenance
                    </h3>
                    <p class="mb-0">Once you pick JustStart for your business, we will help you follow all the legal requirements to run a business without any obstructions. Our expert team will ensure that your business and its legal affairs are in order.</p>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>

              <div class="card bg-pale-leaf mb-6">
                <div class="card-body d-flex flex-row p-4">
                  <div>
                    <h3 class="fs-21 mb-0">
                      <i class="uil uil-question-circle fs-52 me-2 align-middle"></i> Client Satisfaction
                    </h3>
                    <p class="mb-0">Once you trust our experts with your business, you will not have to worry about your business ever again.</p>
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
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-0" aria-expanded="true" aria-controls="faq-collapse-0"><h2>Who can use a Virtual Office? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-0" class="accordion-collapse collapse" aria-labelledby="faq-0">
                  <div class="card-body">
                    <p>We help businesses grow through our effective legal solutions across India. You can acquire an official Virtual Office address across the country through our help.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-1">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="faq-collapse-1"><h2>Can we use the Virtual Office address for GST registration? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-1" class="accordion-collapse collapse" aria-labelledby="faq-1">
                  <div class="card-body">
                    <p>Absolutely! You can use the virtual office for gst registration process of your business.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-2">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="true" aria-controls="faq-collapse-2"><h2>Documents required for using Virtual Office address for GST registration? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-2">
                  <div class="card-body">
                    <p>You will be required to have the Address Proof, Agreement, and NOC from the legal owner of the property, to get your business’s GST registration.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-3">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="true" aria-controls="faq-collapse-3"><h2>How soon will I get my Virtual Office address? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-3">
                  <div class="card-body">
                    <p>The duration of the process depends upon your requirements. The most time consuming task in the whole process is to find an ideal office address in your preferred location. We will be able to give you a timeline, once we get to understand your requirements.</p>
                  </div>
                  <!--/.card-body -->
                </div>
                <!--/.accordion-collapse -->
              </div>
              <!--/.accordion-item -->
              <div class="card accordion-item">
                <div class="card-header" id="faq-4">
                  <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="true" aria-controls="faq-collapse-4"><h2>Still have doubts? </h2></button>
                </div>
                <!--/.card-header -->
                <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-4">
                  <div class="card-body">
                    <p>If you still have doubts regarding the process of acquiring a <b>Virtual Office for company registration</b> in India, reach out to our legal consultants. Our experts will walk you through the process and clear all your doubts effectively.</p>
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