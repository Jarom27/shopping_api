<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function items(){
        return $this->belongsToMany(Item::class,"item__shopping_lists")->withPivot("quantity");
    }
}
