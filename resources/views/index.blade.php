@extends('layouts.app')
@section('content')
@foreach ($posts as $items)
    <p>Заголовок {{$items->title}}</p>
    <a href="#">Подробнее</a>
@endforeach


@endsection('content')