<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Booking;
use App\Models\Services;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function __construct()
    {
        $cate = Category::orderBy('priority', 'ASC')->get();
        $serviceslist = Services::inRandomOrder()->limit(6)->get();
        View::share('cate',$cate);
        View::share('serviceslist',$serviceslist);
    }

    public function home()
    {
        $news = News::inRandomOrder()->limit(4)->get();
        $services=Services::all();
        return view('giaodien.home', compact('services', 'news'));
    }

    public function contact()
    {
        $services=Services::all();
        return view('giaodien.contact',compact('services'));
    }

    public function thank()
    {
        return view('giaodien.thank');
    }

    public function about()
    {
        $news = News::where('type',2)->first();
        return view('giaodien.about',compact('news'));
    }

    public function list($type_id)
    {
        $news = News::where('type', $type_id)->orderBy('created_at', 'desc')->paginate(6);
        return view('giaodien.news', compact('news'))->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    public function newsDetail($id)
    {
        $news = News::find($id);
        return view('giaodien.news_detail', compact('news' ));
    }

    public function servicesList($id)
    {
        $services = Services::where('category_id', $id)->orderBy('updated_at', 'ASC')->get();
        return view('giaodien.services_list', compact('services'));
    }

    public function servicesDetail($id)
    {
        $services=Services::all();
        $service = Services::find($id);
        return view('giaodien.services_detail', compact('service','services'));
    }

    public function index()
    {
        $orders = DB::table('booking')
            ->leftJoin('services', 'booking.service_id', '=', 'services.id')->latest()
            ->paginate(5, array('booking.*', 'services.name as service_name'));
        return view('admin.booking.index', compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

}
