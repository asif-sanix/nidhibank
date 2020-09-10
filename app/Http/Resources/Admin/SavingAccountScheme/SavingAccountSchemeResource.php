<?php

namespace App\Http\Resources\Admin\SavingAccountScheme;

use Illuminate\Http\Resources\Json\JsonResource;
class SavingAccountSchemeResource extends JsonResource
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
            'scheme_code' => $this->scheme_code,
            'name' => $this->name,
            'interest_payout' => $this->interest_payout,
            'interest_rate' => $this->interest_rate,
            'created_at' => $this->created_at->format('d F Y'),
        ];
    }
}
