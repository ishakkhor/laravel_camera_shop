<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Product;
use App\Category;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allbrand = Brand::all()->toArray();
        return view('backend.pages.brand.index', compact('allbrand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.brand.create');
        // return redirect()->back()->with('message', 'Successfully Updated');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brand;
        $brand->brand_name=$request->get('brand_name');

        $brand->save();
        return redirect('admin/brand')->with('message', 'Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $allcategory = Category::all()->toArray();
        $allbrand = Brand::all()->toArray();
        $allproduct = Product::where('brand_id','=',$id)->get();
         
        return view('frontend.pages.show_brand',compact('allcategory', 'allbrand', 'allproduct'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('backend.pages.brand.edit', compact('brand', 'id'));
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
        $brand = Brand::find($id);
        $brand->brand_name = $request->get('brand_name');
        
        $brand->save();

        // return redirect('admin/brand');
        return redirect('admin/brand')->with('message', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();

        // return redirect('admin/brand');
        return redirect()->back()->with('message', 'Successfully Deleted');
    }
}
