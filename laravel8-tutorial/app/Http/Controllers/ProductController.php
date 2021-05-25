<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get products from DB and show in
        //dd() function means 'Dump and Die', dump a variable's contents to the browser and prevent the further script execution.
//        \DB::table('products')->get()->dd();

        //Get products from DB and pass this values to product index view
        $products = DB::table('products')->get();
        return view('products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if product has a field call product type
        // and it has another table used to save product type
        // and we want to get product types to show on create page to choose from a dropdown box .

        $users = DB::table('users')->get()->pluck('name', 'id');
        //$productTypes = DB::table('productTypes')->get()->pluck('number', 'id');

        return view('products.create')
            ->with('users', $users);
            //->with('productTypes', $productTypes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // use to display all request fields
//        dd($request->all());

        //in this time the created_at field will be null, because we didn't set the value. we will use another to store the fields later
        $id = DB::table('products')->insertGetId([
            'name' => $request->input('name'),
            'code' => $request->input('code'),
            'description' => $request->input('description'),
            'stock' => $request->input('stock'),
            'price' => $request->input('price'),
        ]);

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // Display product detail on screen
//        dd($product);

        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //Get all user from DB
        //$users = DB::table('users')->get()->pluck('name', 'id')->prepend('none')->dd();

        //you can get productType if you need (like create method)
        //skip...

        //you can get some information by product id (where condition)
//        $something = DB::table('table_name')->where('product_id', $product->id)->first();

        return view('products.edit')
            ->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        DB::table('products')
            ->where('id', $product->id)
            ->update([
                'name' => $request->input('name'),
                'code' => $request->input('code'),
                'description' => $request->input('description'),
                'stock' => $request->input('stock'),
                'price' => $request->input('price'),
            ]);

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        DB::table('products')
            ->where('id', $product->id)
            ->delete();

        return redirect()->route('products.index');
    }
}
