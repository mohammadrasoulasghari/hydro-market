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
        return View('create-brand');
    }
    public function store(Request $request)
    {
        Brand::create([
            'name' => $request->name,
            'picture_url' => $request->picture_url,
        ]);
        return redirect(route('brands.index'))->with('alert',__('message.success_brand'));
    }
}
