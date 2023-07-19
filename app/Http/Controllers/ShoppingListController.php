<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ShoppingList;
use Illuminate\Http\Request;

class ShoppingListController extends Controller
{
    //
    public function showAllShoppingLists(){
        $shopping_lists = ShoppingList::orderByDesc("creation_date")->get();
        return json_encode($shopping_lists);
    }
    public function showActiveList(){
        $shopping = ShoppingList::where("state","Active")->get()[0];
        $shopping->pivot;
        $info = [$shopping,$shopping->pivot,$shopping->items];
        return json_encode($info[0]);
    }
    public function addItemToTheList(Request $request){
        $request->validate(["id" => "required"]);
        $item = Item::find($request->id);
        $shopping = ShoppingList::where("state","Active")->first();
        $shopping->items()->attach($item);
        $shopping->save();
    }
    public function updateItem($id,Request $request){
        $shopping = ShoppingList::where("state","Active")->first();
        $shopping->items()->find($id)->pivot->quantity = $request->quantity;
        $shopping->save();
    }
}
