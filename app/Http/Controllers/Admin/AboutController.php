<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.about.index', [
            'title' => 'About|Javatrip',
            'about' => About::get()->first()
        ]);
    }

    public function update(Request $request, $id)
    {
        $getVar = $request->all();

        $item = About::find($id);
        $item->update($getVar);

        return redirect()->route('about');
    }
}
