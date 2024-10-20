<?php

namespace App\Http\Controllers;
// namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryEmail;


class EnquiryController extends Controller
{
    protected $errorStatus = 'error';
    protected $successStatus = 'success';


    public function formSubmit(Request $request)
    {
        $responseStatus = $this->errorStatus;
        $responseMessage = 'Invalid request';
        $responseData = route('thankYou');

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required' ,
        ]);

        if($validator->fails()){
            $errors = collect($validator->errors());
            $error  = $errors->unique()->first();
            $responseMessage = $error[0];
           
        } else {

            $params = $request->all();
            $referrer = $request->headers->get('referer');
            $ip_address = $request->ip();

            $section = $params['action'];
            $name = $params['name'];
            $email = $params['email'];
            $phone = $params['phone'];
            $message = $params['message'];

            $formData = array(
                'referrer' => $referrer,
                'ip_address' => $ip_address,
                'section' => $section,
                'first_name' => $name,
                'email' => $email,
                'phone' => $phone,
                'message' => $message,
            );
            
            $EnquiryObj = new Enquiry();
            $EnquiryObj->fill($formData);
            $EnquiryObj->save();

            // $emailData = [];
            // $emailData['name'] = 'Rajeeb';
            // Mail::to('rajkr.web@gmail.com')->queue(new RegisterEmail($emailData) );
            // $abc = Mail::to('rajkr.web@gmail.com')->send(new EnquiryEmail($formData) );
            // var_dump($abc);

            $responseStatus = $this->successStatus;
            $responseMessage = 'Thank you for contacting us we will be in touch shortly';
        }

        
        echo json_encode(['status' => $responseStatus, 'message' => $responseMessage, 'data' => $responseData ]);
        die();
    }


    public function testEmail(Request $request)
    {
        $referrer = 'Referer';
        $ip_address = '123';

        $section = 'test';
        $name = 'Rajeeb';
        $email = 'ipromotebrand@gmail.com';
        $phone = '8802072761';
        $message = 'Dummy text message';

        $formData = array(
            'referrer' => $referrer,
            'ip_address' => $ip_address,
            'section' => $section,
            'first_name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
        );

        
        $abc = Mail::to('rajkr.web@gmail.com')->send(new EnquiryEmail($formData) );
        // var_dump($abc);

        dd($abc);

    
        die(' DIE ');
    }

}
