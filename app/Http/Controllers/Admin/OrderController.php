<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use App\Models\Order;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderFormRequest;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::latest()->paginate(10);
        return view('admin.order.index', compact('orders'));
    }

    public function create(){
        $bookings = Booking::all();
        $items = Item::all();
        return view('admin.order.create', compact('bookings', 'items'));
    }

    public function store(OrderFormRequest $request){
        $validatedData = $request->validated();
        $order = Item::findOrFail($validatedData['item_id']);
        $order = Booking::findOrFail($validatedData['booking_id']);

        $order->orders()->create([
            'item_id' => $validatedData['item_id'],
            'booking_id' => $validatedData['booking_id'],
            'price' => $validatedData['price'],
            'quantity' => $validatedData['quantity']
        ]);

        return redirect('admin/orders')->with('message', 'Order submitted successfully');
    }

    public function edit(Order $order){
        $bookings = Booking::all();
        $items = Item::all();
        return view('admin.order.edit', compact('order', 'items', 'bookings'));
    }


    public function update(OrderFormRequest $request, int $order_id){
        $validatedData = $request->validated();

        $order = Order::findOrFail($order_id);

        if($order){
            $order->update([
                'item_id' => $validatedData['item_id'],
                'booking_id' => $validatedData['booking_id'],
                'price' => $validatedData['price'],
                'quantity' => $validatedData['quantity']
            ]);
            return redirect('admin/orders')->with('message', 'Order record updated successfully');
        }else{
            return redirect()->back()->with('error', 'No Such ID Found');
        }
    }

    public function destroy(int $order_id){
        $order = Order::findOrFail($order_id);
        
        $order->delete();
        return redirect('admin/orders')->with('message', 'Order record deleted successfully'); 
    }
}
