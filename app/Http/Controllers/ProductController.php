<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::query();

        // Perform a user search, if desired
        if ($request->filled('search')) {
            $products->where('title', 'like', '%' . $request->input('search') . '%');
        }

        return view('products.index', ['products' => $products->paginate(12)]);
    }

}
