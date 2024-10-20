@extends('layouts.landing')

@section('content')

<section class="wrapper mt-0 bg-dark-blue topbanner">
  <div class="container py-md-4 ">
    <div class="row ">
        <div class="col-md-7 col-lg-7 first-col">
            <h2 class="mt-2 mb-4 font-bolder text-center">Register Your LLP Now!</h2>
            
            <h3 class="font-bolder text-center" style="color: #23148f;">
              Set up your LLP Registration with <br>JustStart's Legal Assistance Today!
            </h3>

            <h6 class="font-bolder text-center mt-4 mb-4" style="color: #1467f0;">
              Complete Your LLP Registration process in Just 10 Days for Only at <span class="fs-20" style="color: #1eb41b;">Rs. 7,499/-</span>
            </h6>

            <figure class="text-center">
              <img src="{{asset('')}}images/llp-resigtration-banner2.JPG" style="max-height:250px; width:auto;" />
            </figure>
            
            <div class="row after-topbanner-heading-prices d-none">
              <div class="col-lg-4 col-4">
                  <h4 class="text-center main-heading">OPC</h4>
                  <h4 class="text-center ">Rs. 7,999 *</h4>
              </div>
              <div class="col-lg-4 col-4">
                  <h4 class="text-center main-heading">Pvt. Ltd.</h4>
                  <h4 class="text-center ">Rs. 8,899 *</h4>
              </div>
              <div class="col-lg-4 col-4">
                  <h4 class="text-center main-heading">LLP</h4>
                  <h4 class="text-center ">Rs. 7,499 *</h4>
              </div>
            </div>

            <ul class="row ps-4 icon-list bullet-bg mb-2 topbanner-features d-none">
              <li class="col-md-6 col-12">
                <span><i class="uil uil-check fs-22"></i></span>
                <span>Get it done in just 15 days</span>
              </li>
              <li class="col-md-6 col-12">
                <span><i class="uil uil-check fs-22"></i></span>
                <span>From anywhere</span>
              </li>
              <li class="col-md-6 col-12">
                <span><i class="uil uil-check fs-22"></i></span>
                <span>With just one easy tap</span>
              </li>
              <li class="col-md-6 col-12">
                <span><i class="uil uil-check fs-22"></i></span>
                <span>Efficiency at your fingertips!</span>
              </li>
            </ul>

            <div class="mt-6 landing-banner-rating-left d-none d-lg-block">
              @include('includes.landing-rating')
            </div>

        </div>
        <div class="col-md-5 col-lg-5 mb-4">
            <div class="card bg-white mb-2">
              <div class="card-body py-4 px-4">
                  
                <div class="row landing-form-tel">
                    <div class="col-md-12 mb-3 text-center fs-14">
                        <a href="tel:9315513354" class="ms-2">
                            <i class="uil uil-calling"></i>
                            9315513354
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=919315513354" class="">
                            <i class="uil uil-whatsapp"></i>
                            9315513354
                        </a>
                    </div>
                </div>
                <h4 class="mb-4 font-bolder text-center form-heading">Register Your LLP Now!</h4>
                @include('forms.landing-form-banner')

              </div>
            <!--/.card-body -->
            </div>

            <div class="mt-6 landing-banner-rating-right d-block d-lg-none">
              @include('includes.landing-rating')
            </div>
            
        </div>
    </div>
  </div>
</section>

<!-- TimeLine -->
<section class="wrapper mt-10 time-line">
  <div class="container">
      <div class="row gx-lg-8 gx-xl-12 gy-6 process-wrapper line text-center">
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary pe-none mb-4"><span class="number">01</span></span>
          <div class="time-line-box">
            <figure>
              <img src="{{asset('')}}/images/time-line-fill-form.webp" />
            </figure>
            <h4 class="mb-1">Fill Up the Form</h4>
          </div>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary pe-none mb-4"><span class="number">02</span></span>
          <div class="time-line-box" >
            <figure>
              <img src="{{asset('')}}/images/timeline-submit-doc.webp" />
            </figure>
            <h4 class="mb-1">Call to Discuss</h4>
          </div>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary pe-none mb-4"><span class="number">03</span></span>
          <div class="time-line-box" >
            <figure>
              <img src="{{asset('')}}/images/timeline-discuss.webp" />
            </figure>
            <h4 class="mb-1">Detailed Consultation</h4>
          </div>
        </div>
        <!--/column -->
        <div class="col-md-6 col-lg-3"> <span class="icon btn btn-circle btn-lg btn-primary pe-none mb-4"><span class="number">04</span></span>
          <div class="time-line-box" >
            <figure>
              <img src="{{asset('')}}/images/timeline-get-company.webp" />
            </figure>
            <h4 class="mb-1">Get Your LLP Company</h4>
          </div>
        </div>
        <!--/column -->
      </div>
  </div>
</section>

<!-- What is -->
<section class="wrapper mt-12 mt-sm-16 bg-light ">
  <div class="container ">
      <div class="card shadow-lg">
        <div class="row gx-0">
          <div class="col-lg-5 image-wrapper bg-image bg-cover rounded-top rounded-lg-start" data-image-src="{{asset('')}}images/private-limited-company.png" style="background-image: url({{asset('')}}images/private-limited-company.png);">
          </div>
          <!--/column -->
          <div class="col-lg-7 p-sm-10 p-6">
              <h2 class="display-5 font-bolder mb-10 text-center text-sm-start">Online Registration for <span class="text-blue">Limited Liability Partnerships</span> in India</h2>
              
              <p>LLP Company is a type of business structure that combines the features of a partnership and a private limited. In an LLP, partners have limited liability, meaning their personal assets are protected from the debts and liabilities of the business. </p>
              
              <p>This means that if the LLP incurs debts or faces legal action, the personal assets of the partners are generally not at risk beyond their investment in the LLP.</p>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
  </div>
  <!-- /.container -->
