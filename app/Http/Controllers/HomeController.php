<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('welcome');

    }


//    public function store(Request $request){
//
//        //Validation
//        $request->validate([
//            'nickname' => 'required|max:20',
//            'name' => 'required',
//            'surname' => 'required',
//            'phone' => 'required',
//            'sex' => 'required',
//            'avatar' => 'required'
//        ]);
//
//        //Save avatar
//        $file=$request->file('avatar');
//        $filename=$file->getClientOriginalName();
//        $file->storeAs('public/img', $filename);
//
//        // save form's data
//        User::create([
//            'nickname' => $request->input('nickname'),
//            'name' => $request->input('name'),
//            'surname' => $request->input('surname'),
//            'phone' => $request->input('phone'),
//            'sex' => $request->input('sex'),
//            'showPhone' => $request->input('showPhone', 'off'),
//            'filenameAvatar' => $filename
//
//        ]);
//
//        //редирект на страницу с введенными данными
//        return view('store')->withFilename($filename);
//
//    }

}
