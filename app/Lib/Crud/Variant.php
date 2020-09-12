<?php
 
 namespace App\Lib\Crud;
 use App\Model\Variant as Model;
use App\Model\Product;
 class Variant{

        public static function insert( $name,  $id, $price, $quantity, $size, $color):bool{
                try {
                    foreach ($name as $name) {
                        $a=$name;
                    }
                    foreach ($price as $price) {
                        $b=$price;
                    }
                    foreach ($quantity as $quantity) {
                        $c=$quantity;
                    }
                    foreach ($size as $size) {
                        $d=$size;
                    }
                    $input=[];
                    foreach ($color as $color) {
                        $input[]=['product_id' =>$id,'name'=>$a,'price'=>$b,'quantity'=>$c,'size'=>$d,'color'=>$color];
                    }
                    $var=Model::insert($input);
                    //$product = Product::find(1);
                   // dd($product->variant);
                  //  $product->Model()->save($input);
                   if(isset($var)and $var){
                       return true;
                   }
                   else{
                       return false;
                   }
               }
                catch(\Exception $e){
                    throw new \Exception('Variant Not Save !');
                    
                }
                
                

                
                   
     
    }

               






















 }