<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function list()
    {
    	$cate=Category::all();
    	return view('admin.category.list',compact('cate'));
    	
    }

    public function displayCreateForm()
    {
    	return view('admin.category.add');	
    }

    public function doCreate(Request $request)
    {
        $cate= new Category();
        $cate->name=$request->name;
        $cate->priority=$request->priority;
        $cate->save();
        return redirect('category');
    }

    public function displayUpdateForm($id)
    {
        $cate=Category::find($id);
        return view('admin.category.update',compact('cate'));  
    }

    public function doUpdate(Request $request, Category $cate)
    {
        $cate=Category::find($request->id);
        $cate->update($request->all());
        return redirect('category');
    }

    public function doDelete($id)
    {
        $cate=Category::find($id);
        $cate->delete();
        return redirect('/category');
    }
}
