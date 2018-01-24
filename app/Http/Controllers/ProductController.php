<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //

    private $productModel;

    public function __construct(Product $product ){

        $this->productModel = $product;
    
    }

    public function index()
    {
        $data = $this->productModel->get();

        return view('pages.product.index',compact('data')); 
    }


    public function show($id)
    {
        $showdata = $this->productModel->find($id);
        return view('pages.product.show',compact('showdata'));


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

    public function edit($id)
    {
        $editdata = $this->productModel->find($id);
        return view('pages.product.edit',compact('editdata'));

        
    }

    public function update($id,Request $request )
    {
        $this->productModel->findOrFail($id)->update($request->all());
        return redirect('management/product');
        
    }

    public function destroy($id){

        $this->productModel->findOrFail($id)->delete();
        return redirect('management/product');

    }




}
