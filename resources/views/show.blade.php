<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>日誌</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <style>
        .data{
            display: flex;
            flex-wrap: row wrap;
        }
        .first{
            display: flex;
        }
        .secound{
            display: flex;
        }
        .third{
            display: flex;
        }
        .button{
            display: flex;
        }
    </style>
    <body>
        <div class='diary'>
            <div class='data'>
                <div>{{$input->date->format('Y年m月d日')}}</div>
                <div><h2>天気 {{$input->weather}}</h2>
                    <h2>名前 ユーザー名</h2>
                </div>
            </div>
            <div class='first'>
                <div><h2>1,2限目</h2></div>
                <div>{{$input->First_class}}</div>
                <div>{{$input->First_content}}</div>    
                <div>{{$input->First_impression}}</div>   
            </div>
            <div class='secound'>
                <div><h2>3,4限目</h2></div>
                <div>{{$input->Secound_class}}</div>
                <div>{{$input->Secound_content}}</div>    
                <div>{{$input->Secound_impression}}</div>   
            </div>
            <div class='third'>
                <div><h2>5,6限目</h2></div>
                <div>{{$input->Third_class}}</div>
                <div>{{$input->Third_content}}</div>    
                <div>{{$input->Third_impression}}</div>  
            </div>
            <div>
                <div><h2>総合所感</h2></div>
                <div>{{$input->Total_impression}}</div>
            </div>
            <div class=button>
                <div class="back"><a href="/" >戻る</a></div>
                <div class="edit"><a href="/inputs/{{$input->id}}/edit">編集</a></div>
            </div>
        </div>
       
        
    </body>
</html>