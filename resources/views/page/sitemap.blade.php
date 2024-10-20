@extends('layouts.app')

@section('content')

<style>
.sitemap-col h3{
  margin-bottom:20px;
}
.sitemap-col p{
  margin-bottom:10px;
  display:block;
}
.sitemap-col p a{
  font-size: 14px;
  color: #000;
}
.sitemap-col p a:hover{
  color: #3f78e0;
}
</style>

<section class="wrapper image-wrapper bg-image text-white mb-10" data-image-src="{{asset('')}}images/background/gradient1.jpg" style="background-image: url({{asset('')}}images/background/gradient1.jpg);">
  <div class="container pt-10 pb-10 pt-md-12 pb-md-12 text-center">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h1 class="display-1 text-white">Sitemap</h1>
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>


<section class="wrapper bg-light pt-md-2">
  <div class="container pb-10 pb-md-10">
      <div class="row ">
        <div class="col-md-4 sitemap-col" >
            <h3>Registrations</h3>
            <p>
              <a href="{{url('service/private-limited-company-registration')}}" >Private Limited Company Registration</a>
            </p>
            <p>
              <a href="{{url('service/llp-registration-india')}}" >Limited Liability Partnership Registration</a>
            </p>
            <p>
              <a href="{{url('service/one-person-company-opc-registration')}}" >One Person Company Registration</a>
            </p>
            <p>
              <a href="{{url('service/section-8-company-registration')}}" >Section 8 Company Registration</a>
            </p>
            <p>
              <a href="{{url('service/startup-india-registration')}}" >Startup India Registration</a>
            </p>
            <p>
              <a href="{{url('service/public-limited-company-registration')}}" >Public Limited Company Registration</a>
            </p>
            <p>
              <a href="{{url('service/gst-registration')}}" >GST Registration</a>
            </p>
            <p>
              <a href="{{url('service/virtual-office-address')}}" >Virtual Office Address</a>
            </p>
            <p>
              <a href="{{url('service/small-business-registration-online')}}" >Small Business Registration</a>
            </p>
            <p>
              <a href="{{url('service/company-registration-consultant')}}" >Company Registration Consultants in Delhi</a>
            </p>
            <p>
              <a href="{{url('service/legal-advisory-services')}}" >Legal Advisory Services</a>
            </p>
            <p>
              <a href="{{url('service/sole-proprietorship-registration')}}" >Sole Proprietorship Registration</a>
            </p>
            <p>
              <a href="{{url('service/private-limited-company-registration-in-bangalore')}}" >Private Limited Company Registration in Bangalore</a>
            </p>
            <p>
              <a href="{{url('service/private-limited-company-registration-in-delhi')}}" >Private Limited Company Registration in Delhi</a>
            </p>
            <p>
              <a href="{{url('service/private-limited-company-registration-in-maharashtra')}}" >Private Limited Company Registration in Maharashtra</a>
            </p>
            <p>
              <a href="{{url('service/private-limited-company-registration-in-uttar-pradesh')}}" >Private Limited Company Registration in Uttar Pradesh</a>
            </p>
            <p>
              <a href="{{url('service/producer-company-registration')}}" >Producer Company Registration</a>
            </p>
            <p>
              <a href="{{url('service/partnership-firm-registration')}}" >Partnership Firm Registration</a>
            </p>
        </div>
        <div class="col-md-4 sitemap-col" >
            <h3>Protect</h3>
            <p>
              <a href="{{url('service/trademark-registration-india')}}" >Trademark Registration</a>
            </p>
            <p>
              <a href="{{url('service/trademark-objection')}}" >Trademark Objection Reply</a>
            </p>
            <p>
              <a href="{{url('service/trademark-renewal')}}" >Trademark Renewal</a>
            </p>
            <p>
              <a href="{{url('service/trademark-opposition')}}" >Trademark Opposition</a>
            </p>
            <h3 class="mt-8">Manage</h3>
            <p>
              <a href="{{url('service/closure-of-private-limited-company')}}" >Close a Private Limited Company</a>
            </p>
            <p>
              <a href="{{url('service/closing-llp')}}" >Close a Limited Liability Partnership</a>
            </p>
            <p>
              <a href="{{url('service/closure-of-opc')}}" >Close a One Person Company</a>
            </p>
            <p>
              <a href="{{url('service/company-annual-filing')}}" >ROC Filling Pvt Ltd</a>
            </p>
            <p>
              <a href="{{url('service/llp-annual-filing')}}" >ROC Filing LLP</a>
            </p>
            <p>
              <a href="{{url('service/opc-annual-filing')}}" >ROC Filing OPC</a>
            </p>
            <p>
              <a href="{{url('service/resignation-of-director')}}" >Remove Director</a>
            </p>
            <p>
              <a href="{{url('service/share-transfer')}}" >Share Transfer</a>
            </p>
            <p>
              <a href="{{url('service/registered-office-change')}}" >Registered Office Change</a>
            </p>
            <p>
              <a href="{{url('service/increase-authorized-share-capital')}}" >Increase in Authorized Capital</a>
            </p>
            <p>
              <a href="{{url('service/appointment-of-director')}}" >Add Directors</a>
            </p>
        </div>
        <div class="col-md-4 sitemap-col" >
            <h3>Accounting & Taxation</h3>
            <p>
              <a href="{{url('service/accounting-bookkeeping-services')}}" >Accounting & Bookkeeping</a>
            </p>
            <p>
              <a href="{{url('service/gst-return-filing')}}" >GST Return Filing</a>
            </p>
            <h3 class="mt-8">Licence</h3>
            <p>
              <a href="{{url('service/fssai-registration')}}" >Fssai Registration</a>
            </p>
            <h3 class="mt-8">Support</h3>
            <p>
              <a href="{{url('blog')}}/" >Blog</a>
            </p>
            <p>
              <a href="{{url('about-us')}}" >About Us</a>
            </p>
            <p>
              <a href="{{url('contact-us')}}" >Contact Us</a>
            </p>
        </div>
      </div>
  </div>
</section>

@endsection