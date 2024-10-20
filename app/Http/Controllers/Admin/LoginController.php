<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


use App\Models\User;


class LoginController extends Controller
{
    protected $errorStatus = 'error';
    protected $successStatus = 'success';

    public function login()
    {
        if (auth()->check()) {
            $redirectPage = route('admin.dashboard');
            return Redirect($redirectPage);
        }

        return view('admin/login');
    }

    public function loginSubmit(Request $request){
        $responseStatus = $this->errorStatus;
        $responseMessage = '';
        $login_url = route('admin.login');
        $redirect_url = route('admin.dashboard');

        $validator = Validator::make($request->all(), [
                    'email' => 'required|email',
                    'password' => 'required',
                ],
                [
                    'email.required' => 'Email is required',
                    'password.required' => 'Password is required'
                ]
            );

        if ($validator->fails()) {
            return Redirect($login_url)
                ->withErrors($validator)
                ->withInput();
        }

        $input = $request->all();

        $where = array(
            'email' => $input['email'],
            'password' => $input['password'],
            // 'status' => $account_status
        );

        if(Auth::attempt($where)){
            return Redirect($redirect_url);
        } else {
            $validator->errors()->add('credentialsError', 'Incorrect login details');
                return Redirect($login_url)
                    ->withErrors($validator)
                    ->withInput();
        }

    }  


    public function logout(Request $request){
        // $this->guard()->logout();
        // $request->session()->invalidate();

        // $redirectPage = route('home');
        // return Redirect($redirectPage);
        if (Auth::check()) {
            Auth::logout();
            $request->session()->invalidate();
        }
    
        $redirectPage = route('home');
        return redirect($redirectPage);
    }


    public function loginSubmitOld(Request $request){
        $responseStatus = $this->errorStatus;
        $responseMessage = '';

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required' ,
        ]);

        if($validator->fails()){
            $errors = collect($validator->errors());
            $error  = $errors->unique()->first();
            $responseMessage = $error[0];
           
            echo json_encode(['status' => $responseStatus, 'message' => $responseMessage]);
            die();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // session(['is_logged_in'=>1, 'id' =>  $user->id, 'name' =>  $user->name]);

            $responseStatus = $this->successStatus;
            $responseMessage = 'success';
            $responseData = route('admin.dashboard');

            echo json_encode(['status' =>$responseStatus, 'message' => $responseMessage, 'data' => $responseData]);
            die();

        } else {

            $responseMessage = 'Incorrect login details.';

            echo json_encode(['status' => $responseStatus, 'message' => $responseMessage]);
            die();
        }


    }   

}
