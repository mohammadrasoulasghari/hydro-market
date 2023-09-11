<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\detail;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $path=Storage::putFile('', $request->picture_url);
        Brand::create([
            'name' => $request->name,
            'picture_url' => $path
        ]);
        return redirect(route('panel.show'))->with('alert', 'برند شما با موفقیت افزوده شد');
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
    public function showDeletePage()
    {
        $brands = Brand::all();
        return view('panel-admin.delete-brand',compact('brands'));
    }
    public function delete(Brand $brands)
    {
        $brand = Brand::find($brands->id);
        $brand->delete();
        return redirect()->route('delete.show')->with('alert', 'برند شما با موفقیت حذف شد');

    }
    public function addDetailPage()
    {
        $brands = Brand::all();
        return view('panel-admin.add-detail-page',compact('brands'));
    }
    public function addDetail(Brand $brand)
    {
        return view('panel-admin.add-detail',compact('brand'));
        return redirect()->route('add.detail')->with('alert', 'برند شما با موفقیت حذف شد');

    }
    public function storeDetail(Request $request,Brand $brand){
        $path=Storage::putFile('', $request->picture_url);
       detail::create([
          'name' => $request->name,
          'picture_url' => $path,
          'forward_url' => $request->forward_url,
          'brand_id' => $brand->id,
       ]);
    }
    
}
