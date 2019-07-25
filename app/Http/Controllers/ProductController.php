<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Brand;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $allcategory = Category::all()->toArray();
         $allbrand = Brand::all()->toArray();
         return view('backend.pages.product.create', compact('allcategory','allbrand' ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'product_image' => 'required',
            'product_image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasfile('product_image')){
     
             $extension = strtolower($request->file('product_image')->getClientOriginalExtension()); 
             $fileName = str_random() . '.' . $extension;
                
                $request->file('product_image')->move(public_path().'/images/',$fileName);
                $product->product_image= $fileName;
                
            
        }


        $product = new Product;
        $product->product_name=$request->get('product_name');
        $product->category_id=$request->get('category_name');
        $product->brand_id=$request->get('brand_name');
        $product->product_short_description=$request->get('product_short_description');
        $product->product_long_description=$request->get('product_long_description');
        $product->product_price=$request->get('product_price');
        $product->product_color=$request->get('product_color');
        $product->publication_status=$request->get('publication_status');

        $product->product_name=$request->product_name;
        
       


        $product->save();
        return redirect('admin/product')->with('message', 'Successfully Created');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
