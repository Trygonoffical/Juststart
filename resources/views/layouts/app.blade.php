<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index, follow">
  <title>{{$meta_title}}</title>
  <meta name="keywords" content="{{$meta_keywords}}">
  <meta name="description" content="{{$meta_description}}">
  <link rel="canonical" href="{{ url(Request::path()) }}">
  <meta name="author" content="JustStart">

  <meta name="google-site-verification" content="qHP53sS7GRS_sT_5yLI4drN8ZYt8-rKQfosHAuD-flE" />

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

.banner-form-heading{
  font-size: 1.3rem;
}

.faq-accordion .card-header button h2{
  font-size: .85rem;
}

/* END Sticky Social Bar */

@media only screen and (max-width: 768px) {
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
    
    @include('includes.header')

    @yield('content')

  </div>
  <!-- /.content-wrapper -->
  
  @include('includes.footer')

  <div class="progress-wrap d-none">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
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