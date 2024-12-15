<?php

namespace App\Http\Controllers\Front;

use App\Models\Booking;
use App\Models\Facility;
use App\Models\RoomType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index(){
        $rooms = RoomType::all();
        return view('front.index', compact('rooms'));
    }

    public function contact(){
        return view('front.contact');
    }

    public function about(){
        return view('front.about');
    }

    public function storeNewsletter(Request $request){
        $request->validate([
            'email_newsletter' => ['required', 'string', 'email', 'max:255'],
        ]);

        if($request->email_newsletter){
            return redirect()->back()->with('message','You have successfully subscribed to the newsletter');
        }else{
            return redirect()->back()->with('error','An error has occurred, please try again');
        }
        
    }

    public function rooms(){
        $rooms = RoomType::all();
        return view('front.rooms-and-suites', compact('rooms'));
    }

    public function room(string $slug){
        $room = RoomType::where('slug', $slug)->first();
        return view('front.room-details', compact('room'));
    }

    public function viewFacility(string $slug){
        $facility = Facility::where('slug', $slug)->first();
        return view('front.facility', compact('facility'));
    }

    public function storeBookings(Request $request){
        $request->validate([
            'room_type_id' => ['required', 'integer'],
            'checkin' => ['required', 'string'],
            'checkout' => ['required', 'string'],
            'adults_booking' => ['required', 'integer'],
            'childs_booking' => ['required', 'integer'],
            'customer_name' => ['required', 'string'],
            'customer_email' => ['required', 'string', 'email'],
            'customer_phone' => ['nullable', 'string']
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
            $booking->customer_name = $request->customer_name;
            $booking->customer_email = $request->customer_email;
            $booking->customer_phone = $request->customer_phone;
            $booking->status = 1;
            $booking->checkout = $request->checkout;
            $booking->adults_booking = $request->adults_booking;
            $booking->childs_booking = $request->childs_booking;

            $booking->save();

            return redirect()->back()->with('message','Room Booked Successfully');
        }

    }

    public function storeIndexBookings(Request $request){
        $request->validate([
            'room_type_id' => ['required', 'integer'],
            'checkin' => ['required', 'string'],
            'checkout' => ['required', 'string'],
            'adults_booking' => ['required', 'integer'],
            'customer_name' => ['required', 'string'],
            'customer_email' => ['required', 'string', 'email'],
            'customer_phone' => ['nullable', 'string'],
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
            $booking->customer_name = $request->customer_name;
            $booking->customer_email = $request->customer_email;
            $booking->customer_phone = $request->customer_phone;
            $booking->status = 1;
            $booking->checkout = $request->checkout;
            $booking->adults_booking = $request->adults_booking;
            $booking->childs_booking = $request->childs_booking;

            $booking->save();

            return redirect()->back()->with('message','Room Booked Successfully');
        }

    }
}
