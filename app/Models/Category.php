<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function getCategoriesArray($reverse=false){
        if($reverse == true){
            $categoryNameArray = [];
            $categories = Category::all();
            foreach($categories as $category){
                $categoryNameArray[$category->category_name] = $category->id;
            }
            return $categoryNameArray;
        }

    }
}
