<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
  protected $dates = ['date_of_birth','date_of_joining'];
}
