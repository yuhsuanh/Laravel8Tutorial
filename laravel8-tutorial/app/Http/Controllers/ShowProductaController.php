<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProductType;

class ShowProductaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // Create this Controller use this command:
        // $ php artisan make:controller --invokable
        // You may generate an invokable controller by using the --invokable option

        //use response method to response the request
        //first parameter is message
        //second parameter is  HTTP Status Code -> 200 is OK
//         return response('product listing', 200);

        //in .env file DB_HOST should be mysql
        $product_types = ProductType::get();
        if ($request->query('id') !== null) {
            $product_types = $product_types->where('id', $request->query('id'));
        }
//        return response()->json($products);
        return view('show.index', ['product_types' => $product_types]);
    }
}
