<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Lib\Crud\Category;


class CategoryController extends Controller
{
        public function index(){
            return view('categoryadd');
        }

        public function insert(Request $request){
               try {
                   $name=$request->cname;
                   $data=Category::insert($name);
                   return redirect('product');  
               }
               catch(\Exception $e){
                   return redirect('category')->with('error',$e->getMessage()); 
               }
        }

        public function getAll(){
                try {
                    $data=Category::getAll();
                    return view('product',compact('data'));
                }
                catch(\Exception $e){
                    return redirect('category')->with('error',$e->getMessage());  
                }
        }
}
