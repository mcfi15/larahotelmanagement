<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\SettingFormRequest;

class SettingController extends Controller
{
    public function index(){
        $setting = Setting::first();
        $countries = Country::all();
        return view('admin.setting.setting', compact('setting', 'countries'));
    }

    public function store(SettingFormRequest $request){
        $validatedData = $request->validated();
      
        $setting = Setting::first();
        

        if($setting){
            
            //update setting
            // $setting = Setting::findOrFail($setting);

            $setting->website_name = $validatedData['website_name'];
            $setting->website_url = $validatedData['website_url'];
            $setting->page_title = $validatedData['page_title'];
            $setting->meta_title = $validatedData['meta_title'];
            $setting->meta_keywords = $validatedData['meta_keywords'];
            $setting->meta_description = $validatedData['meta_description'];
            $setting->country = $validatedData['country'];
            $setting->zipcode = $validatedData['zipcode'];
            $setting->address = $validatedData['address'];
            $setting->phone = $validatedData['phone'];
            $setting->phone2 = $validatedData['phone2'];
            $setting->email = $validatedData['email'];
            $setting->email2 = $validatedData['email2'];
            $setting->facebook = $validatedData['facebook'];
            $setting->twitter = $validatedData['twitter'];
            $setting->instagram = $validatedData['instagram'];
            $setting->linkedin = $validatedData['linkedin'];

            // if($request->hasFile('logo')){

            //     $path = 'uploads/logo/'.$setting->logo;
            //     if(File::exists($path)){
            //         File::delete($path);
            //     }
            //     $file = $request->file('logo');
            //     $ext = $file->getClientOriginalExtension();
            //     $filename = time().'.'.$ext;
    
            //     $file->move('uploads/logo/',$filename);
            //     $setting->logo = 'uploads/logo/'.$filename;
            // }

            // if($request->hasFile('favicon')){

            //     $path = 'uploads/favicon/'.$setting->favicon;
            //     if(File::exists($path)){
            //         File::delete($path);
            //     }
            //     $file = $request->file('favicon');
            //     $ext = $file->getClientOriginalExtension();
            //     $filename = time().'.'.$ext;
    
            //     $file->move('uploads/favicon/',$filename);
            //     $setting->favicon = 'uploads/favicon/'.$filename;
            // }

            // if($request->hasFile('footerlogo')){

            //     $path = 'uploads/footerlogo/'.$setting->footerlogo;
            //     if(File::exists($path)){
            //         File::delete($path);
            //     }
            //     $file = $request->file('footerlogo');
            //     $ext = $file->getClientOriginalExtension();
            //     $filename = time().'.'.$ext;
    
            //     $file->move('uploads/footerlogo/',$filename);
            //     $setting->footerlogo = 'uploads/footerlogo/'.$filename;
            // }

            $setting->update();

            return redirect()->back()->with('message', 'Setting Saved Successfully');
            

        }else{
            //create new data
            $setting = new Setting;

            $setting->website_name = $validatedData['website_name'];
            $setting->website_url = $validatedData['website_url'];
            $setting->page_title = $validatedData['page_title'];
            $setting->meta_title = $validatedData['meta_title'];
            $setting->meta_keywords = $validatedData['meta_keywords'];
            $setting->meta_description = $validatedData['meta_description'];
            $setting->country = $validatedData['country'];
            $setting->zipcode = $validatedData['zipcode'];
            $setting->address = $validatedData['add'];
            $setting->phone = $validatedData['phone'];
            $setting->phone2 = $validatedData['phone2'];
            $setting->email = $validatedData['email'];
            $setting->email2 = $validatedData['email2'];
            $setting->facebook = $validatedData['facebook'];
            $setting->twitter = $validatedData['twitter'];
            $setting->instagram = $validatedData['instagram'];
            $setting->linkedin = $validatedData['linkedin'];

            
            // if($request->hasFile('logo')){
            //     $file = $request->file('logo');
            //     $ext = $file->getClientOriginalExtension();
            //     $filename = time().'.'.$ext;
    
            //     $file->move('uploads/logo/',$filename);
            //     $setting->logo = 'uploads/logo/'.$filename;
            // }

            // if($request->hasFile('favicon')){
            //     $file = $request->file('favicon');
            //     $ext = $file->getClientOriginalExtension();
            //     $filename = time().'.'.$ext;
    
            //     $file->move('uploads/favicon/',$filename);
            //     $setting->favicon = 'uploads/favicon/'.$filename;
            // }

            // if($request->hasFile('footerlogo')){
            //     $file = $request->file('footerlogo');
            //     $ext = $file->getClientOriginalExtension();
            //     $filename = time().'.'.$ext;
    
            //     $file->move('uploads/footerlogo/',$filename);
            //     $setting->footerlogo = 'uploads/footerlogo/'.$filename;
            // }
            

            $setting->save();
            
            return redirect()->back()->with('message', 'Setting Saved Successfully');
        }
    }

    public function indexBrands(){
        $setting = Setting::first();
        return view('admin.setting.branding', compact('setting'));
    }

    public function storeBrands(SettingFormRequest $request){
        $validatedData = $request->validated();
      
        $setting = Setting::first();
        

        if($setting){
            
            if($request->hasFile('logo')){

                $path = 'uploads/logo/'.$setting->logo;
                if(File::exists($path)){
                    File::delete($path);
                }
                $file = $request->file('logo');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
    
                $file->move('uploads/logo/',$filename);
                $setting->logo = 'uploads/logo/'.$filename;
            }

            if($request->hasFile('favicon')){

                $path = 'uploads/favicon/'.$setting->favicon;
                if(File::exists($path)){
                    File::delete($path);
                }
                $file = $request->file('favicon');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
    
                $file->move('uploads/favicon/',$filename);
                $setting->favicon = 'uploads/favicon/'.$filename;
            }

            if($request->hasFile('footerlogo')){

                $path = 'uploads/footerlogo/'.$setting->footerlogo;
                if(File::exists($path)){
                    File::delete($path);
                }
                $file = $request->file('footerlogo');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
    
                $file->move('uploads/footerlogo/',$filename);
                $setting->footerlogo = 'uploads/footerlogo/'.$filename;
            }

            $setting->update();

            return redirect()->back()->with('message', 'Branding Saved Successfully');
            

        }else{
            //create new data
            $setting = new Setting;

            if($request->hasFile('logo')){
                $file = $request->file('logo');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
    
                $file->move('uploads/logo/',$filename);
                $setting->logo = 'uploads/logo/'.$filename;
            }

            if($request->hasFile('favicon')){
                $file = $request->file('favicon');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
    
                $file->move('uploads/favicon/',$filename);
                $setting->favicon = 'uploads/favicon/'.$filename;
            }

            if($request->hasFile('footerlogo')){
                $file = $request->file('footerlogo');
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
    
                $file->move('uploads/footerlogo/',$filename);
                $setting->footerlogo = 'uploads/footerlogo/'.$filename;
            }
            

            $setting->save();
            
            return redirect()->back()->with('message', 'Branding Saved Successfully');
        }
    }
}
