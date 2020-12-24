<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RecurringDepositApplication extends Model
{
	protected $dates = ['application_date'];
  	
    public function getMember(){
    	return $this->hasOne(Member::class, 'id', 'member_id');
    }

    public function getAgent() {
        return $this->hasOne(Agent::class,'id','agent_id');
    }

    public function getScheme() {
        return $this->hasOne(SavingAccountScheme::class,'id','scheme_id');
    }

    public function getJointACHolder() {
        return $this->hasOne(Member::class,'id','joint_ac_holder_id');
    }
}
