<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>過去身體健康檢視</title></canvas>
	<style>
		body {  
	    	background-image:url("/Health/resources/views/register/C2.jpg");
	    	background-attachment : fixed;
	    	height: 100vh;
	        margin: 0;
	    	background-size: cover;         
     	}
		form input[type="text"]
		{
			color:#000; 
			font-size:24pt;
			font-family: '標楷體';
		}
		form input[type="submit"]{
								color:#000; 
								font-size:24pt;
								font-family: '標楷體';
								border: 4px solid #ffffff;
								background: transparent;
								color: #000000;
								background: #00c6d7;
								cursor:pointer;
							}
		.required 
		{
			font-size:24px;
			width:320px; 
			margin: 20px auto; 
			color: red;
		}
		form
		{
			font-size:24px; 
			color:#000;
			font-family: '標楷體';
		}
		select{
    		font-size: 24px;
    		padding: 5px;
		}
	</style>
</head>

<body>
<h1 style="text-align: center"><strong style="font-family: '標楷體'; font-size: 30pt;">過去身體健康檢視</strong>
</h1><br>
<h2 style="font-family: '標楷體'; text-align: right;">
填表日期：{{Form::label('date', \Carbon\Carbon::now()->toDateString())}}
</h2>

@if($errors->has('name'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('name')}}
	</div>
@elseif($errors->has('user_ID'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('user_ID')}}
	</div>
@elseif($errors->has('password'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('password')}}
	</div>
@elseif($errors->has('height'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('height')}}
	</div>
@elseif($errors->has('weight'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('weight')}}
	</div>
@elseif($errors->has('gender'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('gender')}}
	</div>
@elseif($errors->has('blood_type'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('blood_type')}}
	</div>
@elseif($errors->has('education_level'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('education_level')}}
	</div>
@elseif($errors->has('occupation'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('occupation')}}
	</div>
@elseif($errors->has('marital_status'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('marital_status')}}
	</div>
@elseif($errors->has('native'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('native')}}
	</div>
