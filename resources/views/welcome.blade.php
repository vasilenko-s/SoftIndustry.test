@extends('layouts.layout')

@section('navbar')
    @parent
@endsection

@section('header')
    <div class="jumbotron">
        <div class="container">
            <h4 class="display-5">Страница создания сотрудников</h4>
        </div>
    </div>
@endsection

@section('content')
    @include('create')
@endsection
