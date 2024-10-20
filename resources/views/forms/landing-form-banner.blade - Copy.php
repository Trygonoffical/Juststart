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
<h4 class="mb-4 font-bolder text-center form-heading">Register Your Company Today!</h4>
<form class="enquiry-form" name="service-banner-form" method="post" action="{{route('service-form-submit')}}" >
    @csrf
    <input type="hidden" name="action" value="landing-banner-form" />
    <div class="row">
        <span class="field-error form-success-msg" ></span>
        <span class="field-error form-error-msg" ></span>
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <input type="text" name="name" id="" class="form-control" placeholder="Name" />
            <span class="form-error"></span>
        </div>
        <div class="col-md-6 mb-3">
            <input type="text" name="email" id="" class="form-control" placeholder="Email" />
            <span class="form-error"></span>
        </div>
        <div class="col-md-6 mb-3">
            <input type="text" name="phone" id="" class="form-control input-phone-validation" placeholder="Phone Number" />
            <span class="form-error"></span>
        </div>
        <div class="col-md-6 mb-3">
            <input type="text" name="message" id="" class="form-control" placeholder="How Can We Help?" />
            <span class="form-error"></span>
        </div>
        <div class="col-md-12 mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                <label class="form-check-label" for="flexCheckDefault">
                I agree to receive the brochure on <img src="{{asset('')}}icons/whatsapp.webp" alt="whatsapp" style="width: 20px;"> Whatsapp
                </label>
            </div>
        </div>
        <div class="col-lg-12 col-12 mb-3">
            <input type="button" class="btn btn-sm btn-primary rounded-pill enquiry-form-submit-button w-100" name="submit" value="Submit">
        </div>
    </div>
</form>

@include('includes.landing-rating')