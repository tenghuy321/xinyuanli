<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Navbar;
use App\Models\Social;
use App\Models\HomePage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contact_us = HomePage::find(8);
        $hero_banner = Hero::orderBy('order')->get();

        $socials = Social::first();
        $nav = Navbar::orderBy('order')->get();
        $navLogo = HomePage::find(9);

        return view('contact', compact('socials', 'navLogo', 'nav','hero_banner', 'contact_us'));
    }
}
