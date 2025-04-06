<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\CategoryProduct;
use App\Models\Transactions;

class AdminController extends Controller
{
    public function dashboard()
    {
        $categoryCount = CategoryProduct::count();
        $productCount = Product::count();
        $transactionCount = Transactions::count();

        return view('admin.dashboard.index', [
            'title' => 'Dashboard Admin',
            'categoryCount' => $categoryCount,
            'productCount' => $productCount,
            'transactionCount' => $transactionCount,
        ]);
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
            ->with(key: 'added', value: true);
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

        // Set session flash message dynamically
        session()->flash('alert', [
            'type' => 'success', // 'success', 'error', 'warning', 'info'
            'title' => 'Success Edited Category',
            'message' => 'Successfully edited category.'
        ]);

        return redirect()->route('admin.showCategory')
            ->with(key: 'edited', value: true);
    }

    public function destroy(CategoryProduct $categories)
    {
        // Delete all products linked to this category
        $categories->products()->delete(); // Assuming `products()` is the relation in the model

        $categories->delete();

        // Set session flash message dynamically
        session()->flash('alert', [
            'type' => 'success', // 'success', 'error', 'warning', 'info'
            'title' => 'Deleted!',
            'message' => 'Your category has been deleted successfully.'
        ]);

        return redirect()->route('admin.showCategory')
            ->with(key: 'deleted', value: true);
    }
}
