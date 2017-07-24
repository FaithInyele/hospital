<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = array('infants_number','infants_names','mothers_names','mothers_id_no','mothers_telephone_number','fathers_names','fathers_id_no','fathers_telephone_number','postal_address','town','date_to_be_seen');
}