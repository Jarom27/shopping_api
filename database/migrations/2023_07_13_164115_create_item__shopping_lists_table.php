<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('item__shopping_lists', function (Blueprint $table) {
            $table->id();
            $table->integer("quantity")->default(1);
            $table->foreignId("shopping_list_id")->constrained("shopping_lists");
            $table->foreignId("item_id")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item__shopping_lists');
    }
};
