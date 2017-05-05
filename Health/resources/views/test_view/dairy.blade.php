<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>日記</title>
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
        <h1 style="text-align: center"><strong style="font-family: '標楷體'; font-size: 30pt;">病人日記卡</strong>
		</h1><br>
		<p style="font-family: '標楷體'; font-size: 14pt;"><strong>＊填寫前請些注意下列事項：</strong></p>
		<p style="font-family: '標楷體'; font-size: 14pt;">
			＊在過去24小時內如有胃痛等症狀，請在卡內依程度點選，並請務必每天記載，直到下回看醫師門診為止，看門診時請務必攜帶卡，以供醫師參考。<br>
			＊某位病患於治療前有中度上腹痛，輕微腹脹感，排便習慣為每天1次，食慾不錯。而經過一天後，有輕微噁心，中度腹脹感，輕微軟便，當天排便次數3次，<br>食慾不錯，按時服藥兩次，請在日記卡上記錄下來。<br>
			＊輕重程度分類：0無，1輕微，2中度，3嚴重
		</p>
		<p style="font-family: '標楷體'; font-size: 14pt;">
	
		</p>

		<table>
			<tr>		
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				日期/症狀				
				</th>
				<th style="font-family: '標楷體'; font-size: 14pt;">
				治療前				
				</th>							
			</tr>
			<tr>
				<th>				
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::label('date', \Carbon\Carbon::now()->toDateString())}}				
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				1.上腹痛				
				</th>
				<th for="fruit" style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('上腹痛', '0')}}0
				{{Form::radio('上腹痛', '1')}}1
				{{Form::radio('上腹痛', '2')}}2	
				{{Form::radio('上腹痛', '3')}}3					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				2.下腹不適				
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('下腹不適', '0')}}0
				{{Form::radio('下腹不適', '1')}}1
				{{Form::radio('下腹不適', '2')}}2	
				{{Form::radio('下腹不適', '3')}}3					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				3.背痛			
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('背痛', '0')}}0
				{{Form::radio('背痛', '1')}}1
				{{Form::radio('背痛', '2')}}2	
				{{Form::radio('背痛', '3')}}3					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				4.腹脹感				
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('腹脹感', '0')}}0
				{{Form::radio('腹脹感', '1')}}1
				{{Form::radio('腹脹感', '2')}}2	
				{{Form::radio('腹脹感', '3')}}3					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				5.溢酸水				
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('溢酸水', '0')}}0
				{{Form::radio('溢酸水', '1')}}1
				{{Form::radio('溢酸水', '2')}}2	
				{{Form::radio('溢酸水', '3')}}3					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				6.打嗝				
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('打嗝', '0')}}0
				{{Form::radio('打嗝', '1')}}1
				{{Form::radio('打嗝', '2')}}2	
				{{Form::radio('打嗝', '3')}}3					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				7.味覺不佳			
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('味覺不佳', '0')}}0
				{{Form::radio('味覺不佳', '1')}}1
				{{Form::radio('味覺不佳', '2')}}2	
				{{Form::radio('味覺不佳', '3')}}3					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				8.噁心				
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('噁心', '0')}}0
				{{Form::radio('噁心', '1')}}1
				{{Form::radio('噁心', '2')}}2	
				{{Form::radio('噁心', '3')}}3					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				9.嘔吐			
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('嘔吐', '0')}}0
				{{Form::radio('嘔吐', '1')}}1
				{{Form::radio('嘔吐', '2')}}2	
				{{Form::radio('嘔吐', '3')}}3					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				10.頭暈				
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('頭暈', '0')}}0
				{{Form::radio('頭暈', '1')}}1
				{{Form::radio('頭暈', '2')}}2	
				{{Form::radio('頭暈', '3')}}3					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				11.皮膚癢			
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('皮膚癢', '0')}}0
				{{Form::radio('皮膚癢', '1')}}1
				{{Form::radio('皮膚癢', '2')}}2	
				{{Form::radio('皮膚癢', '3')}}3					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				12.黑便				
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('黑便', '0')}}0
				{{Form::radio('黑便', '1')}}1
				{{Form::radio('黑便', '2')}}2	
				{{Form::radio('黑便', '3')}}3					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				13.便秘				
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('便秘', '0')}}0
				{{Form::radio('便秘', '1')}}1
				{{Form::radio('便秘', '2')}}2	
				{{Form::radio('便秘', '3')}}3					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				14.軟便				
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('軟便', '0')}}0
				{{Form::radio('軟便', '1')}}1
				{{Form::radio('軟便', '2')}}2	
				{{Form::radio('軟便', '3')}}3					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				15.排便次數			
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::text('number1')}}次/天				
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				16.食慾			
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('食慾', '好')}}好
				{{Form::radio('食慾', '不好')}}不好					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				17.服藥次數			
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::text('number2')}}次/天				
				</th>
			</tr>

			
		</table>
	</center>
    </body>
</html>
