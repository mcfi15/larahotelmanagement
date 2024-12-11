<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bank;
use Illuminate\Http\Request;
use App\Models\PaymentOption;
use App\Http\Controllers\Controller;
use App\Http\Requests\BankFormRequest;

class BankController extends Controller
{
    public function index(){
        $banks = Bank::latest()->paginate(10);
        return view('admin.bank.index', compact('banks'));    
    }

    public function create(){
        return view('admin.bank.create');    
    }

    public function store(BankFormRequest $request){
        $validatedData = $request->validated();
        $bank = new Bank;

        $bank->bank_name = $validatedData['bank_name'];
        $bank->account_name = $validatedData['account_name'];
        $bank->account_number = $validatedData['account_number'];
        $bank->status = $validatedData['status'];
        
        $bank->save();

        return redirect('admin/banks')->with('message', 'Bank details added successfully');
    }

    public function edit(Bank $bank){
        return view('admin.bank.edit', compact('bank'));
    }

    public function update(BankFormRequest $request, int $bank_id){
        $validatedData = $request->validated();

        $bank = Bank::findOrFail($bank_id);

        $bank->bank_name = $validatedData['bank_name'];
        $bank->account_name = $validatedData['account_name'];
        $bank->account_number = $validatedData['account_number'];
        $bank->status = $validatedData['status'];

        $bank->update();

        return redirect('admin/banks')->with('message', 'Bank details updated successfully');

    }

    public function destroy(int $bank_id){
        $bank = Bank::findOrFail($bank_id);
        
        $bank->delete();
        return redirect('admin/banks')->with('message', 'Bank details deleted successfully'); 
    }

    public function indexPayment(){
        $payment = PaymentOption::first();
        return view('admin.payment-option.index', compact('payment'));
    }

    public function updatePaymentOptions(Request $request){
        $request->validate([
            'payment' => ['required', 'string'],
        ]);

        $payment = PaymentOption::first();

        if($payment){

            $payment->update([
                'payment' => $request->payment,
            ]);

            return redirect()->back()->with('message', 'Online Payment Option Saved Successfully');
        }else{
            $payment = new PaymentOption;
            $payment->create([
                'payment' => $request->payment,
            ]);

            return redirect()->back()->with('message', 'Online Payment Option Saved Successfully');
        }

    }

    
}
