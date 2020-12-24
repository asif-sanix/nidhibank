<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
  	protected $dates = ['enrollment_date','appointment_date','date_of_birth'];
}
