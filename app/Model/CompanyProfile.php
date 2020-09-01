<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
  protected $dates = ['paid_up_capital','incorporation_date'];
}
