<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Daily;
use App\Models\Diaryafter;
use App\Models\Satisfaction;
use App\Http\Requests;
use Session;
use DB;
use Validator;
use Redirect;
use Auth;

class HealthsController extends Controller
{
	protected function show()
    {
    	if(Session::has('user_ID'))
    	{
    		$user_ID=session()->get('user_ID');
    		$name=DB::table('users')->where('user_ID',$user_ID)->value('name');

    		return view('show.show')->with('name',$name);
    	}
    }

    public function index()
    {
    	if(Auth::check())
    	{
    		return redirect('show');
    	}
    	else
    	{
    		return view('index.index');
    	}   	
    }

    public function daily()
    {
    	return view('daily.daily');
    }

    public function diary_after()
    {	
    	return view('diary_after.diary');
    }

    public function dietary_records()
    {    		
    	return view('dietary_records.dietary');
    }

    public function satisfaction()
    {
    	return view('satisfaction.satisfaction');
    }

    protected function create_diary(Request $request)
    {  	
    	$diarys=$request->all();

    	$rules=[
    			'Abdominal_Pain'=>'required',
	    		'Abdominal_Discomfort'=>'required',
	    		'Back_Pain'=>'required',
	    		'Bloating_Feeling'=>'required',
	    		'Overflow_Acid_Water'=>'required',
	    		'Hiccups'=>'required',
	    		'Poor_Taste'=>'required',
	    		'Nausea'=>'required',
	    		'Vomit'=>'required',
	    		'Dizziness'=>'required',
	    		'Skin_Itch'=>'required',
	    		'Black_Stool'=>'required',
	    		'Constipation'=>'required',
	    		'Soft_Stool'=>'required',
	    		'Number_of_Defecation'=>'required',
	    		'Appetite'=>'required',
	    		'Number_of_Medication'=>'required',
    	];
    	$message=['required'=>'尚有資料欄位未填，請檢查！'];
    	$validator=Validator::make($diarys,$rules,$message);

    	if(Session::has('user_ID') && $validator->passes())
    	{
    		$user_ID=session()->get('user_ID');
    		$name=DB::table('users')->where('user_ID',$user_ID)->value('name');

    		Diaryafter::create([
	    		'user_ID'=>$user_ID,
	    		'name'=>$name,
	    		'Abdominal_Pain'=>$diarys['Abdominal_Pain'],
	    		'Abdominal_Discomfort'=>$diarys['Abdominal_Discomfort'],
	    		'Back_Pain'=>$diarys['Back_Pain'],
	    		'Bloating_Feeling'=>$diarys['Bloating_Feeling'],
	    		'Overflow_Acid_Water'=>$diarys['Overflow_Acid_Water'],
	    		'Hiccups'=>$diarys['Hiccups'],
	    		'Poor_Taste'=>$diarys['Poor_Taste'],
	    		'Nausea'=>$diarys['Nausea'],
	    		'Vomit'=>$diarys['Vomit'],
	    		'Dizziness'=>$diarys['Dizziness'],
	    		'Skin_Itch'=>$diarys['Skin_Itch'],
	    		'Black_Stool'=>$diarys['Black_Stool'],
	    		'Constipation'=>$diarys['Constipation'],
	    		'Soft_Stool'=>$diarys['Soft_Stool'],
	    		'Number_of_Defecation'=>$diarys['Number_of_Defecation'],
	    		'Appetite'=>$diarys['Appetite'],
	    		'Number_of_Medication'=>$diarys['Number_of_Medication'],
    		]);

    		return view('show.show')->with('name',$name);
		}
		else
		{
			return redirect('diary_after')->withErrors($validator);
		}
    }

