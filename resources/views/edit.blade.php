<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>日誌</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <style>
        .date{
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
        <div class='content'>
            <form action="/inputs/{{$input->id}}" method="POST">
                {{ csrf_field() }}
                @method('PUT')
                <div class='data'>
                    <div class='date'>
                        {{$input->date->format('Y年m月d日')}}
                    </div>
                    <div class='weather'>
                        <h2>天気 <input type="text" name="diary[weather]" value="{{$input->weather}}"></h2>
                        <h2>名前 ユーザー名</h2>
                    </div>
                </div>
                <div class='first'>
                    <div><h2>1,2限目</h2></div>
                    <div class='First_class'>
                        <input type="text" name="diary[First_class]" placeholder="教科" value="{{$input->First_class}}"/>
                    </div>
                    <div class='First_content'>
                        <textarea name="diary[First_content]" placeholder="内容">{{$input->First_content}}</textarea>
                    </div>    
                    <div class='First_impression'>
                        <textarea name="diary[First_impression]" placeholder="所感">{{$input->First_impression}}</textarea>
                    </div>   
                </div>
                <div class='secound'>
                    <div><h2>3,4限目</h2></div>
                    <div class='Secound_class'>
                        <input type="text" name="diary[Secound_class]" placeholder="教科" value="{{$input->Secound_class}}"/>
                    </div>
                    <div class='Secound_content'>
                        <textarea name="diary[Secound_content]" placeholder="内容">{{$input->Secound_content}}</textarea>
                    </div>    
                    <div class='Secound_impression'>
                        <textarea name="diary[Secound_impression]" placeholder="所感">{{$input->Secound_impression}}</textarea>
                    </div>   
                </div>
                <div class='third'>
                    <div><h2>5,6限目</h2></div>
                    <div class='Third_class'>
                        <input type="text" name="diary[Third_class]" placeholder="教科" value="{{$input->Third_class}}"/>
                    </div>
                    <div class='Third_content'>
                        <textarea name="diary[Third_content]" placeholder="内容">{{$input->Third_content}}</textarea>
                    </div>    
                    <div class='Third_impression'>
                        <textarea name="diary[Third_impression]" placeholder="所感">{{$input->Third_impression}}</textarea>
                    </div>  
                </div>
                <div class='total'>
                    <div><h2>総合所感</h2></div>
                    <div class='Total_impression'>
                        <textarea name="diary[Total_impression]" placeholder="総合所感">{{$input->Total_impression}}</textarea>
                    </div>
                </div>
                <div class=button>
                    <input type="submit" value="更新">
                </div>
            </form>
        </div>
        
       
        
    </body>
</html>