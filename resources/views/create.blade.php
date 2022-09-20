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
            <form action="/inputs" method="POST">
                @csrf
                <div class='data'>
                    <div class='date'>
                        <input type='date' name='diary[date]'>
                    </div>
                    <div class='weather'>
                        <h2>天気 <input type="text" name="diary[weather]" value="{{old('diary.weather')}}"></h2>
                        <p class="weather__errors" style="color:red">{{ $errors->first('diary.weather') }}</p>
                        <h2>名前 ユーザー名</h2>
                    </div>
                </div>
                <div class='first'>
                    <div><h2>1,2限目</h2></div>
                    <div class='First_class'>
                        <input type="text" name="diary[First_class]" placeholder="教科" value="{{old('diary.First_class')}}"/>
                        <p class="First_class__errors" style="color:red">{{ $errors->first('diary.First_class')}}</p>
                    </div>
                    <div class='First_content'>
                        <textarea name="diary[First_content]" placeholder="内容">{{old ('diary.First_content')}}</textarea>
                        <p class="First_content__errors" style="color:red">{{ $errors->first('diary.First_content')}}</p>
                    </div>    
                    <div class='First_impression'>
                        <textarea name="diary[First_impression]" placeholder="所感">{{old('diary.First_impression')}}</textarea>
                        <p class="First_impression__errors" style="color:red">{{ $errors->first('diary.First_impression')}}</p>
                    </div>   
                </div>
                <div class='secound'>
                    <div><h2>3,4限目</h2></div>
                    <div class='Secound_class'>
                        <input type="text" name="diary[Secound_class]" placeholder="教科" value="{{old('diary.Secound_class')}}"/>
                        <p class="Secound_class__errors" style="color:red">{{ $errors->first('diary.Secound_class')}}</p>
                    </div>
                    <div class='Secound_content'>
                        <textarea name="diary[Secound_content]" placeholder="内容">{{ old('diary.Secound_content')}}</textarea>
                        <p class="Secound_content__errors" style="color:red">{{ $errors->first('diary.Secound_content')}}</p>
                    </div>    
                    <div class='Secound_impression'>
                        <textarea name="diary[Secound_impression]" placeholder="所感">{{ old('diary.Secound_impression')}}</textarea>
                        <p class="Secound_impression__errors" style="color:red">{{ $errors->first('diary.Secound_impression')}}</p>
                    </div>   
                </div>
                <div class='third'>
                    <div><h2>5,6限目</h2></div>
                    <div class='Third_class'>
                        <input type="text" name="diary[Third_class]" placeholder="教科" value="{{old('diary.Third_class')}}"/>
                        <p class="Third_class__errors" style="color:red">{{ $errors->first('diary.Third_class')}}</p>
                    </div>
                    <div class='Third_content'>
                        <textarea name="diary[Third_content]" placeholder="内容">{{ old('diary.Third_content')}}</textarea>
                        <p class="Third_content__errors" style="color:red">{{ $errors->first('diary.Third_content')}}</p>
                    </div>    
                    <div class='Third_impression'>
                        <textarea name="diary[Third_impression]" placeholder="所感">{{ old('diary.Third_impression')}}</textarea>
                        <p class="Third_impression__errors" style="color:red">{{ $errors->first('diary.Third_impression')}}</p>
                    </div>  
                </div>
                <div　class='total'>
                    <div><h2>総合所感</h2></div>
                    <div class='Total_impression'>
                        <textarea name="diary[Total_impression]" placeholder="総合所感">{{ old('diary.Total_impression')}}</textarea>
                        <p class="Total_impression__errors" style="color:red">{{ $errors->first('diary.Total_impression')}}</p>
                    </div>
                </div>
                <div class=button>
                    <div class="back"><a href="/" >戻る</a></div>
                    <input type="submit" value="保存"/>
                </div>
            </form>
        </div>
       
        
    </body>
</html>