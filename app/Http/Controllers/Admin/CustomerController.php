<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CustomerRequestForm;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::latest()->paginate(10);
        return view('admin.customer.index', compact('customers'));
    }

    public function create(){
        return view('admin.customer.create');
    }

    public function store(CustomerRequestForm $request){
        $validatedData = $request->validated();
        $customer = new Customer;

        $customer->name = $validatedData['name'];
        $customer->address = $validatedData['address'];
        $customer->phone = $validatedData['phone'];
        $customer->gender = $validatedData['gender'];
        $customer->amount_paid = $validatedData['amount_paid'];
        $customer->reason = $validatedData['reason'];
        $customer->room_number = $validatedData['room_number'];


        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/customer/',$filename);
            $customer->image = "uploads/customer/$filename";
        }
        
        $customer->save();

        return redirect('admin/customers')->with('message', 'Custome details uploaded successfully');
    }

    public function edit(Customer $customer){
        return view('admin.customer.edit', compact('customer'));
    }


    public function update(CustomerRequestForm $request, $customer){
        $validatedData = $request->validated();

        $customer = Customer::findOrFail($customer);

        $customer->name = $validatedData['name'];
        $customer->address = $validatedData['address'];
        $customer->phone = $validatedData['phone'];
        $customer->gender = $validatedData['gender'];
        $customer->amount_paid = $validatedData['amount_paid'];
        $customer->reason = $validatedData['reason'];
        $customer->room_number = $validatedData['room_number'];

        if($request->hasFile('image')){

            $path = 'uploads/customer/'.$customer->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/customer/',$filename);
            $customer->image = "uploads/customer/$filename";
        }
        $customer->update();

        return redirect('admin/customers')->with('message', 'Customer record updated successfully');

    }

    public function destroy(Customer $customer){
        if($customer->count() > 0){
            $destination = $customer->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $customer->delete();
            return redirect('admin/customers')->with('message', 'Customer deleted successfully'); 
            
        }
        return redirect('admin/customers')->with('error', 'Something went wrong'); 
    }
}
