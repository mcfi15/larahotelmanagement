<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\Booking;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BookingFormRequest;

class BookingController extends Controller
{
    public function index(){
        $bookings = Booking::latest()->paginate(10);
        return view('admin.booking.index', compact('bookings'));
    }

    public function create(){
        $customers = Customer::all();
        $rooms = Room::all();
        return view('admin.booking.create', compact('customers', 'rooms'));
    }

    public function store(BookingFormRequest $request){
        $validatedData = $request->validated();
        $book = Customer::findOrFail($validatedData['customer_id']);
        $book = Room::findOrFail($validatedData['room_id']);

        $book->bookings()->create([
            'customer_id' => $validatedData['customer_id'],
            'room_id' => $validatedData['room_id'],
            'checkin' => $validatedData['checkin'],
            'checkout' => $validatedData['checkout']
        ]);

        return redirect('admin/bookings')->with('message', 'Booking submitted successfully');
    }

    public function edit(Booking $booking){
        $customers = Customer::all();
        $rooms = Room::all();
        return view('admin.booking.edit', compact('customers', 'rooms', 'booking'));
    }


    public function update(BookingFormRequest $request, int $booking_id){
        $validatedData = $request->validated();

        $booking = Booking::findOrFail($booking_id);

        if($booking){
            $booking->update([
                'customer_id' => $validatedData['customer_id'],
                'room_id' => $validatedData['room_id'],
                'checkin' => $validatedData['checkin'],
                'checkout' => $validatedData['checkout']
            ]);
            return redirect('admin/bookings')->with('message', 'Booking record updated successfully');
        }else{
            return redirect()->back()->with('error', 'No Such ID Found');
        }
    }

    public function destroy(int $booking_id){
        $booking = Booking::findOrFail($booking_id);
        
        $booking->delete();
        return redirect('admin/bookings')->with('message', 'Booking record deleted successfully'); 
    }
}
