<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Patient;
use App\Models\Diarybefore;
//use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
//use Illuminate\Support\Facades\Input;
use Session;
use Redirect;
use DB;
use Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
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
        //$this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /*protected function validator(Request $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'user_ID' => 'required|user_ID|max:255|unique:users',
            'password' => 'required|confirmed',
        ]);
    }*/

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create_user(Request $request)
    {
        $users=$request->all();
        $regID=session()->get('regID');

        $rules=[
        	'name' => 'required' ,
            'user_ID'=> 'required|min:10|max:10',
            'password' => 'required',
            'height'=>'required',
            'weight'=>'required',
            'gender'=>'required',
            'blood_type'=>'required',
            'education_level'=>'required',
            'occupation'=>'required',
            'marital_status'=>'required',
            'native'=>'required',
            'Drinking_Habits'=>'required',
            'Drinking_CC'=>'required',
            'Alcohol_Concentration'=>'required',
            'Smoking_More'=>'required',
            'Areca_More'=>'required',
            'Tea_More'=>'required',
            'Coffee_More'=>'required',           
            'Acid_Food'=>'required',
            'Spicy_Food'=>'required',
            'Sweet_Food'=>'required',
            'Fried_Food'=>'required',
            'Pickled_Food'=>'required',
            'Sleep_Time'=>'required',
            'Insomnia'=>'required',
            'NG_Feel'=>'required',
            'Nervous'=>'required',
            'Fall'=>'required',
            'Angry'=>'required',
            'Upset'=>'required',
            'Gastritis'=>'required',
            'Gastric_Ulcer'=>'required',
            'Duodenal_Ulcer'=>'required',
            'Inflammatory_Bowel_Disease'=>'required',
            'Proof'=>'required',
            'Diabetes'=>'required',
            'High_Blood_Lipids'=>'required',
            'Fat'=>'required',
            'Liver_Disease'=>'required',
            'Cirrhosis_Liver'=>'required',
            'Kidney'=>'required',
            'High_Blood_Pressure'=>'required',
            'Cardiovascular'=>'required',
            'Allergy'=>'required',
            'Autoimmunity'=>'required',
            'Arthritis'=>'required',
            'Cancer_1'=>'required',
            'Abdominal_Surgery'=>'required',
            'Stomach_Duodenal_Surgery'=>'required',
            'Stomach_Milk_Tablets'=>'required',
            'Special_Ulcer_Treatment_Agent'=>'required',
            'Joint_Medicine'=>'required',
            'Painkiller'=>'required',
            'Blocking_Drugs'=>'required',
            'Asthma_Medicine'=>'required',
            'Lowering_Uric_Acid'=>'required',
            'Take_Probiotics'=>'required',
            'Unknown_Medicine'=>'required',
            'Family_Chronic_Gastritis'=>'required',
            'Family_Gastric_Ulcer'=>'required',
            'Family_Duodenal_Ulcer'=>'required',
            'Family_Gastric_Cancer'=>'required',
            'Family_Other'=>'required',
            'Family'=>'required',
            	/*'Abdominal_Pain'=>'required',
	    		'Abdominal_Discomfort'=>'required',
	    		'Back_Pain'=>'required',
	    		'Bloating_Feeling'=>'required',
	    		'Chest_Discomfort'=>'required',
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
	    		'Number_of_Defecation'=>'required',*/
	    	'Detection_Helicobacter_Pylori'=>'required',
	    	'Treatment_Helicobacter_Pylori'=>'required',
	    	'Recently_Taking_Antibiotics'=>'required',
	    	'Before_Taking_Antibiotics'=>'required',
        ];

        $message=['required'=>'有資料欄位未填，請再檢查！或帳號長度錯誤'];
        $validator=Validator::make($users,$rules,$message);
        
        if($validator->passes())
        {
	        User::create([
	            'name' => $users['name'] ,
	            'user_ID'=> $users['user_ID'],
	            'password' => bcrypt($users['password']),
	            'height'=>$users['height'],
	            'weight'=>$users['weight'],
	            'gender'=>$users['gender'],
	            //'regID'=>$regID,
	            'blood_type'=>$users['blood_type'],
	            'education_level'=>$users['education_level'],
	            'occupation'=>$users['occupation'],
	            'marital_status'=>$users['marital_status'],
	            'native'=>$users['native'],
	            'Drinking_Habits'=>@$users['Drinking_Habits'],
	            'Drinking_Habits_Year'=>$users['Drinking_Habits_Year'],
	            'Drinking_Year'=>$users['Drinking_Year'],
	            'Drinking_CC'=>$users['Drinking_CC'],
	            'Alcohol_Concentration'=>@$users['Alcohol_Concentration'],
	            'Smoking_More'=>@$users['Smoking_More'],
	            'Smoking_Year'=>$users['Smoking_Year'],
	            'Smoking'=>@$users['Smoking'],
	            'Quit_Smoking'=>$users['Quit_Smoking'],
	            'Withdraw_the_Time_to_Quit_Smoking'=>$users['Withdraw_the_Time_to_Quit_Smoking'],
	            'Smoking_Average'=>$users['Smoking_Average'],
	            'Smoking_Lungs'=>@$users['Smoking_Lungs'],
	            'Areca_More'=>@$users['Areca_More'],
	            'Areca_Year'=>$users['Areca_Year'],
	            'Areca_Now'=>@$users['Areca_Now'],
	            'Quit_Areca'=>$users['Quit_Areca'],
	            'Withdraw_the_Time_to_Quit_Areca'=>$users['Withdraw_the_Time_to_Quit_Areca'],
	            'Areca_Time'=>@$users['Areca_Time'],
	            'Areca_Num'=>$users['Areca_Num'],
	            'Tea_More'=>@$users['Tea_More'],
	            'Tea_Year'=>$users['Tea_Year'],
	            'Tea_Now'=>@$users['Tea_Now'],
	            'Quit_Tea'=>$users['Quit_Tea'],
	            'Withdraw_the_Time_to_Quit_Tea'=>$users['Withdraw_the_Time_to_Quit_Tea'],
	            'Tea_Num'=>$users['Tea_Num'],
	            'Tea_Time'=>@$users['Tea_Time'],
	            'Coffee_More'=>@$users['Coffee_More'],
	            'Coffee_Year'=>$users['Coffee_Year'],
	            'Coffee_Now'=>@$users['Coffee_Now'],
	            'Quit_Coffee'=>$users['Quit_Coffee'],
	            'Withdraw_the_Time_to_Quit_Coffee'=>$users['Withdraw_the_Time_to_Quit_Coffee'],
	            'Coffee_Creamer'=>@$users['Coffee_Creamer'],
	            'Coffee_Num'=>$users['Coffee_Num'],
	            'Coffee_Time'=>@$users['Coffee_Time'],
	            'Acid_Food'=>@$users['Acid_Food'],
	            'Spicy_Food'=>@$users['Spicy_Food'],
	            'Sweet_Food'=>@$users['Sweet_Food'],
	            'Fried_Food'=>@$users['Fried_Food'],
	            'Pickled_Food'=>@$users['Pickled_Food'],
	            'Sleep_Time'=>@$users['Sleep_Time'],
	            'Insomnia'=>@$users['Insomnia'],
	            'NG_Feel'=>@$users['NG_Feel'],
	            'Nervous'=>@$users['Nervous'],
	            'Fall'=>@$users['Fall'],
	            'Angry'=>@$users['Angry'],
	            'Upset'=>@$users['Upset'],
	            'Gastritis'=>@$users['Gastritis'],
	            'Gastritis_Year'=>$users['Gastritis_Year'],
	            'Gastric_Ulcer'=>@$users['Gastric_Ulcer'],
	            'Gastric_Ulcer_Year'=>$users['Gastric_Ulcer_Year'],
	            'Duodenal_Ulcer'=>@$users['Duodenal_Ulcer'],
	            'Duodenal_Ulcer_Year'=>$users['Duodenal_Ulcer_Year'],
	            'Inflammatory_Bowel_Disease'=>@$users['Inflammatory_Bowel_Disease'],
	            'Inflammatory_Bowel_Disease_Year'=>$users['Inflammatory_Bowel_Disease_Year'],
	            'Proof'=>@$users['Proof'],
	            'Proof_Disease'=>@implode(",",$users['Proof_Disease']),
	            'Proof_Disease_Year'=>$users['Proof_Disease_Year'],
	            'Diabetes'=>@$users['Diabetes'],
	            'Diabetes_Year'=>$users['Diabetes_Year'],
	            'High_Blood_Lipids'=>@$users['High_Blood_Lipids'],
	            'High_Blood_Lipids_Year'=>$users['High_Blood_Lipids_Year'],
	            'Fat'=>@$users['Fat'],
	            'Fat_Year'=>$users['Fat_Year'],
	            'Liver_Disease'=>@$users['Liver_Disease'],
	            'Liver_Disease_Year'=>$users['Liver_Disease_Year'],
	            'Cirrhosis_Liver'=>@$users['Cirrhosis_Liver'],
	            'Cirrhosis_Liver_Year'=>$users['Cirrhosis_Liver_Year'],
	            'Kidney'=>@$users['Kidney'],
	            'Kidney_Year'=>$users['Kidney_Year'],
	            'High_Blood_Pressure'=>@$users['High_Blood_Pressure'],
	            'High_Blood_Pressure_Year'=>$users['High_Blood_Pressure_Year'],
	            'Cardiovascular'=>@$users['Cardiovascular'],
	            'Cardiovascular_Year'=>$users['Cardiovascular_Year'],
	            'Allergy'=>@$users['Allergy'],
	            'Allergy_Year'=>$users['Allergy_Year'],
	            'Autoimmunity'=>@$users['Autoimmunity'],
	            'Autoimmunity_Year'=>$users['Autoimmunity_Year'],
	            'Arthritis'=>@$users['Arthritis'],
	            'Arthritis_Year'=>$users['Arthritis_Year'],
	            'Cancer'=>$users['Cancer'],
	            'Cancer_1'=>@$users['Cancer_1'],
	            'Cancer_Year'=>$users['Cancer_Year'],
	            'Abdominal_Surgery'=>@$users['Abdominal_Surgery'],
	            'Abdominal_Surgery_Year'=>$users['Abdominal_Surgery_Year'],
	            'Stomach_Duodenal_Surgery'=>@$users['Stomach_Duodenal_Surgery'],
	            'Stomach_Duodenal_Surgery_Year'=>$users['Stomach_Duodenal_Surgery_Year'],
	            'Stomach_Duodenal_Surgery_1'=>@$users['Stomach_Duodenal_Surgery_1'],
	            'Stomach_Duodenal_Surgery_2'=>@$users['Stomach_Duodenal_Surgery_2'],
	            'Stomach_Duodenal_Surgery_3'=>@$users['Stomach_Duodenal_Surgery_3'],
	            'Stomach_Duodenal_Surgery_4'=>@$users['Stomach_Duodenal_Surgery_4'],
	            'Stomach_Duodenal_Surgery_5'=>@$users['Stomach_Duodenal_Surgery_5'],
	            'Stomach_Duodenal_Surgery_6'=>@$users['Stomach_Duodenal_Surgery_6'],
	            'Stomach_Milk_Tablets'=>@$users['Stomach_Milk_Tablets'],
	            'Stomach_Milk_Tablets_Year'=>@$users['Stomach_Milk_Tablets_Year'],
	            'Special_Ulcer_Treatment_Agent'=>@$users['Special_Ulcer_Treatment_Agent'],
	            'Special_Ulcer_Treatment_Agent_Year'=>@$users['Special_Ulcer_Treatment_Agent_Year'],
	            'Joint_Medicine'=>@$users['Joint_Medicine'],
	            'Joint_Medicine_Year'=>@$users['Joint_Medicine_Year'],
	            'Painkiller'=>@$users['Painkiller'],
	            'Painkiller_Year'=>@$users['Painkiller_Year'],
	            'Blocking_Drugs'=>@$users['Blocking_Drugs'],
	            'Blocking_Drugs_Year'=>@$users['Blocking_Drugs_Year'],
	            'Asthma_Medicine'=>@$users['Asthma_Medicine'],
	            'Asthma_Medicine_Year'=>@$users['Asthma_Medicine_Year'],
	            'Lowering_Uric_Acid'=>@$users['Lowering_Uric_Acid'],
	            'Lowering_Uric_Acid_Year'=>@$users['Lowering_Uric_Acid_Year'],
	            'Take_Probiotics'=>@$users['Take_Probiotics'],
	            'Take_Probiotics_Year'=>@$users['Take_Probiotics_Year'],
	            'Unknown_Medicine'=>@$users['Unknown_Medicine'],
	            'Unknown_Medicine_Year'=>@$users['Unknown_Medicine_Year'],
	            'Woman_Pelvic_Cavity'=>@$users['Woman_Pelvic_Cavity'],
	            'Woman_Pelvic_Cavity_2'=>@$users['Woman_Pelvic_Cavity_2'],
	            'Woman_Pelvic_Cavity_3'=>@$users['Woman_Pelvic_Cavity_3'],
	            'Woman_Vaginal'=>@$users['Woman_Vaginal'],
	            'Woman_Vaginal_2'=>@$users['Woman_Vaginal_2'],
	            'Woman_Vaginal_3'=>@$users['Woman_Vaginal_3'],
	            'Family_Chronic_Gastritis'=>@$users['Family_Chronic_Gastritis'],
	            'Family_Chronic_Gastritis_S'=>implode(",", $users['Family_Chronic_Gastritis_S']),
	            'Family_Gastric_Ulcer'=>@$users['Family_Gastric_Ulcer'],
	            'Family_Gastric_Ulcer_S'=>implode(",",$users['Family_Gastric_Ulcer_S']),
	            'Family_Duodenal_Ulcer'=>@$users['Family_Duodenal_Ulcer'],
	            'Family_Duodenal_Ulcer_S'=>implode(",",$users['Family_Duodenal_Ulcer_S']),
	            'Family_Gastric_Cancer'=>@$users['Family_Gastric_Cancer'],
	            'Family_Gastric_Cancer_S'=>implode(",",$users['Family_Gastric_Cancer_S']),
	            'Family_Other'=>@$users['Family_Other'],
	            'Family_Other_S'=>implode(",",$users['Family_Other_S']),
	            'Family'=>$users['Family'],
	            	'Abdominal_Pain'=>@$users['Abdominal_Pain'],
		    		'Abdominal_Discomfort'=>@$users['Abdominal_Discomfort'],
		    		'Back_Pain'=>@$users['Back_Pain'],
		    		'Bloating_Feeling'=>@$users['Bloating_Feeling'],
		    		'Chest_Discomfort'=>@$users['Chest_Discomfort'],
		    		'Overflow_Acid_Water'=>@$users['Overflow_Acid_Water'],
		    		'Hiccups'=>@$users['Hiccups'],
		    		'Poor_Taste'=>@$users['Poor_Taste'],
		    		'Nausea'=>@$users['Nausea'],
		    		'Vomit'=>@$users['Vomit'],
		    		'Dizziness'=>@$users['Dizziness'],
		    		'Skin_Itch'=>@$users['Skin_Itch'],
		    		'Black_Stool'=>@$users['Black_Stool'],
		    		'Constipation'=>@$users['Constipation'],
		    		'Soft_Stool'=>@$users['Soft_Stool'],
		    		'Number_of_Defecation'=>@$users['Number_of_Defecation'],
		    	'Detection_Helicobacter_Pylori'=>@$users['Detection_Helicobacter_Pylori'],
		    	'Treatment_Helicobacter_Pylori'=>@$users['Treatment_Helicobacter_Pylori'],
		    	'Treatment_HP'=>@implode(",",$users['Treatment_HP']),
		    	'Recently_Taking_Antibiotics'=>@$users['Recently_Taking_Antibiotics'],
		    	'How_Taking_Antibiotics'=>@$users['How_Taking_Antibiotics'],
		    	'Before_Taking_Antibiotics'=>@$users['Before_Taking_Antibiotics'],
		    	'Taking_Reason'=>$users['Taking_Reason'],
		    	'Taking_Days'=>$users['Taking_Days'],
	        ]);

			$request->session()->put('user_ID', $users['user_ID']);

	        return view('register.diary_before.diary');
    	}
    	else
    	{
    		//return redirect('register')->withErrors($validator);
    		return view('register.questionnaire')->with('regID',$regID)->withErrors($validator);
    	}
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

    		Diarybefore::create([
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

    		Session::flush();
    		return redirect('login');
		}
		else
		{
			return redirect('register/diary_before')->withErrors($validator);
		}
    }

    protected function register_questionnaire()
    {
    	$API_KEY = "AIzaSyAODfe0AhoksnNWAE9BBPlZFoEPU95jXLU";
    	$regID=@$_GET['id'];
    	Session::put('regID',$regID);
    	return view('register.questionnaire')->with('regID',$regID);

    }

    public function register_diary_before()
    {
    	if(Session::has('user_ID'))
    		return view('register.diary_before.diary');
    	else
    		return redirect('register');
    }
}
