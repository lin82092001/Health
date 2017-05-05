<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Satisfaction extends Model
{
    protected $fillable=[
    				'user_ID',
    				'name',
    				'Medical_Service',
    				'Health_Education_Care',
    				'Interactive',
    				'Friendly',
    				'Printing_Clear',
    				'Font_Moderate',
    				'Easily',
    				'Meets_Requirements',
    				'Teaching',
    				'Schedule',
    				'Attitude',
    				'Expression',
    				'Speed',
    				'Patient',
    				'Initiative',
    				'Familiarity',
    				'Kind',
    				'Patient_Reply',
    				'Remind',
    				'Medicine_Problem',
    				'Other',
    ];
}
