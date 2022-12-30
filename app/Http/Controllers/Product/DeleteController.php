<?php

namespace App\Http\Controllers\Product;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DeleteController extends BaseController
{
    public function __invoke(Product $product)
    {
        Storage::disk('public')->delete($product->preview_image);
        $product->delete();
        return redirect()->route('product.index');
    }
}
