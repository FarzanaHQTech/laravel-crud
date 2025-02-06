<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Console\View\Components\Confirm;
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
        // $products = Product::paginate(2);
        // return view('products.index',compact('products'));

        $products = Product::paginate(3);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("products.create");
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
            "name" => "required|min:4",
            "description" => "required|min:5",
            "price" => "required|min:4|numeric",
            "image" => "required|image|mimes:jpg,jpeg,png,webp|max:2048"
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        //    $imageName = $request->name.".".$request->file('image')->extantion();
        $imageName = $request->name . "." . $request->file('image')->extension();

        $request->file('image')->move(public_path('product_image'), $imageName);
        $product->image = $imageName;

        if ($product->save()) {
            return redirect('product')->with('success', "product create successfully");
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view("products.update",compact('product'));
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
        $request->validate([
            "name" => "required|min:4",
            "description" => "required|min:5",
            "price" => "required|min:4|numeric",
            "image" => "required|image|mimes:jpg,jpeg,png,webp|max:2048"
        ]);

      
        $product= Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $imageName = $request->name.".".$request->file('image')->extension();
        $request->file('image')->move(public_path('product_image'),$imageName);
        $product->image = $imageName;


        if($product->save()){
            return redirect('product')->with('success', "product create successfully");
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product_del = Product::destroy($id);
        if($product_del){
           
            return redirect('product')->with("success","product deleted successfully");
        }
    }
}
