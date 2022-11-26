<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
        'category_item',
        'brand_name',
        'product_name',
        'price',
        'color',
        'user_id',
        'image_path1',
        'image_path2',
        'image_path3',
        'image_path4',

    ];
}
