<?php

namespace App\Http\Resources\Admin\PaidUpAuthorisedCapital;

use Illuminate\Http\Resources\Json\JsonResource;
class PaidUpAuthorisedCapitalResource extends JsonResource
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
            'paid_up_capital' => $this->paid_up_capital,
            'authorised_capital' => $this->authorised_capital,
            'created_at' => $this->created_at->format('d F Y'),
            'date' => $this->date->format('d F Y'),
        ];
    }
}
