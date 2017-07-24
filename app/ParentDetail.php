<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParentDetail extends Model
{
    protected $fillable = array('infants_id','mothers_first_name','mothers_last_name','mothers_other_names','mothers_id_no','mothers_telephone_number','fathers_first_name','fathers_last_name','fathers_other_names','fathers_id_no','fathers_telephone_number','parents_marital_status');
}
