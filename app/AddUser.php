<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddUser extends Model
{
    protected $fillable=array('emp_id','user_type','users_first_name','users_last_name','users_other_names','email','date_of_birth',
        'birth_place','users_gender','marital_status','users_id_no','users_telephone_number','password');

    protected $hidden = [
        'password', 'remember_token',
    ];
}
