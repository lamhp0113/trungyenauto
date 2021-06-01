<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Booking;
use App\Models\Services;
use App\Models\News;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $cate = Category::all();
        $services = Services::all();
        return view('giaodien.home', compact('cate', 'services'));

    }

    public function contact()
    {
        $cate = Category::all();
        $services = Services::all();
        return view('giaodien.contact', compact('cate', 'services'));

    }

    public function thank()
    {
        $cate = Category::all();
        $services = Services::all();
        return view('giaodien.thank', compact('cate', 'services'));

    }

    public function about()
    {
        $cate = Category::all();
        $services = Services::all();
        return view('giaodien.about', compact('cate', 'services'));

    }

    public function list($type_id)
    {
        $news = News::where('type', $type_id)->paginate(6);
        $cate = Category::all();
        return view('giaodien.news', compact('cate', 'news'))->with('i', (request()->input('page', 1) - 1) * 5);;
    }
    public function newsDetail($id){
        $cate = Category::all();
        $news =News::find($id);
        return view('giaodien.news_detail', compact('cate','news' ));
    }
    public function servicesList($id){
        $cate = Category::all();
        $services =Services::where('category_id',$id)->get();


        return view('giaodien.services_list', compact('cate','services'));
    }
    public function servicesDetail($id){
        $cate = Category::all();
        $services =Services::find($id);
        return view('giaodien.services_detail', compact('cate','services' ));
    }
}
