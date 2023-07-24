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
        $value = $request['temple_name'];
        $slug = Str::slug($value);
        $data = new AddTempleModel;
        $data->temple_name = $value;
        $data->slug = $slug;
        $data->time_period = $request['time_period'];
        $data->patron = $request['patron'];
        $data->deity = $request['deity'];
        $data->location = $request['location'];
        $data->category = $request['category'];
        $data->city = $request['city'];
        $data->about_temple = $request['about_temple'];
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
            return $name = $request['image'];
            $path = $request->file('image')->storeAs('uploading',$name);
            $data = new TempleImage;
            $data -> temple_id = $request['temple_select'];
            $data -> image_name = $name;
            $data -> image_desc = json_encode($request['desc']);
            $data -> temple_banner = json_encode($request['banner_image']);
            $data->save();
            // return TempleImage::all();
            return back()->withSuccess('Temple data success fully save');
        }
        return redirect('/login')->with('error','You are not allowed');
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