@elseif($errors->has('Drinking_Habits'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Drinking_Habits')}}
	</div>
@elseif($errors->has('Drinking_CC'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Drinking_CC')}}
	</div>
@elseif($errors->has('Alcohol_Concentration'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Alcohol_Concentration')}}
	</div>
@elseif($errors->has('Smoking_More'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Smoking_More')}}
	</div>
@elseif($errors->has('Areca_More'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Areca_More')}}
	</div>
@elseif($errors->has('Tea_More'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Tea_More')}}
	</div>
@elseif($errors->has('Coffee_More'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Coffee_More')}}
	</div>
@elseif($errors->has('Acid_Food'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Acid_Food')}}
	</div>
@elseif($errors->has('Spicy_Food'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Spicy_Food')}}
	</div>
@elseif($errors->has('Sweet_Food'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Sweet_Food')}}
	</div>
@elseif($errors->has('Fried_Food'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Fried_Food')}}
	</div>
@elseif($errors->has('Pickled_Food'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Pickled_Food')}}
	</div>
@elseif($errors->has('Sleep_Time'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Sleep_Time')}}
	</div>
@elseif($errors->has('Insomnia'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Insomnia')}}
	</div>
@elseif($errors->has('NG_Feel'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('NG_Feel')}}
	</div>
@elseif($errors->has('Nervous'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Nervous')}}
	</div>
@elseif($errors->has('Fall'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Fall')}}
	</div>
@elseif($errors->has('Angry'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Angry')}}
	</div>
@elseif($errors->has('Upset'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Upset')}}
	</div>
@elseif($errors->has('Gastritis'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Gastritis')}}
	</div>
@elseif($errors->has('Gastric_Ulcer'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Gastric_Ulcer')}}
	</div>
@elseif($errors->has('Duodenal_Ulcer'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Duodenal_Ulcer')}}
	</div>
@elseif($errors->has('Inflammatory_Bowel_Disease'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Inflammatory_Bowel_Disease')}}
	</div>
@elseif($errors->has('Proof'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Proof')}}
	</div>
@elseif($errors->has('Diabetes'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Diabetes')}}
	</div>
@elseif($errors->has('High_Blood_Lipids'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('High_Blood_Lipids')}}
	</div>
@elseif($errors->has('Fat'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Fat')}}
	</div>
@elseif($errors->has('Liver_Disease'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Liver_Disease')}}
	</div>
@elseif($errors->has('Cirrhosis_Liver'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Cirrhosis_Liver')}}
	</div>
@elseif($errors->has('Kidney'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Kidney')}}
	</div>
@elseif($errors->has('High_Blood_Pressure'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('High_Blood_Pressure')}}
	</div>
@elseif($errors->has('Cardiovascular'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Cardiovascular')}}
	</div>
@elseif($errors->has('Allergy'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Allergy')}}
	</div>
@elseif($errors->has('Autoimmunity'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Autoimmunity')}}
	</div>
@elseif($errors->has('Arthritis'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Arthritis')}}
	</div>
@elseif($errors->has('Cancer_1'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Cancer_1')}}
	</div>
@elseif($errors->has('Abdominal_Surgery'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Abdominal_Surgery')}}
	</div>
@elseif($errors->has('Stomach_Duodenal_Surgery'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Stomach_Duodenal_Surgery')}}
	</div>
@elseif($errors->has('Stomach_Milk_Tablets'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Stomach_Milk_Tablets')}}
	</div>
@elseif($errors->has('Special_Ulcer_Treatment_Agent'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Special_Ulcer_Treatment_Agent')}}
	</div>
@elseif($errors->has('Joint_Medicine'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Joint_Medicine')}}
	</div>
@elseif($errors->has('Painkiller'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Painkiller')}}
	</div>
@elseif($errors->has('Blocking_Drugs'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Blocking_Drugs')}}
	</div>
@elseif($errors->has('Asthma_Medicine'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Asthma_Medicine')}}
	</div>
@elseif($errors->has('Lowering_Uric_Acid'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Lowering_Uric_Acid')}}
	</div>
@elseif($errors->has('Take_Probiotics'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Take_Probiotics')}}
	</div>
@elseif($errors->has('Unknown_Medicine'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Unknown_Medicine')}}
	</div>
@elseif($errors->has('Family_Chronic_Gastritis'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Family_Chronic_Gastritis')}}
	</div>
@elseif($errors->has('Family_Gastric_Ulcer'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Family_Gastric_Ulcer')}}
	</div>
@elseif($errors->has('Family_Duodenal_Ulcer'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Family_Duodenal_Ulcer')}}
	</div>
@elseif($errors->has('Family_Gastric_Cancer'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Family_Gastric_Cancer')}}
	</div>
@elseif($errors->has('Family_Other'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Family_Other')}}
	</div>
@elseif($errors->has('Family'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Family')}}
	</div>
@elseif($errors->has('Detection_Helicobacter_Pylori'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Detection_Helicobacter_Pylori')}}
	</div>
@elseif($errors->has('Treatment_Helicobacter_Pylori'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Treatment_Helicobacter_Pylori')}}
	</div>
@elseif($errors->has('Recently_Taking_Antibiotics'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Recently_Taking_Antibiotics')}}
	</div>
@elseif($errors->has('Before_Taking_Antibiotics'))
	<div class="required" style="font-family: '標楷體';">
		{{$errors->first('Before_Taking_Antibiotics')}}
	</div>
@endif

{{Form::open(['url'=>'regs','method'=>'post'])}}
<ol>
<p style="font-family: '標楷體'; font-size: 24pt;">基本資料 </p>
	<li>
	
		<label  style="font-family: '標楷體'; font-size: 24pt;">姓名：</label>
  		{{Form::text('name')}}
	</li>
	<li>
  		<label  style="font-family: '標楷體'; font-size: 24pt;">身分證字號：</label>
  		{{Form::text('user_ID')}}
	</li>
	<li>
		<label  style="font-family: '標楷體'; font-size: 24pt;">出生年月日：</label>
    	{{Form::text('password')}}
    	<label style="font-family: '標楷體'; font-size: 24pt;">例如2000年10月10日，請輸入20001010</label>
  	</li>
		
  <li>
	<label style="font-family: '標楷體'; font-size: 24pt;">身高：</label>
    	{{Form::text('height')}}
    <label style="font-family: '標楷體'; font-size: 24pt;">公分；</label>
    <label style="font-family: '標楷體'; font-size: 24pt;">體重：</label>
    	{{Form::text('weight')}}
    <label style="font-family: '標楷體'; font-size: 24pt;">公斤</label>
  </li>
  <li>
	<label style="font-family: '標楷體'; font-size: 24pt;">性別：</label>
		{{Form::select('gender',['男'=>'男','女'=>'女'])}}	
  </li>
  
  <li>
	<label style="font-family: '標楷體'; font-size: 24pt;">血型：</label>
		{{Form::select('blood_type',['O'=>'O','A'=>'A','B'=>'B','AB'=>'AB','unknown'=>'未知'])}}
  </li>
  <li>
	<label style="font-family: '標楷體'; font-size: 24pt;">教育程度：</label>
		{{Form::select('education_level',['小學'=>'小學','國中'=>'國中','高中職'=>'高中職','大學'=>'大學','研究所以上'=>'研究所以上'])}}
  </li>
   <li>
	<label style="font-family: '標楷體'; font-size: 24pt;">職業：</label>
    	{{Form::text('occupation')}}
  </li>
  <li>
	<label for="degree" style="font-family: '標楷體'; font-size: 24pt;">婚姻狀況：</label>
		{{Form::select('marital_status',['未婚'=>'未婚','已婚'=>'已婚','再婚'=>'再婚','離婚'=>'離婚','喪偶'=>'喪偶'])}}
  </li>
  <li>
	<label for="degree" style="font-family: '標楷體'; font-size: 24pt;">本籍：</label>
		{{Form::select('native',['閩南人'=>'閩南人','客家人'=>'客家人','原住民'=>'原住民','廣東福建'=>'廣東福建','其他'=>'其他'])}}
  </li>

<p style="font-family: '標楷體'; font-size: 24pt;">生活習慣與嗜好 </p>
<p style="font-family: '標楷體'; font-size: 24pt;">＊喝酒 </p>

  <li>
	<label for="heigh" style="font-family: '標楷體'; font-size: 24pt;">您一般喝酒的習慣為何？</label>
  	<ol>
   	  <li style="font-family: '標楷體'; font-size: 22pt;">
       		{{Form::radio('Drinking_Habits','從不或很少喝酒',true)}}從不或很少喝酒(若是請跳第13題)
       </li>
       <li style="font-family: '標楷體'; font-size: 22pt;">
        	{{Form::radio('Drinking_Habits','以前喝現在不喝')}}以前喝現在不喝，已停
        	{{Form::text('Drinking_Habits_Year')}}年
      </li>
      <li style="font-family: '標楷體'; font-size: 22pt;">
        	{{Form::radio('Drinking_Habits','應酬才喝酒(每個月1~2次)')}}應酬才喝酒(每個月1~2次)
      </li>
      <li style="font-family: '標楷體'; font-size: 22pt;">
        	{{Form::radio('Drinking_Habits','天天喝')}}天天喝
      </li>
      <li style="font-family: '標楷體'; font-size: 22pt;">
       		{{Form::radio('Drinking_Habits','5-6次/週')}}5-6次/週
      </li>
      <li style="font-family: '標楷體'; font-size: 22pt;">
   			{{Form::radio('Drinking_Habits','3-4次/週')}}3-4次/週
      </li>
      <li style="font-family: '標楷體'; font-size: 22pt;">
        	{{Form::radio('Drinking_Habits','1-2次/週')}}1-2次/週
      </li>
    </ol>
  </li>
  <li style="font-family:'標楷體';">
	<label for="hgender" style="font-family: '標楷體'; font-size: 24pt;">您幾歲開始喝酒？</label>
		{{Form::text('Drinking_Year')}}歲
  </li>
  <li style="font-family:'標楷體';">
	<label  style="font-family: '標楷體'; font-size: 24pt;">您每週約喝多少酒？</label>
		{{Form::text('Drinking_CC',0)}}<label  style="font-family: '標楷體'; font-size: 24pt;">CC(若從不喝請填0)</label>
  </li>
  <li>
	<label for="heigh" style="font-family: '標楷體'; font-size: 24pt;">您較常喝的酒，酒精濃度是多少？</label>
  	<ol>
   	  <li style="font-family: '標楷體'; font-size: 22pt;">
       		{{Form::radio('Alcohol_Concentration','從不喝',true)}}從不喝
       </li>
       <li style="font-family: '標楷體'; font-size: 22pt;">
        	{{Form::radio('Alcohol_Concentration','小於10%')}}小於10%
      </li>
      <li style="font-family: '標楷體'; font-size: 22pt;">
        	{{Form::radio('Alcohol_Concentration','10-25%')}}10-25%
      </li>
      <li style="font-family: '標楷體'; font-size: 22pt;">
        	{{Form::radio('Alcohol_Concentration','25-40%')}}25-40%
      </li>
      <li style="font-family: '標楷體'; font-size: 22pt;">
       		{{Form::radio('Alcohol_Concentration','大於40%')}}大於40%
      </li>
    </ol>
  </li>

  <p style="font-family: '標楷體'; font-size: 24pt;">＊抽菸 </p>

  <li style="font-family: '標楷體'; font-size: 24pt;">
  	<label for="" style="font-family: '標楷體'; font-size: 24pt;">您是否曾規律地抽菸超過三個月以上？</label>
  		{{Form::radio('Smoking_More','否',true)}}否
  		{{Form::radio('Smoking_More','是')}}是，請回答下列問題

  	<ol>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">您幾歲開始有抽菸習慣？</label>
				{{Form::text('Smoking_Year')}}歲
  		</li>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label>您現在仍有抽菸習慣嗎？</label>
				{{Form::radio('Smoking','否')}}否，請回答3，4，5，6
  				{{Form::radio('Smoking','是')}}是，請回答5，6
  		</li>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">您幾歲開始戒菸？</label>
				{{Form::text('Quit_Smoking')}}歲
  		</li>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">扣掉戒菸時間，您總共抽幾年菸？</label>
				{{Form::text('Withdraw_the_Time_to_Quit_Smoking')}}年
  		</li>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">有抽菸習慣時，平均抽幾支？</label>
				{{Form::text('Smoking_Average')}}支
  		</li>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">您通常把菸吸入肺部嗎？</label>
				{{Form::radio('Smoking_Lungs','否')}}否
  				{{Form::radio('Smoking_Lungs','是')}}是
  		</li>
  	</ol>
  </li>

	<p style="font-family: '標楷體'; font-size: 24pt;">＊嚼檳榔 </p>

	<li style="font-family: '標楷體'; font-size: 24pt;">
  	<label for="" style="font-family: '標楷體'; font-size: 24pt;">您是否曾規律地嚼檳榔超過三個月以上？</label>
  		{{Form::radio('Areca_More','否',true)}}否
  		{{Form::radio('Areca_More','是')}}是，請回答下列問題

  	<ol>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">您幾歲開始規律地嚼檳榔？</label>
				{{Form::text('Areca_Year')}}歲
  		</li>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">您現在仍有嚼檳榔嗎？</label>
				{{Form::radio('Areca_Now','否')}}否，請回答3，4，5
  				{{Form::radio('Areca_Now','是')}}是，請回答5
  		</li>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">您幾歲戒檳榔？</label>
				{{Form::text('Quit_Areca')}}歲
  		</li>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">扣掉不嚼檳榔時間，您總共嚼幾年檳榔？</label>
				{{Form::text('Withdraw_the_Time_to_Quit_Areca')}}年
  		</li>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">您平均每天、每週或每月嚼幾顆檳榔？</label>
  				{{Form::radio('Areca_Time','每天')}}每天
  				{{Form::radio('Areca_Time','每週')}}每週
  				{{Form::radio('Areca_Time','每月')}}每月
				{{Form::text('Areca_Num')}}顆
  		</li>		
  	</ol>
  </li>

<p style="font-family: '標楷體'; font-size: 24pt;">＊喝茶 </p>

	<li style="font-family: '標楷體'; font-size: 24pt;">
  	<label for="" style="font-family: '標楷體'; font-size: 24pt;">您是否曾經有幾乎每天喝茶，而且維持三個月或更久？</label>
  		{{Form::radio('Tea_More','否',true)}}否
  		{{Form::radio('Tea_More','是')}}是，請回答下列問題

  	<ol>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">您幾歲開始有喝茶習慣？</label>
				{{Form::text('Tea_Year')}}歲
  		</li>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">您現在仍繼續喝茶嗎？</label>
				{{Form::radio('Tea_Now','否')}}否，請回答3，4，5
  				{{Form::radio('Tea_Now','是')}}是，請回答5
  		</li>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">您幾歲停止喝茶習慣的？</label>
				{{Form::text('Quit_Tea')}}歲
  		</li>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">您總共有規律地喝了幾年茶？</label>
				{{Form::text('Withdraw_the_Time_to_Quit_Tea')}}年
  		</li>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">您有喝茶習慣期間，通常每週或每月有幾天有喝茶？</label>
  				{{Form::text('Tea_Num')}}顆天數/
  				{{Form::radio('Tea_Time','每週')}}每週
  				{{Form::radio('Tea_Time','每月')}}每月			
  		</li>		
  	</ol>
  </li>


<p style="font-family: '標楷體'; font-size: 24pt;">＊喝咖啡</p>

	<li style="font-family: '標楷體'; font-size: 24pt;">
  	<label for="" style="font-family: '標楷體'; font-size: 24pt;">您是否曾經規律地喝咖啡一週一次以上，而且維持三個月或更久？</label>
  		{{Form::radio('Coffee_More','否',true)}}否
  		{{Form::radio('Coffee_More','是')}}是，請回答下列問題

  	<ol>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">您幾歲開始至少每週喝一次咖啡？</label>
				{{Form::text('Coffee_Year')}}歲
  		</li>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">您現在仍繼續喝咖啡嗎？</label>
				{{Form::radio('Coffee_Now','否')}}否，請回答3，4，5，6
  				{{Form::radio('Coffee_Now','是')}}是，請回答5，6
  		</li>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">您幾歲停止喝咖啡習慣的？</label>
				{{Form::text('Quit_Coffee')}}歲
  		</li>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">您總共有規律地喝了幾年咖啡？</label>
				{{Form::text('Withdraw_the_Time_to_Quit_Coffee')}}年
  		</li>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">您喝咖啡時加奶精嗎？</label>
				{{Form::radio('Coffee_Creamer','是')}}是
  				{{Form::radio('Coffee_Creamer','否')}}否
  		</li>
  		<li  style="font-family: '標楷體'; font-size: 22pt;">
  			<label for="">您有喝咖啡習慣期間，通常每週或每月有幾天喝幾杯咖啡？</label>
  				{{Form::text('Coffee_Num')}}杯數/
  				{{Form::radio('Coffee_Time','每週')}}每週
  				{{Form::radio('Coffee_Time','每月')}}每月			
  		</li>		
  	</ol>
  </li>

<p style="font-family: '標楷體'; font-size: 24pt;">＊常吃的食物</p>
	<li style="font-family: '標楷體'; font-size: 24pt;">
	<label style="font-family: '標楷體'; font-size: 24pt;">您是否常吃下列食物：(每週大於等於3次)</label>
		<ol>
			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >酸的食物</label>
					{{Form::radio('Acid_Food','無',true)}}無
					{{Form::radio('Acid_Food','少於1年')}}少於1年
					{{Form::radio('Acid_Food','1-5年')}}1-5年
					{{Form::radio('Acid_Food','6-10年')}}6-10年
					{{Form::radio('Acid_Food','10年以上')}}10年以上
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >辣的食物</label>
					{{Form::radio('Spicy_Food','無',true)}}無
					{{Form::radio('Spicy_Food','少於1年')}}少於1年
					{{Form::radio('Spicy_Food','1-5年')}}1-5年
					{{Form::radio('Spicy_Food','6-10年')}}6-10年
					{{Form::radio('Spicy_Food','10年以上')}}10年以上
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >甜的食物</label>
					{{Form::radio('Sweet_Food','無',true)}}無
					{{Form::radio('Sweet_Food','少於1年')}}少於1年
					{{Form::radio('Sweet_Food','1-5年')}}1-5年
					{{Form::radio('Sweet_Food','6-10年')}}6-10年
					{{Form::radio('Sweet_Food','10年以上')}}10年以上
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >油炸食物</label>
					{{Form::radio('Fried_Food','無',true)}}無
					{{Form::radio('Fried_Food','少於1年')}}少於1年
					{{Form::radio('Fried_Food','1-5年')}}1-5年
					{{Form::radio('Fried_Food','6-10年')}}6-10年
					{{Form::radio('Fried_Food','10年以上')}}10年以上
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >醃漬食物</label>
					{{Form::radio('Pickled_Food','無',true)}}無
					{{Form::radio('Pickled_Food','少於1年')}}少於1年
					{{Form::radio('Pickled_Food','1-5年')}}1-5年
					{{Form::radio('Pickled_Food','6-10年')}}6-10年
					{{Form::radio('Pickled_Food','10年以上')}}10年以上
  			</li>
		</ol>
	</li>


<p style="font-family: '標楷體'; font-size: 24pt;">＊睡眠與生活</p>
	<li style="font-family: '標楷體'; font-size: 24pt;">
		<label style="font-family: '標楷體'; font-size: 24pt;">您每天睡幾小時：(平均值)</label>
			{{Form::radio('Sleep_Time','1小於6小時')}}小於6小時
			{{Form::radio('Sleep_Time','6-7小時',true)}}6-7小時
			{{Form::radio('Sleep_Time','7-8小時')}}7-8小時
			{{Form::radio('Sleep_Time','大於8小時')}}大於8小時<br>
		
		<label style="font-family: '標楷體'; font-size: 24pt;">您是否有下列感覺？請依自感程度點選</label>
		<ol>
			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >睡眠困難，易失眠</label>
					{{Form::radio('Insomnia','無',true)}}無
					{{Form::radio('Insomnia','輕微')}}輕微
					{{Form::radio('Insomnia','中度')}}中度
					{{Form::radio('Insomnia','嚴重')}}嚴重
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >感覺不如別人</label>
					{{Form::radio('NG_Feel','無',true)}}無
					{{Form::radio('NG_Feel','輕微')}}輕微
					{{Form::radio('NG_Feel','中度')}}中度
					{{Form::radio('NG_Feel','嚴重')}}嚴重
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >容易感到緊張或不安</label>
					{{Form::radio('Nervous','無',true)}}無
					{{Form::radio('Nervous','輕微')}}輕微
					{{Form::radio('Nervous','中度')}}中度
					{{Form::radio('Nervous','嚴重')}}嚴重
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >容易感到心情低落</label>
					{{Form::radio('Fall','無',true)}}無
					{{Form::radio('Fall','輕微')}}輕微
					{{Form::radio('Fall','中度')}}中度
					{{Form::radio('Fall','嚴重')}}嚴重
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >容易動怒</label>
					{{Form::radio('Angry','無',true)}}無
					{{Form::radio('Angry','輕微')}}輕微
					{{Form::radio('Angry','中度')}}中度
					{{Form::radio('Angry','嚴重')}}嚴重
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >容易煩惱</label>
					{{Form::radio('Upset','無',true)}}無
					{{Form::radio('Upset','輕微')}}輕微
					{{Form::radio('Upset','中度')}}中度
					{{Form::radio('Upset','嚴重')}}嚴重
  			</li>
		</ol>
	</li>

	<p style="font-family: '標楷體'; font-size: 24pt;">過去疾病史</p>
	<li style="font-family: '標楷體'; font-size: 24pt;">
		<label style="font-family: '標楷體'; font-size: 24pt;">請問您是否曾罹患下列何種疾病？</label>

		<ol>
			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label>慢性胃炎</label>
					{{Form::radio('Gastritis','否',true)}}否
					{{Form::radio('Gastritis','是')}}是，已經有
					{{Form::text('Gastritis_Year')}}年
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label>胃潰瘍</label>
					{{Form::radio('Gastric_Ulcer','否',true)}}否
					{{Form::radio('Gastric_Ulcer','是')}}是，已經有
					{{Form::text('Gastric_Ulcer_Year')}}年
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >十二指腸潰瘍</label>
					{{Form::radio('Duodenal_Ulcer','否',true)}}否
					{{Form::radio('Duodenal_Ulcer','是')}}是，已經有
					{{Form::text('Duodenal_Ulcer_Year')}}年
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >發炎性腸症</label>
					{{Form::radio('Inflammatory_Bowel_Disease','否',true)}}否
					{{Form::radio('Inflammatory_Bowel_Disease','是')}}是，已經有
					{{Form::text('Inflammatory_Bowel_Disease_Year')}}年
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label>以上疾病(1、2、3、4)是否經檢查證實？</label>
					{{Form::radio('Proof','否',true)}}否
					{{Form::radio('Proof','是')}}是，做過
					{{Form::checkbox('Proof_Disease[]','內視鏡')}}內視鏡
					{{Form::checkbox('Proof_Disease[]','上消化道X光')}}上消化道X光
					{{Form::text('Proof_Disease_Year')}}年
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label>糖尿病</label>
					{{Form::radio('Diabetes','否',true)}}否
					{{Form::radio('Diabetes','是')}}是，已經有
					{{Form::text('Diabetes_Year')}}年
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label>高血脂</label>
					{{Form::radio('High_Blood_Lipids','否',true)}}否
					{{Form::radio('High_Blood_Lipids','是')}}是，已經有
					{{Form::text('High_Blood_Lipids_Year')}}年
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label>肥胖症</label>
					{{Form::radio('Fat','否',true)}}否
					{{Form::radio('Fat','是')}}是，已經有
					{{Form::text('Fat_Year')}}年
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label>慢性肝病</label>
					{{Form::radio('Liver_Disease','否',true)}}否
					{{Form::radio('Liver_Disease','是')}}是，已經有
					{{Form::text('Liver_Disease_Year')}}年
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label>肝硬化</label>
					{{Form::radio('Cirrhosis_Liver','否',true)}}否
					{{Form::radio('Cirrhosis_Liver','是')}}是，已經有
					{{Form::text('Cirrhosis_Liver_Year')}}年
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label>慢性腎臟病</label>
					{{Form::radio('Kidney','否',true)}}否
					{{Form::radio('Kidney','是')}}是，已經有
					{{Form::text('Kidney_Year')}}年
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label>高血壓</label>
					{{Form::radio('High_Blood_Pressure','否',true)}}否
					{{Form::radio('High_Blood_Pressure','是')}}是，已經有
					{{Form::text('High_Blood_Pressure_Year')}}年
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label>心血管疾病</label>
					{{Form::radio('Cardiovascular','否',true)}}否
					{{Form::radio('Cardiovascular','是')}}是，已經有
					{{Form::text('Cardiovascular_Year')}}年
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label>過敏症</label>
					{{Form::radio('Allergy','否',true)}}否
					{{Form::radio('Allergy','是')}}是，已經有
					{{Form::text('Allergy_Year')}}年
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label>自體免疫疾病</label>
					{{Form::radio('Autoimmunity','否',true)}}否
					{{Form::radio('Autoimmunity','是')}}是，已經有
					{{Form::text('Autoimmunity_Year')}}年
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label>關節炎</label>
					{{Form::radio('Arthritis','否',true)}}否
					{{Form::radio('Arthritis','是')}}是，已經有
					{{Form::text('Arthritis_Year')}}年
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label>癌症</label>
					{{Form::radio('Cancer_1','否',true)}}否
					{{Form::radio('Cancer_1','是')}}是，得了
					{{Form::text('Cancer')}}已經有
					{{Form::text('Cancer_Year')}}年
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label>腹部手術</label>
					{{Form::radio('Abdominal_Surgery','否',true)}}否
					{{Form::radio('Abdominal_Surgery','是')}}是，已經有
					{{Form::text('Abdominal_Surgery_Year')}}年
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label>胃或十二指腸手術</label>
					{{Form::radio('Stomach_Duodenal_Surgery','否',true)}}否
					{{Form::radio('Stomach_Duodenal_Surgery','是')}}是，請回答1、2					
					<ol>
						<li>
	  						<label>在什麼時候進行手術？</label>
								{{Form::text('Stomach_Duodenal_Surgery_Year')}}年/月/日							
						</li>
						<li>
	  						<label>因為什麼原因進行手術？</label><br>
								{{Form::radio('Stomach_Duodenal_Surgery_1','胃潰瘍(但非急性出血或穿孔)')}}胃潰瘍(但非急性出血或穿孔)<br>
								{{Form::radio('Stomach_Duodenal_Surgery_2','十二指腸潰瘍(但非急性出血或穿孔)')}}十二指腸潰瘍(但非急性出血或穿孔)<br>
								{{Form::radio('Stomach_Duodenal_Surgery_3','胃出血(包括胃潰瘍或十二指腸潰瘍出血)')}}胃出血(包括胃潰瘍或十二指腸潰瘍出血)<br>
								{{Form::radio('Stomach_Duodenal_Surgery_4','胃穿孔(包括胃潰瘍或十二指腸潰瘍出血)')}}胃穿孔(包括胃潰瘍或十二指腸潰瘍出血)<br>
								{{Form::radio('Stomach_Duodenal_Surgery_5','胃癌')}}胃癌<br>
								{{Form::radio('Stomach_Duodenal_Surgery_6','其他胃病或十二指腸疾病')}}其他胃病或十二指腸疾病							
						</li>
  					</ol>
  			</li>
		</ol>
	</li>


<p style="font-family: '標楷體'; font-size: 24pt;">藥物史</p>
	<li style="font-family: '標楷體'; font-size: 24pt;">
		<label style="font-family: '標楷體'; font-size: 24pt;">您服用下列何種藥物？服用時間多久？</label>

		<ol>
			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >胃乳片</label>
					<br>{{Form::radio('Stomach_Milk_Tablets','否',true)}}否
					
						<br>{{Form::radio('Stomach_Milk_Tablets','是')}}是，服用時間					
						{{Form::radio('Stomach_Milk_Tablets_Year','最近一週')}}最近一週
						{{Form::radio('Stomach_Milk_Tablets_Year','最近一個月')}}最近一個月
						{{Form::radio('Stomach_Milk_Tablets_Year','最近三個月')}}最近三個月
						{{Form::radio('Stomach_Milk_Tablets_Year','最近六個月')}}最近六個月
						{{Form::radio('Stomach_Milk_Tablets_Year','最近一年')}}最近一年
						{{Form::radio('Stomach_Milk_Tablets_Year','最近五年')}}最近五年
						{{Form::radio('Stomach_Milk_Tablets_Year','超過五年')}}超過五年
					
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >特殊潰瘍治療劑</label>
					<br>{{Form::radio('Special_Ulcer_Treatment_Agent','否',true)}}否
					
						<br>{{Form::radio('Special_Ulcer_Treatment_Agent','是')}}是，服用時間			
						{{Form::radio('Special_Ulcer_Treatment_Agent_Year','最近一週')}}最近一週
						{{Form::radio('Special_Ulcer_Treatment_Agent_Year','最近一個月')}}最近一個月
						{{Form::radio('Special_Ulcer_Treatment_Agent_Year','最近三個月')}}最近三個月
						{{Form::radio('Special_Ulcer_Treatment_Agent_Year','最近六個月')}}最近六個月
						{{Form::radio('Special_Ulcer_Treatment_Agent_Year','最近一年')}}最近一年
						{{Form::radio('Special_Ulcer_Treatment_Agent_Year','最近五年')}}最近五年
						{{Form::radio('Special_Ulcer_Treatment_Agent_Year','超過五年')}}超過五年
					
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >關節藥</label>
					<br>{{Form::radio('Joint_Medicine','否',true)}}否
					
						<br>{{Form::radio('Joint_Medicine','是')}}是，服用時間					
						{{Form::radio('Joint_Medicine_Year','最近一週')}}最近一週
						{{Form::radio('Joint_Medicine_Year','最近一個月')}}最近一個月
						{{Form::radio('Joint_Medicine_Year','最近三個月')}}最近三個月
						{{Form::radio('Joint_Medicine_Year','最近六個月')}}最近六個月
						{{Form::radio('Joint_Medicine_Year','最近一年')}}最近一年
						{{Form::radio('Joint_Medicine_Year','最近五年')}}最近五年
						{{Form::radio('Joint_Medicine_Year','超過五年')}}超過五年
					
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >一般止痛消炎藥(或頭痛感冒藥)</label>
					<br>{{Form::radio('Painkiller','否',true)}}否
					
						<br>{{Form::radio('Painkiller','是')}}是，服用時間					
						{{Form::radio('Painkiller_Year','最近一週')}}最近一週
						{{Form::radio('Painkiller_Year','最近一個月')}}最近一個月
						{{Form::radio('Painkiller_Year','最近三個月')}}最近三個月
						{{Form::radio('Painkiller_Year','最近六個月')}}最近六個月
						{{Form::radio('Painkiller_Year','最近一年')}}最近一年
						{{Form::radio('Painkiller_Year','最近五年')}}最近五年
						{{Form::radio('Painkiller_Year','超過五年')}}超過五年
					
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >預防心臟或腦血管阻塞藥</label>
					<br>{{Form::radio('Blocking_Drugs','否',true)}}否
					
						<br>{{Form::radio('Blocking_Drugs','是')}}是，服用時間					
						{{Form::radio('Blocking_Drugs_Year','最近一週')}}最近一週
						{{Form::radio('Blocking_Drugs_Year','最近一個月')}}最近一個月
						{{Form::radio('Blocking_Drugs_Year','最近三個月')}}最近三個月
						{{Form::radio('Blocking_Drugs_Year','最近六個月')}}最近六個月
						{{Form::radio('Blocking_Drugs_Year','最近一年')}}最近一年
						{{Form::radio('Blocking_Drugs_Year','最近五年')}}最近五年
						{{Form::radio('Blocking_Drugs_Year','超過五年')}}超過五年
					
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >氣喘藥</label>
					<br>{{Form::radio('Asthma_Medicine','否',true)}}否
					
						<br>{{Form::radio('Asthma_Medicine','是')}}是，服用時間					
						{{Form::radio('Asthma_Medicine_Year','最近一週')}}最近一週
						{{Form::radio('Asthma_Medicine_Year','最近一個月')}}最近一個月
						{{Form::radio('Asthma_Medicine_Year','最近三個月')}}最近三個月
						{{Form::radio('Asthma_Medicine_Year','最近六個月')}}最近六個月
						{{Form::radio('Asthma_Medicine_Year','最近一年')}}最近一年
						{{Form::radio('Asthma_Medicine_Year','最近五年')}}最近五年
						{{Form::radio('Asthma_Medicine_Year','超過五年')}}超過五年
					
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >降尿酸藥</label>
					<br>{{Form::radio('Lowering_Uric_Acid','否',true)}}否
					
						<br>{{Form::radio('Lowering_Uric_Acid','是')}}是，服用時間					
						{{Form::radio('Lowering_Uric_Acid_Year','最近一週')}}最近一週
						{{Form::radio('Lowering_Uric_Acid_Year','最近一個月')}}最近一個月
						{{Form::radio('Lowering_Uric_Acid_Year','最近三個月')}}最近三個月
						{{Form::radio('Lowering_Uric_Acid_Year','最近六個月')}}最近六個月
						{{Form::radio('Lowering_Uric_Acid_Year','最近一年')}}最近一年
						{{Form::radio('Lowering_Uric_Acid_Year','最近五年')}}最近五年
						{{Form::radio('Lowering_Uric_Acid_Year','超過五年')}}超過五年
					
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >服用益生菌</label>
					<br>{{Form::radio('Take_Probiotics','否',true)}}否
					
						<br>{{Form::radio('Take_Probiotics','是')}}是，服用時間					
						{{Form::radio('Take_Probiotics_Year','最近一週')}}最近一週
						{{Form::radio('Take_Probiotics_Year','最近一個月')}}最近一個月
						{{Form::radio('Take_Probiotics_Year','最近三個月')}}最近三個月
						{{Form::radio('Take_Probiotics_Year','最近六個月')}}最近六個月
						{{Form::radio('Take_Probiotics_Year','最近一年')}}最近一年
						{{Form::radio('Take_Probiotics_Year','最近五年')}}最近五年
						{{Form::radio('Take_Probiotics_Year','超過五年')}}超過五年
					
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >不確定成分的(健康)食品或藥品</label>
					<br>{{Form::radio('Unknown_Medicine','否',true)}}否
					
						<br>{{Form::radio('Unknown_Medicine','是')}}是，服用時間					
						{{Form::radio('Unknown_Medicine_Year','最近一週')}}最近一週
						{{Form::radio('Unknown_Medicine_Year','最近一個月')}}最近一個月
						{{Form::radio('Unknown_Medicine_Year','最近三個月')}}最近三個月
						{{Form::radio('Unknown_MedicineYear','最近六個月')}}最近六個月
						{{Form::radio('Unknown_Medicine_Year','最近一年')}}最近一年
						{{Form::radio('Unknown_Medicine_Year','最近五年')}}最近五年
						{{Form::radio('Unknown_Medicine_Year','超過五年')}}超過五年
					
  			</li> 			
		</ol>
	</li>

	<p style="font-family: '標楷體'; font-size: 24pt;"></p>
	<li style="font-family: '標楷體'; font-size: 24pt;">
		<label style="font-family: '標楷體'; font-size: 24pt;">＊女性請多答23題</label>
		<ol>
			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >您是否曾經經驗過骨盆腔(包括卵巢或輸卵管)發炎，並因此接受過消炎藥物治療？</label><br>
						{{Form::radio('Woman_Pelvic_Cavity','否')}}否<br>
						{{Form::radio('Woman_Pelvic_Cavity','是')}}是，經驗過					
						{{Form::text('Woman_Pelvic_Cavity_2')}}次，在多久前？
						{{Form::text('Woman_Pelvic_Cavity_3')}}年					
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
  				<label >您是否曾經經驗過陰道感染發炎，並因此接受過消炎藥物治療？</label><br>
						{{Form::radio('Woman_Vaginal','否')}}否<br>
						{{Form::radio('Woman_Vaginal','是')}}是，經驗過					
						{{Form::text('Woman_Vaginal_2')}}次，在多久前？
						{{Form::text('Woman_Vaginal_3')}}年					
  			</li>			 			
		</ol>
	</li>

	<p style="font-family: '標楷體'; font-size: 24pt;">家族疾病史</p>
	<li style="font-family: '標楷體'; font-size: 24pt;">
		<label style="font-family: '標楷體'; font-size: 24pt;">請問您的親人中是否有人曾罹患下列的腸胃疾病？</label>
		<ol>
			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>慢性胃炎</label>
					<br>{{Form::radio('Family_Chronic_Gastritis','否',true)}}否<br>
						
							{{Form::radio('Family_Chronic_Gastritis','是')}}是，
							{{Form::checkbox('Family_Chronic_Gastritis_S[]','(外)祖父母')}}(外)祖父母
							{{Form::checkbox('Family_Chronic_Gastritis_S[]','父')}}父
							{{Form::checkbox('Family_Chronic_Gastritis_S[]','母')}}母
							{{Form::checkbox('Family_Chronic_Gastritis_S[]','兄弟')}}兄弟
							{{Form::checkbox('Family_Chronic_Gastritis_S[]','姊妹')}}姊妹
							{{Form::checkbox('Family_Chronic_Gastritis_S[]','子')}}子
							{{Form::checkbox('Family_Chronic_Gastritis_S[]','女')}}女
							其他{{Form::text('Family_Chronic_Gastritis_S[]')}}					
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>胃潰瘍</label>
					<br>{{Form::radio('Family_Gastric_Ulcer','否',true)}}否<br>
						
							{{Form::radio('Family_Gastric_Ulcer','是')}}是，
							{{Form::checkbox('Family_Gastric_Ulcer_S[]','(外)祖父母')}}(外)祖父母
							{{Form::checkbox('Family_Gastric_Ulcer_S[]','父')}}父
							{{Form::checkbox('Family_Gastric_Ulcer_S[]','母')}}母
							{{Form::checkbox('Family_Gastric_Ulcer_S[]','兄弟')}}兄弟
							{{Form::checkbox('Family_Gastric_Ulcer_S[]','姊妹')}}姊妹
							{{Form::checkbox('Family_Gastric_Ulcer_S[]','子')}}子
							{{Form::checkbox('Family_Gastric_Ulcer_S[]','女')}}女
							其他{{Form::text('Family_Gastric_Ulcer_S[]')}}						
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>十二指腸潰瘍</label>
					<br>{{Form::radio('Family_Duodenal_Ulcer','否',true)}}否<br>
						
							{{Form::radio('Family_Duodenal_Ulcer','是')}}是，
							{{Form::checkbox('Family_Duodenal_Ulcer_S[]','(外)祖父母')}}(外)祖父母
							{{Form::checkbox('Family_Duodenal_Ulcer_S[]','父')}}父
							{{Form::checkbox('Family_Duodenal_Ulcer_S[]','母')}}母
							{{Form::checkbox('Family_Duodenal_Ulcer_S[]','兄弟')}}兄弟
							{{Form::checkbox('Family_Duodenal_Ulcer_S[]','姊妹')}}姊妹
							{{Form::checkbox('Family_Duodenal_Ulcer_S[]','子')}}子
							{{Form::checkbox('Family_Duodenal_Ulcer_S[]','女')}}女
							其他{{Form::text('Family_Duodenal_Ulcer_S[]')}}						
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>胃癌</label>
					<br>{{Form::radio('Family_Gastric_Cancer','否',true)}}否<br>
						
							{{Form::radio('Family_Gastric_Cancer','是')}}是，
							{{Form::checkbox('Family_Gastric_Cancer_S[]','(外)祖父母')}}(外)祖父母
							{{Form::checkbox('Family_Gastric_Cancer_S[]','父')}}父
							{{Form::checkbox('Family_Gastric_Cancer_S[]','母')}}母
							{{Form::checkbox('Family_Gastric_Cancer_S[]','兄弟')}}兄弟
							{{Form::checkbox('Family_Gastric_Cancer_S[]','姊妹')}}姊妹
							{{Form::checkbox('Family_Gastric_Cancer_S[]','子')}}子
							{{Form::checkbox('Family_Gastric_Cancer_S[]','女')}}女
							其他{{Form::text('Family_Gastric_Cancer_S[]')}}	
 			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>其他消化道癌症</label>
					<br>{{Form::radio('Family_Other','否',true)}}否<br>
						
							{{Form::radio('Family_Other','是')}}是，
							{{Form::checkbox('Family_Other_S[]','(外)祖父母')}}(外)祖父母
							{{Form::checkbox('Family_Other_S[]','父')}}父
							{{Form::checkbox('Family_Other_S[]','母')}}母
							{{Form::checkbox('Family_Other_S[]','兄弟')}}兄弟
							{{Form::checkbox('Family_Other_S[]','姊妹')}}姊妹
							{{Form::checkbox('Family_Other_S[]','子')}}子
							{{Form::checkbox('Family_Other_S[]','女')}}女
							其他{{Form::text('Family_Other_S[]')}}								
  			</li>
  			<li style="font-family: '標楷體'; font-size: 22pt;">
				<label style="font-family: '標楷體'; font-size: 24pt;">家族成員包括：</label><br>
				{{Form::textarea('Family','兄長')}}
			</li>	
		</ol>
	</li>

	<p style="font-family: '標楷體'; font-size: 24pt;">症狀</p>
	<li style="font-family: '標楷體'; font-size: 24pt;">
		<label style="font-family: '標楷體'; font-size: 24pt;">您最近有無下列症狀？</label>
		<ol>
			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>上腹痛</label>
					{{Form::radio('Abdominal_Pain', '無',true)}}無
					{{Form::radio('Abdominal_Pain', '輕微')}}輕微
					{{Form::radio('Abdominal_Pain', '中度')}}中度	
					{{Form::radio('Abdominal_Pain', '嚴重')}}嚴重				
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>下腹不適</label>
					{{Form::radio('Abdominal_Discomfort', '無',true)}}無
					{{Form::radio('Abdominal_Discomfort', '輕微')}}輕微
					{{Form::radio('Abdominal_Discomfort', '中度')}}中度	
					{{Form::radio('Abdominal_Discomfort', '嚴重')}}嚴重					
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>背痛</label>
					{{Form::radio('Back_Pain', '無',true)}}無
					{{Form::radio('Back_Pain', '輕微')}}輕微
					{{Form::radio('Back_Pain', '中度')}}中度	
					{{Form::radio('Back_Pain', '嚴重')}}嚴重				
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>腹脹感</label>
					{{Form::radio('Bloating_Feeling', '無',true)}}無
					{{Form::radio('Bloating_Feeling', '輕微')}}輕微
					{{Form::radio('Bloating_Feeling', '中度')}}中度	
					{{Form::radio('Bloating_Feeling', '嚴重')}}嚴重				
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>胸口不適</label>
					{{Form::radio('Chest_Discomfort', '無',true)}}無
					{{Form::radio('Chest_Discomfort', '輕微')}}輕微
					{{Form::radio('Chest_Discomfort', '中度')}}中度	
					{{Form::radio('Chest_Discomfort', '嚴重')}}嚴重				
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>溢酸水</label>
					{{Form::radio('Overflow_Acid_Water', '無',true)}}無
					{{Form::radio('Overflow_Acid_Water', '輕微')}}輕微
					{{Form::radio('Overflow_Acid_Water', '中度')}}中度	
					{{Form::radio('Overflow_Acid_Water', '嚴重')}}嚴重				
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>打嗝</label>
					{{Form::radio('Hiccups', '無',true)}}無
					{{Form::radio('Hiccups', '輕微')}}輕微
					{{Form::radio('Hiccups', '中度')}}中度	
					{{Form::radio('Hiccups', '嚴重')}}嚴重				
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>味覺不佳</label>
					{{Form::radio('Poor_Taste', '無',true)}}無
					{{Form::radio('Poor_Taste', '輕微')}}輕微
					{{Form::radio('Poor_Taste', '中度')}}中度	
					{{Form::radio('Poor_Taste', '嚴重')}}嚴重				
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>噁心</label>
					{{Form::radio('Nausea', '無',true)}}無
					{{Form::radio('Nausea', '輕微')}}輕微
					{{Form::radio('Nausea', '中度')}}中度	
					{{Form::radio('Nausea', '嚴重')}}嚴重				
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>嘔吐</label>
					{{Form::radio('Vomit', '無',true)}}無
					{{Form::radio('Vomit', '輕微')}}輕微
					{{Form::radio('Vomit', '中度')}}中度	
					{{Form::radio('Vomit', '嚴重')}}嚴重				
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>頭暈</label>
					{{Form::radio('Dizziness', '無',true)}}無
					{{Form::radio('Dizziness', '輕微')}}輕微
					{{Form::radio('Dizziness', '中度')}}中度	
					{{Form::radio('Dizziness', '嚴重')}}嚴重			
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>皮膚癢</label>
					{{Form::radio('Skin_Itch', '無',true)}}無
					{{Form::radio('Skin_Itch', '輕微')}}輕微
					{{Form::radio('Skin_Itch', '中度')}}中度	
					{{Form::radio('Skin_Itch', '嚴重')}}嚴重			
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>黑便</label>
					{{Form::radio('Black_Stool', '無',true)}}無
					{{Form::radio('Black_Stool', '輕微')}}輕微
					{{Form::radio('Black_Stool', '中度')}}中度	
					{{Form::radio('Black_Stool', '嚴重')}}嚴重			
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>便秘</label>
					{{Form::radio('Constipation', '無',true)}}無
					{{Form::radio('Constipation', '輕微')}}輕微
					{{Form::radio('Constipation', '中度')}}中度	
					{{Form::radio('Constipation', '嚴重')}}嚴重				
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>軟便</label>
					{{Form::radio('Soft_Stool', '無',true)}}無
					{{Form::radio('Soft_Stool', '輕微')}}輕微
					{{Form::radio('Soft_Stool', '中度')}}中度	
					{{Form::radio('Soft_Stool', '嚴重')}}嚴重				
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>排便次數</label>
					{{Form::radio('Number_of_Defecation', '1天1次',true)}}1天1次
					{{Form::radio('Number_of_Defecation', '1天2')}}1天2~3次
					{{Form::radio('Number_of_Defecation', '1天4次以上')}}1天4次以上	
					{{Form::radio('Number_of_Defecation', '2天1次')}}2天1次
					{{Form::radio('Number_of_Defecation', '3~4天1次')}}3~4天1次
					其他{{Form::text('Number_of_Defecation')}}				
  			</li>	
		</ol>
	</li>

	<p style="font-family: '標楷體'; font-size: 24pt;">細菌檢驗及抗生素使用經驗</p>
	<li style="font-family: '標楷體'; font-size: 24pt;">
		<label style="font-family: '標楷體'; font-size: 24pt;">請您回下列問題</label>
		<ol>
			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>有無檢測過幽門螺旋桿菌</label>
					{{Form::radio('Detection_Helicobacter_Pylori','否',true)}}否						
					{{Form::radio('Detection_Helicobacter_Pylori','是')}}是										
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>有無治療過幽門螺旋桿菌</label>
					{{Form::radio('Treatment_Helicobacter_Pylori','否',true)}}否						
					{{Form::radio('Treatment_Helicobacter_Pylori','是')}}是，
					多少次？{{Form::text('Treatment_HP[]')}}多久前？{{Form::text('Treatment_HP[]')}}
					治療方式？{{Form::text('Treatment_HP[]')}}
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>最近一個月有無服用抗生素或消炎藥物</label>
					{{Form::radio('Recently_Taking_Antibiotics','否',true)}}否	
					{{Form::radio('Recently_Taking_Antibiotics','是')}}是，
					多久前？{{Form::text('How_Taking_Antibiotics')}}
  			</li>
  			<li  style="font-family: '標楷體'; font-size: 22pt;">
				<label>以前有無經常服用抗生素或消炎藥物</label>
					{{Form::radio('Before_Taking_Antibiotics','無',true)}}無						
					{{Form::radio('Before_Taking_Antibiotics','有')}}有，
					服用原因{{Form::text('Taking_Reason')}}服用{{Form::text('Taking_Days')}}天
  			</li> 				
		</ol>
	</li>	
</ol>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{Form::submit('提交')}}
	{{Form::close()}}
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{link_to(URL::previous(),'上一頁')}}
{{link_to('register/diary_before','下一頁')}}
<br>
{{$regID}}
</body>
</html>