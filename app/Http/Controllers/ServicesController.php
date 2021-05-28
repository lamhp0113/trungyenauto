<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{
    public function index()
    {
        $services= services::latest()->paginate(1);
        return view('admin.services.list', compact('services'));

    }
    public function create()
    {
        return view('admin.services.add');
    }
    public function store(Request $request)
    {
        services::create($request->all());
        return redirect()->route('projects.index')
            ->with('success', 'Đặt lịch thành công.');
    }


}
