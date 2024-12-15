<?php

namespace App\Http\Controllers\Admin;

use App\Models\Facility;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class FacilityController extends Controller
{
    public function index(){
        $facilities = Facility::latest()->paginate('10');
        return view('admin.facility.index', compact('facilities'));
    }

    public function create(){
        return view('admin.facility.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string'],
            'details' => ['nullable', 'string'],
            'image' => ['required','mimes:jpg,png,jpeg,PNG,JPG,JPEG'],
            'status' => ['required', 'string']
        ]);

        $facility = new Facility;
        
        $facility->name = $request->name;
        $facility->slug = Str::slug($request->name);
        $facility->details = $request->details;
        $facility->status = $request->status;

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/facility/',$filename);
            $facility->image = "uploads/facility/$filename";
        }

        $facility->save();

        return redirect('admin/facilities')->with('message','Facility Uploaded Successfully');
    }

    public function edit(Facility $facility){
        return view('admin.facility.edit', compact('facility'));
    }

    public function update(Request $request, int $facility_id){
        $request->validate([
            'name' => ['required', 'string'],
            'details' => ['nullable', 'string'],
            'image' => ['nullable','mimes:jpg,png,jpeg,PNG,JPG,JPEG'],
            'status' => ['required', 'string']
        ]);

        $facility = Facility::findOrFail($facility_id);

        $facility->name = $request->name;
        $facility->slug = Str::slug($request->name);
        $facility->details = $request->details;
        $facility->status = $request->status;

        if($request->hasFile('image')){

            $path = 'uploads/facility/'.$facility->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/facility/',$filename);
            $facility->image = "uploads/facility/$filename";
        }

        $facility->update();

        return redirect('admin/facilities')->with('message','Facility Updated Successfully');
    }

    public function destroy(int $facility_id){
        $facility = Facility::findOrFail($facility_id);
        if($facility->count() > 0){
            $destination = $facility->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $facility->delete();
            return redirect('admin/facilities')->with('message', 'Facility deleted successfully'); 
            
        }
        return redirect('admin/facilities')->with('error', 'Something went wrong'); 
    }
}
