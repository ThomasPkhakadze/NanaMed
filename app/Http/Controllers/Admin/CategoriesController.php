<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Session;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
       
    }

    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index',[
            'categories' => $categories,
        ]);
    }
   
    

    public function store(Request $request)
    {
        $this->validate($request, array(
            'name_ge' => 'required|max:255',
            'name_en' => 'nullable|max:255',
            'name_ru' => 'required|max:255'
            ));

        $category = new Category;

        $category->name_ge = $request->name_ge;
        $category->name_en = $request->name_en;
        $category->name_ru = $request->name_ru;

        $category->save();

        Session::flash('success', 'New Category has been created');

        return redirect()->route('categories.index');
    }



    public function destroy($id)
    {
        $category = Category::find($id);

        $category->delete();

        Session::flash('success', 'Category was Removed successfully.');

        return redirect()->route('categories.index');
    }
}
