<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home()
   {
   	$cate=Category::all();
   	return view('giaodien.home',compact('cate'));

   }
    public function contact()
    {
        $cate=Category::all();
        return view('giaodien.contact',compact('cate'));

    }
    public function about()
    {
        $cate=Category::all();
        return view('giaodien.about',compact('cate'));

    }




}
