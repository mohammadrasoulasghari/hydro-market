<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\detail;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return View('index', compact('brands'));
    }
    public function panel()
    {
        $brands = Brand::all();
        return View('panel-admin.panel', compact('brands'));
    }
    public function showcreate()
    {
        $brands = Brand::all();
        return View('panel-admin.add-brand', compact('brands'));
    }
    public function store(Request $request)
    {
        Brand::create([
            'name' => $request->name,
            'picture_url' => $request->picture_url,
        ]);
        return redirect(route('brands.index'))->with('alert', 'برند شما با موفقیت افزوده شد');
    }


    public function edit(Brand $brands)
    {

        return View('brands.edit-brand', compact('brands'));
    }

    public function update(Request $request, Brand $brands)
    {
        $brands->update($request->all());
        return redirect()->route('brands.index')->with('alert', __('message.video_edited'));
    }
    public function brandList()
    {
        $brands = Brand::all();

        return view('brands.brands-list', compact("brands"));
    }
    public function brandDescription(Brand $brand)
    {
        $details = detail::where('brand_id', $brand->id)->get();
        return view('blog-details', compact('details'));
    }
    public function delete(Brand $brands)
    {
        $brand = Brand::find($brands->id);
        $brand->delete();
    }
    public function addDetail(Brand $brand)
    {
        return view('panel-admin.add-detail',compact('brand'));
    }
    public function storeDetail(Request $request,Brand $brand){
       detail::create([
          'name' => $request->name,
          'picture_url' => $request->picture_url,
          'forward_url' => $request->forward_url,
          'brand_id' => $brand->id,
       ]);
    }
}
