<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Group;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Tag;

class EditController extends BaseController
{
    public function __invoke(Product $product)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $colors = Color::all();
        $groups = Group::all();
        $addition_images = ProductImage::where('product_id', $product->id)->get();
        return view('product.edit', compact('product', 'categories', 'colors', 'tags', 'groups', 'addition_images'));
    }
}
