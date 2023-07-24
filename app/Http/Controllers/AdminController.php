<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AddTempleModel;
use App\Models\TempleImage;
use App\Models\User;
use Hash;
use Illuminate\Support\Str;


class AdminController extends Controller
{
    public function dashboard(){
        if(Auth::check()){
            $id = Auth::user()->id;
            $user = User::find($id);
           return view('admin.dashboard',compact('user'));
        }
            return redirect('/login')->with('error','You are not allowed');
        
    }

    public function addtemple(Request $request){
        if(Auth::check()){
            $id = Auth::user()->id;
            $user = User::find($id);
           return view('admin.addtemple',compact('user'));
        }
            return redirect('/login')->with('error','You are not allowed');
    }

    public function savetemple(Request $request){
       if(Auth::check()){
        $filename_banner = [];
        foreach ($request->file('banner_image') as $file_banner) {
        $extension_banner = $file_banner->getClientOriginalName();
        $file_banner->move(public_path().'/images_banner/',$extension_banner);
         $filename[] =$extension_banner;
        }     
        $value = $request['temple_name'];
        $slug = Str::slug($value);
        $data = new AddTempleModel;
        $data->temple_name = $value;
        $data->slug = $slug;
        $data -> banner_image =json_encode($filename);
        $data->time_period = $request['time_period'];
        $data->patron = $request['patron'];
        $data->deity = $request['deity'];
        $data->location = $request['location'];
        $data->category = $request['category'];
        $data->city = $request['city'];
        $data->about_temple = $request['about_temple'];
        $data->active = 1;
        $data->save();
        return redirect()->intended('/AddTempleImage')->withSuccess('Temple Add succesfully');
       }
       return redirect('/login')->with('error','You are not allowed');
    }

    public function viewTempleImage(){
        if(Auth::check()){
        $data = AddTempleModel::all();
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('admin.templeinfo',compact('user','data'));
    }
        return redirect('/login')->with('error','You are not allowed');

    }

    public function SaveTempleImage(Request $request){
        if(Auth::check()){
            $filename = [];
            foreach ($request->file('image') as $file) {
            $extension = $file->getClientOriginalName();
            $file->move(public_path().'/images/',$extension);
            $filename[] =$extension;
            }

            $data = new TempleImage;
            $data -> temple_slug = $request['temple_select'];
            $data -> image_title = json_encode($request['image_title']);
            $data -> image = json_encode($filename);
            $data -> image_desc = json_encode($request['desc']);
            $data->save();
            return back()->withSuccess('Temple data success fully save');
        }
        return redirect('/login')->with('error','You are not allowed');
    }

        public function alltemple(){
        if(Auth::check()){
            $id = Auth::user()->id;
            $user = User::find($id);
            $data = AddTempleModel::all();
           return view('admin.alltemple',compact('user','data'));
        }
            return redirect('/login')->with('error','You are not allowed');   

    }
        public function active($slug){
            Update::AddTempleModel('slug',$slug)->update([
                'active'=>1,
            ]);
        }
        public function view($slug){
            if(Auth::check()){
                $id = Auth::user()->id;
                $user = User::find($id);
                $temple = AddTempleModel::where('slug',$slug)->get();
                $temple_image = TempleImage::where('temple_slug',$slug)->get();
                $about_temple = html_entity_decode($temple[0]['about_temple']);
                 $image_title = json_decode($temple_image[0]['image_title']);
                $description = json_decode($temple_image[0]['image_desc']);
                $image = json_decode($temple_image[0]['image']);
                $banner = json_decode($temple[0]['banner_image']);
                return view('admin.ViewTemple',compact('user','temple','about_temple','image_title','image','description','banner'));
            }
                return redirect('/login')->with('error','You are not allowed');   
        }

        public function edit($slug){
            if(Auth::check()){
                $id = Auth::user()->id;
                $user = User::find($id);
                $temple = AddTempleModel::where('slug',$slug)->get();
                $temple_image = TempleImage::where('temple_slug',$slug)->get();
                $about_temple = html_entity_decode($temple[0]['about_temple']);
                $image_title = json_decode($temple_image[0]['image_title']);
                $description = json_decode($temple_image[0]['image_desc']);
                $images = json_decode($temple_image[0]['image']);
                $banner = json_decode($temple[0]['banner_image']);
                return view('admin.EditTemple',compact('user','temple','about_temple','image_title','images','description','banner','temple_image'));
            }
                return redirect('/login')->with('error','You are not allowed');   

        }

        public function update($slug,Request $request){
            return view('admin.edit_temple_image.blade.php');


        }
        public function infoUpdate($slug,Request $request){

        }

        public function infoUpdateSave(){
            
        }

        public function delete($slug){
            $temple = AddTempleModel::where('slug',$slug)->delete();
            $temple_image = TempleImage::where('temple_slug',$slug)->delete();
            return redirect('/alltemple')->withSuccess("Temple Delete Success fully");
            
        }
        public function logout(){
        Auth::logout();
        return redirect('/login');
        }
}
