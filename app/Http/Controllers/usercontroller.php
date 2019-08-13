<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App \people;
use App \ profile;

class usercontroller extends Controller
{
    public function home(){
        return view('index');
    }
    public function user(){
        $result = people::all();
       
        return view('user',compact('result'));
        
    }
    public function creat(){
        return view('creat');
    }
    public function profile(){
        return view('profile');
    }

    public function store(){
        $fname = request('fname');
        $lname = request('lastname');
        $email =request('email');
        $phone =request('phone');
         $people = people::create([
            'firtsname' => $fname,
            'lastname' => $lname,
            'emial' => $email,
            'phone' => $phone
        ]);

        $city =request('city');
        $state =request('state');
        $zip =request('zip');
        
        // profile::create([
        //     'city' => $city,
        //     'state' => $state,
        //     'zip' => $zip,
        //     'owner_id' => $people ->id
        // ]);
        $people -> profile()->create([
            'city' => $city,
            'state' => $state,
            'zip' => $zip,
        ]);
        return redirect('/');
    }
    public function profileinfo($id){
        $show = people::find($id);

        return view('profile',compact('show'));
    }
    public function update($id){
        $result = people::find($id);
        return view('update',compact('result'));
    }
    public function updatesuc($id){
        $result = people::find($id);
       
        $name = request('firstname');
        $name1 = request('lastname');
        $name2 = request('email');
        $name3 = request('phone');
        $name4 = request('city');
        $name5 = request('state');
        $name6 = request('zip');

        $result-> firtsname = $name;
        $result-> lastname = $name1;
        $result-> emial = $name2;
        $result-> phone = $name3;
        
        $result->save();

        $result-> profile-> city = $name4;
        $result-> profile-> state = $name5;
        $result-> profile-> zip = $name6;
        $result-> profile ->save();




        return back();
    }
    public function distroy($id){
        $result = people::find($id);
        $result -> profile ->delete();
        $result -> delete();
        
        return redirect('/');
    }
}
