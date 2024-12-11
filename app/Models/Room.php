<?php

namespace App\Models;

use App\Models\RoomType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';

    protected $fillable = [
        'room_number',
        'description',
        'status',
        'room_type_id'
    ];

    public function room_type(){
        return $this->belongsTo(RoomType::class, 'room_type_id', 'id');
    }

    public function bookings(){
        return $this->hasMany(Booking::class, 'room_id', 'id');
    }
}
