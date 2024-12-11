<?php

namespace App\Models;

use App\Models\Room;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomType extends Model
{
    use HasFactory;

    protected $table = 'room_types';

    protected $fillable = [
        'room_type',
        'image',
        'description',
        'price',
        'tv',
        'bed',
        'balcony',
        'pet',
        'box',
        'wifi',
        'netflix',
        'air_condition',
        'loundry',
        'status',
        'slug'
    ];

    public function images(){
        return $this->hasMany(Image::class, 'room_type_id', 'id');
    }

    public function room(){
        return $this->hasMany(Room::class, 'room_type_id', 'id');
    }
}
