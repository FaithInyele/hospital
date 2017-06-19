<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfantDetail extends Model
{
    protected $fillable = array('first_name', 'last_name', 'other_names', 'gender', 'date_of_birth','date_first_seen','weight_in_kgs','length_in_cm','country','county','sub_county','town','estate');
}
