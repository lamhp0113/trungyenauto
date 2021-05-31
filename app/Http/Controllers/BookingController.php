<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $orders = DB::table('booking')
            ->leftJoin('services', 'booking.service_id', '=', 'services.id')->latest()
            ->paginate(5, array('booking.*','services.name as service_name'));
        return view('admin.booking.index', compact('orders'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        $serviceId = $request->service_id;
        if(!isset($serviceId)){
            $request->merge([
                'service_id' => 0,
            ]);
        }
        Booking::create($request->all());
        // gui mail
        return redirect('/thank')
            ->with('success', 'Đặt lịch thành công.');
    }

    public function edit(Booking $booking)
    {
        $booking= DB::table('booking')
        ->leftJoin('services', 'booking.service_id', '=', 'services.id')
            ->select('booking.*','services.name as service_name')->where('booking.id',$booking->id)
            ->first();
        return view('admin.booking.update', compact('booking'));

    }

    public function update(Request $request, Booking $booking)
    {
        $booking->update($request->all());
        return redirect()->route('booking.index')
            ->with('success', 'Cập nhập thành công');
    }
}
