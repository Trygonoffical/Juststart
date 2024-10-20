<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="JustStart">

  <meta name="robots" content="noindex, nofollow">
  <title>{{$meta_title}} - JustStart</title>
  <meta name="keywords" content="{{$meta_keywords}}">
  <meta name="description" content="{{$meta_description}}">


  <link rel="shortcut icon" href="{{asset('')}}assets/img/favicon.png">
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
  background-image:url({{asset('')}}images/background/landing_page_bg.jpg)
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
  margin-bottom: 60px;
}

section.topbanner .after-topbanner-heading-prices .col-lg-4:not(:last-child){
      border-right: 1px solid #FFF;
}

section.topbanner .topbanner-features li span i{
  color: #0bcd16!important;
}
section.topbanner .topbanner-features li{
  margin-bottom: 20px!important;
}

@media only screen and (min-width: 1024px) {
  section.topbanner .first-col{
    padding-top:60px;
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

  section.topbanner .after-topbanner-heading-prices h4:not(:first-child){
    font-size: 16px;
  }
}

</style>

</head>

<body>
  <div class="content-wrapper">
    
    @include('includes.landing-header')

    @yield('content')

  </div>
  <!-- /.content-wrapper -->
  
  @include('includes.landing-footer')

  <script src="{{asset('')}}assets/js/plugins.js"></script>
  <script src="{{asset('')}}assets/js/theme.js"></script>
  <script src="{{asset('')}}assets/js/frontend.js"></script>

  

</body>

</html>