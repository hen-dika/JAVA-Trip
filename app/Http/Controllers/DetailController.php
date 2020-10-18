<?php

namespace App\Http\Controllers;

use App\TravelPackages;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $data = [
            'item' => TravelPackages::with(['gallery'])->where('slug', $slug)->firstOrFail()
        ]; 
        return view('pages.detail', $data);
    }
}
