<style>
@media (min-width: 992px){
    header nav .dropdown-mega .megamenu-custom-width {
        max-width: 700px !important; /* Adjust the width as needed */
    }
}

</style>

<header class="wrapper bg-light">
    <nav class="navbar navbar-expand-lg transparent navbar-light pt-0 shadow">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand me-3">
                <a href="{{url('')}}">
                    <img src="{{asset('')}}assets/img/logo.webp" srcset="{{asset('')}}assets/img/logo.webp" alt="logo" />
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <h3 class="text-white fs-30 mb-0">JustStart</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('')}}">Home</a>
                        </li>
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown">Start</a>
                            <ul class="dropdown-menu mega-menu megamenu-custom-width">
                                <li class="mega-menu-content">
                                <div class="row gx-3 gx-lg-3">
                                    <div class="col-lg-6">
                                        <h6 class="dropdown-header">Registrations</h6>
                                        <ul class="list-unstyled pb-lg-1">
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/private-limited-company-registration')}}">
                                                    Private Limited Company
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/llp-registration-india')}}">
                                                    Limited Liability Partnership
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/one-person-company-opc-registration')}}">
                                                    One Person Company 
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/section-8-company-registration')}}">
                                                    Section 8 Company
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/startup-india-registration')}}">
                                                    Startup India Registration
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/public-limited-company-registration')}}">
                                                    Public Limited Company 
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/gst-registration')}}">
                                                    GST Registration
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/virtual-office-address')}}">
                                                    Virtual Office Address
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/sole-proprietorship-registration')}}">
                                                    Sole Proprietorship Registration
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/producer-company-registration')}}">
                                                    Producer Company Registration
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/partnership-firm-registration')}}">
                                                    Partnership Firm Registration
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <h6 class="dropdown-header">License</h6>
                                        <ul class="list-unstyled pb-lg-1">
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/fssai-registration')}}">
                                                    Fssai Registration
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-mega">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown">Run & Grow</a>
                            <ul class="dropdown-menu mega-menu">
                                <li class="mega-menu-content">
                                <div class="row gx-0 gx-lg-3">
                                    <div class="col-lg-3">
                                        <h6 class="dropdown-header">Protect</h6>
                                        <ul class="list-unstyled pb-lg-1">
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/trademark-registration-india')}}">
                                                    Trademark Registration
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/trademark-objection')}}">
                                                    Trademark Objection Reply
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/trademark-renewal')}}">
                                                Trademark Renewal
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/trademark-opposition')}}">
                                                Trademark Opposition
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--/column -->
                                    <div class="col-lg-6">
                                        <h6 class="dropdown-header">Manage</h6>
                                        <ul class="list-unstyled cc-2">
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/closure-of-private-limited-company')}}">
                                                Close a Private Limited Company 
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/closing-llp')}}">
                                                Close a Limited Liability Partnership 
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/closure-of-opc')}}">
                                                Close a One Person Company 
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/company-annual-filing')}}">
                                                ROC Filling Pvt Ltd 
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/llp-annual-filing')}}">
                                                ROC Filing LLP 
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/opc-annual-filing')}}">
                                                ROC Filing OPC  
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/resignation-of-director')}}">
                                                Remove Director 
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/share-transfer')}}">
                                                Share Transfer 
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/registered-office-change')}}">
                                                Registered Office Change 
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/increase-authorized-share-capital')}}">
                                                Increase in Authorized Capital 
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/appointment-of-director')}}">
                                                Add Directors 
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--/column -->
                                    <div class="col-lg-3">
                                        <h6 class="dropdown-header">Accounting & Taxation</h6>
                                        <ul class="list-unstyled pb-lg-1">
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/accounting-bookkeeping-services')}}">
                                                    Accounting & Bookkeeping
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="{{url('service/gst-return-filing')}}">
                                                    GST Return Filing
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--/column -->
                                </div>
                                <!--/.row -->
                                </li>
                                <!--/.mega-menu-content-->
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://juststartwebtech.com">Sales & Marketing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown">Support</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" href="{{url('blog')}}/">Blog</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="{{route('aboutUs')}}">About Us</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="{{route('contactUs')}}">Contact Us</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.offcanvas-body -->
            </div>
            <!-- /.navbar-collapse -->
            <div class="navbar-other w-100 d-flex ms-auto">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item d-none d-md-block">
                        <a href="#" class="pt-1 pb-1">
                            <img src="{{asset('')}}icons/whatsapp.webp" alt="whatsapp" style="width: 20px;"/>
                        </a>
                        <a href="#" class="pt-1 pb-1">
                            <img src="{{asset('')}}icons/call.png" style="width: 18px;" alt="Call" />
                        </a>
                        <a href="tel:+91 9315513354" class="">
                            <span class="text-dark fs-14">9315513354</span>
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block">
                        <a href="{{ route('contactUs') }}" class="btn btn-sm btn-black rounded-pill pt-1 pb-1">
                            Start Your Business Today!
                            <i class="uil uil-angle-right"></i>
                        </a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->

</header>
<!-- /header -->