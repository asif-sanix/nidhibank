<?php

namespace App\Http\Resources\Admin\UnEncumberedDeposit;

use Illuminate\Http\Resources\Json\JsonResource;
class UnEncumberedDepositResource extends JsonResource
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
            'bank_po_name' => $this->bank_po_name,
            'fd_amount' => $this->fd_amount,
            'fd_no' => $this->fd_no,
            'annual_interest_rate' => $this->annual_interest_rate,
            'created_at' => $this->created_at->format('d F Y'),
        ];
    }
}
