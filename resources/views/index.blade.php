<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>日誌</title>
    </head>
    <style>
    .diary{
        margin: 0 auto 0 auto;
        max-width: 910px;
        height: 1010px;
        border: 3px solid black;
        background-color: azure;
    }
    
    .header{
        height: 80px;
        background-color: skyblue;
    }
    
    .nowdata{
        margin: 0px;
        padding-top: 20px;
        padding-left: 80px;
    }
    
    .title_data{
        margin-left: 80px;
        float: left;
    }
    
    .title{
        height: 50px;
        margin-top: 20px;
    }
    
    .title_data{
        margin: 0px;
        margin-left: 80px;
    }
    .title_name{
        float: left;
        margin: 0px;
        margin-left: 270px;
    }


    .inputs{
        float: left;
    }
    
    .data{
        margin-left: 80px;
    }
    
    span{
        margin-left: 60px;
    }
    
    .footer{
        margin: 0 auto 0 auto;
        max-width: 910px;
    }
    .create{
        float: right;
        margin: 0px;
    }
    
    </style>
    <body>
        
        <div class='diary'>
            <div class='header'>
                <h1 class='nowdata'>今日:{{ \Carbon\Carbon::now()->format('Y年m月d日')}}</h1>
            </div>
            <div class='main'>
                <div class='title'>
                    <h1 class="title_data">日誌データ</h1>
                    <h1 class="title_name">作成者</h1>
                </div>
            <div class='inputs'>
                    @foreach($inputs as $input)
                        <div class='data'>
                            <a href="/inputs/{{$input->id}}"><h1 class='date'>{{$input->date->format('Y年m月d日')}}の日誌<span>{{$input->name}}</span></h2>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class='footer'>
            <h2 class='create'><a href='/inputs/create'>新規作成</a></h2>
        </div>
    </body>
    
</html>