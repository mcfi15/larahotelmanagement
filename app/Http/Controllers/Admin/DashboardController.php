<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use App\Models\Room;
use App\Models\User;
use App\Models\Order;
use App\Models\Booking;
use App\Models\Expense;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Facility;
use App\Models\RoomType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $user = User::count();
        $offbooking = Booking::where('status','0')->count();
        $onbooking = Booking::where('status','1')->count();
        $order = Order::count();
        $facility = Facility::count();
        $customer = Customer::count();
        $employee = Employee::count();
        $offpayment = Payment::count();
        $expense = Expense::count();
        $roomtype = RoomType::count();
        $room = Room::count();
        $item = Item::count();
        
        return view('admin.dashboard', compact('user', 'offbooking', 'onbooking', 'order', 'facility', 'customer', 'employee', 'offpayment', 'expense', 'roomtype', 'room', 'item' ));
    }
}
