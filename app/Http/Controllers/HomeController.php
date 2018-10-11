<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('welcome');

    }


    public function store(Request $request){

        //Validation
        $request->validate([
            'name' => 'required',
            'surname' => 'required'
        ]);

//        //Save avatar
//        $file=$request->file('avatar');
//        $filename=$file->getClientOriginalName();
//        $file->storeAs('public/img', $filename);

        // save form's data
        Employee::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname')

        ]);

        //редирект на страницу создания сотрудника
        $request->session()->flash('status', 'Данные успешно сохранены!');
        return view('welcome');

    }

}
