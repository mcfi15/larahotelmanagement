<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $fillable = [
        'name',
        'price',
        'details',
        'status'
    ];

    public function orders(){
        return $this->hasMany(Order::class, 'item_id', 'id');
    }
}
