<?php

namespace App\Http\Controllers\Backend;

use App\Models\brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    function index()
    {
        return view('Backend.products.index');
    }

    function create()
    {

        $categories = Category::get();
        $brands = brand::get();
        return view('Backend.products.create', compact('categories', 'brands'));
    }
}