    protected function create_daily(Request $request)
    {
    	$dailys=$request->all();

    	if(Session::has('user_ID'))
    	{
    		$user_ID=session()->get('user_ID');
    		$name=DB::table('users')->where('user_ID',$user_ID)->value('name');
    		
    		$rules=[
    				'Sour_Fruit_Juice'=>'required',
    				'Sour_Food_Seasoning'=>'required',
    				'Sweets'=>'required',
    				'Drink'=>'required',
    				'Spicy_Food_Seasoning'=>'required',
    				'Dairy_Product'=>'required',
    				'Unknown_Food'=>'required',
    		];
    		$message=['required'=>'尚有資料欄位未填，請檢查！',];
    		$validator=Validator::make($dailys,$rules,$message);

    		if($validator->passes())
    		{
	    			Daily::create([
	    			'user_ID'=>$user_ID,
	    			'name'=>$name,
	    			'Sour_Fruit_Juice'=>implode(",",$dailys['Sour_Fruit_Juice']),
	    			'Sour_Food_Seasoning'=>implode(",",$dailys['Sour_Food_Seasoning']),
	    			'Sweets'=>implode(",",$dailys['Sweets']),
	    			'Drink'=>implode(",",$dailys['Drink']),
	    			'Spicy_Food_Seasoning'=>implode(",",$dailys['Spicy_Food_Seasoning']),
	    			'Dairy_Product'=>implode(",", $dailys['Dairy_Product']),
	    			'Unknown_Food'=>$dailys['Unknown_Food'],
	    		]);

	    		return view('show.show')->with('name',$name);
    		}
    		else
    		{
    			return redirect('daily')->withErrors($validator);
    		}
    	}
    }

    protected function create_satisfaction(Request $request)
    {
    	$satisfaction=$request->all();

    	if(Session::has('user_ID'))
    	{
    		$user_ID=session()->get('user_ID');
    		$name=DB::table('users')->where('user_ID',$user_ID)->value('name');

    		$rules=[
    				'Medical_Service'=>'required',
    				'Health_Education_Care'=>'required',
    				'Interactive'=>'required',
    				'Friendly'=>'required',
    				'Printing_Clear'=>'required',
    				'Font_Moderate'=>'required',
    				'Easily'=>'required',
    				'Meets_Requirements'=>'required',
    				'Teaching'=>'required',
    				'Schedule'=>'required',
    				'Attitude'=>'required',
    				'Expression'=>'required',
    				'Speed'=>'required',
    				'Patient'=>'required',
    				'Initiative'=>'required',
    				'Familiarity'=>'required',
    				'Kind'=>'required',
    				'Patient_Reply'=>'required',
    				'Remind'=>'required',
    				'Medicine_Problem'=>'required',
    				'Other'=>'required',
    		];
    		$message=['required'=>'尚有資料欄位未填，請檢查！'];
    		$validator=Validator::make($satisfaction,$rules,$message);

    		if($validator->passes())
    		{
    			Satisfaction::create([
    				'user_ID'=>$user_ID,
    				'name'=>$name,
    				'Medical_Service'=>$satisfaction['Medical_Service'],
    				'Health_Education_Care'=>$satisfaction['Health_Education_Care'],
    				'Interactive'=>$satisfaction['Interactive'],
    				'Friendly'=>$satisfaction['Friendly'],
    				'Printing_Clear'=>$satisfaction['Printing_Clear'],
    				'Font_Moderate'=>$satisfaction['Font_Moderate'],
    				'Easily'=>$satisfaction['Easily'],
    				'Meets_Requirements'=>$satisfaction['Meets_Requirements'],
    				'Teaching'=>$satisfaction['Teaching'],
    				'Schedule'=>$satisfaction['Schedule'],
    				'Attitude'=>$satisfaction['Attitude'],
    				'Expression'=>$satisfaction['Expression'],
    				'Speed'=>$satisfaction['Speed'],
    				'Patient'=>$satisfaction['Patient'],
    				'Initiative'=>$satisfaction['Initiative'],
    				'Familiarity'=>$satisfaction['Familiarity'],
    				'Kind'=>$satisfaction['Kind'],
    				'Patient_Reply'=>$satisfaction['Patient_Reply'],
    				'Remind'=>$satisfaction['Remind'],
    				'Medicine_Problem'=>$satisfaction['Medicine_Problem'],
    				'Other'=>$satisfaction['Other'],
    			]);

    			return view('show.show')->with('name',$name);
    		}
    		else
    		{
    			return redirect('satisfaction')->withErrors($validator);
    		}
    	}
    }
}
