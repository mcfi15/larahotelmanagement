<?php

namespace App\Models;

use App\Models\Room;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Customer;
use App\Models\RoomType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'room_id',
        'customer_id',
        'adults_booking',
        'childs_booking',
        'customer_name',
        'customer_email',
        'customer_phone',
        'checkin',
        'checkout'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    // public function room(){
    //     return $this->belongsTo(Room::class, 'room_id', 'id');
    // }

    public function roomtype(){
        return $this->belongsTo(RoomType::class, 'room_id', 'id');
    }

    public function orders(){
        return $this->hasMany(Order::class, 'booking_id', 'id');
    }

    public function payments(){
        return $this->hasMany(Payment::class, 'booking_id', 'id');
    }
}
