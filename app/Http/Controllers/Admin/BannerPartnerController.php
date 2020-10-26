<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BannerPartner;

class BannerPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.banner-partner.index', [
            'title' => 'Banner Partner|Javatrip',
            'items' => BannerPartner::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.banner-partner.create', [
            'title' => 'Banner Partner|Javatrip',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'image'=> 'required|image',
            'status' => 'required|in:active,inactive'
        ]);

        $getVar = $request->all();
        $getVar['image'] = $request->file('image')->store('images/uploads/banner-partner','public');

        BannerPartner::create($getVar);

        return redirect()->route('banner-partner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('pages.admin.banner-partner.edit', [
            'title' => 'Banner Partner|Javatrip',
            'banner' => BannerPartner::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
            'image'=> 'required|image',
            'status' => 'required|in:active,inactive'
        ]);

        $getVar = $request->all();
        $getVar['image'] = $request->file('image')->store('images/uploads/banner-partner','public');

        $item = BannerPartner::findOrFail($id);
        $item->update($getVar);

        return redirect()->route('banner-partner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $getVar = BannerPartner::findOrFail($id);
        $getVar->delete($id);

        return redirect()->route('banner-partner.index');
    }
}
