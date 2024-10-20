<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Metatag;
use App\Models\HomePage;
use App\Models\HomeSection;
use App\Models\Usp;
use App\Models\CounterArea;
use App\Models\About;
use App\Models\Contactpage;
use App\Models\Page;
use App\Models\Client;
use App\Models\Service;

class DashboardController extends Controller
{

    // Upload ckeditor uploads 
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            // $request->file('upload')->move(public_path('images'), $fileName);
            $request->file('upload')->storeAs('public/uploads', $fileName);
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            // $url = asset('images/'.$fileName); 
            $url = asset('storage/uploads/'.$fileName) ;
            
            $msg = 'Image uploaded successfully'; 
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }

    public function index()
    {
        return view('admin/dashboard');
    } 

    public function metatags()  {
        $metatags = Metatag::all();
        return view('admin.metatags.index', ['metatags'=> $metatags]);
    }

    public function pages() {
        $homepage = HomePage::find(1);
        $aboutpage = About::find(1);
        $contactpage = Contactpage::find(1);
        $Pages = Page::find(1);

        return view('admin.pages.index', ['Pages'=> $Pages , 'contactpage' => $contactpage , 'aboutpage'=>$aboutpage , 'homepage'=> $homepage]);
    }
    public function createPages()  {
        return view('admin.pages.createhome');
    }
    // store homepage data 
    public function storeHomepage(Request $request)  {
        $validated = $request->validate([
            // Hero Sec
            'Herotitle' => 'required',
            'ContentHero' => 'required',
            'btn_one' => 'required',
            'btn_two' => 'required',
            //client Area
            'client_title' => 'required',
            'client_content' => 'required',
            //Service Title
            'Serv_title' => 'required',
            'Serv_sub' => 'required',
            // Testimonial Title
            'test_title' => 'required',
            'test_content' => 'required',
            //WhatWeDo
            'WhatDo_title' => 'required',
            // point One
            'WDO_bOne_icon' => 'required',
            'WDO_bOne_icon_alttext' => 'required',
            'WDo_bone_title' => 'required',
            'WDo_bone_content' => 'required',
            // Point Two
            'WDo_bTwo_icon' => 'required',
            'WDo_bTwo_icon_alttext' => 'required',
            'WDo_bTwo_title' => 'required',
            'WDo_bTwo_content' => 'required',
            // Point Three
            'WDo_bThree_Icon' => 'required',
            'WDo_bThree_Icon_alttext' => 'required',
            'WDo_bThree_title' => 'required',
            'WDo_bThree_content' => 'required',

            // Point Four
            'Wdo_bFour_icon' => 'required',
            'Wdo_bFour_icon_alttext' => 'required',
            'WDo_bFour_title' => 'required',
            'WDo_bFour_content' => 'required',

            // Truest Sec
            'trusted_title' => 'required',
            'trusted_content' => 'required',
            'pone' => 'required',
            'ptwo' => 'required',
            'pthree' => 'required',
            'pfour' => 'required',
            'btn' => 'required',

            // USP Sec Point 1
            'USP_title' => 'required',
            'USP_content' => 'required',
            'USP_btn' => 'required',
            'USP_img' => 'required',
            'USP_bg_color' => 'required',
            // USP Sec Point 2
            'USP_title2' => 'required',
            'USP_content2' => 'required',
            'btn2' => 'required',
            'USP_img' => 'required',
            'USP_img2' => 'required',
            'USP_bg_color2' => 'required',
        ]);


        // image upload 

            // USP2
            if($request->hasFile('USP_img2'))
                {
                    //Get full name with extenstion
                    $filenameWithExt = $request->file('USP_img2')->getClientOriginalName();
                    // Get only name
                    $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                    // GET ONLY EXTENTION
                    $Extenstion = $request->file('USP_img2')->getClientOriginalExtension();
                    // final file name
                    $fileNameToStoreUSP2 = $filename. '_'.time().'.'.$Extenstion ;
                    $path = $request->file('USP_img2')->storeAs('public/uploads', $fileNameToStoreUSP2);

                }
                else{
                    $fileNameToStoreUSP2 = 'NoImge.jpg';
                }

            // USP1
            
            if($request->hasFile('USP_img'))
                {
                    //Get full name with extenstion
                    $filenameWithExt = $request->file('USP_img')->getClientOriginalName();
                    // Get only name
                    $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                    // GET ONLY EXTENTION
                    $Extenstion = $request->file('USP_img')->getClientOriginalExtension();
                    // final file name
                    $fileNameToStoreUSP = $filename. '_'.time().'.'.$Extenstion ;
                    $path = $request->file('USP_img')->storeAs('public/uploads', $fileNameToStoreUSP);

                }
                else{
                    $fileNameToStoreUSP = 'NoImge.jpg';
                }

            // trusted_img
            if($request->hasFile('trusted_img'))
                {
                    //Get full name with extenstion
                    $filenameWithExt = $request->file('trusted_img')->getClientOriginalName();
                    // Get only name
                    $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                    // GET ONLY EXTENTION
                    $Extenstion = $request->file('trusted_img')->getClientOriginalExtension();
                    // final file name
                    $fileNameToStoreTrusted = $filename. '_'.time().'.'.$Extenstion ;
                    $path = $request->file('trusted_img')->storeAs('public/uploads', $fileNameToStoreTrusted);

                }

            // WWD p1
            if($request->hasFile('WDO_bOne_icon'))
               {
                   //Get full name with extenstion
                   $filenameWithExt = $request->file('WDO_bOne_icon')->getClientOriginalName();
                   // Get only name
                   $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                   // GET ONLY EXTENTION
                   $Extenstion = $request->file('WDO_bOne_icon')->getClientOriginalExtension();
                   // final file name
                   $fileNameToStoreWWDO = $filename. '_'.time().'.'.$Extenstion ;
                   $path = $request->file('WDO_bOne_icon')->storeAs('public/uploads', $fileNameToStoreWWDO);

               }
               else{
                   $fileNameToStoreWWDO = 'NoImge.jpg';
               }
            // WWD p2
            if($request->hasFile('WDo_bTwo_icon'))
               {
                   //Get full name with extenstion
                   $filenameWithExt = $request->file('WDo_bTwo_icon')->getClientOriginalName();
                   // Get only name
                   $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                   // GET ONLY EXTENTION
                   $Extenstion = $request->file('WDo_bTwo_icon')->getClientOriginalExtension();
                   // final file name
                   $fileNameToStoreWWDT = $filename. '_'.time().'.'.$Extenstion ;
                   $path = $request->file('WDo_bTwo_icon')->storeAs('public/uploads', $fileNameToStoreWWDT);

               }
               else{
                   $fileNameToStoreWWDT = 'NoImge.jpg';
               }
            // WWD p3
            if($request->hasFile('WDo_bThree_Icon'))
               {
                   //Get full name with extenstion
                   $filenameWithExt = $request->file('WDo_bThree_Icon')->getClientOriginalName();
                   // Get only name
                   $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                   // GET ONLY EXTENTION
                   $Extenstion = $request->file('WDo_bThree_Icon')->getClientOriginalExtension();
                   // final file name
                   $fileNameToStoreWWDTH = $filename. '_'.time().'.'.$Extenstion ;
                   $path = $request->file('WDo_bThree_Icon')->storeAs('public/uploads', $fileNameToStoreWWDTH);

               }
               else{
                   $fileNameToStoreWWDTH = 'NoImge.jpg';
               }
            // WWD p4
            if($request->hasFile('Wdo_bFour_icon'))
               {
                   //Get full name with extenstion
                   $filenameWithExt = $request->file('Wdo_bFour_icon')->getClientOriginalName();
                   // Get only name
                   $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                   // GET ONLY EXTENTION
                   $Extenstion = $request->file('Wdo_bFour_icon')->getClientOriginalExtension();
                   // final file name
                   $fileNameToStoreWWDF = $filename. '_'.time().'.'.$Extenstion ;
                   $path = $request->file('Wdo_bFour_icon')->storeAs('public/uploads', $fileNameToStoreWWDF);

               }
               else{
                   $fileNameToStoreWWDF = 'NoImge.jpg';
               }

            // Hero Section
            if($request->hasFile('Rimg'))
               {
                   //Get full name with extenstion
                   $filenameWithExt = $request->file('Rimg')->getClientOriginalName();
                   // Get only name
                   $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                   // GET ONLY EXTENTION
                   $Extenstion = $request->file('Rimg')->getClientOriginalExtension();
                   // final file name
                   $fileNameToStoreRImg = $filename. '_'.time().'.'.$Extenstion ;
                   $path = $request->file('Rimg')->storeAs('public/uploads', $fileNameToStoreRImg);

               }
               else{
                   $fileNameToStoreRImg = 'NoImge.jpg';
               }

            if($request->hasFile('G_img'))
               {
                   //Get full name with extenstion
                   $filenameWithExt = $request->file('G_img')->getClientOriginalName();
                   // Get only name
                   $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                   // GET ONLY EXTENTION
                   $Extenstion = $request->file('G_img')->getClientOriginalExtension();
                   // final file name
                   $fileNameToStoreG_img = $filename. '_'.time().'.'.$Extenstion ;
                   $path = $request->file('G_img')->storeAs('public/uploads', $fileNameToStoreG_img);

               }
               else{
                   $fileNameToStoreG_img = 'NoImge.jpg';
               }
               
            if($request->hasFile('T_img'))
               {
                   //Get full name with extenstion
                   $filenameWithExt = $request->file('T_img')->getClientOriginalName();
                   // Get only name
                   $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                   // GET ONLY EXTENTION
                   $Extenstion = $request->file('T_img')->getClientOriginalExtension();
                   // final file name
                   $fileNameToStoreT_img = $filename. '_'.time().'.'.$Extenstion ;
                   $path = $request->file('T_img')->storeAs('public/uploads', $fileNameToStoreT_img);

               }
               else{
                   $fileNameToStoreT_img = 'NoImge.jpg';
               }
               // Abesh 

            
            
            
            
            
            $homepage = new HomePage();
            // client Area
            if( $request->input('client_sub')){
                $homepage->client_sub = $request->input('client_sub');
            }
            $homepage->client_title = $request->input('client_title');
            $homepage->client_content = $request->input('client_content');

            // Service  Panel Area 
            if( $request->input('Serv_sub')){
                $homepage->Serv_sub = $request->input('Serv_sub');
            }
            $homepage->Serv_title = $request->input('Serv_title');
            if($request->input('Serv_content')){
                $homepage->Serv_content = $request->input('Serv_content');
            }

            // Testimonial  Panel Area 
            if( $request->input('test_sub')){
                $homepage->test_sub = $request->input('test_sub');
            }
            $homepage->test_title = $request->input('test_title');
            $homepage->test_content = $request->input('test_content');

            // whatwedo  Panel Area
            if( $request->input('WhatDO_subtitle')){
                $homepage->WhatDO_subtitle = $request->input('WhatDO_subtitle');
            }
            $homepage->WhatDo_title = $request->input('WhatDo_title');
            // Point 1
            $homepage->WDO_bOne_icon = $fileNameToStoreWWDO;
            $homepage->WDO_bOne_icon_alttext = $request->input('WDO_bOne_icon_alttext');
            $homepage->WDo_bone_title = $request->input('WDo_bone_title');
            $homepage->WDo_bone_content = $request->input('WDo_bone_content');
            // point 2
            $homepage->WDo_bTwo_icon = $fileNameToStoreWWDT;
            $homepage->WDo_bTwo_icon_alttext = $request->input('WDo_bTwo_icon_alttext');
            $homepage->WDo_bTwo_title = $request->input('WDo_bTwo_title');
            $homepage->WDo_bTwo_content = $request->input('WDo_bTwo_content');
            // point 3
            $homepage->WDo_bThree_Icon = $fileNameToStoreWWDTH;
            $homepage->WDo_bThree_Icon_alttext = $request->input('WDo_bThree_Icon_alttext');
            $homepage->WDo_bThree_title = $request->input('WDo_bThree_title');
            $homepage->WDo_bThree_content = $request->input('WDo_bThree_content');
             // point 4
            $homepage->Wdo_bFour_icon = $fileNameToStoreWWDF;
            $homepage->Wdo_bFour_icon_alttext = $request->input('Wdo_bFour_icon_alttext');
            $homepage->WDo_bFour_title = $request->input('WDo_bFour_title');
            $homepage->WDo_bFour_content = $request->input('WDo_bFour_content');


            $homepage->save();

             // Tursted Area
             $coutArea = new  CounterArea();
             if($request->input('trusted_sub_title')){
                 $coutArea->sub_title = $request->input('trusted_sub_title');
             }
             $coutArea->title = $request->input('trusted_title');
             $coutArea->content = $request->input('trusted_content');
             $coutArea->pone = $request->input('pone');
             $coutArea->ptwo = $request->input('ptwo');
             $coutArea->pthree = $request->input('pthree');
             $coutArea->pfour = $request->input('pfour');
             $coutArea->btn_Value = $request->input('btn');
             if($request->hasFile('trusted_img')){
                 $coutArea->bg_color = $fileNameToStoreTrusted;
             }
             $coutArea->btn_Name = $request->input('trusted_img_alt');
             $coutArea->home_id = $homepage->id;
             $coutArea->save();
             // USP 1
             $uspsval  = new Usp();
             if($request->input('USP_sub_title')){
                 $uspsval->sub_title = $request->input('USP_sub_title');
             }
             $uspsval->title = $request->input('USP_title');
             $uspsval->content = $request->input('USP_content');
             $uspsval->btn = $request->input('USP_btn');
             $uspsval->img = $fileNameToStoreUSP;
             $uspsval->img_alt = $request->input('USP_img_alt');
             $uspsval->bg_color = $request->input('USP_bg_color');
             $uspsval->home_id = $homepage->id;
             $uspsval->save();

             // USP 2
             $uspsval2  = new Usp();
             
             if($request->input('USP_sub_title2')){
                 $uspsval2->sub_title = $request->input('USP_sub_title2');
             }
             $uspsval2->title  = $request->input('USP_title2');
             $uspsval2->content= $request->input('USP_content2');
             $uspsval2->btn = $request->input('btn2');
             $uspsval2->img = $fileNameToStoreUSP2;
             $uspsval2->img_alt = $request->input('USP_img_alt2');
             $uspsval2->bg_color = $request->input('USP_bg_color2');
             $uspsval2->home_id = $homepage->id;
             $uspsval2->save();

            // Hero Section
             $heroSec = new HomeSection();
             $heroSec->title = $request->input('Herotitle');
             $heroSec->des = $request->input('ContentHero');
             $heroSec->Rimg = $fileNameToStoreRImg;
             $heroSec->Rimg_alttext = $request->input('Rimg_alttext');
             $heroSec->G_img =  $fileNameToStoreG_img ;
             $heroSec->G_img_alttext = $request->input('G_img_alttext');
             $heroSec->T_img_alttext = $request->input('T_img_alttext');
             $heroSec->T_img = $fileNameToStoreT_img;
             $heroSec->btn_one = $request->input('btn_one');
             $heroSec->btn_two = $request->input('btn_two');
             $heroSec->home_id = $homepage->id;
             $heroSec->save();

            // meta data update 
            if($request->input('meta_title') != '' || $request->input('meta_keyword') !=$request->input('meta_description')  ){
                $metaData = new Metatag();
                $metaData->meta_title = $request->input('meta_title');
                $metaData->meta_keyword = $request->input('meta_keyword');
                $metaData->meta_description = $request->input('meta_description');
                $metaData->home_id = $homepage->id;
                $metaData->save();
            }
            



             return redirect()->route('admin.pages')->with('success' , 'Home Page Has Been Created Successfull'); 
    }

    // update Homepage data
    public function updateHomepage(Request $request , $id)  {
        $validated = $request->validate([
            // Hero Sec
            'Herotitle' => 'required',
            'ContentHero' => 'required',
            'btn_one' => 'required',
            'btn_two' => 'required',
            //client Area
            'client_title' => 'required',
            'client_content' => 'required',
            //Service Title
            'Serv_title' => 'required',
            'Serv_sub' => 'required',
            // Testimonial Title
            'test_title' => 'required',
            'test_content' => 'required',
            //WhatWeDo
            'WhatDo_title' => 'required',
            // point One
            
            'WDO_bOne_icon_alttext' => 'required',
            'WDo_bone_title' => 'required',
            'WDo_bone_content' => 'required',
            // Point Two
            
            'WDo_bTwo_icon_alttext' => 'required',
            'WDo_bTwo_title' => 'required',
            'WDo_bTwo_content' => 'required',
            // Point Three
            
            'WDo_bThree_Icon_alttext' => 'required',
            'WDo_bThree_title' => 'required',
            'WDo_bThree_content' => 'required',

            // Point Four
            
            'Wdo_bFour_icon_alttext' => 'required',
            'WDo_bFour_title' => 'required',
            'WDo_bFour_content' => 'required',

            // Truest Sec
            'trusted_title' => 'required',
            'trusted_content' => 'required',
            'pone' => 'required',
            'ptwo' => 'required',
            'pthree' => 'required',
            'pfour' => 'required',
            'btn' => 'required',

            // USP Sec Point 1
            'USP_title' => 'required',
            'USP_content' => 'required',
            'USP_btn' => 'required',
            
            'USP_bg_color' => 'required',
            // USP Sec Point 2
            'USP_title2' => 'required',
            'USP_content2' => 'required',
            'btn2' => 'required',
            'USP_bg_color2' => 'required',
        ]);
  
               // Abesh 

            $homepage =  HomePage::find($id);
            // client Area
            if( $request->input('client_sub')){
                $homepage->client_sub = $request->input('client_sub');
            }
            $homepage->client_title = $request->input('client_title');
            $homepage->client_content = $request->input('client_content');

            // Service  Panel Area 
            if( $request->input('Serv_sub')){
                $homepage->Serv_sub = $request->input('Serv_sub');
            }
            $homepage->Serv_title = $request->input('Serv_title');
            if($request->input('Serv_content')){
                $homepage->Serv_content = $request->input('Serv_content');
            }

            // Testimonial  Panel Area 
            if( $request->input('test_sub')){
                $homepage->test_sub = $request->input('test_sub');
            }
            $homepage->test_title = $request->input('test_title');
            $homepage->test_content = $request->input('test_content');

            // whatwedo  Panel Area
            if( $request->input('WhatDO_subtitle')){
                $homepage->WhatDO_subtitle = $request->input('WhatDO_subtitle');
            }
            $homepage->WhatDo_title = $request->input('WhatDo_title');
            // Point 1
            if($request->hasFile('WDO_bOne_icon'))
               {
                   //Get full name with extenstion
                   $filenameWithExt = $request->file('WDO_bOne_icon')->getClientOriginalName();
                   // Get only name
                   $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                   // GET ONLY EXTENTION
                   $Extenstion = $request->file('WDO_bOne_icon')->getClientOriginalExtension();
                   // final file name
                   $fileNameToStoreWWDO = $filename. '_'.time().'.'.$Extenstion ;
                   $path = $request->file('WDO_bOne_icon')->storeAs('public/uploads', $fileNameToStoreWWDO);
                   $homepage->WDO_bOne_icon = $fileNameToStoreWWDO;

               }
            $homepage->WDO_bOne_icon_alttext = $request->input('WDO_bOne_icon_alttext');
            $homepage->WDo_bone_title = $request->input('WDo_bone_title');
            $homepage->WDo_bone_content = $request->input('WDo_bone_content');
            // point 2
            if($request->hasFile('WDo_bTwo_icon'))
               {
                   //Get full name with extenstion
                   $filenameWithExt = $request->file('WDo_bTwo_icon')->getClientOriginalName();
                   // Get only name
                   $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                   // GET ONLY EXTENTION
                   $Extenstion = $request->file('WDo_bTwo_icon')->getClientOriginalExtension();
                   // final file name
                   $fileNameToStoreWWDT = $filename. '_'.time().'.'.$Extenstion ;
                   $path = $request->file('WDo_bTwo_icon')->storeAs('public/uploads', $fileNameToStoreWWDT);
                   $homepage->WDo_bTwo_icon = $fileNameToStoreWWDT;

               }
            $homepage->WDo_bTwo_icon_alttext = $request->input('WDo_bTwo_icon_alttext');
            $homepage->WDo_bTwo_title = $request->input('WDo_bTwo_title');
            $homepage->WDo_bTwo_content = $request->input('WDo_bTwo_content');
            // point 3
            if($request->hasFile('WDo_bThree_Icon'))
               {
                   //Get full name with extenstion
                   $filenameWithExt = $request->file('WDo_bThree_Icon')->getClientOriginalName();
                   // Get only name
                   $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                   // GET ONLY EXTENTION
                   $Extenstion = $request->file('WDo_bThree_Icon')->getClientOriginalExtension();
                   // final file name
                   $fileNameToStoreWWDTH = $filename. '_'.time().'.'.$Extenstion ;
                   $path = $request->file('WDo_bThree_Icon')->storeAs('public/uploads', $fileNameToStoreWWDTH);
                   $homepage->WDo_bThree_Icon = $fileNameToStoreWWDTH;

               }
            $homepage->WDo_bThree_Icon_alttext = $request->input('WDo_bThree_Icon_alttext');
            $homepage->WDo_bThree_title = $request->input('WDo_bThree_title');
            $homepage->WDo_bThree_content = $request->input('WDo_bThree_content');
             // point 4
            if($request->hasFile('Wdo_bFour_icon'))
            {
                //Get full name with extenstion
                $filenameWithExt = $request->file('Wdo_bFour_icon')->getClientOriginalName();
                // Get only name
                $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                // GET ONLY EXTENTION
                $Extenstion = $request->file('Wdo_bFour_icon')->getClientOriginalExtension();
                // final file name
                $fileNameToStoreWWDF = $filename. '_'.time().'.'.$Extenstion ;
                $path = $request->file('Wdo_bFour_icon')->storeAs('public/uploads', $fileNameToStoreWWDF);
                $homepage->Wdo_bFour_icon = $fileNameToStoreWWDF;

            }
            $homepage->Wdo_bFour_icon_alttext = $request->input('Wdo_bFour_icon_alttext');
            $homepage->WDo_bFour_title = $request->input('WDo_bFour_title');
            $homepage->WDo_bFour_content = $request->input('WDo_bFour_content');


            $homepage->save();

             // Tursted Area
             if($homepage->trustedarea){

                 $coutArea =   CounterArea::find($homepage->trustedarea->id);
             }else{
                $coutArea = new CounterArea();
             }
             if($request->input('trusted_sub_title')){
                 $coutArea->sub_title = $request->input('trusted_sub_title');
             }
             $coutArea->title = $request->input('trusted_title');
             $coutArea->content = $request->input('trusted_content');
             $coutArea->pone = $request->input('pone');
             $coutArea->ptwo = $request->input('ptwo');
             $coutArea->pthree = $request->input('pthree');
             $coutArea->pfour = $request->input('pfour');
             $coutArea->btn_Value = $request->input('btn');
           
             if($request->hasFile('trusted_img'))
                {
                    //Get full name with extenstion
                    $filenameWithExt = $request->file('trusted_img')->getClientOriginalName();
                    // Get only name
                    $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                    // GET ONLY EXTENTION
                    $Extenstion = $request->file('trusted_img')->getClientOriginalExtension();
                    // final file name
                    $fileNameToStoreTrusted = $filename. '_'.time().'.'.$Extenstion ;
                    $path = $request->file('trusted_img')->storeAs('public/uploads', $fileNameToStoreTrusted);
                    $coutArea->bg_color = $fileNameToStoreTrusted;

                }
             $coutArea->btn_Name = $request->input('trusted_img_alt');
             $coutArea->home_id = $homepage->id;
             $coutArea->save();
             // USP 1
             $uspsval  =  Usp::find($homepage->USPs[0]->id);
             if($request->input('USP_sub_title')){
                 $uspsval->sub_title = $request->input('USP_sub_title');
             }
             $uspsval->title = $request->input('USP_title');
             $uspsval->content = $request->input('USP_content');
             $uspsval->btn = $request->input('USP_btn');
             if($request->hasFile('USP_img'))
                {
                    //Get full name with extenstion
                    $filenameWithExt = $request->file('USP_img')->getClientOriginalName();
                    // Get only name
                    $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                    // GET ONLY EXTENTION
                    $Extenstion = $request->file('USP_img')->getClientOriginalExtension();
                    // final file name
                    $fileNameToStoreUSP = $filename. '_'.time().'.'.$Extenstion ;
                    $path = $request->file('USP_img')->storeAs('public/uploads', $fileNameToStoreUSP);
                    $uspsval->img = $fileNameToStoreUSP;

                }
                
             $uspsval->img_alt = $request->input('USP_img_alt');
             $uspsval->bg_color = $request->input('USP_bg_color');
             $uspsval->home_id = $homepage->id;
             $uspsval->save();

             // USP 2
             $uspsval2  = Usp::find($homepage->USPs[1]->id);
             
             if($request->input('USP_sub_title2')){
                 $uspsval2->sub_title = $request->input('USP_sub_title2');
             }
             $uspsval2->title  = $request->input('USP_title2');
             $uspsval2->content= $request->input('USP_content2');
             $uspsval2->btn = $request->input('btn2');
             if($request->hasFile('USP_img2'))
             {
                 //Get full name with extenstion
                 $filenameWithExt = $request->file('USP_img2')->getClientOriginalName();
                 // Get only name
                 $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                 // GET ONLY EXTENTION
                 $Extenstion = $request->file('USP_img2')->getClientOriginalExtension();
                 // final file name
                 $fileNameToStoreUSP2 = $filename. '_'.time().'.'.$Extenstion ;
                 $path = $request->file('USP_img2')->storeAs('public/uploads', $fileNameToStoreUSP2);
                 $uspsval2->img = $fileNameToStoreUSP2;

             }
             $uspsval2->img_alt = $request->input('USP_img_alt2');
             $uspsval2->bg_color = $request->input('USP_bg_color2');
             $uspsval2->home_id = $homepage->id;
             $uspsval2->save();

            // Hero Section
             $heroSec = HomeSection::find($homepage->herosection->id);
             $heroSec->title = $request->input('Herotitle');
             $heroSec->des = $request->input('ContentHero');
             if($request->hasFile('Rimg'))
               {
                   //Get full name with extenstion
                   $filenameWithExt = $request->file('Rimg')->getClientOriginalName();
                   // Get only name
                   $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                   // GET ONLY EXTENTION
                   $Extenstion = $request->file('Rimg')->getClientOriginalExtension();
                   // final file name
                   $fileNameToStoreRImg = $filename. '_'.time().'.'.$Extenstion ;
                   $path = $request->file('Rimg')->storeAs('public/uploads', $fileNameToStoreRImg);
                   $heroSec->Rimg = $fileNameToStoreRImg;

               }
             $heroSec->Rimg_alttext = $request->input('Rimg_alttext');

            if($request->hasFile('G_img'))
            {
                //Get full name with extenstion
                $filenameWithExt = $request->file('G_img')->getClientOriginalName();
                // Get only name
                $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                // GET ONLY EXTENTION
                $Extenstion = $request->file('G_img')->getClientOriginalExtension();
                // final file name
                $fileNameToStoreG_img = $filename. '_'.time().'.'.$Extenstion ;
                $path = $request->file('G_img')->storeAs('public/uploads', $fileNameToStoreG_img);
                $heroSec->G_img =  $fileNameToStoreG_img ;

            }
             $heroSec->G_img_alttext = $request->input('G_img_alttext');
             $heroSec->T_img_alttext = $request->input('T_img_alttext');
             if($request->hasFile('T_img'))
               {
                   //Get full name with extenstion
                   $filenameWithExt = $request->file('T_img')->getClientOriginalName();
                   // Get only name
                   $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                   // GET ONLY EXTENTION
                   $Extenstion = $request->file('T_img')->getClientOriginalExtension();
                   // final file name
                   $fileNameToStoreT_img = $filename. '_'.time().'.'.$Extenstion ;
                   $path = $request->file('T_img')->storeAs('public/uploads', $fileNameToStoreT_img);
                   $heroSec->T_img = $fileNameToStoreT_img;

               }
             $heroSec->btn_one = $request->input('btn_one');
             $heroSec->btn_two = $request->input('btn_two');
             $heroSec->home_id = $homepage->id;
             $heroSec->save();

            // meta data update 
            if($request->input('meta_title') != '' || $request->input('meta_keyword') !=$request->input('meta_description')  ){
                if($homepage->metatag){
                    $metaData =  Metatag::find($homepage->metatag->id);
                }else{
                    $metaData = new Metatag();
                }
                
                $metaData->meta_title = $request->input('meta_title');
                $metaData->meta_keyword = $request->input('meta_keyword');
                $metaData->meta_description = $request->input('meta_description');
                $metaData->home_id = $homepage->id;
                $metaData->save();
            }
            



             return redirect()->route('admin.pages')->with('success' , 'Home Page Has Been Updated Successfull'); 
    }
    
    public function editHome($id) {
        $home = HomePage::find($id);
        return view('admin.pages.edithome' , ['home' => $home]);
    }
    public function createAbout()  {
        return view('admin.pages.about.create');
    }
    public function createContact() {
        return view('admin.pages.contact.create');
    }
    public function createCustomPages() {
        return view('admin.pages.createpage');
        
    }

    // store About page data 
    public function storeAboutpage(Request $request)  {
        $validated = $request->validate([
            // Hero Sec
            'meta_title' => 'required',
            'meta_keyword' => 'required',
            'meta_description' => 'required',
            'title' => 'required',
            'content' => 'required',
            'topimg' => 'required',
            'centerImg' => 'required',
            'vision' => 'required',
            'visionbtn' => 'required',
            'mission' => 'required',
            'missionbtn' => 'required',
            'bgImg' => 'required',
            'youtlink' => 'required',
            'videocontent' => 'required',
            'Sl_name' => 'required',
            'Sdesignation' => 'required',
            'Slinkdin' => 'required',
            'Sdesignation' => 'required',
            'Fcontent' => 'required',
            'Flinkdin' => 'required',
            'Fdesignation' => 'required',
            'Fl_name' => 'required',
            
        ]);
        $abdata = new About();
        $abdata->title = $request->input('title');
        if($request->hasFile('topimg'))
        {
            //Get full name with extenstion
            $filenameWithExt = $request->file('topimg')->getClientOriginalName();
            // Get only name
            $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
            // GET ONLY EXTENTION
            $Extenstion = $request->file('topimg')->getClientOriginalExtension();
            // final file name
            $fileNameToStoretopimg = $filename. '_'.time().'.'.$Extenstion ;
            $path = $request->file('topimg')->storeAs('public/uploads', $fileNameToStoretopimg);
            $abdata->topimg = $fileNameToStoretopimg;

        }
        $abdata->centerImg = $request->input('centerImg');
        $abdata->content = $request->input('content');

        $abdata->vision = $request->input('vision');
        $abdata->visionbtn = $request->input('visionbtn');

        $abdata->mission = $request->input('mission');
        $abdata->missionbtn = $request->input('missionbtn');

        $abdata->Fl_name = $request->input('Fl_name');
        $abdata->Fdesignation = $request->input('Fdesignation');
        $abdata->Flinkdin = $request->input('Flinkdin');
        $abdata->Fcontent = $request->input('Fcontent');
        if($request->hasFile('FImg'))
        {
            //Get full name with extenstion
            $filenameWithExt = $request->file('FImg')->getClientOriginalName();
            // Get only name
            $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
            // GET ONLY EXTENTION
            $Extenstion = $request->file('FImg')->getClientOriginalExtension();
            // final file name
            $fileNameToStoreFImg = $filename. '_'.time().'.'.$Extenstion ;
            $path = $request->file('FImg')->storeAs('public/uploads', $fileNameToStoreFImg);
            $abdata->FImg = $fileNameToStoreFImg;

        }
        $abdata->FImg_alttext = $request->input('FImg_alttext');


        $abdata->Sl_name = $request->input('Sl_name');
        $abdata->Sdesignation = $request->input('Sdesignation');
        $abdata->Slinkdin = $request->input('Slinkdin');
        $abdata->Scontent = $request->input('Sdesignation');
        if($request->hasFile('SImg'))
        {
            //Get full name with extenstion
            $filenameWithExt = $request->file('SImg')->getClientOriginalName();
            // Get only name
            $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
            // GET ONLY EXTENTION
            $Extenstion = $request->file('SImg')->getClientOriginalExtension();
            // final file name
            $fileNameToStoreSImg = $filename. '_'.time().'.'.$Extenstion ;
            $path = $request->file('SImg')->storeAs('public/uploads', $fileNameToStoreSImg);
            $abdata->SImg = $fileNameToStoreSImg;

        }
        $abdata->SImg_alttext = $request->input('SImg_alttext');


        if($request->hasFile('bgImg'))
        {
            //Get full name with extenstion
            $filenameWithExt = $request->file('bgImg')->getClientOriginalName();
            // Get only name
            $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
            // GET ONLY EXTENTION
            $Extenstion = $request->file('bgImg')->getClientOriginalExtension();
            // final file name
            $fileNameToStorebgImg = $filename. '_'.time().'.'.$Extenstion ;
            $path = $request->file('bgImg')->storeAs('public/uploads', $fileNameToStorebgImg);
            $abdata->bgImg = $fileNameToStorebgImg;

        }
        $abdata->videocontent = $request->input('videocontent');
        $abdata->youtlink = $request->input('youtlink');
        $abdata->save();


        // meta data update 
        if($request->input('meta_title') != '' || $request->input('meta_keyword') !=$request->input('meta_description')  ){
            $metaData = new Metatag();
            $metaData->meta_title = $request->input('meta_title');
            $metaData->meta_keyword = $request->input('meta_keyword');
            $metaData->meta_description = $request->input('meta_description');
            $metaData->about_id = $abdata->id;
            $metaData->save();
        }
        return redirect()->route('admin.pages')->with('success' , 'About Page Has Been Created Successfull'); 
    }


    // Clients
    public function clients() {
        $clients = Client::all();
        return view('admin.pages.clients.index' , ['clients'=> $clients]);
    }
    // store Client page data 
    public function storeClientpage(Request $request)  {
        $validated = $request->validate([
            // Hero Sec
            'logos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        if ($request->hasfile('logos')) {
            foreach ($request->file('logos') as $index => $file) {
                // Get full name with extension
                $filenameWithExt = $file->getClientOriginalName();
                // Get only name
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get only extension
                $extension = $file->getClientOriginalExtension();
                // Final file name to store
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                // Store the file in the 'public/uploads' directory
                $path = $file->storeAs('public/uploads', $fileNameToStore);
    
                // Save the file path and alt text to the database
                $client = new Client();
                $client->logo = $fileNameToStore;  // Save just the file name
                $client->save();
            }
        

        return redirect()->route('admin.clients')->with('success' , 'Clinet Logos Has Been uploaded Successfull'); 
        }
    }

    // store Client page data 
    public function storeClientAlt(Request $request , $id)  {
        $validated = $request->validate([
            // Hero Sec
            'alt' => 'required',
        ]);

         // Save the file path and alt text to the database
         $client =  Client::find($id);
         $client->alttext = $request->input('alt');  // Save just the file name
         $client->save();

        return redirect()->route('admin.clients')->with('success' , 'Clinet Alt Texr Has Been Updated Successfull'); 
        
    }
    // Destory Client page data 
    public function destoryClient($id)  {

         $client =  Client::find($id);
          
        // Check if the client entry exists
    if ($client) {
        // Get the logo file name
        $logoPath = public_path('storage/uploads/' . $client->logo);

        // Delete the file from the storage
        if (file_exists($logoPath)) {
            unlink($logoPath);
        }

        // Delete the database record
        $client->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Logo and record deleted successfully.');
    }

    // Redirect back with an error message if the record doesn't exist
    return redirect()->back()->with('error', 'Client record not found.');
    }

    public function indexServices() {
        $services = Service::all();
        return view('admin.pages.services.index' , [
            'services' => $services
        ]);
    }
    public function createServices() {
        return view('admin.pages.services.create');
    }



    // store Service Page 
    public function storeService(Request $request)  {
        $validated = $request->validate([
            // Hero Sec
            'Herotitle' => 'required',
            'ContentHero' => 'required',
            'btn_one' => 'required',
            'btn_two' => 'required',
            //client Area
            'Menuname' => 'required',
            'slug' => 'required',
            //Service Title
            'Serv_title' => 'required',
            'Serv_sub' => 'required',
            // Testimonial Title
            'test_title' => 'required',
            'test_content' => 'required',
            //WhatWeDo
            'WhatDo_title' => 'required',
            
        ]);


        // image upload 

            // Image Store
            if($request->hasFile('USP_img2'))
                {
                    //Get full name with extenstion
                    $filenameWithExt = $request->file('USP_img2')->getClientOriginalName();
                    // Get only name
                    $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
                    // GET ONLY EXTENTION
                    $Extenstion = $request->file('USP_img2')->getClientOriginalExtension();
                    // final file name
                    $fileNameToStoreUSP2 = $filename. '_'.time().'.'.$Extenstion ;
                    $path = $request->file('USP_img2')->storeAs('public/uploads', $fileNameToStoreUSP2);

                }
                else{
                    $fileNameToStoreUSP2 = 'NoImge.jpg';
                }

            
            // client Area
            if( $request->input('client_sub')){
                $homepage->client_sub = $request->input('client_sub');
            }
            $homepage->client_title = $request->input('client_title');
            $homepage->client_content = $request->input('client_content');

            // Service  Panel Area 
            if( $request->input('Serv_sub')){
                $homepage->Serv_sub = $request->input('Serv_sub');
            }
            $homepage->Serv_title = $request->input('Serv_title');
            if($request->input('Serv_content')){
                $homepage->Serv_content = $request->input('Serv_content');
            }

            // Testimonial  Panel Area 
            if( $request->input('test_sub')){
                $homepage->test_sub = $request->input('test_sub');
            }
            $homepage->test_title = $request->input('test_title');
            $homepage->test_content = $request->input('test_content');

            // whatwedo  Panel Area
            if( $request->input('WhatDO_subtitle')){
                $homepage->WhatDO_subtitle = $request->input('WhatDO_subtitle');
            }
            $homepage->WhatDo_title = $request->input('WhatDo_title');
            // Point 1
            $homepage->WDO_bOne_icon = $fileNameToStoreWWDO;
            $homepage->WDO_bOne_icon_alttext = $request->input('WDO_bOne_icon_alttext');
            $homepage->WDo_bone_title = $request->input('WDo_bone_title');
            $homepage->WDo_bone_content = $request->input('WDo_bone_content');
            // point 2
            $homepage->WDo_bTwo_icon = $fileNameToStoreWWDT;
            $homepage->WDo_bTwo_icon_alttext = $request->input('WDo_bTwo_icon_alttext');
            $homepage->WDo_bTwo_title = $request->input('WDo_bTwo_title');
            $homepage->WDo_bTwo_content = $request->input('WDo_bTwo_content');
            // point 3
            $homepage->WDo_bThree_Icon = $fileNameToStoreWWDTH;
            $homepage->WDo_bThree_Icon_alttext = $request->input('WDo_bThree_Icon_alttext');
            $homepage->WDo_bThree_title = $request->input('WDo_bThree_title');
            $homepage->WDo_bThree_content = $request->input('WDo_bThree_content');
             // point 4
            $homepage->Wdo_bFour_icon = $fileNameToStoreWWDF;
            $homepage->Wdo_bFour_icon_alttext = $request->input('Wdo_bFour_icon_alttext');
            $homepage->WDo_bFour_title = $request->input('WDo_bFour_title');
            $homepage->WDo_bFour_content = $request->input('WDo_bFour_content');


            $homepage->save();

             // Tursted Area
             $coutArea = new  CounterArea();
             if($request->input('trusted_sub_title')){
                 $coutArea->sub_title = $request->input('trusted_sub_title');
             }
             $coutArea->title = $request->input('trusted_title');
             $coutArea->content = $request->input('trusted_content');
             $coutArea->pone = $request->input('pone');
             $coutArea->ptwo = $request->input('ptwo');
             $coutArea->pthree = $request->input('pthree');
             $coutArea->pfour = $request->input('pfour');
             $coutArea->btn_Value = $request->input('btn');
             if($request->hasFile('trusted_img')){
                 $coutArea->bg_color = $fileNameToStoreTrusted;
             }
             $coutArea->btn_Name = $request->input('trusted_img_alt');
             $coutArea->home_id = $homepage->id;
             $coutArea->save();
             // USP 1
             $uspsval  = new Usp();
             if($request->input('USP_sub_title')){
                 $uspsval->sub_title = $request->input('USP_sub_title');
             }
             $uspsval->title = $request->input('USP_title');
             $uspsval->content = $request->input('USP_content');
             $uspsval->btn = $request->input('USP_btn');
             $uspsval->img = $fileNameToStoreUSP;
             $uspsval->img_alt = $request->input('USP_img_alt');
             $uspsval->bg_color = $request->input('USP_bg_color');
             $uspsval->home_id = $homepage->id;
             $uspsval->save();

             // USP 2
             $uspsval2  = new Usp();
             
             if($request->input('USP_sub_title2')){
                 $uspsval2->sub_title = $request->input('USP_sub_title2');
             }
             $uspsval2->title  = $request->input('USP_title2');
             $uspsval2->content= $request->input('USP_content2');
             $uspsval2->btn = $request->input('btn2');
             $uspsval2->img = $fileNameToStoreUSP2;
             $uspsval2->img_alt = $request->input('USP_img_alt2');
             $uspsval2->bg_color = $request->input('USP_bg_color2');
             $uspsval2->home_id = $homepage->id;
             $uspsval2->save();

            // Hero Section
             $heroSec = new HomeSection();
             $heroSec->title = $request->input('Herotitle');
             $heroSec->des = $request->input('ContentHero');
             $heroSec->Rimg = $fileNameToStoreRImg;
             $heroSec->Rimg_alttext = $request->input('Rimg_alttext');
             $heroSec->G_img =  $fileNameToStoreG_img ;
             $heroSec->G_img_alttext = $request->input('G_img_alttext');
             $heroSec->T_img_alttext = $request->input('T_img_alttext');
             $heroSec->T_img = $fileNameToStoreT_img;
             $heroSec->btn_one = $request->input('btn_one');
             $heroSec->btn_two = $request->input('btn_two');
             $heroSec->home_id = $homepage->id;
             $heroSec->save();

            // meta data update 
            if($request->input('meta_title') != '' || $request->input('meta_keyword') !=$request->input('meta_description')  ){
                $metaData = new Metatag();
                $metaData->meta_title = $request->input('meta_title');
                $metaData->meta_keyword = $request->input('meta_keyword');
                $metaData->meta_description = $request->input('meta_description');
                $metaData->home_id = $homepage->id;
                $metaData->save();
            }
            



             return redirect()->route('admin.pages')->with('success' , 'Home Page Has Been Created Successfull'); 
    }
}
