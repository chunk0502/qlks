<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'transaction_code',
        'id_user',
        'id_room',
        'id_admin',
        'checkin',
        'checkout',
        'total_price',
    ];
    protected $casts = [];
    public function room()
    {
        return $this->belongsTo(Room::class, 'id_room');
    }
}
