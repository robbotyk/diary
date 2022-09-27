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
            height: 1000px;
            border: 3px solid black;
        }
        
        .header{
            height: 130px;
            background-color: skyblue;    
        }
        
        .date{
            float: left;
            margin-top: 20px;
            margin-left: 10px;
            margin-bottom: 0px;
            font-size: 25px;
        }
        
        .date p{
            margin-top: 0px;
            margin-left: 10px;
        }
        
        .header-right{
            float: right;
        }
        
        .header-right h2{
            margin-bottom: 0px;
        }
        .header-right input{
            margin-right: 10px;
        }
        
        .header-right p{
            margin-top: 0px;
            margin-bottom: 0px;
        }
        .weather{
            height: 60px;   
        }
        
        .weather input{
            height: 20px;
            width: 162px;
            margin-top: 10px;
            
        }
        
        .username h2{
            margin-top: 0px;
        }
        .title{
            height: 70px;
        }
        
        .title-class{
            float: left;
            margin-left: 160px;
        }
        
        
        .title-item{
            float: left;
            margin-left: 175px;
            
        }
        
        .Item{
            height: 180px;
        }
        
        .item{
            float: left;
            margin-left: 20px;
        }
        .item h1{
            margin-top: 0px;
        }
        .item input{
            width: 185px;
            height: 30px;
            margin-top: 5px;
            font-size: 15px;
        }
        
        .item p{
            margin-top: 0px;
            margin-bottom: 0px;
        }
        
        .item textarea{
            margin-top: 5px;
            margin-bottom: 0px;
            height: 115px;
            width: 185px;
            font-size: 18px;
        }
        
        .item_impression{
            float: left;
            margin-left: 20px;
        }
        
        .item_impression p{
            margin-top: 0px;
            margin-bottom: 0px;
        }
        
        .item_impression textarea{
            margin-top: 5px;
            margin-bottom: 0px;
            height: 115px;
            width: 300px;
            font-size: 18px;
        }
        
        .total{
            height: 270px;
        }
        
        .Total_item{
            margin-left: 10px;
        }
        
        .Total_item textarea{
            width: 860px;
            height: 170px;
            font-size: 25px;
        }
        
        .Total_item h1{
            margin-top: 0px;
            margin-bottom: 0px;
        }
        
        .Total_item p{
            margin-top: 0px;
            margin-bottom: 20px;
        }
        
        .footer {
            float: right;
        }
        
        .back{
            float: left;
        }
        
        .footer input{
            margin-left: 10px;
        }
    </style>
    <body>
        <div class='diary'>
            
            <form action="/inputs/{{$input->id}}" method="POST">
                
                {{ csrf_field() }}
                @method('PUT')
                <div class='header'>
                    <div class='date' name='diary[date]'> 
                        {{$input->date->format('Y年m月d日')}}
                    </div>
                    <div class='header-right'>
                        <div class='weather'>
                            <h2>天気 <input type="text" name="diary[weather]"　placeholder="天気"　value="{{$input->weather}}"></h2>
                            <p class="weather__errors" style="color:red">{{ $errors->first('diary.weather') }}</p>
                        </div>
                        <div class='username'>
                            <h2>名前 {{Auth::user()->name}}</h2>
                        </div>
                    </div>
                </div>
                
                <div class='main'>
                    <div class='title'>
                        <h3 class='title-class'>教科</h3>
                        <h3 class='title-item'>内容</h3>
                        <h3 class='title-item'>所感</h3>
                    </div>
                    
                    <div class='Item'>
                        <div class='item'><h1>1,2限目</h1></div>
                        <div class='item'>
                            <input type="text" name="diary[First_class]" placeholder="教科" value="{{$input->First_class}}"/>
                            <p class="First_class__errors" style="color:red">{{ $errors->first('diary.First_class')}}</p>
                        </div>
                        <div class='item'>
                            <textarea name="diary[First_content]" placeholder="内容">{{$input->First_content}}</textarea>
                            <p class="First_content__errors" style="color:red">{{ $errors->first('diary.First_content')}}</p>
                        </div>    
                        <div class='item_impression'>
                            <textarea name="diary[First_impression]" placeholder="所感">{{$input->First_impression}}</textarea>
                            <p class="First_impression__errors" style="color:red">{{ $errors->first('diary.First_impression')}}</p>
                        </div>   
                    </div>
                    
                    <div class='Item'>
                        <div class='item'><h1>3,4限目</h1></div>
                        <div class='item'>
                            <input type="text" name="diary[Secound_class]" placeholder="教科" value="{{$input->Secound_class}}"/>
                            <p class="Secound_class__errors" style="color:red">{{ $errors->first('diary.Secound_class')}}</p>
                        </div>
                        <div class='item'>
                            <textarea name="diary[Secound_content]" placeholder="内容">{{$input->Secound_content}}</textarea>
                            <p class="Secound_content__errors" style="color:red">{{ $errors->first('diary.Secound_content')}}</p>
                        </div>    
                        <div class='item_impression'>
                            <textarea name="diary[Secound_impression]" placeholder="所感">{{$input->Secound_impression}}</textarea>
                            <p class="Secound_impression__errors" style="color:red">{{ $errors->first('diary.Secound_impression')}}</p>
                        </div>   
                    </div>
                    
                    <div class='Item'>
                        <div class='item'><h1>5,6限目</h1></div>
                        <div class='item'>
                            <input type="text" name="diary[Third_class]" placeholder="教科" value="{{$input->Third_class}}"/>
                            <p class="Third_class__errors" style="color:red">{{ $errors->first('diary.Third_class')}}</p>
                        </div>
                        <div class='item'>
                            <textarea name="diary[Third_content]" placeholder="内容">{{$input->Third_content}}</textarea>
                            <p class="Third_content__errors" style="color:red">{{ $errors->first('diary.Third_content')}}</p>
                        </div>    
                        <div class='item_impression'>
                            <textarea name="diary[Third_impression]" placeholder="所感">{{$input->Third_impression}}</textarea>
                            <p class="Third_impression__errors" style="color:red">{{ $errors->first('diary.Third_impression')}}</p>
                        </div>  
                    </div>
                    <div class='total'>
                        <div class='Total_item'>
                            <div class='Total_item'><h1>総合所感</h1></div>
                            <div class='Total_item'>
                                <textarea name="diary[Total_impression]" placeholder="総合所感">{{$input->Total_impression}}</textarea>
                                <p class="Total_impression__errors" style="color:red">{{ $errors->first('diary.Total_impression')}}</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <div class='footer'>
                    <input type="submit" value="更新">
                </div>
                
            </form>
            
        </div>
        
    </body>
</html>
