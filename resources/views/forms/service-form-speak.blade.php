<h3 class="mb-4 font-bolder text-center">Get Expert Advice!</h3>
<form class="enquiry-form" name="service-speak-form" method="post" action="{{route('service-form-submit')}}" >
    @csrf
    <input type="hidden" name="action" value="service-speak-form" />
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
        <div class="col-md-6 mb-3">
            <input type="button" class="btn btn-sm btn-primary rounded-pill enquiry-form-submit-button" name="submit" value="Submit">
        </div>
    </div>
</form>