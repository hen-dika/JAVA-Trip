<?php

namespace App\Http\Controllers;

use App\About;
use App\BannerPartner;
use Illuminate\Http\Request;
use App\TravelPackages;
use Artesaos\SEOTools\Facades\SEOMeta;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $about = About::get()->first();
        
        SEOMeta::setTitle($about->meta_title);
        SEOMeta::setDescription($about->meta_description);
        SEOMeta::setCanonical($request->url());
        
        $data = [
            'items' => TravelPackages::with(['gallery'])->get(),
            'banners' => BannerPartner::where('status', 'active')->get(),
        ];
        return view('pages.home', $data);
    }
}
