<?php

namespace App\Http\Controllers;

use App\BannerPartner;
use Illuminate\Http\Request;
use App\TravelPackages;

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
    public function index()
    {
        $data = [
            'items' => TravelPackages::with(['gallery'])->get(),
            'banners' => BannerPartner::where('status', 'active')->get()
        ];
        return view('pages.home', $data);
    }
}
