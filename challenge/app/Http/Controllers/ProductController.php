<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $perPage = $request->perPage == null ? 10 : $request->perPage;
        $product = new Product();
        if ($request->gender) {
            $product = $product->where('gender_id', $request->gender);
        }
        if ($request->category) {
            $product = $product->where('categorie_id', $request->category);
        }
        if ( $request->size) {
            $product = $product->where('size_id', $request->size);
        }
        $product= $product->paginate($perPage);
        return ProductResource::collection($product);
    }
}
