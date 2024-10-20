<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;


class ServiceController extends Controller
{
    private $meta_title;
    private $meta_keywords;
    private $meta_description;

    public function __construct(){
        $this->meta_title = '';
        $this->meta_keywords = '';
        $this->meta_description = '';
    }

    public function index(Request $request, $slug)
    {
        $pageData = array();

        // $service = Service::where('slug', $slug)->firstOrFail();
        $service = Service::where('slug', $slug)->first();

        if( $service ){
            $pageData = array(
                'name'    => $service->name,
                'meta_title'    => $service->meta_title,
                'meta_keywords'    => $service->meta_keyword,
                'meta_description'    => $service->meta_description
            );

            return view('service/'.$slug, $pageData);
        } else {
            abort(404, 'Page not found');
           
        }

        die('DIE');        
    }


    public function indexPrev(Request $request, $slug)
    {
        $pageData = array();

        $viewArray = array(
            'private-limited-company-registration' => $slug,
            'limited-liability-partnership' => $slug,
            'company-registration-consultant' => $slug,
            'roc-filling-for-opc' => $slug,
            'small-business-registration-online' => $slug,
            'virtual-office-address' => $slug,
            'appointment-of-director' => $slug,
            'change-of-registered-office' => $slug,
            'closure-of-opc' => $slug,
            'closure-of-the-llp' => $slug,
            'closure-of-the-pvt-ltd' => $slug,
            'gst-registration' => $slug,
            'gst-returns-filing' => $slug,
            'legal-advisory-services' => $slug,
            'increase-in-authorized-capital' => $slug,
            'online-accounting-services' => $slug,
            'trademark-renewal' => $slug,
            'resignation-of-director' => $slug,
            'roc-filling-for-llp' => $slug,
            'roc-filling-for-pvt-ltd' => $slug,
            'strike-off-of-company' => $slug,
            'trademark-objection-reply' => $slug,
            'trademark-opposition' => $slug,
            'transfer-of-shares' => $slug,
            'private-limited-company-registration-in-bangalore' => $slug,
            'private-limited-company-registration-in-delhi' => $slug,
            'private-limited-company-registration-in-maharashtra' => $slug,
            'private-limited-company-registration-in-uttar-pradesh' => $slug,
            'trademark-registration' => $slug,
            'sole-proprietorship-registration-online' => $slug,
            'startup-india' => $slug,
            'one-person-company' => $slug,
            'public-limited' => $slug,
            'section-8-co-ngo' => $slug,
        );

        // echo $viewArray[$slug];
        // die();

        // New Links
        $viewArray['share-transfer'] = $slug; // transfer-of-shares
        $viewArray['company-strike-off'] = $slug; // strike-off-of-company
        $viewArray['company-annual-filing'] = $slug; // roc-filling-for-pvt-ltd
        $viewArray['opc-annual-filing'] = $slug; // roc-filling-for-opc
        $viewArray['llp-annual-filing'] = $slug; // roc-filling-for-llp
        $viewArray['accounting-bookkeeping-services'] = $slug; // online-accounting-services
        $viewArray['increase-authorized-share-capital'] = $slug; // increase-in-authorized-capital
        $viewArray['gst-return-filing'] = $slug; // gst-returns-filing
        $viewArray['closure-of-private-limited-company'] = $slug; // closure-of-the-pvt-ltd
        $viewArray['closing-llp'] = $slug; // closure-of-the-llp
        $viewArray['registered-office-change'] = $slug; // change-of-registered-office
        $viewArray['section-8-company-registration'] = $slug; // section-8-co-ngo
        $viewArray['startup-india-registration'] = $slug; // startup-india
        $viewArray['trademark-objection'] = $slug; // trademark-objection-reply
        $viewArray['public-limited-company-registration'] = $slug; // public-limited
        $viewArray['sole-proprietorship-registration'] = $slug; // sole-proprietorship-registration-online
        $viewArray['trademark-registration-india'] = $slug; // trademark-registration
        $viewArray['llp-registration-india'] = $slug; // limited-liability-partnership
        $viewArray['one-person-company-opc-registration'] = $slug; // one-person-company
        $viewArray['producer-company-registration'] = $slug; // producer company registration
        $viewArray['partnership-firm-registration'] = $slug; // partnership firm registration
        $viewArray['fssai-registration'] = $slug; // fssai registration

        if( $slug == 'private-limited-company-registration' ){
            $this->meta_title = "Private Limited (Pvt Ltd) Company Registration In India - Online Procedure";
            $this->meta_keywords = "Private limited company registration, pvt ltd company registration, company registration, online company registration, pvt limited registration, register a private limited company in india, private company registration, pvt ltd company, private limited registration, company registration in india, pvt company registration, business registration, register private limited company, pvt ltd company registration process, company registration process, pvt ltd company registration documents, company registration online, company incorporation";
            $this->meta_description = "Get Pvt ltd company registration online at minimum fee + govt taxes. Apply for company registration online with JustStart experts.";

        } else if( $slug == 'limited-liability-partnership' ){
            $this->meta_title = "Limited Liability Partnership at Rs. 7499 | LLP Registration Online | JustStart";
            $this->meta_keywords = "LLP Registration";
            $this->meta_description = "Get LLP registration with JustStart at minimum price. Know the limited liability partnership online registration process, fees, & documents.";

        } else if( $slug == 'company-registration-consultant' ){
            $this->meta_title = "Company Registration Consultant in India | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "Now lean the time for entrepreneurs to start their business with company registration. Launch, grow, and succeed. Select your company structure as per your needs.";

        } else if( $slug == 'roc-filling-for-opc' ){
            $this->meta_title = "One Person Company - ROC Annual Filing - JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "One person company - roc annual filing is a mandatory requirement for companies. Make your OPC ROC compliant before the due date. With experienced legal experts.";

        } else if( $slug == 'small-business-registration-online' ){
            $this->meta_title = "Register Your Business | Small Business Registration | JustStart";
            $this->meta_keywords = "Private";
            $this->meta_description = "Apply for small business registration online to grow to the next level. After getting registered small-scale startups India gets lots of benefits. Get expert advice.";
        } else if( $slug == 'virtual-office-address' ){
            $this->meta_title = "Virtual Office Address for GST Registration | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "Do you need a virtual office address for business or GST registration. JustStart provides virtual office with a prime location & easy documentation.";
        } else if( $slug == 'appointment-of-director' ){
            $this->meta_title = "Appointment of Director - Add Director to Company - Online Procedure";
            $this->meta_keywords = "";
            $this->meta_description = "At JustStart, Get legal advice for the appointment of a director to your company. We offer top-notch service to add directors to the company. Get Free Advice!";
        } else if( $slug == 'change-of-registered-office' ){
            $this->meta_title = "Change in Registered Office - Process Online - JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "Online procedure for registered office change of company. At JustStart, we provide a convenient way to update your registered office address today. Get expert advice!";
        } else if( $slug == 'closure-of-opc' ){
            $this->meta_title = "Winding up of OPC | Closure of One Person Company | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "Wind up/close one person company at JustStart, know the process, required documentation, and procedures to close an OPC company. We assist companies in dormant.";
        } else if( $slug == 'closure-of-the-llp' ){
            $this->meta_title = "Online Wind Up or Closing a Limited Liability Partnership | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "In the event of your LLP company being non-operative for the past year, and you and your fellow partners all agree to wind up/close LLP. Get expert legal advice.";
        } else if( $slug == 'closure-of-the-pvt-ltd' ){
            $this->meta_title = "Procedure to Close a Private Limited Company | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "Strike off or company closure is known as closing a private limited company. At JustStart. We cover legal requirements and documents for a smooth closure process.";
        } else if( $slug == 'gst-registration' ){
            $this->meta_title = "Online GST Registration in India | JustStart";
            $this->meta_keywords = "Gst registration, gst certificate, documents required for gst registration, gst registration process, process for gst registration, gst registration online, gst apply online, new gst registration, gst number registration, how to apply for gst number, how to register for gst, register for gst, how to apply for gst number online, gst registration cost, apply for gst registration, enrollment for gst, gst application online, new gst registration process, register for gst number, gst registration india";
            $this->meta_description = "GST Registration in India is mandatory for all enterprises. GST apply online without visiting govt office. Secure registration at a budget-friendly rate, & convenient.";
        } else if( $slug == 'gst-returns-filing' ){
            $this->meta_title = "GST Return Filing Online: Benefits and Procedure | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "A GST return is a document that summarizes a taxpayer's sales, purchases, and tax liabilities or refunds for a specific period. Ensuring super simple with the team of Juststart.";
        } else if( $slug == 'legal-advisory-services' ){
            $this->meta_title = "Legal Compliance Advisory Services In Delhi, India | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "At JustStart in India, We provide a range of comprehensive legal compliance consulting services and support for efficient startup incorporation. Get Expert Advice.";
        } else if( $slug == 'increase-in-authorized-capital' ){
            $this->meta_title = "Increase Authorised Share Capital - Online Process | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "Effortlessly increase authorised share capital online. Elevate your business potential today. Juststart assists in expanding your company's financial capacity.";
        } else if( $slug == 'online-accounting-services' ){
            $this->meta_title = "Online Accounting and Bookkeeping Services in India | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "At JustStart consulting, online bookkeeping and accounting services in India. Streamline financial management with expert solutions. Efficiency for your business growth.";
        } else if( $slug == 'trademark-renewal' ){
            $this->meta_title = "Trademark Renewal Online | Renewal of Trademark In India";
            $this->meta_keywords = "";
            $this->meta_description = "File your trademark renewal application to extend and protect your brand for 10 years more. get 100% trademark renewal online process. Get FREE Expert Advice.";
        } else if( $slug == 'resignation-of-director' ){
            $this->meta_title = "Removal of Director from a Company - Online Procedure - JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "A company has the authority to remove a director from their company. Expert assistance for smooth and legal removal of directors with an easy online procedure.";
        } else if( $slug == 'roc-filling-for-llp' ){
            $this->meta_title = "ROC Annual Filing for Limited Liability Partnership | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "ROC filing for your limited liability partnership through JustStart. Streamlined online llp procedure for ROC annual filing. Quick and hassle-free. Get expert advice!";
        } else if( $slug == 'roc-filling-for-pvt-ltd' ){
            $this->meta_title = "Private Limited Company - ROC Annual Filing - JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "Every Pvt Ltd company is required to ROC annual filing. Annual return filing can get hectic without the help of experienced professionals. Get JustStart expert assistance.";
        } else if( $slug == 'strike-off-of-company' ){
            $this->meta_title = "Revival of a Strike Off Company - Under Companies Act 2013 | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "Restore your dissolved company as per Companies Act 2013. Even if your company has been struck off from the register of companies, JustStart can help you revive it.";
        } else if( $slug == 'trademark-objection-reply' ){
            $this->meta_title = "Trademark Objection Reply - TM Objection Online | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "Trademark (TM) objection reply - online filing. At JustStart in India, Get solutions for trademark objection reply to draft your reply against the examination report.";
        } else if( $slug == 'trademark-opposition' ){
            $this->meta_title = "Reply to Trademark Opposition | Online Filling | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "At JustStart, file your trademark (TM) opposition reply in India. Discover the process where applicants or third parties can contest trademark objections through this proceeding.";
        } else if( $slug == 'transfer-of-shares' ){
            $this->meta_title = "Transfer of Shares of Private Limited Company | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "Know procedure of company share transfer online & transferring existing shares from one person to another. JustStart offers free consulting for share transfer documentaries.";
        } else if( $slug == 'private-limited-company-registration-in-bangalore' ){
            $this->meta_title = "JustStart: Simplifying Pvt Ltd Company Registration in Bangalore";
            $this->meta_keywords = "";
            $this->meta_description = "Explore a hassle-free journey to register your Private Limited Company in Bangalore with JustStart. Expert guidance and cost-effective solutions.";
        } else if( $slug == 'private-limited-company-registration-in-delhi' ){
            $this->meta_title = "Private Limited Company Registration In Delhi - Online Process";
            $this->meta_keywords = "";
            $this->meta_description = "Discover a seamless path to Company Registration in Delhi with JustStart. Our experts simplify the process, ensuring hassle-free incorporation.";
        } else if( $slug == 'private-limited-company-registration-in-maharashtra' ){
            $this->meta_title = "Pvt Ltd Company Registration in Maharashtra | Process and Fees";
            $this->meta_keywords = "";
            $this->meta_description = "Pvt Ltd company registration in Maharashtra is a breeze with JustStart. Our expert guidance, cost-effective solutions, and proven track record ensure a smooth process.";
        } else if( $slug == 'private-limited-company-registration-in-uttar-pradesh' ){
            $this->meta_title = "Private Limited Company Registration in Uttar Pradesh | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "Discover an easy and seamless journey through the private limited company registration process in Uttar Pradesh with JustStart. Contact us to know more.";
        } else if( $slug == 'trademark-registration' ){
            $this->meta_title = "Trademark Registration - Online TM Application - Benefits, Procedure - JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "Get trademark registration online in India to protect business brand, logo & name, etc. E-Filing of Trademarks with JustStart @ low cost.";
        } else if( $slug == 'sole-proprietorship-registration-online' ){
            $this->meta_title = "Sole Proprietorship Registration in India - Proprietor Company Online Procedure";
            $this->meta_keywords = "";
            $this->meta_description = "Start your business journey as an individual with a proprietorship firm. JustStart provides Sole Proprietorship Registration Online in India. Get expert advice.";
        } else if( $slug == 'startup-india' ){
            $this->meta_title = "Startup India Registration: Registering a Startup in India | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "Now time the come for entrepreneurs to register startup India company online with simple steps join now and turn your vision into reality. Get FREE Expert Advice.";
        } else if( $slug == 'one-person-company' ){
            $this->meta_title = "One Person Company (OPC) Registration in India | OPC Registration | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "One person company registration is one-man army under the companies act 2013, At JustStart online and fast OPC register is just one single member and one director.";
        } else if( $slug == 'public-limited' ){
            $this->meta_title = "Public Limited Company Registration Online in India - Online Procedure";
            $this->meta_keywords = "";
            $this->meta_description = "At JustStart. Procedure for incorporation of public limited company in India, now the time has come to register your online public ltd company. Get free advice.";
        } else if( $slug == 'section-8-co-ngo' ){
            $this->meta_title = "Section 8 Company NGO Registration Online in India | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "In India, online NGO registration or Section 8 company under the companies act, 2013. Individuals and groups are dedicated to enhancing society's well-being.";
        } else if( $slug == 'producer-company-registration' ){
            $this->meta_title = "Producer Company Registration Process - Benefits, Documentation";
            $this->meta_keywords = "producer company registration, farmer producer company, fpo registration, producer company, fpo registration process, what is producer company, farmer producer company registration, fpo registration online, producer company registration, producer company registration, fpc registration, producer company registration process, producer company incorporation, farmer producer company registration process";
            $this->meta_description = "Farmer Producer Company registration service, including required documents. We assist farmers and agriculturists in establishing their own company with ease.";
        } else if( $slug == 'partnership-firm-registration' ){
            $this->meta_title = "Partnership Firm Registration Process - Benefits, Documents Required";
            $this->meta_keywords = "partnership firm registration in india, partnership firm registration, partnership firm registration online, register partnership firm, partnership company registration, register partnership firm online, partnership firm registration online india";
            $this->meta_description = "Partnership firms where individuals join to share profits and losses. Registration process, benefits, & required documents for Partnership Firm Registration.";
        } else if( $slug == 'fssai-registration' ){
            $this->meta_title = "FSSAI Registration Process - Documents Required, Benefits, Penalty";
            $this->meta_keywords = "fssai registration, food license online, apply for fssai registration, fssai food license, fssai state registration, fssai certificate, fssai licence, fssai registration online, fssai license apply, fssai license registration, fssai apply online, food licence registration, apply for fssai license, food licence online, apply for food license, online food licence apply, fssai license online, fssai new registration, fssai registration process, fssai licence apply";
            $this->meta_description = "Get expert help with FSSAI registration. We handle documentation, highlight benefits, and ensure compliance to avoid penalties. Secure your food license today!";
        }

        // 301
        if( $slug == 'share-transfer' ){
            $this->meta_title = "Transfer of Shares of Private Limited Company | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "Know procedure of company share transfer online & transferring existing shares from one person to another. JustStart offers free consulting for share transfer documentaries.";

        } else if( $slug == 'company-strike-off' ){
            $this->meta_title = "Revival of a Strike Off Company - Under Companies Act 2013 | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "Restore your dissolved company as per Companies Act 2013. Even if your company has been struck off from the register of companies, JustStart can help you revive it.";

        } else if( $slug == 'company-annual-filing' ){
            $this->meta_title = "Annual ROC Filing For Private Limited Company | Juststart";
            $this->meta_keywords = "";
            $this->meta_description = "Need assistance with ROC annual filing? Our experts can help with company annual return and other forms. E-file hassle-free with Ministry of Corporate Affairs.";
        } else if( $slug == 'opc-annual-filing' ){
            $this->meta_title = "One Person Company - ROC Annual Filing - JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "One person company - roc annual filing is a mandatory requirement for companies. Make your OPC ROC compliant before the due date. With experienced legal experts.";
        } else if( $slug == 'llp-annual-filing' ){
            $this->meta_title = "ROC Annual Compliance of LLP | Annual Filings for LLP";
            $this->meta_keywords = "";
            $this->meta_description = "Skillfully managed roc annual compliance of LLP with Juststart. Our experts make LLP compliance filings easy, helping you avoid penalties. Get Started!";
        } else if( $slug == 'accounting-bookkeeping-services' ){
            $this->meta_title = "Online Accounting and Bookkeeping Services in India | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "At JustStart consulting, online bookkeeping and accounting services in India. Streamline financial management with expert solutions. Efficiency for your business growth.";
        } else if( $slug == 'increase-authorized-share-capital' ){
            $this->meta_title = "Increase Authorised Share Capital - Online Process | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "Effortlessly increase authorised share capital online. Elevate your business potential today. Juststart assists in expanding your company's financial capacity.";
        } else if( $slug == 'gst-return-filing' ){
            $this->meta_title = "GST Returns Filing - Hire Expert Accountants for GSTR Filing";
            $this->meta_keywords = "";
            $this->meta_description = "A GST return is a document that summarizes a taxpayer's sales, purchases, and tax liabilities or refunds for a specific period. Ensuring super simple with the team of Juststart.";
        } else if( $slug == 'closure-of-private-limited-company' ){
            $this->meta_title = "Procedure to Close a Private Limited Company | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "Strike off or company closure is known as closing a private limited company. At JustStart. We cover legal requirements and documents for a smooth closure process.";
        } else if( $slug == 'closing-llp' ){
            $this->meta_title = "Online Wind Up or Closing a Limited Liability Partnership | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "In the event of your LLP company being non-operative for the past year, and you and your fellow partners all agree to wind up/close LLP. Get expert legal advice.";
        } else if( $slug == 'registered-office-change' ){
            $this->meta_title = "Change in Registered Office - Process Online - JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "Online procedure for registered office change of company. At JustStart, we provide a convenient way to update your registered office address today. Get expert advice!";
        } else if( $slug == 'section-8-company-registration' ){
            $this->meta_title = "Section 8 Company NGO Registration Online in India | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "In India, online NGO registration or Section 8 company under the companies act, 2013. Individuals and groups are dedicated to enhancing society's well-being.";
        } else if( $slug == 'startup-india-registration' ){
            $this->meta_title = "Startup India Registration: Registering a Startup in India | JustStart";
            $this->meta_keywords = "Startup india registration, startup india registration fees, start up india registration, startup india certificate, register a startup in india, startup india registration process, startup india registration online, startup registration process in india, registration of startup in india, startup registration process india, startup registration in india, startup india registration eligibility";
            $this->meta_description = "Now time the come for entrepreneurs to register startup India company online with simple steps join now and turn your vision into reality. Get FREE Expert Advice.";
        } else if( $slug == 'trademark-objection' ){
            $this->meta_title = "Trademark Objection Reply - TM Objection Online | JustStart";
            $this->meta_keywords = "";
            $this->meta_description = "Trademark (TM) objection reply - online filing. At JustStart in India, Get solutions for trademark objection reply to draft your reply against the examination report.";
        } else if( $slug == 'public-limited-company-registration' ){
            $this->meta_title = "Public Limited Company Registration Online in India - Online Procedure";
            $this->meta_keywords = "public ltd company in india, public limited company registration, public limited company formation, incorporation of a public limited company, public limited company registration process, public limited company registration fees, formation of public limited company in india, incorporation of public limited company in india, public ltd company registration in india, register a public limited company";
            $this->meta_description = "At JustStart. Procedure for incorporation of public limited company in India, now the time has come to register your online public ltd company. Get free advice.";
        } else if( $slug == 'sole-proprietorship-registration' ){
            $this->meta_title = "Sole Proprietorship Registration in India - Proprietor Company Online Procedure";
            $this->meta_keywords = "";
            $this->meta_description = "Start your business journey as an individual with a proprietorship firm. JustStart provides Sole Proprietorship Registration Online in India. Get expert advice.";
        } else if( $slug == 'trademark-registration-india' ){
            $this->meta_title = "Trademark Filing in India Online Procedure | JustStart";
            $this->meta_keywords = "Trademark registration, trademark registry, trademark in india, trademark india, e register trademark,brand registration, logo trademark, register a trademark, trademark registration process, trademark registration india, trademark registration in india, e filing trademark, register a trademark in india, registration of trademark in india, india, trademark registration";
            $this->meta_description = "Secure your brand identity with JustStart's trademark registration in India. Register your trademark now in 4 easy steps to enhance your brand reputation.";
        } else if( $slug == 'llp-registration-india' ){
            $this->meta_title = "Limited Liability Partnership at Rs. 7499 | LLP Registration Online | JustStart";
            $this->meta_keywords = "Llp registration, llp company, what is llp company, llp registration fees, llp incorporation, limited liability company india, llp registration process, llp incorporation procedure, llp in india, limited liability partnership india, limited liability partnership in india, llp company registration, llp registration online, llp registration india, llp registration in india, llp registration procedure, register llp, register an llp, incorporation of limited liability partnership";
            $this->meta_description = "Get LLP registration with JustStart at minimum price. Know the limited liability partnership online registration process, fees, & documents.";
        } else if( $slug == 'one-person-company-opc-registration' ){
            $this->meta_title = "One Person Company (OPC) Registration in India | OPC Registration | JustStart";
            $this->meta_keywords = "opc registration process, opc registration, opc registration online, register opc online, one person company, one person company in india, one person company registration, opc company registration, opc registration fees, register one person company, register opc online, one man company, single person company, one person company registration documents, single person company registration, opc company in india, opc registration cost, opc incorporation, one person company opc, 1 person company, single man company";
            $this->meta_description = "One person company registration is one-man army under the companies act 2013, At JustStart online and fast OPC register is just one single member and one director.";
        }

        $pageData = array(
            'meta_title'    => $this->meta_title,
            'meta_keywords'    => $this->meta_keywords,
            'meta_description'    => $this->meta_description
        );
        

        if( array_key_exists($slug, $viewArray) ){
            return view('service/'.$slug, $pageData);
        } else {
            abort(404, 'Page not found');
        } 
        
    }

}
