<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Daily extends Model
{
	protected $table='dailys';
    //protected $primaryKey='user_ID';

    protected $fillable=['id','user_ID','name','Sour_Fruit_Juice',
    				'Sour_Food_Seasoning','Sweets','Drink',
    				'Spicy_Food_Seasoning','Dairy_Product',
    				'Unknown_Food',];

   	protected function user()
   	{
   		return $this->hasMany('App\Models\User','user_ID','user_ID');
   	}
}
