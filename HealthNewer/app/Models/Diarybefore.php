<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diarybefore extends Model
{
    protected $primaryKey='user_ID';
    //protected $table='dairybefores';

    protected $fillable = [
        'user_ID','name','Abdominal_Pain','Abdominal_Discomfort','Back_Pain',
        'Bloating_Feeling','Overflow_Acid_Water','Hiccups','Poor_Taste','Nausea',
        'Vomit','Dizziness','Skin_Itch','Black_Stool','Constipation','Soft_Stool',
        'Number_of_Defecation','Appetite','Number_of_Medication',
    ];

    //public $timestamps = false;

    public function user()
    {
    	return $this->belongsTo('App\Models\User','user_ID','user_ID');
    }
}
