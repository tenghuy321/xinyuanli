<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use App\Models\Social;
use App\Models\Gallery;
use App\Models\HomePage;
use App\Models\FooterBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Traits\CapsuleManagerTrait;

class GalleryController extends Controller
{
    public function index(){
        $galleryTitle = HomePage::find(6);
        $gallery = Gallery::orderBy('order')->get();
        $socials = Social::first();
        $footer_banner = FooterBanner::first();
        $nav = Navbar::orderBy('order')->get();
        $navLogo = HomePage::find(9);

        return view('galleryFront', compact('galleryTitle', 'navLogo', 'nav', 'gallery', 'socials', 'footer_banner'));
    }
}
