<?php
 
 namespace App\Lib\Crud;
 use App\Model\Category as Model;
 use App\Http\Controllers\Crud\CategoryController;
use Illuminate\Support\Facades\Log;


class Category{

         public static function insert(string $name):bool{
               try{
                     $data=Model::create(["name" => $name]);
                     if (isset($data) and $data) {
                        return true;
                    } else {
                        return false;
                    }   
                }
                catch(\Exception $e){ 
                    throw new \Exception('Category already exists!');
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