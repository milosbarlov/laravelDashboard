<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductsController extends Controller
{

    public function index(){

        $models = Products::all();
        
        return view('products.index',[
            'models'=>$models
        ]);
    }
}
