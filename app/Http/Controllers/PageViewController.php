<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageViewController extends Controller
{
    private $meta_title;
    private $meta_keywords;
    private $meta_description;

    public function __construct(){
        $this->meta_title = '';
        $this->meta_keywords = '';
        $this->meta_description = '';
    }
    
    public function index()
    {
        //
    }

    public function home()
    {
        $pageData = array();

        // $this->meta_title = "JustStart Your Business Today | Online Legal Services for Startups";
        // $this->meta_keywords = "legal compliance";
        // $this->meta_description = "JustStart is India's leading online legal services for startups and businesses which is dedicated to helping Entrepreneurs easily start & grow.";

        $this->meta_title = "JustStart: Register Your Pvt Ltd, LLP, or OPC Company Today";
        $this->meta_keywords = "legal compliance";
        $this->meta_description = "JustStart advises on company registration (Pvt Ltd, LLP, OPC), trademark filing, GST registration, GST filing, accounting, and compliance. Start your business easily.";


        $pageData = array(
            'meta_title'    => $this->meta_title,
            'meta_keywords'    => $this->meta_keywords,
            'meta_description'    => $this->meta_description
        );

        return view('page.home-updated', $pageData);
    }


    public function aboutUs()
    {
        $pageData = array();

        $this->meta_title = "JustStart | About Us Details";
        $this->meta_keywords = "JustStart";
        $this->meta_description = "JustStart is an online, company incorporation and compliance management platform created with the aim to help entrepreneurs start their business/startups";

        $pageData = array(
            'meta_title'    => $this->meta_title,
            'meta_keywords'    => $this->meta_keywords,
            'meta_description'    => $this->meta_description
        );

        return view('page/about-us', $pageData);
    }


    public function contactUs()
    {
        $pageData = array();

        $this->meta_title = "JustStart Contact Details - Address, Email And Phone Numbers";
        $this->meta_keywords = "Contact";
        $this->meta_description = "Get in touch with JustStart for top-notch startup compliance services in India. Get customized solutions. You can connect with our address, email, and phone numbers.";

        $pageData = array(
            'meta_title'    => $this->meta_title,
            'meta_keywords'    => $this->meta_keywords,
            'meta_description'    => $this->meta_description
        );

        return view('page/contact-us', $pageData);
    }


    public function termsConditions()
    {
        $pageData = array();

        $this->meta_title = "Terms Conditions JustStart";
        $this->meta_keywords = "";
        $this->meta_description = "Please go through the terms of the service agreement carefully with JustStart, as it contains important information regarding your legal right and remedies.";

        $pageData = array(
            'meta_title'    => $this->meta_title,
            'meta_keywords'    => $this->meta_keywords,
            'meta_description'    => $this->meta_description
        );

        return view('page/terms-conditions', $pageData);
    }

    public function refundPolicy()
    {
        $pageData = array();

        $this->meta_title = "Cancellation/Refund Policy | JustStart";
        $this->meta_keywords = "Cancellation";
        $this->meta_description = "Cancellation of orders made shall not be entertained once the payment has been made. No refunds will be processed except in case of cancellation or tap to learn more.";

        $pageData = array(
            'meta_title'    => $this->meta_title,
            'meta_keywords'    => $this->meta_keywords,
            'meta_description'    => $this->meta_description
        );

        return view('page/refund-policy', $pageData);
    }


    public function privacyPolicy()
    {
        $pageData = array();

        $this->meta_title = "Privacy Policy | JustStart";
        $this->meta_keywords = "Cancellation";
        $this->meta_description = "Your privacy is important to us, so juststart.co.in owned by JustStart. We've created the privacy policy to let you know why & what information we collect from you.";

        $pageData = array(
            'meta_title'    => $this->meta_title,
            'meta_keywords'    => $this->meta_keywords,
            'meta_description'    => $this->meta_description
        );

        return view('page/privacy-policy', $pageData);
    }


    public function disclaimerPolicy()
    {
        $pageData = array();

        $this->meta_title = "Disclaimer Policy | JustStart";
        $this->meta_keywords = "";
        $this->meta_description = "If you enter and further continue to browse and use this website you are presumed to be aware, ageering, and legally bound by this disclaimer. Learn more!";

        $pageData = array(
            'meta_title'    => $this->meta_title,
            'meta_keywords'    => $this->meta_keywords,
            'meta_description'    => $this->meta_description
        );

        return view('page/disclaimer-policy', $pageData);
    }


    public function payment()
    {
        $pageData = array();

        $this->meta_title = "Click to Pay Online | JustStart";
        $this->meta_keywords = "";
        $this->meta_description = "JustStart is India's leading online legal services for startups and businesses which is dedicated to helping Entrepreneurs easily start & grow.";

        $pageData = array(
            'meta_title'    => $this->meta_title,
            'meta_keywords'    => $this->meta_keywords,
            'meta_description'    => $this->meta_description
        );

        return view('page/payment', $pageData);
    }


    public function paymentCcAvenue()
    {
        $pageData = array();

        $this->meta_title = "Click to Pay Online | JustStart";
        $this->meta_keywords = "";
        $this->meta_description = "";

        $pageData = array(
            'meta_title'    => $this->meta_title,
            'meta_keywords'    => $this->meta_keywords,
            'meta_description'    => $this->meta_description
        );

        return view('page/payment-ccavenue', $pageData);
    }


    public function blog()
    {
        $pageData = array();

        $this->meta_title = "JustStart Your Business Today | Online Legal Services for Startups";
        $this->meta_keywords = "legal compliance";
        $this->meta_description = "JustStart is India's leading online legal services for startups and businesses which is dedicated to helping Entrepreneurs easily start & grow.";

        $pageData = array(
            'meta_title'    => $this->meta_title,
            'meta_keywords'    => $this->meta_keywords,
            'meta_description'    => $this->meta_description
        );

        return view('page/blog', $pageData);
    }

    public function thankYou()
    {
        $pageData = array();

        $this->meta_title = "JustStart Your Business Today | Online Legal Services for Startups";
        $this->meta_keywords = "ads-thank-you";
        $this->meta_description = "JustStart is India's leading online legal services for startups and businesses which is dedicated to helping Entrepreneurs easily start & grow.";

        $pageData = array(
            'meta_title'    => $this->meta_title,
            'meta_keywords'    => $this->meta_keywords,
            'meta_description'    => $this->meta_description
        );
        
        return view('page/thank-you', $pageData);
    }

    public function sitemap()
    {
        $pageData = array();

        $this->meta_title = "JustStart Your Business Today | Online Legal Services for Startups";
        $this->meta_keywords = "sitemap";
        $this->meta_description = "JustStart is India's leading online legal services for startups and businesses which is dedicated to helping Entrepreneurs easily start & grow.";

        $pageData = array(
            'meta_title'    => $this->meta_title,
            'meta_keywords'    => $this->meta_keywords,
            'meta_description'    => $this->meta_description
        );
        
        return view('page/sitemap', $pageData);
    }


    public function service()
    {
        return view('service/service');
    }

}
