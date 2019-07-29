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
        
        
        $allproduct = Product::all()->toArray();

        return view('backend.pages.product.index' , compact('allproduct'));
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
        if($request->hasfile('product_image'))
        {
            $image=$request->file('product_image');
           
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/',$name);
                $product->product_image= $name;
                           
        }

        $product->save();
        // return back()->with('message', 'Successfully Created');
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
         $product = Product::find($id)->toArray();
         $allcategory = Category::all()->toArray();
         $allbrand = Brand::all()->toArray();
         return view('backend.pages.product.edit' , compact('product', 'allcategory' , 'allbrand'));
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
        $product = Product::find($id);
        $product->product_name=$request->get('product_name');
        $product->category_id=$request->get('category_name');
        $product->brand_id=$request->get('brand_name');
        $product->product_short_description=$request->get('product_short_description');
        $product->product_long_description=$request->get('product_long_description');
        $product->product_price=$request->get('product_price');
        $product->product_color=$request->get('product_color');
        $product->publication_status=$request->get('publication_status');

       
        if($request->hasfile('product_image'))
        {
            $image=$request->file('product_image');
           
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/',$name);
                $product->product_image= $name;
                           
        }
      
        
        $product->save();

        // return redirect('admin/product');
        return redirect('admin/product')->with('message', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        // return redirect('admin/product');
        return redirect()->back()->with('message', 'Successfully Deleted');
    }
}
