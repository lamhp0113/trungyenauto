<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $orders = Booking::latest()->paginate(10);
        return view('admin.booking.index', compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        Booking::create($request->all());
        return redirect()->route('projects.index')
            ->with('success', 'Đặt lịch thành công.');
    }

    public function edit(Booking $booking)
    {
        return view('admin.booking.update', compact('booking'));
    }

    public function update(Request $request, Booking $booking)
    {
        $booking->update($request->all());
        return redirect()->route('booking.index')
            ->with('success', 'Cập nhập thành công');
    }
}
