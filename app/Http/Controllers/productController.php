<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use App\Models\Product;


class productController extends Controller
{
    public function showProduct()
    {
        $products = Product::with('category')->get();
        return view('admin.product', compact('products'));
    }

    public function createProduct()
    {
        $categories = CategoryProduct::all(); // Fetch all categories
        return view('admin.createProduct', compact('categories'));
    }

    public function storeProduct(Request $request)
    {
        // Validate input data
        $request->validate([
            'name_product' => 'required|string|max:255',
            'category_id' => 'required',
            'price_product' => 'required|numeric',
        ]);

        // Create a new product
        Product::create([
            'name_product' => $request->name_product,
            'category_id' => $request->category_id,
            'price_product' => $request->price_product,
        ]);

        // Redirect or return success message
        return redirect()->route('admin.showProduct')->with('success', 'Product created successfully.');
    }

    public function editProduct($id)
    {
        // Retrieve all categories to populate the dropdown
        $categories = CategoryProduct::all();
        // Retrieve the product by ID
        $product = Product::findOrFail($id);
        // dd($id, $product->get());

        return view('admin.editProduct', compact('product', 'categories'));
    }

    public function updateProduct(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name_product' => 'required|string|max:255',
            'category_id' => 'required',
            'price_product' => 'required|numeric',
        ]);

        // Menemukan produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Update produk
        $product->update([
            'name_product' => $request->name_product,
            'category_id' => $request->category_id,
            'price_product' => $request->price_product,
        ]);

        return redirect()->route('admin.showProduct')->with('success', 'Product updated successfully.');
    }

    public function destroyProduct($id)
    {
        // Menemukan produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Hapus produk
        $product->delete();

        // Redirect atau kirim pesan sukses
        return redirect()->route('admin.showProduct')->with('success', 'Product deleted successfully.');
    }
}
