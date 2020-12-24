<?php

namespace App\Http\Resources\Admin\SavingAccountApplication;

use Illuminate\Http\Resources\Json\JsonResource;
class SavingAccountApplicationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function status($status)
    {
        if ($status == 1) {
            return $status = "<span class='badge badge-success'>Approved</span>";
        } 
        if ($status == 0) {
           return  $status = "<span class='badge badge-warning'>Pending</span>";
        } 
        if ($status == 2) {
            return $status = "<span class='badge badge-danger'>Canceled</span>";
        }
        
    }

    public function toArray($request)
    {
        return [
            'sn' => ++$request->start,
            'id' => $this->id,
            'application_no' => $this->application_no,
            'member_name' => $this->getMember->name,
            'member_email' => $this->getMember->email,
            'agent_name' => $this->getAgent->name,
            'created_at' => $this->created_at->format('d F Y'),
            'application_date' => $this->application_date->format('d F Y'),
            'status' => $this->status($this->status),
            'changeStatus' => $this->status,
        ];
    }
}
