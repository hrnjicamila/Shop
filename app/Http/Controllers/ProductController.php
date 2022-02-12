<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')
        ->get();

        return view('products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.add');
        
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
            'name' => 'required|string|max:255',
        ]);

        DB::table('products')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'code' => $request->code,
            'type' => $request->type,
            'color' => $request->color,
            'size' => $request->size,
            'category' => $request->category,
            'brand' => $request->brand,
            'image' => $request->image,

           // if($request->hasfile('image'))
            //{
             //   $file=$request->file('image');
              //  $extention = $file -> getClientOriginalExtension();
               // $filename=time(). '.'.$extention;
                //$file->move('uploads/products/', $filename);
                //$products->image = $filename;


            //}
            //$products->save();
            //return redirect()->back()->with('status','Uspješno dodano!');
        ]);
        return redirect()->route('products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $request->id;

        $products = DB::table('products')
        ->where('id',$id)
        ->get();

        $brands = DB::table('brands')
        ->get();

        $categories = DB::table('categories')
        ->get();

        return view('products.edit',['products' => $products, 'brands'=>$brands,'categories'=>$categories ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $request->validate([

            'name'=>'required|string|max:255',
            

        ]);

        $update_query=DB::table('products')
            ->where('id', $id)
            ->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'code' => $request->code,
            'type' => $request->type,
            'color' => $request->color,
            'size' => $request->size,
            'category' => $request->category,
            'brand' => $request->brand,

        ]);
        return redirect()->route('products');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */

    public function delete(Request $request){
        $id =$request->id;

        Product::destroy($id);

        return redirect()->route('products');

     }
  


    public function destroy(Product $product)
    {
        //
    }
}


