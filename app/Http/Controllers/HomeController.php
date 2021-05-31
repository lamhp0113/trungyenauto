<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Booking;
use App\Models\Services;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home()
   {
   	$cate=Category::all();
   	$services=Services::all();
   	return view('giaodien.home',compact('cate','services'));

   }

    public function contact()
    {
        $cate=Category::all();
        $services=Services::all();
        return view('giaodien.contact',compact('cate','services'));

    }
    public function thank()
    {
        $cate=Category::all();
        $services=Services::all();
        return view('giaodien.thank',compact('cate','services'));

    }

    public function about()
    {
        $cate=Category::all();
        $services=Services::all();
        return view('giaodien.about',compact('cate','services'));

    }





}
