<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'price',
        'image',
        'ingredients',
        'status',
        'food_cat_id',
    ];
}
