<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lib\Crud\Variant;

class VariantController extends Controller
{
    public function index(Request $request)
    {
            $id=$request->id;
            return view('variant', compact("id"));
    }

    public function insert(Request $request)
    {    
            $name=$request->name;
            $price=$request->price;
            $quantity=$request->quantity;
            $size=$request->size;
            $color=$request->color;
            $id=$request->id;
            try{
                    $data= Variant::insert($name,$id,$price,$quantity,$size,$color );
                    return redirect('productdata')->with('info',' Variant save');
            }
            catch(\Exception $e){
                return redirect('productdata')->with('error',$e->getMessage());
            }
    }
}
