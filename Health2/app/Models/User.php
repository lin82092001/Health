<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;
    //protected $table='users';
    protected $primaryKey='user_ID';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		        'name', 
		        'user_ID', 
		        'password',
		        'regID',
		        'height',
		        'weight',
		        'gender',
		        'blood_type',
		        'education_level',
		        'occupation',
		        'marital_status',
		        'native',
		        'Drinking_Habits',
		        'Drinking_Habits_Year',
		        'Drinking_Year',
		        'Drinking_CC',
		        'Alcohol_Concentration',
		        'Smoking_More',
		        'Smoking_Year',
	        	'Smoking',
	        	'Quit_Smoking',
	        	'Withdraw_the_Time_to_Quit_Smoking',
	        	'Smoking_Average',
	        	'Smoking_Lungs',
	        	'Areca_More',
	        	'Areca_Year',
	        	'Areca_Now',
	        	'Quit_Areca',
	        	'Withdraw_the_Time_to_Quit_Areca',
	        	'Areca_Time',
	        	'Areca_Num',
	        	'Tea_More',
	        	'Tea_Year',
	        	'Tea_Now',
	        	'Quit_Tea',
	        	'Withdraw_the_Time_to_Quit_Tea',
	        	'Tea_Num',
	        	'Tea_Time',
	        	'Coffee_More',
		        'Coffee_Year',
		        'Coffee_Now',
		        'Quit_Coffee',
		        'Withdraw_the_Time_to_Quit_Coffee',
		        'Coffee_Creamer',
		        'Coffee_Num',
		        'Coffee_Time',
		        'Acid_Food',
		        'Spicy_Food',
		        'Sweet_Food',
		        'Fried_Food',
		        'Pickled_Food',
		        'Sleep_Time',
		        'Insomnia',
		        'NG_Feel',
		        'Nervous',
		        'Fall',
		        'Angry',
		        'Upset',
		        'Gastritis',
		        'Gastritis_Year',
		        'Gastric_Ulcer',
		        'Gastric_Ulcer_Year',
		        'Duodenal_Ulcer',
		        'Duodenal_Ulcer_Year',
		        'Inflammatory_Bowel_Disease',
		        'Inflammatory_Bowel_Disease_Year',
		        'Proof',
		        'Proof_Disease',
		        'Proof_Disease_Year',
		        'Diabetes',
		        'Diabetes_Year',
		        'High_Blood_Lipids',
		        'High_Blood_Lipids_Year',
		        'Fat',
		        'Fat_Year',
		        'Liver_Disease',
		        'Liver_Disease_Year',
		        'Cirrhosis_Liver',
		        'Cirrhosis_Liver_Year',
		        'Kidney',
		        'Kidney_Year',
		        'High_Blood_Pressure',
		        'High_Blood_Pressure_Year',
		        'Cardiovascular',
		        'Cardiovascular_Year',
		        'Allergy',
		        'Allergy_Year',
		        'Autoimmunity',
		        'Autoimmunity_Year',
		        'Arthritis',
		        'Arthritis_Year',
		        'Cancer',
		        'Cancer_1',
		        'Cancer_Year',
		        'Abdominal_Surgery',
		        'Abdominal_Surgery_Year',
		        'Stomach_Duodenal_Surgery',
		        'Stomach_Duodenal_Surgery_Year',
		        'Stomach_Duodenal_Surgery_1',
		        'Stomach_Duodenal_Surgery_2',
		        'Stomach_Duodenal_Surgery_3',
		        'Stomach_Duodenal_Surgery_4',
		        'Stomach_Duodenal_Surgery_5',
		        'Stomach_Duodenal_Surgery_6',
		        'Stomach_Milk_Tablets',
		        'Stomach_Milk_Tablets_Year',
		        'Special_Ulcer_Treatment_Agent',
		        'Special_Ulcer_Treatment_Agent_Year',
		        'Joint_Medicine',
		        'Joint_Medicine_Year',
		        'Painkiller',
		        'Painkiller_Year',
		        'Blocking_Drugs',
		        'Blocking_Drugs_Year',
		        'Asthma_Medicine',
		        'Asthma_Medicine_Year',
		        'Lowering_Uric_Acid',
		        'Lowering_Uric_Acid_Year',
		        'Take_Probiotics',
		        'Take_Probiotics_Year',
		        'Unknown_Medicine',
		        'Unknown_Medicine_Year',
		        'Woman_Pelvic_Cavity',
		        'Woman_Pelvic_Cavity_2',
		        'Woman_Pelvic_Cavity_3',
		        'Woman_Vaginal',
		        'Woman_Vaginal_2',
		        'Woman_Vaginal_3',
		        'Family_Chronic_Gastritis',
		        'Family_Chronic_Gastritis_S',
		        'Family_Gastric_Ulcer',
		        'Family_Gastric_Ulcer_S',
		        'Family_Duodenal_Ulcer',
		        'Family_Duodenal_Ulcer_S',
		        'Family_Gastric_Cancer',
		        'Family_Gastric_Cancer_S',
		        'Family_Other',
		        'Family_Other_S',
		        'Family',
		        'Abdominal_Pain',
		        'Abdominal_Discomfort',
		        'Back_Pain',
		        'Bloating_Feeling',
		        'Chest_Discomfort',
		        'Overflow_Acid_Water',
		        'Hiccups',
		        'Poor_Taste',
		        'Nausea',
		        'Vomit',
		        'Dizziness',
		        'Skin_Itch',
		        'Black_Stool',
		        'Constipation',
		        'Soft_Stool',
		        'Number_of_Defecation',
		        'Detection_Helicobacter_Pylori',
		        'Treatment_Helicobacter_Pylori',
		        'Treatment_HP',
		        'Recently_Taking_Antibiotics',
		        'How_Taking_Antibiotics',
		        'Before_Taking_Antibiotics',
		        'Taking_Reason',
		        'Taking_Days',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password','remember_token'
    ];

    public function diarybefore()
    {
    	return $this->hasOne('App\Models\Diarybefore','user_ID','user_ID');
    }

    public function diaryafter()
    {
    	return $this->hasMany('App\Models\Diaryafter','user_ID','user_ID');
    }

    public function daily()
    {
    	return $this->hasMany('App\Models\Daily','user_ID','user_ID');
    }

}
