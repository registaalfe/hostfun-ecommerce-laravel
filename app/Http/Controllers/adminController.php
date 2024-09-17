<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function dashboard()
    {
        return view('admin.index');
    }

    public function showCategory()
    {
        $categories = CategoryProduct::all();
        return view('admin.category', compact('categories'));
    }

    public function createCategory()
    {
        return view('admin.createCategory');
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
        return view('admin.editCategory', compact('categories'));
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
