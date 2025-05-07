<?php

namespace App\Http\Controllers;

use App\Models\Csr;
use App\Models\FooterBanner;
use App\Models\Hero;
use App\Models\HomePage;
use App\Models\ListService;
use App\Models\Navbar;
use App\Models\Social;
use App\Models\Uniqueness;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $homePage = HomePage::where('active',1)->find(1);
        $homeNav = HomePage::where('active', 1)->whereIn('id', [1, 2, 3, 4, 5])->get();
        $homeService = HomePage::where('active',1)->find(2);
        $listServices = ListService::get();
        $uniquenessTitle = HomePage::where('active',1)->find(3);
        $uniqueness = Uniqueness::get();
        $csrTitle = HomePage::where('active',1)->find(4);
        $hiddenTitle = HomePage::where('active',1)->find(5);

        $hero_banner = Hero::orderBy('order')->get();

        $csrs = Csr::orderBy('order')->get();

        $footer_banner = FooterBanner::first();

        $socials = Social::first();
        $nav = Navbar::orderBy('order')->get();
        $navLogo = HomePage::find(9);

        return view('home',compact('homePage','nav', 'navLogo', 'homeNav','hero_banner', 'homeService', 'listServices', 'uniquenessTitle', 'uniqueness', 'csrTitle','hiddenTitle', 'csrs', 'socials', 'footer_banner'));
    }
}
