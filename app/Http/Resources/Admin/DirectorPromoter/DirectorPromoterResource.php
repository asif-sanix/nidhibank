<?php

namespace App\Http\Resources\Admin\DirectorPromoter;

use Illuminate\Http\Resources\Json\JsonResource;
class DirectorPromoterResource extends JsonResource
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
            'director_promoter' => $this->director_promoter,
            'appointment_date' => $this->appointment_date->format('d F Y'),
            'created_at' => $this->created_at->format('d F Y'),
        ];
    }
}
