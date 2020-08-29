<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MemberGroup extends Model
{
    public $fillable = ['name','parent_id'];

    /**
     * Get the index name for the model.
     *
     * @return string
    */
    public function childs() {
        return $this->hasMany('App\Model\MemberGroup','parent_id','id') ;
    }
}
