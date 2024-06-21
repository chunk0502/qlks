<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Room\StatusRoom;


class Roomtype extends Model
{
    use HasFactory;

    protected $table = 'room_types';

    protected $fillable = [
        'name',
        'description',
        'capacity',
        'bedroom',
    ];
    protected $casts = [];
}
