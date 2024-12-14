<?php

namespace App\Http\Controllers\Front;

use App\Models\Booking;
use App\Models\RoomType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function contact(){
        return view('front.contact');
    }

    public function about(){
        return view('front.about');
    }

    public function rooms(){
        $rooms = RoomType::all();
        return view('front.rooms-and-suites', compact('rooms'));
    }

    public function room(string $slug){
        $room = RoomType::where('slug', $slug)->first();
        return view('front.room-details', compact('room'));
    }

    public function storeBookings(Request $request){
        $request->validate([
            'room_type_id' => ['required', 'integer'],
            'checkin' => ['required', 'string'],
            'checkout' => ['required', 'string'],
            'adults_booking' => ['required', 'integer'],
            'childs_booking' => ['required', 'integer']
        ]);

        $booking = new Booking;
        
        $room_type_id = $request->room_type_id;
        $startDate = $request->checkin;
        $endDate = $request->checkout;

        $isBooked = Booking::where('room_id',$room_type_id)
                    ->where('checkin','<=',$endDate)
                    ->where('checkout','>=',$startDate)->exists();
        if($isBooked){
            return redirect()->back()->with('error','Room is already booked, please try a different date.');
        }else{

            $booking->room_id = $request->room_type_id;
            $booking->checkin = $request->checkin;
            $booking->status = 1;
            $booking->checkout = $request->checkout;
            $booking->adults_booking = $request->adults_booking;
            $booking->childs_booking = $request->childs_booking;

            $booking->save();

            return redirect()->back()->with('message','Room Booked Successfully');
        }

    }
}
