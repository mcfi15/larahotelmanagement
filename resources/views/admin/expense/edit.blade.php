@extends('layouts.admin')

@section('title', "Update $expense->expense_type Record")

@section('content')
<nav class="mb-2" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="{{ url('admin/expenses') }}">Expenses</a></li>
      <li class="breadcrumb-item active">Update expense</li>
    </ol>
  </nav>
<h2 class="mb-4">Update Record</h2>
@include('layouts.alert.msg')
    <div class="row">
        <div class="col-xl-9">
        <form action="{{ url('admin/expenses/'.$expense->id) }}" method="POST" class="row g-3 mb-6">
            @csrf
            @method('PUT')

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <select class="form-select" id="employee_id" name="employee_id">
                        @foreach($employees as $employee) 
                            <option value="{{ $employee->id }}" {{ $employee->id == $expense->employee_id ? 'selected':'' }}>{{ $employee->name }}</option>
                        @endforeach
                    </select>
                    <label for="employee_id">Select Employee</label>
                </div>
                @error('employee_id')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="expense_type" name="expense_type" type="text" placeholder="Expense Type" value="{{ $expense->expense_type }}"/>
                    <label for="expense_type">Expense Type</label>
                </div>
                @error('expense_type')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-12 gy-3">
                <div class="form-floating">
                    <textarea class="form-control" id="description" name="description" placeholder="Enter Description Here..." style="height: 100px">{{ $expense->description }}</textarea>
                    <label for="description">Description</label>
                </div>
                @error('description')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div> 

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="amount" name="amount" type="number" placeholder="Amount" value="{{ $expense->amount }}"/>
                    <label for="amount">Amount</label>
                </div>
                @error('amount')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>

            <div class="col-sm-6 col-md-12">
                <div class="form-floating">
                    <input class="form-control" id="date" name="date" type="date" placeholder="Date" value="{{ $expense->date }}"/>
                    <label for="date">Date</label>
                </div>
                @error('date')
                    <small class="text-danger">{{ $message }}</small>  
                @enderror
            </div>
            
            <div class="col-12 gy-6">
                <div class="row g-3 justify-content-end">
                   
                    <div class="col-auto"><button type="submit" class="btn btn-lg btn-primary px-5 px-sm-15">Update</button></div>
                </div>
            </div>

        </form>
        </div>
    </div>

@endsection