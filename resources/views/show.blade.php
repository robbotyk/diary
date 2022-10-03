<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>日誌</title>
        
    <style>
        .diary{
            margin: 0 auto 0 auto;
            max-width: 910px;
            height: 1010px;
            border: 3px solid black;
        }
        
        .header{
            height: 140px;
            background-color: skyblue;    
        }
        
        .date{
            float: left;
            margin-top: 20px;
            margin-left: 10px;
            margin-bottom: 0px;
            font-size: 25px;
        }
        
        .header-right{
            float: right;
            
        }
        
        .header-right h2{
            margin-top: 23px;
            margin-bottom: 0px;
            margin-right: 10px;
            width: 225px;
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
        
        .item_class{
            float: left;
            margin-left: 20px;
            width: 185px;
            height: 30px;
            margin-top: 10px;
            font-size: 15px;
        }
        
        .item_content{
            float: left;
            margin-left: 30px;
            margin-top: 5px;
            margin-bottom: 0px;
            height: 115px;
            width: 185px;
            font-size: 18px;
            
        }
        .item_impression{
            margin-top: 5px;
            margin-bottom: 0px;
            height: 115px;
            width: 300px;
            font-size: 18px;
            float: left;
            margin-left: 25px;
        }
        
        .total{
            height: 270px;
        }
        
        .Total_item{
            margin-left: 10px;
        }
        
        .Total_impression{
            width: 860px;
            height: 170px;
            font-size: 25px;
            margin-left: 10px;
        }
        
        .Total_item h1{
            margin-top: 0px;
            margin-bottom: 0px;
        }
        
        .footer {
            float: right;
        }
        
        .footer-left{
            float: left;
        }
        
        .footer-right{
            float: right;
        }
        
        p{
            margin: 0px;
        }
        span{
            margin-right: 10px;
            
        }
        
        .back{
            float: left;
            margin-right: 10px;
        }
        
        
        .edit{
            float: right;
        }
        
        
    </style>
    <body>
        <div class='diary'>
            <div class='header'>
                <div class='date'>
                    <div>{{$input->date->format('Y年m月d日')}}</div>
                </div>
                <div class='header-right'>
                    <div class='weather'>
                        <h2>天気 {{$input->weather}}</h2>
                    </div>
                    <div class='username'>
                        <h2>名前 {{$input->name}}</h2>
                    </div>
                </div>
            </div>
            
            <div class'main'>
                <div class='title'>
                    <h3 class='title-class'>教科</h3>
                    <h3 class='title-item'>内容</h3>
                    <h3 class='title-item'>所感</h3>
                </div>
                
                <div class='Item'>
                    <div class='item'><h1>1,2限目</h1></div>
                    <div class='item_class'>
                        {{$input->First_class}}
                    </div>
                    <div class='item_content'>
                        {{$input->First_content}}
                    </div>    
                    <div class='item_impression'>
                        {{$input->First_impression}}
                    </div>   
                </div>
                
                <div class='Item'>
                    <div class='item'><h1>3,4限目</h1></div>
                    <div class='item_class'>
                        {{$input->Secound_class}}
                    </div>
                    <div class='item_content'>
                        {{$input->Secound_content}}
                    </div>    
                    <div class='item_impression'>
                        {{$input->Secound_impression}}
                    </div>   
                </div>
                
                <div class='Item'>
                    <div class='item'><h1>5,6限目</h1></div>
                    <div class='item_class'>
                        {{$input->Third_class}}
                    </div>
                    <div class='item_content'>
                        {{$input->Third_content}}
                    </div>    
                    <div class='item_impression'>
                        {{$input->Third_impression}}
                    </div>  
                </div>
                
                <div class='total'>
                    <div class='Total_item'>
                        <div class='Total_item'>
                            <h1>総合所感</h1>
                        </div>
                        <div class='Total_impression'>
                            {{$input->Total_impression}}
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class='footer'>
                <div class='footer-left'>
                    <form action="/inputs/{{ $input->id}}" id="form_delete" method="post">
                        {{ csrf_field() }}
                        {{ method_field('delete')}}
                        <input type="submit" style="display:none">
                        <p class='delete'><span onclick="return deletePost(this);">削除</span></p>
                    </form>
                </div>
                <div class='footer-right'>
                    <div class="back"><a href="/" >戻る</a></div>
                    <div class="edit"><a href="/inputs/{{$input->id}}/edit">編集</a></div>
                </div>
            </div>
            
        </div>
        <script>
        function deletePost(e){
            "use strict";
            if(confirm('本当に削除してもよろしいですか？')) {
                document.getElementById('form_delete').submit();
            }
        }
        </script>
        
    </body>
</html>
