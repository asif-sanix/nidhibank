<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class FdAccount extends Model
{
  //protected $dates = ['date_of_birth','date_of_joining'];
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

    public function getApplication() {
        return $this->hasOne(SavingAccountApplication::class,'id','application_id');
    }
}
