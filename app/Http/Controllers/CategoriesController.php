<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    
    public function getCategories(){

        $categories = Categories::all(); 


        return $categories;
    }

    
    public function categories (Request $request)
    {

     $newCategories = new Categories();
  
        $newCategories->category = $request->category;
        $newCategories->category_id = $request->category_id;
        $newCategories->type = $request->type;
        
        

        $newCategories->save();

        return $newCategories;
    }
}
