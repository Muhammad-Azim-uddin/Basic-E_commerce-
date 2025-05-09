<?php

namespace App\Http\Controllers\Backend;

use view;
use App\Models\brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Container\Attributes\Storage;

class BrandController extends Controller
{
    function index($id = null)
    {
        $editedBrand = brand::find($id)?? null;
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

        $brand = brand::find($id)?? new brand();
        $brand->title = $request->title;
        if ($request->hasFile('icon') && isset($brand->icon)){
            Storage::disk('public')->delete($brand->icon);
        }
        $brand->status = $request->has('status'); // Automatically true/false
        $brand->icon = $icon ?? $brand->icon;
        $brand->save();
        notify()->success($id ? 'Brand Updated Successfully' : 'Brand Added Successfully');

        return redirect()->back()->with('success', [
            'message' => $id ? 'Brand Updated Successfully' : 'Brand Added Successfully',
        ]);
    }

    function delete($id){
        $brand = brand::find($id);
        $brand->delete();
        notify()->success('Brand Deleted Successfully');
        return back();
    }

}
