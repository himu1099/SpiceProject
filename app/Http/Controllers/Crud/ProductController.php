<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lib\Crud\Product;

class ProductController extends Controller
{
        public function insert(Request $request){
                $category=$request->category;
                $name=$request->productname;
                $price=$request->price;
                $quantity=$request->quantity;
                $this->validate($request,[
                    'category'=>'required',
                    "price" =>" required|regex:/^\d+(\.\d{1,2})?$/",
                    "quantity" => 'numeric|min:2', 'Lno' => 'numeric|min:2',
                    'productname'=>'required',
                ]);
                try{
                    $data=Product::insert($name,$category,$quantity,$price);
                    return redirect("productdata")->with('message',"Product Save");
                }
                catch(\Exception $e){
                    
                    return redirect("product")->with('error',$e->getMessage());
                }
        }
        
        public function getAll(){
                try {
                    $data=Product::getAll();
                    return view('productdata', compact('data'));
                } catch (\Exception $e) {
                    return redirect('product')->with('error', $e->getMessage());
                }
        }
      
   
}
