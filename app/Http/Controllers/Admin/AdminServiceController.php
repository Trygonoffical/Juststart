<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;


class AdminServiceController extends Controller
{

    public function index()
    {
        $data = [];

        $recordList = Service::orderBy('name', 'ASC')->where('status','publish')->get();

        $data['recordList'] = $recordList;

        return view('admin.service.index', $data);
    } 

    public function seo($id)
    {
        $data = [];
        
        $record = Service::findOrFail($id);

        $data['record'] = $record;

        return view('admin.service.seo', $data);
    } 


    public function seoUpdate(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'meta_title' => 'required'
        ]);

        // Find the service by ID
        $service = Service::findOrFail($id);

        // Update the service with the validated data
        // $service->update($request->all());

        $formData = [];
        $formData['name'] = $request->name;
        $formData['meta_title'] = $request->meta_title;
        $formData['meta_keyword'] = $request->meta_keyword;
        $formData['meta_description'] = $request->meta_description;

        $service->update($formData);

        // Redirect to a page, for example, the list of services
        return redirect()->route('admin.service')->with('success', 'Seo updated successfully');
    }

}
