<?php

namespace App\Http\Controllers\Auth;

use Validator;
use App\Http\Controllers\Controller;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
//use App\Models\User;
use App\Models\Id;
use Auth;
use Session;
use Redirect;
use DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    //use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest', ['except' => 'login_index']);
    }

    //測試網頁用
    //-------------------------------------
    /*public function test_view()
    {
    	$API_KEY = "AIzaSyAODfe0AhoksnNWAE9BBPlZFoEPU95jXLU";
    	$regID=@$_GET['id'];
    	Session::put('regID',$regID);

    	//echo $regID;
    	return view('test_view.daily')->with('regID',$regID);
    	//echo $regID;
    }
    public function test_id(Request $request)
    {
    	$id=$request->all();
    	$API_KEY = "AIzaSyAODfe0AhoksnNWAE9BBPlZFoEPU95jXLU";
    	$regID=session()->get('regID');
    	//
    	//regID無法進入此function
    	Id::create(['name'=>$id['name'],
    				'regID'=>$regID,
    				]);

    	return view('login.login');
    }*/
    //-------------------------------------
    
    public function login_index()
    {
    	if(Auth::check())
    	{
    		return redirect('show');
    	}
    	else
    	{
    		//$API_KEY = "AIzaSyAODfe0AhoksnNWAE9BBPlZFoEPU95jXLU";
    		//$regID=@$_GET['id'];

    		return view('login.login');/*->with('regID',$regID);*/
    	}   		
    }   

    protected function login(Request $request)
	{
    	$user['user_ID'] = $request->user_ID;
    	$user['password'] = $request->password;
    	$user['name']=DB::table('users')->where('user_ID',$user['user_ID'])->value('name');

    	$rules=[
    			'user_ID'=>'required',
    			'password'=>'required',
    	];
    	$message=[
    			'required' => '帳號或密碼不能空白! ',
    	];

    	$validator = Validator::make($user, $rules, $message);
    	
    	if($validator->passes())
        {
        	$attempt = Auth::attempt([
            		'user_ID' => $user['user_ID'],
            		'password' => $user['password']
        			]);

	        if ($attempt) 
	        {
	        	Session::put('user_ID',$user['user_ID']);
	            return redirect('show')->with('name',$user['name']);
	        }
	    	else
	    	{
	    		Session::flush();
	    		return redirect('login')->withErrors(['fail'=>'帳號或密碼錯誤!']);
	    	} 
    	} 
    	else
    	{
    		return redirect('login')->withErrors($validator);
    	}        	   	
	}

	protected function logout()
	{	
		if(Auth::check())
		{
			Auth::logout();
			Session::flush();
			return redirect('login');
		}
		else
		{
			Session::flush();
			return redirect('login');
		}
	}
}
