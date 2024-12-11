<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentFormRequest;

class PaymentController extends Controller
{
    public function index(){
        $payments = Payment::latest()->paginate(10);
        return view('admin.payment.index', compact('payments'));
    }

    public function create(){
        $bookings = Booking::all();
        return view('admin.payment.create', compact('bookings'));
    }

    public function store(PaymentFormRequest $request){
        $validatedData = $request->validated();
        $book = Booking::findOrFail($validatedData['booking_id']);

        $book->payments()->create([
            'booking_id' => $validatedData['booking_id'],
            'type' => $validatedData['type'],
            'amount' => $validatedData['amount'],
            'payment_type' => $validatedData['payment_type'],
            'payment_details' => $validatedData['payment_details'],
            'payment_date' => $validatedData['payment_date'],
            
        ]);

        return redirect('admin/payments')->with('message', 'Payment added successfully');
        
    }

    public function edit(Payment $payment){
        $bookings = Booking::all();
        return view('admin.payment.edit', compact('payment', 'bookings'));
    }

    public function update(PaymentFormRequest $request, int $payment_id){
        $validatedData = $request->validated();

        $payment = Payment::findOrFail($payment_id);

        if($payment){
            $payment->update([
                'booking_id' => $validatedData['booking_id'],
                'type' => $validatedData['type'],
                'amount' => $validatedData['amount'],
                'payment_type' => $validatedData['payment_type'],
                'payment_details' => $validatedData['payment_details'],
                'payment_date' => $validatedData['payment_date'],
            ]);
            return redirect('admin/payments')->with('message', 'Payment updated successfully');
        }else{
            return redirect()->back()->with('error', 'No Such ID Found');
        }
    }

    public function destroy(int $payment_id){
        $payment = Payment::findOrFail($payment_id);
        
        $payment->delete();
        return redirect('admin/payments')->with('message', 'Record deleted successfully'); 
    }
}
