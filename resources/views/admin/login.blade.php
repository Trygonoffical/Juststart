@extends('layouts.admin')

@section('content')

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-6 col-lg-6 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Admin Panel</h1>
                            </div>
                            <div>
                                <span class="field-error" id="pageFormError">
                                @error('credentialsError')
                                    {{ $message }}
                                @enderror 
                                </span>
                            </div>
                            <form class="user" name="loginForm" id="loginForm" method="POST" action="{{route('admin.loginSubmit')}}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"
                                        name="email" aria-describedby="emailHelp"
                                        placeholder="Email">
                                    <span class="text-danger error field-error" data-error="name" >@error('email') {{ $message }} @enderror</span>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                        name="password" placeholder="Password">
                                    <span class="text-danger error field-error" data-error="name" >@error('password') {{ $message }} @enderror</span>
                                </div>
                                <button type="submit" class="btn btn-primary text-center">
                                    {{ __('Login') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>

<script>
$(function() {    
    $(document).on('click', '#submitButtonxxxx', function(){
        
        removeFormErrorText();
        let formName = 'loginForm';
        let formError = false;
        let errorObj = $('#pageFormError');
        let emailObj = document.forms[formName]['email'];
        let passwordObj = document.forms[formName]['password'];

        displayFormErrorText(errorObj, '');

        if( emailObj.value == ''){
            formError = true;
            displayFormErrorText(emailObj, 'Email is required');
        } else if( !validateEmail(emailObj.value) ){
            formError = true;
            displayFormErrorText(emailObj, 'Email is invalid');
        }
        if( passwordObj.value == ''){
            formError = true;
            displayFormErrorText(passwordObj, 'Password is required');
        }

        if( formError == false){
            showLoader();
            let request_url = document.forms[formName]['action'];
            let request_method = document.forms[formName]['method'];
            let formData = new FormData(document.forms[formName]);
            let redirect_url = '';

            $.ajax({
                url: request_url,
                data: formData,
                type: request_method,
                processData: false,
                contentType: false,
                success: function(response){
                    hideLoader();
                    let res =  JSON.parse(response);

                    if(res.status=='success'){
                        window.location.href = res.data;
                    } else {
                        displayErrorText(errorObj, res.message);
                    }

                },
                error: function (jqXHR, exception) {
                    hideLoader();
                    console.log('Try again later.');
                },
            }); // end $.ajax
        }

        return false;
    });
});
</script>

@endsection
    