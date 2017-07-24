<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Immunize extends Model
{
    protected $fillable=array( 'infant_id','dginfu1', 'dnextbe1', 'dchpresent', 'dchabsent','drepabsent');
}
