<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Navbar;
use App\Models\Social;
use App\Models\HomePage;
use App\Models\OurCareer;
use App\Models\FooterBanner;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index(){
        $careerTitle = HomePage::find(7);
        $our_careers = OurCareer::get();
        $socials = Social::first();

        $hero_banner = Hero::orderBy('order')->get();

        $footer_banner = FooterBanner::first();
        $nav = Navbar::orderBy('order')->get();
        $navLogo = HomePage::find(9);

        return view('career', compact('socials','nav', 'navLogo', 'hero_banner', 'careerTitle', 'our_careers', 'footer_banner'));
    }
}
