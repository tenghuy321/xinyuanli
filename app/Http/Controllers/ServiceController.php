<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Audit;
use App\Models\Navbar;
use App\Models\Social;
use App\Models\HomePage;
use App\Models\Licensing;
use App\Models\Accounting;
use App\Models\Compliance;
use App\Models\OurService;
use App\Models\Regulatory;
use App\Models\FooterBanner;
use Illuminate\Http\Request;
use App\Models\BusinessRegistration;

class ServiceController extends Controller
{
    public function index(){
        $socials = Social::first();
        $serviceTitle = OurService::get();
        $hero_banner = Hero::orderBy('order')->get();
        $footer_banner = FooterBanner::first();
        $nav = Navbar::orderBy('order')->get();
        $navLogo = HomePage::find(9);


        return view('service', compact('socials', 'nav', 'navLogo', 'serviceTitle', 'footer_banner', 'hero_banner'));
    }

    public function businessRegistration() {
        $socials = Social::first();
        $serviceTitle = OurService::get();
        $businessTitle =  OurService::find(1);
        $businessHeader = BusinessRegistration::find(1);
        $businessFooter = BusinessRegistration::find(2);
        $businessImage = BusinessRegistration::find(3);
        $hero_banner = Hero::orderBy('order')->get();
        $footer_banner = FooterBanner::first();
        $nav = Navbar::orderBy('order')->get();
        $navLogo = HomePage::find(9);

        return view('services.businessRegistration', compact('socials', 'nav', 'navLogo', 'serviceTitle', 'footer_banner', 'hero_banner','businessTitle', 'businessHeader', 'businessFooter', 'businessImage'));
    }

    public function compliance() {
        $socials = Social::first();
        $serviceTitle = OurService::get();
        $complianceTitle =  OurService::find(2);
        $complianceImage=  Compliance::find(1);
        $compliances=  Compliance::where('id', '!=', 1)->get();
        $hero_banner = Hero::orderBy('order')->get();
        $footer_banner = FooterBanner::first();
        $nav = Navbar::orderBy('order')->get();
        $navLogo = HomePage::find(9);

        return view('services.compliance', compact('socials', 'nav', 'navLogo', 'serviceTitle', 'footer_banner', 'hero_banner','complianceTitle', 'complianceImage', 'compliances'));
    }

    public function accounting() {
        $socials = Social::first();
        $serviceTitle = OurService::get();
        $accountTitle = OurService::find(3);
        $accountImage = Accounting::find(1);
        $accounting = Accounting::where('id', '!=' , 1)->get();
        $hero_banner = Hero::orderBy('order')->get();
        $footer_banner = FooterBanner::first();
        $nav = Navbar::orderBy('order')->get();
        $navLogo = HomePage::find(9);

        return view('services.accounting', compact('socials', 'nav', 'navLogo', 'serviceTitle', 'footer_banner', 'hero_banner','accountTitle', 'accountImage', 'accounting'));
    }

    public function auditPreparation() {
        $socials = Social::first();
        $serviceTitle = OurService::get();
        $auditTitle =  OurService::find(4);
        $auditImage = Audit::find(1);
        $audites = Audit::where('id', '!=', 1)->get();
        $hero_banner = Hero::orderBy('order')->get();
        $footer_banner = FooterBanner::first();
        $nav = Navbar::orderBy('order')->get();
        $navLogo = HomePage::find(9);

        return view('services.audit', compact('socials', 'nav', 'navLogo', 'serviceTitle', 'footer_banner', 'hero_banner','auditTitle', 'auditImage', 'audites'));
    }

    public function businessLicensing() {
        $socials = Social::first();
        $serviceTitle = OurService::get();
        $licensingTitle = OurService::find(5);
        $licensingImage = Licensing::find(1);
        $licensinges = Licensing::where('id', '!=', 1)->get();
        $hero_banner = Hero::orderBy('order')->get();
        $footer_banner = FooterBanner::first();
        $nav = Navbar::orderBy('order')->get();
        $navLogo = HomePage::find(9);

        return view('services.licensing', compact('socials', 'nav', 'navLogo', 'serviceTitle', 'footer_banner', 'hero_banner','licensingTitle', 'licensingImage', 'licensinges'));
    }

    public function regulatoryAdvisory() {
        $socials = Social::first();
        $serviceTitle = OurService::get();
        $regulatoryTitle = OurService::find(6);
        $regulatoryImage = Regulatory::find(1);
        $regulatories = Regulatory::where('id', '!=', 1)->get();
        $hero_banner = Hero::orderBy('order')->get();
        $footer_banner = FooterBanner::first();
        $nav = Navbar::orderBy('order')->get();
        $navLogo = HomePage::find(9);

        return view('services.advisory', compact('socials', 'nav', 'navLogo', 'serviceTitle', 'footer_banner', 'hero_banner','regulatoryTitle', 'regulatoryImage', 'regulatories'));
    }
}
