<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    public function show(){

        //переменная счетчика
        $i=0;
        //данные с модели
        $employees=Employee::all();

        return view('list')->with('i', $i)->with('employees',$employees)->withTitle('List');

    }

    public function ajaxSearch(){
//        $msg = "This is a simple message.";
//
//        return response()->json(array('msg'=> $msg), 200);
        return response()->json(['success'=>'Data is successfully added']);
    }
}
