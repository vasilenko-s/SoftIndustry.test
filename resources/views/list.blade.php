@extends('layouts.layout')

@section('navbar')
    @parent
@endsection

@section('header')
    <div class="jumbotron">
        <div class="container">
            <h3 class="display-5">Страница сотрудников</h3>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
@endsection

@section('content')

@endsection