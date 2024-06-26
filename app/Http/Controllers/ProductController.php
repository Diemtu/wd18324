<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public  function showProduct(){
        $products = [
            [
                'id' => '1',
                'name' => 'iphone 15'
            ],
            [
                'id' => '2',
                'name' => 'iphone 15promax'
            ],
        ];
        return view('list-product')->with([
            'products' => $products
        ]);
    }
    public function getProduct($id){
        echo $id;
    }
    public function updateProduct(Request $request){
        echo $request->id;
        echo $request->name;
    }
}
