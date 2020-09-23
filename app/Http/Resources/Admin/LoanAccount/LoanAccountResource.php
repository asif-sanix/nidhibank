<?php

namespace App\Http\Resources\Admin\LoanAccount;

use Illuminate\Http\Resources\Json\JsonResource;
class LoanAccountResource extends JsonResource
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
            'account_number' => $this->account_number,
            'account_date' => $this->account_date,
            'member_name' => $this->member_name,
            'loan_amount' => $this->loan_amount,
            'schema_name' => $this->schema_name,
            'associate' => $this->associate,
            'status' => $this->status?"<span class='badge badge-success'>Active</span>":"<span class='badge badge-danger'>Deactivate</span>",
            'created_at' => $this->created_at->format('d F Y'),
        ];
    }
}
