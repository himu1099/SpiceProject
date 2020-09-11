<?php
namespace App\Lib\Crud;
use App\Http\Controllers\Crud\ProductController;
use App\Model\Product as Model;

class Product{
          
       public static function insert($name, $category, $quantity, $price):bool{
                try {
                    $var = new Model;
                    $var->category_id = $category;
                    $var->name = $name;
                    $var->price = $price;
                    $var->quantity = $quantity;
                    $data=$var->save();
                    if (isset($data) and $data) {
                        return true;
                    } else {
                        return false;
                    }     
                }
                catch(\Exception $e){
                    throw new \Exception('Product Not Insert !');
                }
        }

     
        public static function getAll():object{
            try {
                $data=Model::all();
                if (!empty($data)) {
                    return $data;
                } else {
                    return (object)[];
                }
            }   
            catch(\Exception $e){ 
                throw new \Exception('Category Not Found');
            }    
        }
}