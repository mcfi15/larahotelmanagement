<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $fillable = [
        'booking_id',
        'type',
        'amount',
        'payment_type',
        'payment_details',
        'payment_date'
    ];

    public function booking(){
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    }
}
