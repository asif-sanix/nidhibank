<?php

namespace App\Http\Resources\Admin\Agent;

use Illuminate\Http\Resources\Json\JsonResource;
class AgentResource extends JsonResource
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
            'code' => $this->code,
            'name' => $this->name,
            'email' => $this->email,
            'mobile_no' => $this->mobile_no,
            'created_at' => $this->created_at->format('d F Y'),
            'date_of_birth' => $this->date_of_birth->format('d F Y'),
        ];
    }
}
