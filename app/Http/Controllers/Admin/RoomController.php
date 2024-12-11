<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoomFormRequest;

class RoomController extends Controller
{
    public function index(){
        $rooms = Room::latest()->paginate(10);
        return view('admin.room.index', compact('rooms'));
    }

    public function create(){
        $room_types = RoomType::all();
        return view('admin.room.create', compact('room_types'));
    }

    public function store(RoomFormRequest $request){
        $validatedData = $request->validated();
        $room_type = RoomType::findOrFail($validatedData['room_type_id']);

        $room_type->room()->create([
            'room_type_id' => $validatedData['room_type_id'],
            'room_number' => $validatedData['room_number'],
            'status' => $validatedData['status'],
            'description' => $validatedData['description'],
            
        ]);

        return redirect('admin/rooms')->with('message', 'Room added successfully');
        
    }

    public function edit(Room $room){
        $roomTs = RoomType::all();
        return view('admin.room.edit', compact('room', 'roomTs'));
    }


    public function update(RoomFormRequest $request, int $room_id){
        $validatedData = $request->validated();

        $room = Room::findOrFail($room_id);

        if($room){
            $room->update([
                'room_type_id' => $validatedData['room_type_id'],
                'room_number' => $validatedData['room_number'],
                'status' => $validatedData['status'],
                'description' => $validatedData['description'],
            ]);
            return redirect('admin/rooms')->with('message', 'Record updated successfully');
        }else{
            return redirect()->back()->with('error', 'No Such ID Found');
        }
    }

    public function destroy(int $room_id){
        $room = Room::findOrFail($room_id);
        
        $room->delete();
        return redirect('admin/rooms')->with('message', 'Record deleted successfully'); 
    }
}
