<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        $brands=Brand::all();
        return View('index',compact('brands'));
    }
    public function create()
    {
        return View('brands.create-brand');
    }
    public function store(Request $request)
    {
        Brand::create([
            'name' => $request->name,
            'picture_url' => $request->picture_url,
        ]);
        return redirect(route('brands.index'))->with('alert','برند شما با موفقیت افزوده شد');
    }

    public function edit(Brand $brands)
    {

        return View('brands.edit-brand',compact('brands'));
    }

    public function update(Request $request,Brand $brands){
        $brands->update($request->all());
        return redirect()->route('brands.index')->with('alert',__('message.video_edited'));
    }
    public function brandList()
    {
        $brands=Brand::all();
        
    return view('brands.brands-list',compact("brands"));
        
    }
}
