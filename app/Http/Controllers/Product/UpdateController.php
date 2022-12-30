<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Product $product, ProductImage $product_images)
    {

        $data = $request->validated();

        $product = $this->service->update($data, $product, $product_images);

        return view('product.show', compact('product'));
    }
}
