<?php

namespace App\Http\Controllers\Backend;

use view;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    function index($id = null)
    {
        $editedBrand = null;
        $brands = brand::get();
        return view('Backend.brand.index', compact('editedBrand', 'brands'));
    }
    function storeOrUpdate(Request $request, $id = null)
    {
        $request->validate([
            'title' => 'required',
            'icon' => 'nullable||mimes:jpg,jpeg,png',
        ]);
       
        if ($request->hasFile('icon')) {
            $iconName = $request->title . '.' . $request->icon->Extension();
            $icon = $request->icon->storeAs('brands', $iconName, 'public');
        }

        $brand = new brand();
        $brand->title = $request->title;
        $brand->icon = $icon ?? null;
        $brand->save();
        return redirect()->back()->with('success', 'Brand Created Successfully');
    }
}
