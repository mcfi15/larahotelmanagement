<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user.home');
    }

    public function indexSettings(){
        $countries = Country::all();
        return view('user.setting', compact('countries'));
    }

    public function updateSettings(Request $request, int $user_id){
        $request->validate([
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'phone' => ['nullable', 'string'],
            'gender' => ['required', 'string'],
            'dob' => ['required', 'string'],
            'state' => ['nullable', 'string'],
            'zip' => ['nullable', 'string', 'email'],
            'country' => ['nullable', 'string'],
            'address' => ['nullable', 'string'],
            'image' => ['nullable','mimes:jpg,png,jpeg,PNG,JPG,JPEG']
        ]);

        $user = User::findOrFail($user_id);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $user->state = $request->state;
        $user->zip = $request->zip;
        $user->country = $request->country;
        $user->address = $request->address;

        if($request->hasFile('image')){

            $path = 'uploads/profile/'.$user->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/profile/',$filename);
            $user->image = "uploads/profile/$filename";
        }
        $user->update();

        return redirect()->back()->with('message', 'User record updated successfully');

    }

    public function indexPassword(){
        return view('user.change-password');
    }

    public function changePassword(Request $request){
        $request->validate([
            'current_password' => ['required','string','min:8'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);

        $currentPasswordStatus = Hash::check($request->current_password, auth()->user()->password);
        if($currentPasswordStatus){

            User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($request->password),
            ]);

            return redirect()->back()->with('message','Password Updated Successfully');

        }else{

            return redirect()->back()->with('error','Current Password does not match with Old Password');
        }
    }


}