</section>

<!-- Benefits -->
<section class="wrapper mt-12 mt-sm-16 ">
  <div class="container ">
    <div class="card p-sm-10 p-4 shadow-lg">
      <div class="row align-items-start ">
          <div class="col-md-5 col-lg-5 position-lg-sticky " style="top: 8rem;">
            <figure class="rounded">
              <img src="{{asset('')}}images/service-icon/shield.gif">
            </figure>
          </div>
          <div class="col-md-7 col-lg-7">
            <h2 class="mb-10 display-6 font-bolder text-center text-sm-start">
                <span class="text-blue">Benefits </span>of LLP Registration in India
            </h2>
      
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Limited Liability</h3>
                  <p class="mb-0">Partners are not personally liable for the debts and liabilities of the LLP. Their liability is limited to their investment in the LLP, protecting their personal assets.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Flexibility</h3>
                  <p class="mb-0">LLPs offer flexibility in management and operations. Partners can decide how they want to structure the LLP and manage its affairs according to their needs and preferences.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Separate Legal Entity</h3>
                  <p class="mb-0">An LLP is a separate legal entity distinct from its partners. It can own property, enter into contracts, and sue or be sued in its own name, providing legal recognition and protection.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>

            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Taxation</h3>
                  <p class="mb-0">LLPs are taxed as a separate legal entity, similar to Private Limited Companies. They enjoy certain tax benefits and exemptions, making them an attractive option for businesses.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card bg-pale-leaf mb-6 d-flex flex-row ">
              <div class="card-body d-flex flex-row p-4">
                <div>
                  <h3 class="fs-21 mb-2 ">Easy Compliance</h3>
                  <p class="mb-0">LLPs have fewer compliance requirements compared to Private Limited Companies. They are subject to less stringent regulations, making it easier and more cost-effective to maintain compliance.</p>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
              
          </div>
      </div>
    </div>
  </div>
</section>

<!-- Ad Image  -->
<section class="wrapper mt-12 mt-sm-10 bg-light ">
  <div class="container ">
      <div class="row gx-0">
        <div class="col-lg-12 ">
            <figure class="rounded">
              <img src="{{asset('')}}images/launch-business.JPG">
            </figure>
        </div>
      </div>
  </div>
</section>

<!-- Required Documents -->
<section class="wrapper mt-12 mt-sm-16 mb-10">
  <div class=" container card p-6 p-sm-10">
      <div class="row">
          <div class="col-md-12 col-lg-12 text-center mb-8">
            <h2 class="display-5 font-bolder text-center text-sm-start">
              <span class="text-blue">Documents Required</span> for LLP Registration in India
            </h2>
          </div>

          <div class="row">
            <div class="col-md-6 col-lg-6 col-12 mb-4">
              <h4 class="mb-6" ><i class="uil uil-file-alt"></i> Identity and Address Proof</h4>
              <div class="row ps-4">
                <ul class="col-md-12">
                  <li class="col-lg-12 col-12 mb-2">
                    Photographs of the proposed partners
                  </li>
                  <li class="col-lg-12 col-12 mb-2">
                    PAN card of all proposed partners
                  </li>
                  <li class="col-lg-12 col-12 mb-2">
                    Identity proof like Aadhar card/Voter ID Card/Driving licence/Passport of all proposed partners
                  </li>
                  <li class="col-lg-12 col-12 mb-2">
                    Address proof like Bank statement/utility bill/telephone bill/Gas bill for the proposed partners
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-12">
              <h4 class="mb-6"><i class="uil uil-file-alt"></i> Registered Office Proof</h4>

              <div class="row ps-4">
                <ul class="col-md-12">
                  <li class="col-lg-12 col-12 mb-2">
                    <b>Utility Bill: </b>Such as electricity bill, water bill, or gas bill, which shows the address of the registered office.
                  </li>
                  <li class="col-lg-12 col-12 mb-2">
                    <b>Rent Agreement: </b>If the premises are rented, a rent agreement along with a no-objection certificate (NOC) from the landlord.
                  </li>
                  <li class="col-lg-12 col-12 mb-2">
                    <b>Property Ownership Proof: </b>If the premises are owned, documents such as property tax receipt, title deed, or sale deed.
                  </li>
                </ul>
              </div>

            </div>
          </div>
          
      </div>
  </div>
</section>

<!-- Final Deliverables -->
<section class="wrapper mt-12 mt-sm-12 mb-10 bg-light ">
  <div class="container ">
      <div class="card shadow-lg">
        <div class="row gx-0">
          <div class="col-lg-5 image-wrapper bg-image bg-cover rounded-top rounded-lg-start" data-image-src="{{asset('')}}images/private-limited-company.png" style="background-image: url({{asset('')}}images/private-limited-company.png);">
          </div>
          <!--/column -->
          <div class="col-lg-7 p-sm-8 p-4 ">
              <h2 class="display-5 font-bolder mb-4 text-center text-sm-start">
                <span class="text-blue">Final</span> Deliverables
              </h2>
              <ul class="px-6">
                <li class="mt-2">Digital signature for Designated partners</li>
                <li class="mt-2">DIN for 2 designated Partners</li>
                <li class="mt-2">Incorporation certificate of the LLP</li>
                <li class="mt-2">LLP TAN card</li>
                <li class="mt-2">LLP PAN card</li>
                <li class="mt-2">Bank account opening support</li>
              </ul>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
  </div>
  <!-- /.container -->
</section>

@include('component.client-logo-grid')


@include('component.trustpilot-reviews')

@endsection