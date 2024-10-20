<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="JustStart">
  <meta name="robots" content="index, follow">
  <title>{{$meta_title}} - JustStart</title>
  <meta name="keywords" content="{{$meta_keywords}}">
  <meta name="description" content="{{$meta_description}}">
  <link rel="shortcut icon" href="{{asset('')}}images/favicon.webp">

  <link rel="stylesheet" href="{{asset('')}}assets/css/plugins.css">
  <link rel="stylesheet" href="{{asset('')}}assets/css/style.css">
  <link rel="stylesheet" href="{{asset('')}}assets/css/colors/custom.css">
  <link rel="preload" href="{{asset('')}}assets/css/fonts/dm.css" as="style" onload="this.rel='stylesheet'">

  <script src="{{asset('')}}assets/js/jquery-3.7.1.min.js"></script>
<style>
body section .font-bolder, body section h1.font-bolder{
  font-weight:700 !important;
}
.copyright-section{
  background:#000;
  color:#fff;
  font-weight:normal;
}
.copyright-section .copyright-row{
  font-size: 13px !important;
}
.copyright-section .copyright-row .copyright-links a{
  color:#fff;
}
.copyright-section .copyright-row .copyright-links a:hover{
  color:#3f78e0;
}
/* .copyright-section .copyright-row .copyright-links a:not(:first-child)::before{ */
.copyright-section .copyright-row .copyright-links span.separator:before{
  font-size: 16px !important;
  content:'|';
  color: #fff;
  padding-left: 5px;
  padding-right: 5px;
}

.form-control,
.form-check-input{
  border-color: #ccc !important;
}
section.bg-dark-blue{
  background-color: #0b65f0 !important;
}

section.topbanner{
  /* background-image:url({{asset('')}}images/background/landing_page_bg.jpg) */
  /* background-color: #ecfbff !important; */
  background-color: #d1e2ea !important;
  background-image:url({{asset('')}}images/background/light_blue_bg.jpg);
  /* background-repeat: repeat;  */
}

section.topbanner i,
section.advantage i{
  margin-left: 0px !important;
}

section.topbanner .landing-call-button{
  border-color: #FFF;
  background-color: #3f78e0;
}

.landing-form-tel a{
  padding: 0 10px;
  color: #3f78e0;
  font-weight: 600;
  font-size: 16px;
}
.landing-form-tel i.uil{
  font-size: 18px;
  vertical-align: middle;
  margin-right: 2px;
}

.topbanner .logo-img {
    max-height: 40px;
    width: auto;
}

section.topbanner h2.text-yellow{
  color: #ffd00f !important;
}

section.topbanner .text-parrot{
  color: #26f911 !important;
}

section.topbanner .after-topbanner-heading-prices{
  margin-bottom: 40px;
}

section.topbanner .after-topbanner-heading-prices .main-heading{
  color: #2e6cde;
  font-size: 26px;
  font-weight: 600;
  font-family: sans-serif;
}

section.topbanner .after-topbanner-heading-prices .col-lg-4:not(:last-child){
      border-right: 1px solid #FFF;
}

section.topbanner .topbanner-features li span i{
  color: #0bcd16!important;
}
section.topbanner .topbanner-features li{
  margin-bottom: 20px!important;
  font-weight: 600;
}

.time-line .time-line-box{
  border: 1px solid #ccc; 
  border-radius: 10px;
  box-shadow: 0 6px 20px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
  padding-top:10px;
  padding-bottom:10px;
}

.time-line .time-line-box img{
  width:auto;
}

.accordion-collapse .card-body {
  text-align:left !important;
}

.capsule-section .btn{
  font-size: 14px;
}
.capsule-section .row .btn:first-child{
  margin-right:20px;
}

