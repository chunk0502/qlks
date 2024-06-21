<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Room extends Model
{
    use HasFactory;

    protected $table = 'rooms';

    protected $fillable = [
        'name',
        'feature_image',
        'list_image',
        'location',
        'price',
        'id_roomtype',
    ];
    protected $casts = [
        'list_image' => AsArrayObject::class,
    ];
    public function roomType()
    {
        return $this->belongsTo(Roomtype::class,'id_roomtype');
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'id_room');
    }
}
