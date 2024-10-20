<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;


class AdminEnquiryController extends Controller
{

    public function index()
    {
        $data = [];

        $recordList = Enquiry::orderBy('id', 'DESC')->get();

        $data['recordList'] = $recordList;

        return view('admin.enquiry.index', $data);
    } 

}