/* Sticky Social Bar */
.custom-sticky .icon-bar {
  position: fixed;
  /* top: 50%; */
  top: 80%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.custom-sticky .icon-bar a {
  display: block;
  text-align: center;
  padding: 10px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.custom-sticky .icon-bar a img{
  z-index:999999;
  width:50px;
}

.custom-sticky .icon-bar a:hover {
  
}

/* END Sticky Social Bar */

@media only screen and (min-width: 1024px) {
  section.topbanner .first-col{
    padding-top:20px;
  }

  section.topbanner h2{
    margin-top: 20px!important;
    margin-bottom: 30px!important;
    font-size:30px;
    /* text-align:left !important; */
  }
 
  section.topbanner .form-heading{
    font-size:24px;
  }
  section.topbanner .card{
    margin-top:50px;
  }

  section.topbanner .get-started-price{
    margin-top:40px !important;
    font-size:24px !important;
    text-align:left !important;
  }
}

@media only screen and (max-width: 768px) {
  header{
    display:none !important;
  }
  section.topbanner .after-topbanner-heading-prices{
    margin-bottom: 30px;
  }

  section.topbanner .after-topbanner-heading-prices .main-heading{
    font-size: 20px;
  }

  section.topbanner .after-topbanner-heading-prices h4:not(:first-child){
    font-size: 16px;
  }
  
  section.topbanner .topbanner-features li {
      margin-bottom: 10px!important;
  }

  .capsule-section .row .btn:first-child{
      margin-bottom: 30px;
  }

  .topbanner .logo-img {
    max-height: 30px;
    width: auto;
  }

  .custom-sticky .icon-bar a {
    padding: 5px;
  }

}

</style>

@php
$live_mode = true;
@endphp

@if($live_mode === true)
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-57KNH52');</script>
<!-- End Google Tag Manager -->

<!-- Microsoft Clarity -->
<script type='text/javascript'>window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='https://rec.smartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', '846cba4d8cbdb65e86523c748cc8d918cd3239fa');</script> 
<script type="text/javascript">(function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "citqpaqzqd");</script> <script type="text/javascript">(function(c,l,a,r,i,t,y){
					c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};t=l.createElement(r);t.async=1;
					t.src="https://www.clarity.ms/tag/"+i+"?ref=wordpress";y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
				})(window, document, "clarity", "script", "citqpaqzqd");</script>
<!-- END Microsoft Clarity -->
@endif

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '1390943248485162'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=1390943248485162&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

</head>

<body>
  @if($live_mode === true)
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57KNH52"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  @endif

  <div class="content-wrapper">
    
    @include('includes.landing-header')

    @yield('content')

  </div>
  <!-- /.content-wrapper -->
  
  @include('includes.landing-footer')

  <script src="{{asset('')}}assets/js/plugins.js"></script>
  <script src="{{asset('')}}assets/js/theme.js"></script>
  <script src="{{asset('')}}assets/js/frontend.js"></script>

  <div class="custom-sticky">
    <div class="icon-bar">
      <a class="sticky-whatsapp-icon" title="WhatsApp Us" href="https://api.whatsapp.com/send?phone=919315513354">
        <img src="{{asset('')}}images/service-icon/whatsapp-icon.png" alt="Whatsapp Icon" />
      </a>
      <a class="sticky-call-icon" title="Call Us" href="tel:9315513354">
        <img src="{{asset('')}}images/service-icon/call-icon.png" alt="Call Icon" />
      </a>
    </div>
  </div>
  
  <script> (function (d, w, c) { if(!d.getElementById("spd-busns-spt")) { var n = d.getElementsByTagName('script')[0], s = d.createElement('script'); var loaded = false; s.id = "spd-busns-spt"; s.async = "async"; s.setAttribute("data-self-init", "false"); s.setAttribute("data-init-type", "opt"); s.src = 'https://cdn.in-freshbots.ai/assets/share/js/freshbots.min.js'; s.setAttribute("data-client", "c91e03c2f2cbd6ac27ea8cd1c21875a9183d1a0f"); s.setAttribute("data-bot-hash", "387e0f03d8bfd8c5c80d0bd092033b736695aacd"); s.setAttribute("data-env", "prod"); s.setAttribute("data-region", "in"); if (c) { s.onreadystatechange = s.onload = function () { if (!loaded) { c(); } loaded = true; }; } n.parentNode.insertBefore(s, n); } }) (document, window, function () { Freshbots.initiateWidget({ autoInitChat: false, getClientParams: function () { return {"cstmr::eml":"","cstmr::phn":"","cstmr::nm":""}; } }, function(successResponse) { }, function(errorResponse) { }); }); </script>

</body>

</html>