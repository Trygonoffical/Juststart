<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    public function index(Request $request)
    {
        $meta_title = '';
        $meta_keywords = '';
        $meta_description = '';
        $slug = $request->segment(1);

        $viewArray = array(
            'private-limited-company-registration-online' => $slug,
            'limited-liability-partnership-registration-online-in-india' => $slug,
            'trademark-registration-online-in-india' => $slug,
        );

        if( $slug == 'private-limited-company-registration-online' ){
            $meta_title = 'Private Limited Company Registration Online';
            $meta_keywords = '';
            $meta_description = 'Register Your Company Today! Register Your Private Limited Company Quickly With Our Help! Let JustStart’s Expert Legal Consultants Help You Start Your Private Limited Hassle-Free. Incorporate Your Company Through Our Assistance at Rs. 8,899 Talk to Expert 9315513354 Register Your Company Today! 360° Corporate Legal Assistants 99.9% Quicker Response Time 4.1/ 5 Unfiltered Star … Private Limited Company Registration Online Read More »';

        } else if( $slug == 'limited-liability-partnership-registration-online-in-india' ){
            $meta_title = 'Limited Liability Partnership Registration Online in India';
            $meta_keywords = '';
            $meta_description = 'Register Your LLP Today! Register Your Limited Liability Partnership Through JustStart’s Legal Assistance! Grow Your Business By Registering Your LLP Through Our Hassle-Free Process. Let JustStart’s Team of Legal Consultants Help You Get Your LLP Registered at Rs. 7,499/- Talk to Expert 9315513354 Register Your LLP Today! 360° Corporate Legal Assistants 99.9% Quicker Response … Limited Liability Partnership Registration Online in India Read More »';

        } else if( $slug == 'trademark-registration-online-in-india' ){
            $meta_title = 'Trademark Registration Online in India';
            $meta_keywords = '';
            $meta_description = 'Trademark Registration Online in India - JustStart"><meta property="og:description" content="Register Your Trademark Today! Register Your Trademark Today With JustStart’s Assistance! Get Your Company Trademark Registration Done Through Our Hassle-Free Process. Register Your Trademark Through JustStart’s Legal Assistance at Rs. 6,299/- Talk to Expert 9315513354 Speak to an Expert Today 360° Corporate Legal Assistants 99.9% Quicker Response Time 4.1/ 5 Unfiltered Star Rating 100% … Trademark Registration Online in India Read More »';
        }

        $pageData = array(
            'meta_title'    => $meta_title,
            'meta_keywords'    => $meta_keywords,
            'meta_description'    => $meta_description
        );


        if( array_key_exists($slug, $viewArray) ){
            return view('landing/'.$slug, $pageData);
        } else {
            abort(404, 'Page not found');
        }
    }


    public function testPlugin(Request $request)
    {
        $meta_title = '';
        $meta_keywords = '';
        $meta_description = '';
        $slug = $request->segment(1);

        

        $pageData = array(
            'meta_title'    => $meta_title,
            'meta_keywords'    => $meta_keywords,
            'meta_description'    => $meta_description
        );

        return view('landing/test-plugin', $pageData);
    }

}
