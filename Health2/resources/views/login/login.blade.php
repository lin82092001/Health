<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登入</title>
    <style type="text/css">
    body {  
	    	background-image:url("/Health/resources/views/login/C2.jpg");
	    	background-attachment : fixed;
	    	height: 100vh;
	        margin: 0;
	    	background-size: cover;         
     }
    .fail {
    	font-size:20px;
    	width:200px; 
    	margin: 20px auto; 
    	color: red;
    }
    .required {
    	font-size:20px;
    	width:200px; 
    	margin: 20px auto; 
    	color: red;
    }
    form {
	    	font-size:24px; 
	    	color:#000; 
	    	font-weight: bold;
	    	font-family: '標楷體';
    		width:370px; 
    		margin:20px auto; 
    		padding: 10px; 
    		border:5px solid #666;
    		border-radius:25px;
    }
    form input[type="text"],form input[type="password"] {
    					margin: 2px 0 20px;
    					font-size:24px; 
    					color:#000;
    }
    form input[type="submit"] {
    							width: 100%; 
    							height: 45px;  
						    	font-size:24pt;
						    	font-family: '標楷體';
						    	width:370px ;
								border: 4px solid #ffffff;
								background: transparent;
								color: #000000;
								background: #00c6d7;
								cursor:pointer;
								border-radius: 25px;
	}
	.links > a {
                color: #000000;
                padding: 0 25px;
                font-size: 25pt;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
    </style>
</head>
<body>
	<h1 style="text-align: center"><strong style="font-family: '標楷體'; font-size: 30pt;">登入小管家</strong></h1><br>

		@if ($errors->has('fail'))
        	<div class="fail"; style="font-family: '標楷體';">
        		{{ $errors->first('fail') }}
        	</div>
	    @elseif($errors->has('user_ID'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('user_ID') }}
	    	</div>
	    @elseif($errors->has('password'))
	    	<div class="required" style="font-family: '標楷體';">
	    		{{ $errors->first('password') }}
	    	</div>
	    @endif

    	{{ Form::open(['url'=>'login_user', 'method'=>'post']) }}
        	<label>帳號</label>
        	{{ Form::text('user_ID') }}
        	<label>密碼</label>
        	{{ Form::password('password')}}
        	{{ Form::submit('登入') }}
    	{{ Form::close()}}

    	<center>
    		<p style="font-family: '標楷體'; font-size: 18pt;">
    			帳號為身分證，密碼為出生年月日，例如2000年10月10日請打20001010
    			<br>
    		</p> 
    		<p style="font-family: '標楷體'; font-size: 22pt;">
    			<a href="register">第一次使用請註冊</a><br>
    			<!--<a href="register?id=<?php /*echo @*/$regID;?>">註冊</a><br>-->
    			<a href="http://140.124.73.193/Health/index">回主頁面</a>	   			
    		</p> 		
    			
		</center>
</body>
</html>