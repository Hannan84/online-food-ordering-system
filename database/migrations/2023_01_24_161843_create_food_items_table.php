<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_item', function (Blueprint $table) {
            $table->id();
            $table->string('item_name')->nullable();
            $table->double('price',15,8)->nullable();
            $table->string('image')->nullable();
            $table->string('ingredients')->nullable();
            $table->integer('status')->default(1);
            $table->foreignId('food_cat_id')->nullable()->constrained('food_categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_item');
    }
};
