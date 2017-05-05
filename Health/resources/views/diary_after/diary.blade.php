<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>日記</title>
        <style>
			table {
    				font-family: arial, sans-serif;
    				border-collapse: collapse;
    				width: 30%;
					}
			td, th {
    				border: 1px solid #dddddd;
				    text-align: left;
				    padding: 8px;
					}

			tr:nth-child(even) {
					    background-color: #ffffff;
					}
			form input[type="submit"] {color:#000; font-size:14pt;font-family: '標楷體';}
			.required {font-size:20px;width:300px; margin: 20px auto; color: red;}
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
			＊輕重程度分類：無，輕微，中度，嚴重
		</p>

		@if($errors->has('Abdominal_Pain'))
			<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Abdominal_Pain') }}
	    	</div>
	    @elseif($errors->has('Abdominal_Discomfort'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Abdominal_Discomfort') }}
	    	</div>
	    @elseif($errors->has('Back_Pain'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Back_Pain') }}
	    	</div>
	    @elseif($errors->has('Bloating_Feeling'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Bloating_Feeling') }}
	    	</div>
	    @elseif($errors->has('Overflow_Acid_Water'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Overflow_Acid_Water') }}
	    	</div>
	    @elseif($errors->has('Hiccups'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Hiccups') }}
	    	</div>
	    @elseif($errors->has('Poor_Taste'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Poor_Taste') }}
	    	</div>
	    @elseif($errors->has('Nausea'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Nausea') }}
	    	</div>
	    @elseif($errors->has('Vomit'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Vomit') }}
	    	</div>
	    @elseif($errors->has('Dizziness'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Dizziness') }}
	    	</div>
	    @elseif($errors->has('Skin_Itch'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Skin_Itch') }}
	    	</div>
	    @elseif($errors->has('Black_Stool'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Black_Stool') }}
	    	</div>
	    @elseif($errors->has('Constipation'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Constipation') }}
	    	</div>
	    @elseif($errors->has('Soft_Stool'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Soft_Stool') }}
	    	</div>
	    @elseif($errors->has('Number_of_Defecation'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Number_of_Defecation') }}
	    	</div>
	    @elseif($errors->has('Appetite'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Appetite') }}
	    	</div>
	    @elseif($errors->has('Number_of_Medication'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Number_of_Medication') }}
	    	</div>
		@endif

		{{Form::open(['url'=>'diary_after/create_diary','method'=>'post'])}}
		<table>
			<tr>		
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				日期/症狀				
				</th>
				<th style="font-family: '標楷體'; font-size: 14pt;">
							
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
				{{Form::radio('Abdominal_Pain', '無')}}無
				{{Form::radio('Abdominal_Pain', '輕微')}}輕微
				{{Form::radio('Abdominal_Pain', '中度')}}中度	
				{{Form::radio('Abdominal_Pain', '嚴重')}}嚴重					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				2.下腹不適				
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('Abdominal_Discomfort', '無')}}無
				{{Form::radio('Abdominal_Discomfort', '輕微')}}輕微
				{{Form::radio('Abdominal_Discomfort', '中度')}}中度	
				{{Form::radio('Abdominal_Discomfort', '嚴重')}}嚴重					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				3.背痛			
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('Back_Pain', '無')}}無
				{{Form::radio('Back_Pain', '輕微')}}輕微
				{{Form::radio('Back_Pain', '中度')}}中度	
				{{Form::radio('Back_Pain', '嚴重')}}嚴重					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				4.腹脹感				
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('Bloating_Feeling', '無')}}無
				{{Form::radio('Bloating_Feeling', '輕微')}}輕微
				{{Form::radio('Bloating_Feeling', '中度')}}中度	
				{{Form::radio('Bloating_Feeling', '嚴重')}}嚴重					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				5.溢酸水				
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('Overflow_Acid_Water', '無')}}無
				{{Form::radio('Overflow_Acid_Water', '輕微')}}輕微
				{{Form::radio('Overflow_Acid_Water', '中度')}}中度	
				{{Form::radio('Overflow_Acid_Water', '嚴重')}}嚴重					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				6.打嗝				
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('Hiccups', '無')}}無
				{{Form::radio('Hiccups', '輕微')}}輕微
				{{Form::radio('Hiccups', '中度')}}中度	
				{{Form::radio('Hiccups', '嚴重')}}嚴重					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				7.味覺不佳			
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('Poor_Taste', '無')}}無
				{{Form::radio('Poor_Taste', '輕微')}}輕微
				{{Form::radio('Poor_Taste', '中度')}}中度	
				{{Form::radio('Poor_Taste', '嚴重')}}嚴重					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				8.噁心				
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('Nausea', '無')}}無
				{{Form::radio('Nausea', '輕微')}}輕微
				{{Form::radio('Nausea', '中度')}}中度	
				{{Form::radio('Nausea', '嚴重')}}嚴重					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				9.嘔吐			
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('Vomit', '無')}}無
				{{Form::radio('Vomit', '輕微')}}輕微
				{{Form::radio('Vomit', '中度')}}中度	
				{{Form::radio('Vomit', '嚴重')}}嚴重					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				10.頭暈				
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('Dizziness', '無')}}無
				{{Form::radio('Dizziness', '輕微')}}輕微
				{{Form::radio('Dizziness', '中度')}}中度	
				{{Form::radio('Dizziness', '嚴重')}}嚴重					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				11.皮膚癢			
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('Skin_Itch', '無')}}無
				{{Form::radio('Skin_Itch', '輕微')}}輕微
				{{Form::radio('Skin_Itch', '中度')}}中度	
				{{Form::radio('Skin_Itch', '嚴重')}}嚴重					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				12.黑便				
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('Black_Stool', '無')}}無
				{{Form::radio('Black_Stool', '輕微')}}輕微
				{{Form::radio('Black_Stool', '中度')}}中度	
				{{Form::radio('Black_Stool', '嚴重')}}嚴重					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				13.便秘				
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('Constipation', '無')}}無
				{{Form::radio('Constipation', '輕微')}}輕微
				{{Form::radio('Constipation', '中度')}}中度	
				{{Form::radio('Constipation', '嚴重')}}嚴重					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				14.軟便				
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('Soft_Stool', '無')}}無
				{{Form::radio('Soft_Stool', '輕微')}}輕微
				{{Form::radio('Soft_Stool', '中度')}}中度	
				{{Form::radio('Soft_Stool', '嚴重')}}嚴重					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				15.排便次數			
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::text('Number_of_Defecation')}}次/天				
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				16.食慾			
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::radio('Appetite', '好')}}好
				{{Form::radio('Appetite', '不好')}}不好					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				17.服藥次數			
				</th>
				<th  style="font-family: '標楷體'; font-size: 14pt;">
				{{Form::text('Number_of_Medication')}}次/天				
				</th>
			</tr>			
		</table>
			{{Form::submit('提交')}}
		{{Form::close()}}
		{{link_to('show','提交')}}
	</center>
    </body>
</html>
