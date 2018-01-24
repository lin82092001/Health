<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Id extends Model
{
    protected $fillable=['name','regID',];
    public $timestamps = false;
}
