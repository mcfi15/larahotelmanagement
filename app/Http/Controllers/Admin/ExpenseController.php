<?php

namespace App\Http\Controllers\Admin;

use App\Models\Expense;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeFormReques;
use App\Http\Requests\ExpenseFormRequest;

class ExpenseController extends Controller
{
    public function index(){
        $expenses = Expense::latest()->paginate(10);
        return view('admin.expense.index', compact('expenses'));
    }

    public function create(){
        $employees = Employee::all();
        return view('admin.expense.create', compact('employees'));
    }

    public function store(ExpenseFormRequest $request){
        $validatedData = $request->validated();
        $employee = Employee::findOrFail($validatedData['employee_id']);

        $employee->expenses()->create([
            'employee_id' => $validatedData['employee_id'],
            'expense_type' => $validatedData['expense_type'],
            'description' => $validatedData['description'],
            'amount' => $validatedData['amount'],
            'date' => $validatedData['date']
        ]);

        return redirect('admin/expenses')->with('message', 'Expense uploaded successfully');
    }

    public function edit(Expense $expense){
        $employees = Employee::all();
        return view('admin.expense.edit', compact('expense', 'employees'));
    }


    public function update(ExpenseFormRequest $request, int $expense){
        $validatedData = $request->validated();

        $expense = Expense::findOrFail($expense);

        if($expense){
            $expense->update([
                'employee_id' => $validatedData['employee_id'],
                'expense_type' => $validatedData['expense_type'],
                'description' => $validatedData['description'],
                'amount' => $validatedData['amount'],
                'date' => $validatedData['date']
            ]);
            return redirect('admin/expenses')->with('message', 'Expense record updated successfully');
        }else{
            return redirect()->back()->with('error', 'No Such ID Found');
        }
    }

    public function destroy(int $expense){
        $expense = Expense::findOrFail($expense);
        
        $expense->delete();
        return redirect('admin/expenses')->with('message', 'Expense record deleted successfully'); 
    }
}
