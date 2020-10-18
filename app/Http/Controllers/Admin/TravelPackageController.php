<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\TravelPackageRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\TravelPackages;

class TravelPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Javatrip|Dashboard',
            'items' => TravelPackages::all()
        ];
        return view('pages.admin.travel-package.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Javatrip|Dashboard'
        ];
        return view('pages.admin.travel-package.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TravelPackageRequest $request)
    {
        $getVar = $request->all();
        $getVar['slug'] = Str::slug($request->title);
        TravelPackages::create($getVar);
        
        return redirect()->route('travel-package.index');
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
            'title' => 'Javatrip|Dashboard',
            'item' => TravelPackages::findOrFail($id) 
        ];
        return view('pages.admin.travel-package.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TravelPackageRequest $request, $id)
    {
        $getVar = $request->all();
        $getVar['slug'] = Str::slug($request->title);
        $item = TravelPackages::findOrFail($id);
        $item -> update($getVar);

        return redirect()->route('travel-package.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = TravelPackages::findOrFail($id);
        $item -> delete();

        return redirect()->route('travel-package.index');
    }
}
