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
}
