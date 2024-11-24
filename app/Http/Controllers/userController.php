<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.dashboard.index');
    }

    public function cardProduct()
    {
        $products = Product::with('category')->latest()->paginate(12);
        return view('users.product.index', compact('products'));
    }

    public function detailProduct($id)
    {
        // Retrieve all categories to populate the dropdown
        $categories = CategoryProduct::all();
        // Retrieve the product by ID
        $product = Product::findOrFail($id);
        // dd($id, $product->get());

        return view('users.product.details', compact('product', 'categories'));
    }

    public function payment()
    {
        return view('users.product.payment');
    }

    public function finishPayment()
    {
        return view('users.product.finishpayment');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
