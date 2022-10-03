@extends('layouts.app')　　　　　　　　　　　　　　　　　　

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>日誌</title
    </head>
    <body>
        <h1>カレンダー</h1>
        <h1 class='create'><a href='/inputs/create'>作成</a></h1>
        <div class='inputs'>
            @foreach($inputs as $input)
                <div class='input'>
                    <a href="/inputs/{{$input->id}}"><h2 class='date'>{{$input->date->format('Y年m月d日')}}
                </div>
            @endforeach
        </div>
    </body>
    
</html>
@endsection