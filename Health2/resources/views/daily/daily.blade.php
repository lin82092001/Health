<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>每日飲食</title>
        <style type="text/css">
        	body {  
			    	background-image:url("/Health/resources/views/daily/C2.jpg");
			    	background-attachment : fixed;
			    	height: 100vh;
			        margin: 0;
			    	background-size: cover;         
     		}
        	textarea{
        		font-size:20pt;
        	}
        	form input[type="submit"] {
        						color:#000; font-size:24pt;
        						font-family: '標楷體';
        						border: 4px solid #ffffff;
								background: transparent;
								color: #000000;
								background: #00c6d7;
								cursor:pointer;}
        	form input[type="text"] {
        		color:#000; 
        		font-size:20pt;
        		font-family: '標楷體';
        	}       	
        </style>
    </head>

    <body>
        <h1 style="text-align: center"><strong style="font-family: '標楷體'; font-size: 30pt;">每日飲食調查</strong>
		</h1><br>
		<h2 style="font-family: '標楷體'; font-size: 19pt;">治療幽門螺旋桿菌時，宜避開食物：</h2><br>

		@if($errors->has('Sour_Fruit_Juice'))
			<div style="font-family: '標楷體';font-size:20pt;width:320px; margin: 20px auto; color: red;">
				{{$errors->first('Sour_Fruit_Juice')}}
			</div>
		@elseif($errors->has('Sour_Food_Seasoning'))
			<div style="font-family: '標楷體';font-size:20pt;width:320px; margin: 20px auto; color: red;" >
				{{$errors->first('Sour_Food_Seasoning')}}
			</div>
		@elseif($errors->has('Sweets'))
			<div style="font-family: '標楷體';font-size:20pt;width:320px; margin: 20px auto; color: red;" >
				{{$errors->first('Sweets')}}
			</div>
		@elseif($errors->has('Drink'))
			<div style="font-family: '標楷體';font-size:20pt;width:320px; margin: 20px auto; color: red;" >
				{{$errors->first('Drink')}}
			</div>
		@elseif($errors->has('Spicy_Food_Seasoning'))
			<div style="font-family: '標楷體';font-size:20pt;width:320px; margin: 20px auto; color: red;" >
				{{$errors->first('Spicy_Food_Seasoning')}}
			</div>
		@elseif($errors->has('Dairy_Product'))
			<div style="font-family: '標楷體';font-size:20pt;width:320px; margin: 20px auto; color: red;" >
				{{$errors->first('Dairy_Product')}}
			</div>
		@elseif($errors->has('Unknown_Food'))
			<div style="font-family: '標楷體';font-size:20pt;width:320px; margin: 20px auto; color: red;">
				{{$errors->first('Unknown_Food')}}
			</div>
		@endif
		

		{{Form::open(['url'=>'daily/create_daily','method'=>'post'])}}
		<ol>
			<li style="font-family: '標楷體'; font-size: 24pt;">
				<label style="font-family: '標楷體'; font-size: 24pt;">酸的水果及果汁：</label><br>
				{{Form::checkbox('Sour_Fruit_Juice[]', '檸檬')}}檸檬
				{{Form::checkbox('Sour_Fruit_Juice[]', '柑橘')}}柑橘
				{{Form::checkbox('Sour_Fruit_Juice[]', '柳橙')}}柳橙
				{{Form::checkbox('Sour_Fruit_Juice[]', '葡萄')}}葡萄
				{{Form::checkbox('Sour_Fruit_Juice[]', '鳳梨')}}鳳梨
				{{Form::checkbox('Sour_Fruit_Juice[]', '葡萄柚')}}葡萄柚
				{{Form::checkbox('Sour_Fruit_Juice[]', '奇異果')}}奇異果
				{{Form::checkbox('Sour_Fruit_Juice[]', '番茄')}}番茄<br>
				{{Form::checkbox('Sour_Fruit_Juice[]', '香蕉')}}香蕉
				{{Form::checkbox('Sour_Fruit_Juice[]', '蘋果')}}蘋果
				{{Form::checkbox('Sour_Fruit_Juice[]', '草莓')}}草莓
				{{Form::checkbox('Sour_Fruit_Juice[]', '藍莓')}}藍莓
				{{Form::checkbox('Sour_Fruit_Juice[]', '櫻桃')}}櫻桃
				{{Form::checkbox('Sour_Fruit_Juice[]', '李子')}}李子
				{{Form::checkbox('Sour_Fruit_Juice[]', '桑葚')}}桑葚
				{{Form::checkbox('Sour_Fruit_Juice[]', '楊桃')}}楊桃<br>
				其它{{Form::text('Sour_Fruit_Juice[]')}}

			</li>

			<li style="font-family: '標楷體'; font-size: 24pt;">
				<label style="font-family: '標楷體'; font-size: 24pt;">酸的食物及調味料：</label><br>
				{{Form::checkbox('Sour_Food_Seasoning[]', '醋')}}醋
				{{Form::checkbox('Sour_Food_Seasoning[]', '酸筍')}}酸筍
				{{Form::checkbox('Sour_Food_Seasoning[]', '梅精')}}梅精
				{{Form::checkbox('Sour_Food_Seasoning[]', '蜜餞')}}蜜餞
				{{Form::checkbox('Sour_Food_Seasoning[]', '糯米食品')}}糯米食品<br>
				其它{{Form::text('Sour_Food_Seasoning[]')}}
			</li>

			<li style="font-family: '標楷體'; font-size: 24pt;">
				<label style="font-family: '標楷體'; font-size: 24pt;">甜食：</label><br>
				{{Form::checkbox('Sweets[]', '糖果')}}糖果
				{{Form::checkbox('Sweets[]', '巧克力')}}巧克力
				{{Form::checkbox('Sweets[]', '甜麵包')}}甜麵包
				{{Form::checkbox('Sweets[]', '甜蛋糕')}}甜蛋糕
				{{Form::checkbox('Sweets[]', '紅豆湯')}}紅豆湯<br>
				其它{{Form::text('Sweets[]')}}
			</li>

			<li style="font-family: '標楷體'; font-size: 24pt;">
				<label style="font-family: '標楷體'; font-size: 24pt;">飲料：</label><br>
				{{Form::checkbox('Drink[]', '酒')}}酒
				{{Form::checkbox('Drink[]', '咖啡')}}咖啡
				{{Form::checkbox('Drink[]', '濃茶')}}濃茶
				{{Form::checkbox('Drink[]', '可樂')}}可樂
				{{Form::checkbox('Drink[]', '汽水')}}汽水<br>
				其它{{Form::text('Drink[]')}}
			</li>

			<li style="font-family: '標楷體'; font-size: 24pt;">
				<label style="font-family: '標楷體'; font-size: 24pt;">辣的食物及調味料：</label><br>
				{{Form::checkbox('Spicy_Food_Seasoning[]', '辣椒')}}辣椒
				{{Form::checkbox('Spicy_Food_Seasoning[]', '蒜頭')}}蒜頭
				{{Form::checkbox('Spicy_Food_Seasoning[]', '薑')}}薑
				{{Form::checkbox('Spicy_Food_Seasoning[]', '沙茶醬')}}沙茶醬
				{{Form::checkbox('Spicy_Food_Seasoning[]', '麻辣火鍋')}}麻辣火鍋<br>
				其它{{Form::text('Spicy_Food_Seasoning[]')}}
			</li>

			<li style="font-family: '標楷體'; font-size: 24pt;">
				<label style="font-family: '標楷體'; font-size: 24pt;">乳製品：</label><br>
				{{Form::checkbox('Dairy_Product[]', '優酪乳')}}優酪乳
				{{Form::checkbox('Dairy_Product[]', '牛奶')}}牛奶<br>
				其它{{Form::text('Dairy_Product[]')}}
			</li>

			<li style="font-family: '標楷體'; font-size: 24pt;">
				<label style="font-family: '標楷體'; font-size: 24pt;">成份複雜或不清楚的健康食品(若沒有請填無)：</label><br>
				{{Form::textarea('Unknown_Food')}}
			</li>
		</ol>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{Form::submit('提交')}}
		{{Form::close()}}
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{link_to('show','提交')}}
    </body>
</html>
