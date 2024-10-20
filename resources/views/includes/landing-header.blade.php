<style>
header .landing-page-logo, nav .landing-page-logo{
    height: 25px;
    vertical-align: sub;
    margin-right:10px;
}

header .landing-page-nav-row, nav .landing-page-nav-row{
    margin-bottom:5px;
}

@media only screen and (max-width: 768px) {
    header .landing-page-nav-row, nav .landing-page-nav-row{
        margin-bottom:0px;
    }
    header .landing-page-logo, nav .landing-page-logo{
        vertical-align: top;
    }
    nav .landing-page-logo{
        padding-top:5px;
        padding-bottom:5px;
        width:120px;
        height:auto;
    }
    nav h2.d-inline{
        font-size: 18px !important;
        display:block !important;
    }
}
</style>

<header class="wrapper bg-light">
    <nav class="navbar navbar-expand-lg transparent navbar-light shadow">
        <div class="container flex-lg-row flex-nowrap align-items-center ">
            <div class="row w-100 landing-page-nav-row">
                <div class="col-lg-12 text-center">
                    <a href="{{url('')}}">
                        <img class="align-items-center landing-page-logo" src="{{asset('')}}assets/img/logo.webp" srcset="{{asset('')}}assets/img/logo.webp" alt="logo" />
                    </a>
                    <h2 class="d-inline ">Register Your Company</h2>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->

</header>
<!-- /header -->