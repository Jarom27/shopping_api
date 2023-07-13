<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function showAllItems(){
        $items = Item::all();
        return json_encode($items);
    }
    public function showItemsByCategory($category){
        if(Category::find($category) != null){
            $items_by_cat = Category::find($category);
            return json_encode($items_by_cat->items);
        }
        return json_encode([]);
    }
}
