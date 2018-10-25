@extends('layouts.layout')

@section('navbar')
    @parent
@endsection

@section('header')
    <div class="jumbotron">
        <div class="container">
            <h3 class="display-5">Страница сотрудников</h3>

            <form class="form-inline my-2 my-lg-0"  id="myForm" method="get">

                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"
                id="name">

                <button type="button" class="btn btn-outline-success my-2 my-sm-0"  id="but1"
                        onClick=ajaxSearch()>Отправить</button>
            </form>



        </div>
    </div>
@endsection

@section('content')
    <div class="container" id="msg">
        <table class="table">
            <thead class="thead-default" id="table_head">
            <tr>
                <th>#</th>
                <th>Фото</th>
                <th>ФИО</th>
                <th >Комуник.</th>
                <th>Инж. навык</th>
                <th>Тайм менедж.</th>
                <th>Знание языков</th>

                <th>Кол. проектов</th>
            </tr>
            </thead>



            <tbody id="list" >
            @foreach($employees as $emp)
                <tr >

                    <th scope="row"> {{ ++$i }}</th>

                    <td>
                        <div class="avatar">
                            <img  src="{{ Storage::url('img/'.$emp->photo) }} "  alt="Аватар" class="avatar__pic">
                        </div>
                    </td>

                    <td>{{  $emp->name }}</td>
                    <td>{{  $emp->sociability }}</td>
                    <td>{{  $emp->engineering }}</td>
                    <td>{{  $emp->timemanagment }}</td>
                    <td>{{  $emp->languages }}</td>

                    <td>{{  count($emp->projects)}}</td>

                </tr>
            @endforeach


            <tr >
                <th scope="row">Среднее значение характеристик</th>
                <td></td>
                <td></td>

                <td>{{ round($employees->avg('sociability'), 1) }}</td>
                <td>{{ round($employees->avg('engineering'), 1) }}</td>
                <td>{{ round($employees->avg('timemanagment'), 1) }}</td>
                <td>{{ round($employees->avg('languages'), 1) }}</td>
            </tr>

            </tbody>
        </table>
    </div>


@endsection