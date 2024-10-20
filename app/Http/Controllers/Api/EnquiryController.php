<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryEmail;


class EnquiryController extends Controller
{
    protected $errorStatus = 'error';
    protected $successStatus = 'success';


    public function getPendingList(Request $request)
    {
        $responseStatus = $this->successStatus;
        $responseMessage = 'pending';

        $recordList = Enquiry::where(['mail_status' => 0])->orderBy('id', 'ASC')->limit(1)->get();

        echo json_encode(['status' => $responseStatus, 'message' => $responseMessage, 'data' => $recordList ]);
        die();
    }


    public function sendPendingEmail(Request $request)
    {
        $recordList = [];
        $responseStatus = $this->successStatus;
        $responseMessage = 'pending';
        $url = 'enquiry/pending';
        
        // Api request to get pending email
        $apiResponse = $this->curlGetRequest($url);

        if($apiResponse){
            $recordList = json_decode($apiResponse, true);

            if( array_key_exists('status', $recordList) 
                && ($recordList['status'] == 'success')
                && array_key_exists('data', $recordList) 
            ){
                $records = $recordList['data'];

                if($records){
                    foreach($records as $row){
                        $formData = array(
                            'referrer' => $row['referrer'],
                            'ip_address' => $row['ip_address'],
                            'section' => $row['section'],
                            'first_name' => $row['first_name'],
                            'email' => $row['email'],
                            'phone' => $row['phone'],
                            'message' => $row['message'],
                            'created_at' => $row['created_at'],
                        );

                        // $abc = Mail::to('rajkr.web@gmail.com')->send(new EnquiryEmail($formData) );
                        $abc = Mail::to('juststartquery@gmail.com')->send(new EnquiryEmail($formData) );

                        // Api request to udpate status
                        $url = 'enquiry/update-mail-status';
                        $this->curlPostRequest($url, ['id' => $row['id']]);

                        // START SMS
                        include_once(public_path('sdk/doubletick/vendor/autoload.php'));
                        $smsClient = new \GuzzleHttp\Client();

                        $apiKey = 'key_DAapCGeIPk';
                        $apiUrl = 'https://public.doubletick.io/whatsapp/message/template';
                        $templateName = "website_welcome_message_v3";
                        $fromNumber = "+919315513354";
                        $toNumber = "+91".$row['phone'];
                        $contactName = $row['first_name'];
                        $serviceName = 'service';

                        $smsBody = json_encode([
                            'messages' => [
                              [
                                'content' => [
                                    'language' => 'en',
                                    'templateName' => $templateName,
                                    'templateData' => array(
                                        'body' => array(
                                            'placeholders' => array($contactName, $serviceName)
                                        )
                                    )
                                ],
                                'from' => $fromNumber,
                                'to' => $toNumber,
                              ],
                            ],
                          ]);

                        $smsResponse = $smsClient->request('POST', $apiUrl, [
                            'body' => $smsBody,
                            'headers' => [
                              'Authorization' => $apiKey,
                              'accept' => 'application/json',
                              'content-type' => 'application/json',
                            ],
                          ]);

                        $smsResponse->getBody();
                        // END SMS


                    }   // endforeach
                }   // endif
            }
        }

        echo json_encode(['status' => $responseStatus, 'message' => $responseMessage, 'data' => $recordList ]);
        die();
    }

    public function updateMailStatus(Request $request){
        $responseStatus = $this->errorStatus;
        $responseMessage = 'success';
        $responseData = '';

        $validator = Validator::make($request->all(), [
            'id' => 'required',
        ]);

        if($validator->fails()){
            $errors = collect($validator->errors());
            $error  = $errors->unique()->first();
            $responseMessage = $error[0];
           
        } else {
            $params = $request->all();
            $id = $params['id'];

            Enquiry::where(['id' => $id])->update(['mail_status' => 1]);

            $responseStatus = $this->successStatus;
        }

        echo json_encode(['status' => $responseStatus, 'message' => $responseMessage, 'data' => $responseData ]);
        die();
    }


    public function curlGetRequest($link, ){
        $api_url = 'https://juststart.co.in/api/';     
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $api_url.$link,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "postman-token: 3d2ec38e-c379-d3ce-4655-3649495e916b"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return false;
        } else {
            return $response;
        }
    }


    public function curlPostRequest($link, $params){   
        $api_url = 'https://juststart.co.in/api/';     
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $api_url.$link,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $params,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                // "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW",
                // "postman-token: d34071c9-60d1-3b83-8cd9-8cc02f7592d0"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return $err;
        } else {
            return $response;
        }
    }

}
