

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>每日</title>
    </head>

    <body>
        <h1 style="text-align: center"><strong style="font-family: '標楷體'; font-size: 30pt;">ID TESTING</strong>
		</h1><br>

		<ol>
			{{Form::open(['url'=>'id'])}}
			<li style="font-family: '標楷體'; font-size: 14pt;">
				<label for="fruit" style="font-family: '標楷體'; font-size: 14pt;"></label><br>
				NAME{{Form::text('name')}}<br>{{$regID}}
			</li>
			{{Form::submit('send')}}
			{{Form::close()}}
			<br>

		</ol>
		
    </body>
</html>
