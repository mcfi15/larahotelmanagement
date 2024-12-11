<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expense extends Model
{
    use HasFactory;

    protected $table = 'expenses';

    protected $fillable = [
        'employee_id',
        'expense_type',
        'description',
        'amount',
        'date'
    ];

    public function employee(){
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }
}
