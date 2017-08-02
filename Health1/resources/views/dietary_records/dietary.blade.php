<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>紀錄</title>
        <style>
			table {
    				font-family: arial, sans-serif;
    				border-collapse: collapse;
    				width: 25%;
					}
			td, th {
    				border: 1px solid #dddddd;
				    text-align: left;
				    padding: 8px;
					}

			tr:nth-child(even) {
					    background-color: #ffffff;
					}
		</style>
    </head>

    <body>
    <center>
        <h1 style="text-align: center"><strong style="font-family: '標楷體'; font-size: 30pt;">飲食紀錄表</strong>
		</h1><br>

		<table>
			<tr>		
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				日期				
				</th>
				<th style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::label('date', \Carbon\Carbon::now()->toDateString())}}				
				</th>							
			</tr>
			<tr>
				<th style="font-family: '標楷體'; font-size: 14pt;">
				早				
				</th>
				<th>
					{{Form::textarea('早')}}		
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				中				
				</th>
				<th>
				{{Form::textarea('早')}}				
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				晚				
				</th>
				<th>
				{{Form::textarea('早')}}					
				</th>
			</tr>
			
		</table>
		{{link_to('show','提交')}}
	</center>
    </body>
</html>
