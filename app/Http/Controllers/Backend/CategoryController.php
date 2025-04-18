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
        if($id){
            $editedCategory = $categories->where('id',$id)->first();
            // $category = Category::findorfail($id);
            // return view('Backend.category.edit', compact('category'));
        }
        // dd($categories);
        return view('Backend.category.index', compact('categories' , 'editedCategory'));
    }   
    
    function store(Request $request){
        $request->validate([
            'title' => 'required | min:3',
            // 'slug' => 'required',
            // 'status' => 'required',
        ]);

        $isExist = Category::where('slug' ,str()->slug($request->title))->exists(); 
        // dd($isExist);
        if($isExist){
            return back()->withErrors(['title' => 'Category Already Exist']);
            exit();
        }
        $category = new Category();
        $category->title = $request->title;
        $category->slug =str()->slug($request->title);
        // $category->status = $request->status;
        $category->save();
        return redirect()->back()->with('success', 'Category Created Successfully');
    }  
    
    
    public function edit($id)
    {
        $category = Category::findorfail($id);
        return view('Backend.category.edit', compact('category'));
    }
}



