<?php

namespace App\Models;

use App\Models\Item;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'item_id',
        'booking_id',
        'price',
        'quantity'
    ];

    public function item(){
        return $this->belongsTo(Item::class, 'item_id', 'id');
    }

    public function booking(){
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    }
}
