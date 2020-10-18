<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GalleryRequest;
use App\Http\Controllers\Controller;
use App\TravelPackages;
use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class GalleryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Javatrip|Gallery',
            'items' => Gallery::with(['travel_package'])->get()
        ];
        return view('pages.admin.gallery.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Javatrip|Gallery',
            'travel_packages' => TravelPackages::all()
        ];
        return view('pages.admin.gallery.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $getVar = $request->all();
        $getVar['image'] = $request->file('image')->store('images/uploads/gallery','public');
        Gallery::create($getVar);

        return redirect()->route('gallery.index');
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
        $data = [
            'title' => 'Javatrip|Gallery',
            'item' => Gallery::findOrFail($id),
            'travel_packages' => TravelPackages::all()
        ];
        return view('pages.admin.gallery.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, $id)
    {
        $getVar = $request->all();
        $getVar['image'] = $request->file('image')->store('images/uploads/gallery','public');
        $item = Gallery::findOrFail($id);
        $item->update($getVar);

        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Gallery::findOrFail($id);
        $item -> delete();

        return redirect()->route('gallery.index');
    }
}
