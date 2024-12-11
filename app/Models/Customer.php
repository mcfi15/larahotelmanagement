<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'address',
        'image',
        'gender',
        'phone',
        'room_number',
        'amount_paid',
        'reason'
    ];

    public function bookings(){
        return $this->hasMany(Booking::class, 'customer_id', 'id');
    }


}
