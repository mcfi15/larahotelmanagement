<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\EmployeeFormReques;


class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::latest()->paginate(10);
        return view('admin.employee.index', compact('employees'));
    }

    public function create(){
        return view('admin.employee.create');
    }

    public function store(EmployeeFormReques $request){
        $validatedData = $request->validated();
        $employee = new Employee;

        $employee->name = $validatedData['name'];
        $employee->address = $validatedData['address'];
        $employee->phone = $validatedData['phone'];
        $employee->gender = $validatedData['gender'];
        $employee->position = $validatedData['position'];

        if($request->hasFile('passport')){
            $file = $request->file('passport');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/employee/',$filename);
            $employee->passport = "uploads/employee/$filename";
        }
        
        $employee->save();

        return redirect('admin/employees')->with('message', 'Custome details uploaded successfully');
    }

    public function edit(Employee $employee){
        return view('admin.employee.edit', compact('employee'));
    }


    public function update(EmployeeFormReques $request, $employee){
        $validatedData = $request->validated();

        $employee = Employee::findOrFail($employee);

        $employee->name = $validatedData['name'];
        $employee->address = $validatedData['address'];
        $employee->phone = $validatedData['phone'];
        $employee->gender = $validatedData['gender'];
        $employee->position = $validatedData['position'];

        if($request->hasFile('passport')){

            $path = 'uploads/customer/'.$employee->passport;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('passport');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/employee/',$filename);
            $employee->passport = "uploads/employee/$filename";
        }
        $employee->update();

        return redirect('admin/employees')->with('message', 'Employee record updated successfully');

    }

    public function destroy(Employee $employee){
        if($employee->count() > 0){
            $destination = $employee->passport;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $employee->delete();
            return redirect('admin/employees')->with('message', 'Employee record deleted successfully'); 
            
        }
        return redirect('admin/employees')->with('error', 'Something went wrong'); 
    }

}
