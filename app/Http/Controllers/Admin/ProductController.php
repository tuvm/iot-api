<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        $cover = $request->file('bookcover');
        $img = Image::make($cover);
        $originalPath = public_path() . '/uploads/products/images/';
        $thumbnailPath = public_path() . '/uploads/products/thumbnails/';

        $originalFilename = $cover->getClientOriginalName();
        $img->save($originalPath . $originalFilename);
        $img->resize(50, 50);
        $img->save($thumbnailPath . $originalFilename);

        return response()->json(['original_filename' => $originalFilename]);
    }

    public function getProducts()
    {
        $products = Product::with('gender', 'brand', 'badge', 'images')->get();
        return $products;
    }

    public function getProductDetail($id)
    {
        $id = (int)$id;
        $product = Product::with('gender', 'brand', 'badge', 'images')->where('id', $id)->get();
        return $product[0];
    }
}
