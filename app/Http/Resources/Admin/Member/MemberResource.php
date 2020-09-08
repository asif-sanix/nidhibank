<?php

namespace App\Http\Resources\Admin\Member;

use Illuminate\Http\Resources\Json\JsonResource;
class MemberResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    
    public function toArray($request)
    {
        return [
            'sn' => ++$request->start,
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'mobile_no' => $this->mobile_no,
            'appointment_date' => $this->appointment_date->format('d F Y'),
            'created_at' => $this->created_at->format('d F Y'),
        ];
    }
}
