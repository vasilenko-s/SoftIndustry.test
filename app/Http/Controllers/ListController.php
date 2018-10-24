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

    public function ajaxSearch(Request $search){
//        Получаем значение имени из формы поиска
        $name=$search['name'];

//        Производим поиск  данных в таблице бд по заданому параметру
        $employee = Employee::where('name', $name)->first();

//        Получаем количество проектов
        $projects=$employee->projects;

//        Передаем результат
        return response()->json(['employee'=>$employee, 'msg'=>"Успех", 'projects' => $projects]);
    }
}
