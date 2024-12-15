<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use App\Models\PaymentUser;

class AdminController extends Controller
{
    public function dashboard()
    {
        $categoryCount = CategoryProduct::count();
        $productCount = Product::count();
        $transactionCount = PaymentUser::count();

        return view('admin.dashboard.index', compact('categoryCount', 'productCount', 'transactionCount'));
    }

    public function showCategory()
    {
        $categories = CategoryProduct::all();
        return view('admin.category.index', compact('categories'));
    }

    public function createCategory()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        CategoryProduct::create($request->all());

        return redirect()->route('admin.showCategory')
            ->with('success', 'Article created successfully.');
    }

    public function editCategory(CategoryProduct $categories)
    {
        return view('admin.category.edit', compact('categories'));
    }

    public function update(Request $request, CategoryProduct $categories)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $categories->update($request->all());

        return redirect()->route('admin.showCategory')
            ->with('success', 'Article updated successfully.');
    }

    public function destroy(CategoryProduct $categories)
    {
        $categories->delete();

        return redirect()->route('admin.showCategory')
            ->with('success', 'Article deleted successfully.');
    }
}
