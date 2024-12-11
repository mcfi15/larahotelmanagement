<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Requests\EditUserForm;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserFormRequest;

class UsersController extends Controller
{
    public function index(){
        $users = User::latest()->paginate(10);
        return view('admin.user.index', compact('users'));
    }

    public function create(){
        $countries = Country::all();
        return view('admin.user.create', compact('countries'));
    }

    public function store(UserFormRequest $request){
        $validatedData = $request->validated();

        $user = new User;

        $user->first_name = $validatedData['first_name'];
        $user->last_name = $validatedData['last_name'];
        $user->email = $validatedData['email'];
        $user->role_as = $validatedData['role_as'];
        $user->country = $validatedData['country'];
        $user->state = $validatedData['state'];
        $user->address = $validatedData['address'];
        $user->zip = $validatedData['zip'];
        $user->phone = $validatedData['phone'];
        $user->gender = $validatedData['gender'];
        $user->dob = $validatedData['dob'];
        $user->password = Hash::make($validatedData['password']);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;

            $file->move('uploads/profile/',$filename);
            $user->image = "uploads/profile/$filename";
        }
        
        $user->save();

        return redirect('admin/users')->with('message', 'User account create successfully');
    }

    public function edit(User $user){
        $countries = Country::all();
        return view('admin.user.edit', compact('user', 'countries'));
    }

    public function update(EditUserForm $request, int $user_id){
        $validatedData = $request->validated();

        $user = User::findOrFail($user_id);

        if($user){

            if($request->hasFile('image')){
                $path = $user->image;
                if(File::exists($path)){
                    File::delete($path);
                }

                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
    
                $file->move('uploads/profile/',$filename);
                $user->image = 'uploads/profile/'.$filename;

            }

            $user->first_name = $validatedData['first_name'];
            $user->last_name = $validatedData['last_name'];
            $user->role_as = $validatedData['role_as'];
            $user->country = $validatedData['country'];
            $user->state = $validatedData['state'];
            $user->address = $validatedData['address'];
            $user->zip = $validatedData['zip'];
            $user->phone = $validatedData['phone'];
            $user->gender = $validatedData['gender'];
            $user->dob = $validatedData['dob'];

            $user->update();

            return redirect('admin/users')->with('message', 'User updated successfully');
        }else{
            return redirect()->back()->with('error', 'No Such ID Found');
        }

    }

    public function destroy(int $user_id){
        $user = User::findOrFail($user_id);
        if($user->count() > 0){
            $destination = $user->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $user->delete();
            return redirect('admin/users')->with('message', 'User account deleted successfully'); 
            
        }
        return redirect('admin/users')->with('error', 'Something went wrong'); 
    }

    public function indexRole(){
        $users = User::latest()->paginate(10);
        return view('admin.role.index', compact('users'));
    }

    public function updateRole(Request $request, int $user_id){
        $request->validate([
            'role_as' => ['required', 'integer'],
        ]);

        $user = User::findOrFail($user_id);

        if($user){

            $user->update([
                'role_as' => $request->role_as,
            ]);

            return redirect()->back()->with('message', 'User role updated Successfully');
        }else{
            return redirect()->back()->with('error', 'No such ID found');
        }
    }
}
