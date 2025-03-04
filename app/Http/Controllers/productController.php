<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;



class ProductController extends Controller
{
    public function showProduct(Request $request)
    {

        // Mengambil semua produk dengan pagination
        $products = Product::with('category')->latest()->get(); //Pagination untuk untuk menghindari mengambil terlalu banyak data sekaligus 
        return view('admin.product.index', compact('products'));
    }

    public function createProduct()
    {
        $categories = CategoryProduct::all(); // Fetch all categories
        return view('admin.product.create', compact('categories'));
    }

    public function storeProduct(Request $request)
    {
        // Validate input data
        $validatedData = $request->validate([
            'name_product' => 'required|string|max:255',
            'category_id' => 'required',
            'image_path' => 'required|image',
            'price_product' => 'required|numeric',
        ]);

        //Jika validasi berhasil maka ambil image_path jika ada request an tipe file maka simpan di storage laravel dengan nama yg telah ditentukan
        $validatedData['image_path'] = $request->file('image_path')->store('image_paths');

        // Create a new product
        Product::create($validatedData);

        Alert::success(
            'Success Added Product',
            'Successfully added new product.'
        );

        // Redirect or return success message
        return redirect()->route('admin.showProduct')->with(key: 'added', value: true);
    }

    public function editProduct($id)
    {
        // Retrieve all categories to populate the dropdown
        $categories = CategoryProduct::all();
        // Retrieve the product by ID
        $product = Product::findOrFail($id);
        // dd($id, $product->get());

        return view('admin.product.edit', compact('product', 'categories'));
    }

    public function updateProduct(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name_product' => 'required|string|max:255',
            'category_id' => 'required',
            'image_path' => 'sometimes|image',
            'price_product' => 'required|numeric',
        ]);

        // Menemukan produk berdasarkan ID
        $product = Product::findOrFail($id);

        if ($request->hasFile('image_path')) {
            File::delete(storage_path('app/public/' . $product->image_path));
            $validatedData['image_path'] = $request->file('image_path')->store('image_paths');
        }


        // Update produk
        $product->update($validatedData);

        // Set session flash message dynamically
        session()->flash('alert', [
            'type' => 'success', // 'success', 'error', 'warning', 'info'
            'title' => 'Success Edited Product',
            'message' => 'Successfully edited product.'
        ]);

        return redirect()->route('admin.showProduct')->with(key: 'edited', value: true);
    }

    public function destroyProduct($id)
    {
        // Menemukan produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Hapus produk
        File::delete(storage_path('app/public/' . $product->image_path));
        $product->delete();

        // Set session flash message dynamically
        session()->flash('alert', [
            'type' => 'success', // 'success', 'error', 'warning', 'info'
            'title' => 'Deleted!',
            'message' => 'Your product has been deleted successfully.'
        ]);

        // Redirect atau kirim pesan sukses
        return redirect()->route('admin.showProduct')->with(key: 'deleted', value: true);
    }
}
