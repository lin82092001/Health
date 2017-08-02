<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Show</title>
        <style type="text/css">
        	form input[type="submit"] {color:#000; font-size:24pt;font-family: '標楷體';}
        </style>
    </head>

    <body>
        <h1 style="text-align: center"><strong style="font-family: '標楷體'; font-size: 30pt;">病患填表系統</strong>
		</h1><br>

		<center>

		@if(Auth::check())
			{{Form::open(['url'=>'logout','method'=>'post'])}}
				{{Form::submit('登出')}}
			{{Form::close()}}
		<h2 style="font-family: '標楷體'; font-size: 24pt;"> 
		 {{isset($name)?$name : 'NULL'}} 先生/小姐您好，請分別填寫每日飲食調查表、日記卡
		</h2>

		<p style="font-family: '標楷體'; font-size: 25pt;">
    			{{link_to('daily','每日飲食調查表')}}<br>
				{{link_to('diary_after','病人日記卡')}}<br>
				{{link_to('satisfaction','滿意度調查表')}}
				
    	</p>
    	@else
    		<h2 style="font-family: '標楷體'; font-size: 24pt;"> 
				{{HTML::link('login','請先登入')}}
			</h2>
		@endif

		</center>
    </body>
</html>
