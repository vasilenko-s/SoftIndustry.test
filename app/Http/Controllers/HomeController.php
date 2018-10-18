<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    const DEFAULT_PHOTO ='image.jpg';

    //список проектов
    static

    public function index(){

        //список проектов
        $projects=Project::all();

        return view('welcome')->withProjects($projects)->withTitle('Employee monitoring');

    }

    public function store(Request $request){

        //Validation
        $request->validate([
            'sociability' => 'required',
            'engineering' => 'required',
            'timemanagment'=> 'required',
            'languages'=> 'required'
        ]);

        //Save photo
        $file=$request->file('photo');
        if ($file) {
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/img', $filename);
        } else {$filename = self::DEFAULT_PHOTO; }

        // save form's data
        Employee::create([
            'name' => $request->input('name'),
            'photo' => $filename,
            'sociability'=> $request->input('sociability'),
            'engineering'=> $request->input('engineering'),
            'timemanagment'=> $request->input('timemanagment'),
            'languages'=> $request->input('languages'),
        ])->projects()->attach( $request->input('project'));


        //редирект на страницу создания сотрудника
        $request->session()->flash('status', 'Данные успешно сохранены!');

        //список проектов
        $projects=Project::all();

        return view('welcome')->withProjects($projects)->withTitle('Employee monitoring');

    }

}
