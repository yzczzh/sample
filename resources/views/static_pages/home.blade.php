@extends('layouts.default')
@section('title', '注册')

@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
      你所看到的是 <a href="https://laravel-china.org/laravel-tutorial/5.1">Laravel 入门教程</a>的项目主页
    </p>
    <p>一切，将从这里开始</p>
    <p>
      <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="botton">现在注册</a>
    </p>
  </div>
@stop