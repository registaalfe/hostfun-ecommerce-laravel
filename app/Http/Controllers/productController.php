<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryProduct;


class productController extends Controller
{
    public function index()
    {
        return view('admin.product');
    }

    public function createProduct()
    {
        $categories = CategoryProduct::all(); // Fetch all categories
        return view('admin.createProduct', compact('categories'));
    }
}
