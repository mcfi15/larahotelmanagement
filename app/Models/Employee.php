<?php

namespace App\Models;

use App\Models\Expense;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'name',
        'address',
        'image',
        'gender',
        'phone',
        'position'
    ];

    public function expenses(){
        return $this->hasMany(Expense::class, 'employee_id', 'id');
    }
}
