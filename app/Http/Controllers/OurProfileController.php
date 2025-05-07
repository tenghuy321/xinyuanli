<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Navbar;
use App\Models\Social;
use App\Models\HomePage;
use App\Models\Profiles;
use App\Models\CoreValue;
use App\Models\FooterBanner;
use Illuminate\Http\Request;

class OurProfileController extends Controller
{
    public function index() {
        $profileNav = Profiles::get();
        $msg = Profiles::find(1);
        $vision = Profiles::find(2);
        $mission = Profiles::find(3);
        $coreValue_title = Profiles::find(4);
        $core_values = CoreValue::get();
        $socials = Social::first();

        $hero_banner = Hero::orderBy('order')->get();

        $footer_banner = FooterBanner::first();
        $nav = Navbar::orderBy('order')->get();
        $navLogo = HomePage::find(9);

        return view("ourprofile", compact('msg', 'nav', 'navLogo','profileNav','hero_banner', 'vision', 'mission', 'coreValue_title', 'core_values', 'socials', 'footer_banner'));
    }
}
