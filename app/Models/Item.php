<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function shopping_list(){
        return $this->belongsToMany(ShoppingList::class,"shopping_lists")->withPivot("quantity");
    }
}
