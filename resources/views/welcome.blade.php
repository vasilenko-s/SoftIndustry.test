@extends('layouts.layout')

@section('navbar')
    @parent
@endsection

@section('header')
    <div class="jumbotron">
        <div class="container">
            <h3 class="display-5">Страница создания сотрудников</h3>
        </div>
    </div>

@endsection

@section('content')
    @include('create')
@endsection
