<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Http\Filters\ProductFilter;
use App\Http\Requests\API\Product\IndexRequest;
use App\Http\Resources\Product\IndexProductResource;
use App\Models\Product;


class IndexController extends Controller
{
    public function __invoke(IndexRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(ProductFilter::class, ['queryParams' => array_filter($data)]);

        if ($data['sortBy'] == 'descPrice') {
            $products = Product::orderBy('price', 'desc')->filter($filter)->paginate(6, ['*'], 'page', $data['page']);
        } else if ($data['sortBy'] == 'ascPrice') {
            $products = Product::orderBy('price', 'asc')->filter($filter)->paginate(6, ['*'], 'page', $data['page']);
        } else if ($data['sortBy'] == 'sortModel') {
            $products = Product::orderBy('model', 'asc')->filter($filter)->paginate(6, ['*'], 'page', $data['page']);
        } else if ($data['sortBy'] == 'clear'){
            $products = Product::filter($filter)->paginate(6, ['*'], 'page', $data['page']);
        }else{
            $products = Product::filter($filter)->paginate(6, ['*'], 'page', $data['page']);
        }

        return IndexProductResource::collection($products);
    }
}
