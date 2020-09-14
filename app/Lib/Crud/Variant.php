<?php
 
 namespace App\Lib\Crud;
 use App\Models\Variant as Model;
use Illuminate\Support\Facades\Input;
use App\Models\Product;

class Variant{

        public static function insert(array $input):bool{
                try {
                    $arrayLength = count($input['price']);
                    $array=[];

                    for ($i = 0; $i < $arrayLength; $i++) {

                    $data =[
                                'name' =>$input['name'][$i],
                                'product_id'=>$input['id'],
                                'price'=>$input['price'][$i],
                                'quantity'=>$input['quantity'][$i],
                                'size' =>$input['size'][$i], 
                                'color' =>$input['color'][$i]
                            ];

                        $array[] = new Model($data);  
                    }

                    $id=$input['id'];
                    $product =Product::find($id);
                    $var=$product->variant()->saveMany($array); 
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