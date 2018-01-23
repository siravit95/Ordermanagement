<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //

    public function index()
    {

        return view('pages.product.index'); 
    }

    public function create()
    {

        return view('pages.product.create'); 
    }

    public function store(Request $request){


    //dd($request->all());

    $input = $request->all();
    Product::create($input);
     //   $name = $request->input('name');

    }


}
