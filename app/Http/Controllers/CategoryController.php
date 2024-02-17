<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', ['categories'=> $categories]);
   }
 
   public function show(Category $category)
   {
       return view('categories.show', ['category' => $category]);
   }
    public function create()
    {
         return view('categories.create');
    }
   public function store(Request $request)
   {
    $category = new Category();
    $category->title = $request->title;
    $category->description = $request->description;
    $category->save();
    return redirect()->route('categories.index');
   }
}
