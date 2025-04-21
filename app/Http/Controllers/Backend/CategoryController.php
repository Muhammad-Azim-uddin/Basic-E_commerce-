<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    function index($id = null)
    {
        $categories = Category::latest()->get();
        $editedCategory = null;
        if ($id) {
            $editedCategory = $categories->where('id', $id)->first();
        }
        return view('Backend.category.index', compact('categories', 'editedCategory'));
    }

    function storeOrUpdate(Request $request, $id = null)
    {
        $request->validate([
            'title' => 'required | min:3',
        ]);

        $isExist = Category::where('id', '!=', $id)->where('slug', str()->slug($request->title))->exists();
        if ($isExist) {
            return back()->withErrors(['title' => 'Category Already Exist']);
            exit();
        }

        $category = Category::findOrNew($id);
        $category->title = $request->title;
        $category->slug = str()->slug($request->title);
        if($id){
            $category->status = $request->status?? false;
        }
        $category->save();
        return redirect()->route('category.index')->with('success', $id ? 'Category updated successfully' : 'Category added successfully');
        // return redirect()->back();
    }

    function delete($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back();
    }
}
