<?php
namespace App\Api\V1\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Roomtype;
use Illuminate\Support\Facades\Log;
class RoomController extends Controller{

    public function  show($id)
    {
        return Room::findOrFail($id);
    }
    public function  index()
    {
        $rooms = Room::
            join('room_types', 'rooms.id_roomtype', '=', 'room_types.id')
            ->select(
                'rooms.*', 'room_types.name as roomtype',
                'room_types.capacity as capacity',
                'room_types.bedroom as bedroom',
                'room_types.description as description'
            )
            ->get();
        return response()->json($rooms);
    }
    public function availableRooms(Request $request)
    {
        try {
            $checkin = $request->query('checkin');
            $checkout = $request->query('checkout');
            $persons = $request->query('persons');

            if (!$checkin || !$checkout || !$persons) {
                return response()->json(['error' => 'Checkin, checkout dates and number of persons are required'], 400);
            }

            $rooms = Room::whereHas('roomType', function($query) use ($persons) {
                $query->where('capacity', '>=', $persons);
            })
                ->whereNotIn('id', function($query) use ($checkin, $checkout) {
                    $query->select('rooms.id')
                        ->from('rooms')
                        ->join('bookings', 'rooms.id', '=', 'bookings.id_room')
                        ->where(function($query) use ($checkin, $checkout) {
                            $query->where('bookings.checkin', '<=', $checkout)
                                ->where('bookings.checkout', '>=', $checkin);
                        });
                })->get();
            return response()->json($rooms);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
