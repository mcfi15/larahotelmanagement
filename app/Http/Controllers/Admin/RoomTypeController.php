<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use App\Models\RoomType;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\RoomTypeFormRequest;
use App\Http\Requests\EditRoomTypeFormRequest;

class RoomTypeController extends Controller
{
    public function index(){
        $rooms = RoomType::latest()->paginate(10);
        return view('admin.room-type.index', compact('rooms'));
    }

    public function create(){
        return view('admin.room-type.create');
    }

    public function store(RoomTypeFormRequest $request){
        $validatedData = $request->validated();

        // $room = new RoomType;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/rooms/',$filename);
            $validatedData['image'] = "uploads/rooms/$filename";
        }

        // $validatedData['product_code'] = 'PT-'.rand(100000,999999);
        $validatedData['status'] = $request->status == true ? '1' : '0';
        $validatedData['tv'] = $request->tv == true ? '1' : '0';
        $validatedData['bed'] = $request->bed == true ? '1' : '0';
        $validatedData['balcony'] = $request->balcony == true ? '1' : '0';
        $validatedData['pet'] = $request->pet == true ? '1' : '0';
        $validatedData['box'] = $request->box == true ? '1' : '0';
        $validatedData['wifi'] = $request->wifi == true ? '1' : '0';
        $validatedData['netflix'] = $request->netflix == true ? '1' : '0';
        $validatedData['air_condition'] = $request->air_condition == true ? '1' : '0';
        $validatedData['loundry'] = $request->loundry == true ? '1' : '0';

        $room = RoomType::create([
            'room_type' => $validatedData['room_type'],
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
            'tv' => $validatedData['tv'],
            'bed' => $validatedData['bed'],
            'balcony' => $validatedData['balcony'],
            'pet' => $validatedData['pet'],
            'box' => $validatedData['box'],
            'wifi' => $validatedData['wifi'],
            'status' => $validatedData['status'],
            'slug' => Str::slug($validatedData['room_type']),
            'netflix' => $validatedData['netflix'],
            'air_condition' => $validatedData['air_condition'],
            'loundry' => $validatedData['loundry'],
            'image' => $validatedData['image']
        ]);

        if($request->hasFile('room_images')){
            $uploadPath = 'uploads/images/';

            $i = 1;
            foreach($request->file('room_images') as $room_images){
                $extension = $room_images->getClientOriginalExtension();
                $filename = time().$i++.'.'.$extension;
                $room_images->move($uploadPath,$filename);
                $fileImagesPathName = $uploadPath.$filename;

                $room->images()->create([
                    'room_type_id' => $room->id,
                    'room_images' => $fileImagesPathName,
                ]);
            }
        }

        return redirect('admin/room-types')->with('message', 'Room Type Successfully uploaded');
    }

    public function edit(int $room){
        $room = RoomType::findOrFail($room);
        return view('admin.room-type.edit', compact('room'));
    }


    public function update(EditRoomTypeFormRequest $request, int $room_id){
        $validatedData = $request->validated();

        $room = RoomType::findOrFail($room_id);

        if($room){

            if($request->hasFile('image')){
                $path = $room->image;
                if(File::exists($path)){
                    File::delete($path);
                }

                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
    
                $file->move('uploads/rooms/',$filename);
                $room->image = 'uploads/rooms/'.$filename;

            }
           
            $validatedData['status'] = $request->status == true ? '1' : '0';
            $validatedData['tv'] = $request->tv == true ? '1' : '0';
            $validatedData['bed']  = $request->bed == true ? '1' : '0';
            $validatedData['balcony'] = $request->balcony == true ? '1' : '0';
            $validatedData['pet'] = $request->pet == true ? '1' : '0';
            $validatedData['box'] = $request->box == true ? '1' : '0';
            $validatedData['wifi'] = $request->wifi == true ? '1' : '0';
            $validatedData['netflix'] = $request->netflix == true ? '1' : '0';
            $validatedData['air_condition'] = $request->air_condition == true ? '1' : '0';
            $validatedData['loundry'] = $request->loundry == true ? '1' : '0';

            $room->update([
                'room_type' => $validatedData['room_type'],
                'price' => $validatedData['price'],
                'description' => $validatedData['description'],
                'tv' => $validatedData['tv'],
                'bed' => $validatedData['bed'],
                'balcony' => $validatedData['balcony'],
                'pet' => $validatedData['pet'],
                'box' => $validatedData['box'],
                'wifi' => $validatedData['wifi'],
                'status' => $validatedData['status'],
                'netflix' => $validatedData['netflix'],
                'air_condition' => $validatedData['air_condition'],
                'loundry' => $validatedData['loundry']
            ]);

            if($request->hasFile('room_images')){
                $uploadPath = 'uploads/images/';
    
                $i = 1;
                foreach($request->file('room_images') as $room_images){
                    $extension = $room_images->getClientOriginalExtension();
                    $filename = time().$i++.'.'.$extension;
                    $room_images->move($uploadPath,$filename);
                    $fileImagesPathName = $uploadPath.$filename;
    
                    $room->images()->create([
                        'room-type_id' => $room->id,
                        'room_images' => $fileImagesPathName,
                    ]);
                }
            }
            return redirect('admin/room-types')->with('message', 'Room Type updated successfully');
        }else{
            return redirect()->back()->with('error', 'No Such ID Found');
        }
    }

    public function destroy(int $room_id){
        $room = RoomType::findOrFail($room_id);
        $destination = $room->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        if($room->images){
            foreach ($room->images as $image) {
                $path = $image->room_images;
                if(File::exists($path)){
                    File::delete($path);
                }
            }
        }
        $room->delete();
        return redirect()->back()->with('message', 'Room Type Deleted Successfully');
    }

    public function destroyImage(int $room_image_id){
        $image = Image::findOrFail($room_image_id);
        $path = $image->room_images;
        if(File::exists($path)){
            File::delete($path);
        }
        $image->delete();
        return redirect()->back()->with('message', 'Room Image Deleted Successfully');
    }
}
