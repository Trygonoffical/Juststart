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
        <div class="col-sm-12 col-12 mb-3">
            <input type="button" class="btn btn-sm btn-primary rounded-pill enquiry-form-submit-button w-100 " name="submit" value="Get Free Consultation">
        </div>
    </div>
</form>

