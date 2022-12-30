<?php

namespace App\Service;

use App\Models\ColorProduct;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductTag;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductService
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $tagsIds = $data['tags'];
            $colorsIds = $data['colors'];
            $productImages = $data['product_images'];
            unset($data['tags'], $data['colors'], $data['product_images']);

            $data['preview_image'] = Storage::disk('public')->put('/images/preview', $data['preview_image']);

            $product = Product::create($data);

            foreach ($productImages as $productImage) {
                $currentImages = ProductImage::where('product_id', $product->id)->count();
                if ($currentImages > 3) continue;
                $filePath = Storage::disk('public')->put('/images/addition', $productImage);
                ProductImage::create([
                    'product_id' => $product->id,
                    'file_path' => $filePath,
                ]);
            }
            foreach ($tagsIds as $tagId) {
                ProductTag::firstOrCreate([
                    'product_id' => $product->id,
                    'tag_id' => $tagId,
                ]);
            }
            foreach ($colorsIds as $colorId) {
                ColorProduct::firstOrCreate([
                    'product_id' => $product->id,
                    'color_id' => $colorId,
                ]);
            }
            DB::commit();

        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }
        return $product;
    }

    public function update($data, $product)
    {
        try {
            DB::beginTransaction();
            if (isset($data['tags'])) $tags = $data['tags'];
            if (isset($data['colors'])) $colors = $data['colors'];
            if (isset($data['addition_image_file_path'])) $old_images = $data['addition_image_file_path'];
            if (isset($data['add_images'])) $add_images = $data['add_images'];

            unset($data['tags'], $data['colors'], $data['addition_image_filepath'], $data['add_images']);

            $currentImages = ProductImage::where('product_id', $product->id)->count();

            if (isset($old_images) && $currentImages > 3) {
                foreach ($old_images as $old_image) {
                    Storage::disk('public')->delete($old_image);
                    ProductImage::where('file_path', $old_image)->delete();
                }
            }
            if (isset($add_images) && $currentImages < 3) {
                foreach ($add_images as $add_image) {
                    $filePath = Storage::disk('public')->put('/images/addition', $add_image);
                    ProductImage::create([
                        'product_id' => $product->id,
                        'file_path' => $filePath,
                    ]);
                }
            }
            if (isset($data['preview_image'])) {
                Storage::disk('public')->delete($product->preview_image);
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }

            $product->update($data);

            if (isset($tags)) $product->tags()->sync($tags);
            if (isset($colors)) $product->colors()->sync($colors);

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }
        return $product;
    }
}
