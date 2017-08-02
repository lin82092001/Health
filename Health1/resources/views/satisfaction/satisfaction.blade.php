<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>日記</title>
        <style>
			table {
    				font-family: arial, sans-serif;
    				border-collapse: collapse;
    				width: 76%;
					}
			td, th {
    				border: 1px solid #dddddd;
				    text-align: left;
				    padding: 8px;
					}

			tr:nth-child(even) {
					    background-color: #ffffff;
					}
			textarea{
				font-size:24pt;
			}
			 form input[type="submit"]{color:#000; font-size:24pt;font-family: '標楷體';}
			.required {font-size:20px;width:300px; margin: 20px auto; color: red;}
		</style>
    </head>

    <body>
    <center>
        <h1 style="text-align: center"><strong style="font-family: '標楷體'; font-size: 30pt;">滿意度調查表</strong>
		</h1><br>
		<p style="font-family: '標楷體'; font-size: 24pt;"><strong>＊填寫前請些注意下列事項：</strong></p>
		<p style="font-family: '標楷體'; font-size: 24pt;">
			＊請您對護理衛教指導與電話訪問或Line@提醒諮詢方面予以客觀評價與提供意見反應，選擇適當的選項，請全部作答。<br>(非常滿意--5 分、滿意—4 分、普通—3 分、不滿意—2 分、非常不滿意--1 分)
		</p>

		@if($errors->has('Medical_Service'))
			<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Medical_Service') }}
	    	</div>
	    @elseif($errors->has('Health_Education_Care'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Health_Education_Care') }}
	    	</div>
	    @elseif($errors->has('Interactive'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Interactive') }}
	    	</div>
	    @elseif($errors->has('Friendly'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Friendly') }}
	    	</div>
	    @elseif($errors->has('Printing_Clear'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Printing_Clear') }}
	    	</div>
	    @elseif($errors->has('Font_Moderate'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Font_Moderate') }}
	    	</div>
	    @elseif($errors->has('Easily'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Easily') }}
	    	</div>
	    @elseif($errors->has('Teaching'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Teaching') }}
	    	</div>
	    @elseif($errors->has('Schedule'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Schedule') }}
	    	</div>
	    @elseif($errors->has('Attitude'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Attitude') }}
	    	</div>
	    @elseif($errors->has('Expression'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Expression') }}
	    	</div>
	    @elseif($errors->has('Speed'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Speed') }}
	    	</div>
	    @elseif($errors->has('Patient'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Patient') }}
	    	</div>
	    @elseif($errors->has('Initiative'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Initiative') }}
	    	</div>
	    @elseif($errors->has('Familiarity'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Familiarity') }}
	    	</div>
	    @elseif($errors->has('Kind'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Kind') }}
	    	</div>
	    @elseif($errors->has('Patient_Reply'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Patient_Reply') }}
	    	</div>
	    @elseif($errors->has('Remind'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Remind') }}
	    	</div>
	     @elseif($errors->has('Medicine_Problem'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Medicine_Problem') }}
	    	</div>
	    @elseif($errors->has('Other'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('Other') }}
	    	</div>
		@endif

		{{Form::open(['url'=>'satisfaction/create_satisfaction','method'=>'post'])}}
		<table>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
					一、一般滿意度			
				</th>
				<th>				
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				1.我對接受的醫療服務感到滿意				
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::radio('Medical_Service', '非常滿意')}}非常滿意
				{{Form::radio('Medical_Service', '滿意')}}滿意
				{{Form::radio('Medical_Service', '普通')}}普通	
				{{Form::radio('Medical_Service', '不滿意')}}不滿意
				{{Form::radio('Medical_Service', '非常不滿意')}}非常不滿意					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				2.我對收到的衛教照護感到滿意				
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::radio('Health_Education_Care', '非常滿意')}}非常滿意
				{{Form::radio('Health_Education_Care', '滿意')}}滿意
				{{Form::radio('Health_Education_Care', '普通')}}普通	
				{{Form::radio('Health_Education_Care', '不滿意')}}不滿意
				{{Form::radio('Health_Education_Care', '非常不滿意')}}非常不滿意					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				二、人際間的態度			
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				1.護理師與我互動讓我覺得有人情味				
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::radio('Interactive', '非常滿意')}}非常滿意
				{{Form::radio('Interactive', '滿意')}}滿意
				{{Form::radio('Interactive', '普通')}}普通	
				{{Form::radio('Interactive', '不滿意')}}不滿意
				{{Form::radio('Interactive', '非常不滿意')}}非常不滿意					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				2.護理師以很友善且禮貌的態度對待我				
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::radio('Friendly', '非常滿意')}}非常滿意
				{{Form::radio('Friendly', '滿意')}}滿意
				{{Form::radio('Friendly', '普通')}}普通	
				{{Form::radio('Friendly', '不滿意')}}不滿意
				{{Form::radio('Friendly', '非常不滿意')}}非常不滿意					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				三、衛教指導教材及方式				
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				1.衛教指導單張文字印刷清晰			
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::radio('Printing_Clear', '非常滿意')}}非常滿意
				{{Form::radio('Printing_Clear', '滿意')}}滿意
				{{Form::radio('Printing_Clear', '普通')}}普通	
				{{Form::radio('Printing_Clear', '不滿意')}}不滿意
				{{Form::radio('Printing_Clear', '非常不滿意')}}非常不滿意					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				2.衛教指導單張字體適中				
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::radio('Font_Moderate', '非常滿意')}}非常滿意
				{{Form::radio('Font_Moderate', '滿意')}}滿意
				{{Form::radio('Font_Moderate', '普通')}}普通	
				{{Form::radio('Font_Moderate', '不滿意')}}不滿意
				{{Form::radio('Font_Moderate', '非常不滿意')}}非常不滿意					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				3.衛教指導單張用字遣詞簡明易懂			
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::radio('Easily', '非常滿意')}}非常滿意
				{{Form::radio('Easily', '滿意')}}滿意
				{{Form::radio('Easily', '普通')}}普通	
				{{Form::radio('Easily', '不滿意')}}不滿意
				{{Form::radio('Easily', '非常不滿意')}}非常不滿意					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				4.衛教指導符合需求			
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::radio('Meets_Requirements', '非常滿意')}}非常滿意
				{{Form::radio('Meets_Requirements', '滿意')}}滿意
				{{Form::radio('Meets_Requirements', '普通')}}普通	
				{{Form::radio('Meets_Requirements', '不滿意')}}不滿意
				{{Form::radio('Meets_Requirements', '非常不滿意')}}非常不滿意					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				5.衛教指導的教學方式			
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::radio('Teaching', '非常滿意')}}非常滿意
				{{Form::radio('Teaching', '滿意')}}滿意
				{{Form::radio('Teaching', '普通')}}普通	
				{{Form::radio('Teaching', '不滿意')}}不滿意
				{{Form::radio('Teaching', '非常不滿意')}}非常不滿意					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				6.衛教指導時間安排			
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::radio('Schedule', '非常滿意')}}非常滿意
				{{Form::radio('Schedule', '滿意')}}滿意
				{{Form::radio('Schedule', '普通')}}普通	
				{{Form::radio('Schedule', '不滿意')}}不滿意
				{{Form::radio('Schedule', '非常不滿意')}}非常不滿意					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				四、護理人員的衛教指導態度及護理指導過程				
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				1.態度親切有耐心				
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::radio('Attitude', '非常滿意')}}非常滿意
				{{Form::radio('Attitude', '滿意')}}滿意
				{{Form::radio('Attitude', '普通')}}普通	
				{{Form::radio('Attitude', '不滿意')}}不滿意
				{{Form::radio('Attitude', '非常不滿意')}}非常不滿意					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				2.口語表達清楚			
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::radio('Expression', '非常滿意')}}非常滿意
				{{Form::radio('Expression', '滿意')}}滿意
				{{Form::radio('Expression', '普通')}}普通	
				{{Form::radio('Expression', '不滿意')}}不滿意
				{{Form::radio('Expression', '非常不滿意')}}非常不滿意				
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				3.衛教指導過程講述速度			
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::radio('Speed', '非常滿意')}}非常滿意
				{{Form::radio('Speed', '滿意')}}滿意
				{{Form::radio('Speed', '普通')}}普通	
				{{Form::radio('Speed', '不滿意')}}不滿意
				{{Form::radio('Speed', '非常不滿意')}}非常不滿意					
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				4.耐心回覆問題			
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::radio('Patient', '非常滿意')}}非常滿意
				{{Form::radio('Patient', '滿意')}}滿意
				{{Form::radio('Patient', '普通')}}普通	
				{{Form::radio('Patient', '不滿意')}}不滿意
				{{Form::radio('Patient', '非常不滿意')}}非常不滿意				
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				5.主動提供應注意的知識及事項			
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::radio('Initiative', '非常滿意')}}非常滿意
				{{Form::radio('Initiative', '滿意')}}滿意
				{{Form::radio('Initiative', '普通')}}普通	
				{{Form::radio('Initiative', '不滿意')}}不滿意
				{{Form::radio('Initiative', '非常不滿意')}}非常不滿意				
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				6.對指導內容的熟悉度			
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::radio('Familiarity', '非常滿意')}}非常滿意
				{{Form::radio('Familiarity', '滿意')}}滿意
				{{Form::radio('Familiarity', '普通')}}普通	
				{{Form::radio('Familiarity', '不滿意')}}不滿意
				{{Form::radio('Familiarity', '非常不滿意')}}非常不滿意				
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				五、電話訪問或Line@提醒諮詢			
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				1.態度親切有耐心			
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::radio('Kind', '非常滿意')}}非常滿意
				{{Form::radio('Kind', '滿意')}}滿意
				{{Form::radio('Kind', '普通')}}普通	
				{{Form::radio('Kind', '不滿意')}}不滿意
				{{Form::radio('Kind', '非常不滿意')}}非常不滿意				
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				2.口語表達清楚且耐心回覆問題			
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::radio('Patient_Reply', '非常滿意')}}非常滿意
				{{Form::radio('Patient_Reply', '滿意')}}滿意
				{{Form::radio('Patient_Reply', '普通')}}普通	
				{{Form::radio('Patient_Reply', '不滿意')}}不滿意
				{{Form::radio('Patient_Reply', '非常不滿意')}}非常不滿意				
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				3.能確實達到提醒服藥			
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::radio('Remind', '非常滿意')}}非常滿意
				{{Form::radio('Remind', '滿意')}}滿意
				{{Form::radio('Remind', '普通')}}普通	
				{{Form::radio('Remind', '不滿意')}}不滿意
				{{Form::radio('Remind', '非常不滿意')}}非常不滿意				
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				4.能回覆及解決服藥期間所遇問題			
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::radio('Medicine_Problem', '非常滿意')}}非常滿意
				{{Form::radio('Medicine_Problem', '滿意')}}滿意
				{{Form::radio('Medicine_Problem', '普通')}}普通	
				{{Form::radio('Medicine_Problem', '不滿意')}}不滿意
				{{Form::radio('Medicine_Problem', '非常不滿意')}}非常不滿意				
				</th>
			</tr>
			<tr>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				六、其他對於衛教指導相關建議		
				</th>
				<th  style="font-family: '標楷體'; font-size: 24pt;">
				{{Form::textarea('Other')}}			
				</th>
			</tr>
		</table>
			{{Form::submit('提交')}}
		{{Form::close()}}
		{{link_to('show','提交')}}
	</center>
    </body>
</html>
